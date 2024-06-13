<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function indexId($roomtype_id)
    {
        $rooms = Room::where('roomtype_id', $roomtype_id)->get();
        return view('rooms.index', compact('rooms', 'roomtype_id'));
    }

    public function getRooms($roomtype_id)
    {
        $rooms = Room::where('roomtype_id', $roomtype_id)->where('status', 'available')->get();
        return response()->json($rooms);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hotels = Hotel::select('id', 'name')->get();
        return view('rooms.create', compact('hotels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $room = new Room;
        $id = date('YmdHis');

        $room->id = $id;
        $room->number = $request->number;
        $room->status = $request->status;
        $room->roomtype_id = $request->roomtype_id;

        $room->save();

        return redirect('/rooms/' . $request->roomtype_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $room = Room::find($id);
        $room->delete();

        return redirect('/rooms');
    }
}
