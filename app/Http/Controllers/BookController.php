<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Customer;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::select('id', 'name')->get();
        $hotels = Hotel::select('id', 'name')->get();
        return view('books.create', compact('customers', 'hotels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = new Book;
        $id = date('YmdHis');

        $book->id = $id;
        // $book->checked_in = $request->checked_in;
        // $book->checked_out = $request->checked_out;
        $book->checked_in = date('Y-m-d H:i:s');
        $book->checked_out = date('Y-m-d H:i:s', strtotime('+3 days'));
        $book->customer_id = $request->customer_id;
        $book->total_cost = 100;

        $book->save();

        $room = Room::find($request->room_id);
        $room->update(['book_id' => $book->id, 'status' => 'occupied']);

        return redirect('/books');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $rooms = Room::where('book_id', $id)->get();
        foreach ($rooms as $room) {
            $room->update(['book_id' => null, 'status' => 'available']);
        }

        $book = Book::find($id);
        $book->delete();

        return redirect('/books');
    }
}
