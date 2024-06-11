<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use App\Models\RoomTypes;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class RoomTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roomtypes = RoomTypes::all();
        return view('roomtypes.index', compact('roomtypes'));
    }

    public function indexId($hotel_id)
    {
        $roomtypes = RoomTypes::where('hotel_id', $hotel_id)->get();
        return view('roomtypes.index', compact('roomtypes', 'hotel_id'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hotels = Hotels::select('id', 'name')->get();
        return view('roomtypes.create', compact('hotels'));
    }
    // public function createId($hotel_id)
    // {
    //     return view('roomtypes.create', compact('hotel_id'));
    // }

    public function store(Request $request)
    {
        $roomtype = new RoomTypes;
        $id = date('YmdHis');

        $roomtype->id = $id;
        $roomtype->name = $request->name;
        $roomtype->price = $request->price;
        $roomtype->hotel_id = $request->hotel_id;
        $roomtype->details = $request->details;
        $roomtype->created_at = date("Y-m-d H:i:s");
        $roomtype->updated_at = null;

        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|mimes:xlx,csv,gif,png,jpg,jpeg|max:20480',
            ]);
            $file = $roomtype->id . '.' . $request->file->extension();
            $request->file->move(public_path(substr(config('paths.image_roomtypes_path'), 1)), $file);
        } else {
            $file = null;
        }

        $roomtype->photo = $file;

        $roomtype->save();

        return redirect('/roomtypes/' . $request->hotel_id);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RoomTypes $roomTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RoomTypes $roomTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $file_pattern = substr(config('paths.image_roomtypes_path'), 1) . "$id.*";
            $file_path = glob($file_pattern)[0];
            unlink(public_path("$file_path"));
        } catch (Exception $e) {
        }
        $roometype = RoomTypes::find($id);
        $roometype->delete();

        return redirect('/roomtypes');
    }
}
