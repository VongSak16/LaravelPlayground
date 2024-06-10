<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class HotelsController extends Controller
{
    public function index()
    {
        $hotels = Hotels::all();
        return view('hotels.index', compact('hotels'));
    }

    public function create()
    {
        return view('hotels.create');
    }

    public function store(Request $request)
    {
        $hotel = new Hotels;
        $id = date('YmdHis');

        $hotel->id = $id;
        $hotel->name = $request->name;
        $hotel->address = $request->address;
        $hotel->city = $request->city;
        $hotel->user_id = Auth::user()->id;
        $hotel->created_at = date("Y-m-d H:i:s");
        $hotel->updated_at = null;

        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|mimes:xlx,csv,gif,png,jpg,jpeg|max:20480',
            ]);
            $file = $hotel->id . '.' . $request->file->extension();
            $request->file->move(public_path('assets/imghotels'), $file);
        } else {
            $file = null;
        }

        $hotel->photo = $file;

        $hotel->save();

        return redirect('/hotels');
    }

    public function edit($id)
    {
        $hotel = Hotels::find($id);
        return view('hotels.edit', compact('hotel'));
    }

    public function update(Request $request, $id)
    {
        $hotel = Hotels::find($id);

        if ($request->hasFile('file')) {

            try {
                $file_pattern = substr(config('paths.image_hotels_path'), 1) . "$id.*";
                $file_path = glob($file_pattern)[0];
                unlink(public_path("$file_path"));
            } catch (Exception $e) {
            }

            $request->validate([
                'file' => 'required|mimes:pdf,xlx,csv,gif,jpeg,webp,png,jpg,jpeg,|max:20480',
            ]);
            $file = $id . '.' . $request->file->extension();

            $request->file->move(public_path(substr(config('paths.image_hotels_path'), 1)), $file);
        } else {
            $file = $hotel->photo;
        }

        $hotel->name = $request->name;
        $hotel->address = $request->address;
        $hotel->city = $request->city;
        $hotel->user_id = Auth::user()->id;
        $hotel->updated_at = date("Y-m-d H:i:s");
        $hotel->photo = $file;
        $hotel->save();

        return redirect('/hotels');
    }

    public function destroy($id)
    {
        $validator = Validator::make(['id' => $id], [
            'id' => 'required|numeric|exists:hotels,id'
        ]);

        if ($validator->fails()) {
            // Redirect back with an error message if validation fails
            return redirect('/hotels')->withErrors($validator);
        }

        try {
            // Construct the file pattern to match the hotel's image based on its ID.
            $file_pattern = substr(config('paths.image_hotels_path'), 1) . "$id.*";

            // Use glob to find files matching the pattern.
            $file_paths = glob($file_pattern);

            // Check if any files were found
            if (!empty($file_paths)) {
                // Delete the matched file using unlink.
                foreach ($file_paths as $file_path) {
                    if (file_exists(public_path($file_path))) {
                        unlink(public_path($file_path));
                    }
                }
            } else {
                Log::warning("No files found for hotel ID $id with pattern $file_pattern.");
            }
        } catch (Exception $e) {
            // Log the exception
            Log::error("Error deleting file for hotel ID $id: " . $e->getMessage());
        }
        
        try {
            // Find the hotel by its ID and delete it from the database.
            $hotel = Hotels::findOrFail($id);
            $hotel->delete();

            // Redirect back to the hotels list with a success message.
            return redirect('/hotels')->with('success', 'Hotel deleted successfully.');
        } catch (Exception $e) {
            // Log the exception
            Log::error("Error deleting hotel ID $id: " . $e->getMessage());

            // Redirect back with an error message
            return redirect('/hotels')->with('error', 'Error deleting hotel.');
        }
    }
}
