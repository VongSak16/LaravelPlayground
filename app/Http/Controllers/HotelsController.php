<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\RoomType;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class HotelsController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels.index', compact('hotels'));
    }

    public function create()
    {
        return view('hotels.create');
    }

    public function store(Request $request)
    {
        $hotel = new Hotel;
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
        $hotel = Hotel::find($id);
        return view('hotels.edit', compact('hotel'));
    }

    public function update(Request $request, $id)
    {
        $hotel = Hotel::find($id);

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
        try {
            $file_pattern = substr(config('paths.image_hotels_path'), 1) . "$id.*";
            $file_path = glob($file_pattern)[0];
            unlink(public_path("$file_path"));
        } catch (Exception $e) {
        }
        try {
            $roomTypes = RoomType::where('hotel_id', $id)->get();
            foreach ($roomTypes as $roomType) {
                $file_pattern_roomtype = substr(config('paths.image_roomtypes_path'), 1) . "/$roomType->id.*";
                $roomtype_image_files = glob(public_path($file_pattern_roomtype));
                if (!empty($roomtype_image_files)) {
                    unlink($roomtype_image_files[0]);
                }
                $roomType->delete();
            }
        } catch (Exception $e) {
        }

        $hotel = Hotel::find($id);
        $hotel->delete();

        return redirect('/hotels');
    }
}
