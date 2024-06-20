<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Customer;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\RoomType;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$books = Book::all();
        $books = Book::select('books.*', 'customers.name as customer_name')
            ->join('customers', 'books.customer_id', '=', 'customers.id')
            ->get();
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

    public function createCustomerId($customer_id)
    {
        $customer = Customer::select('id', 'name')->where('id', $customer_id)->first();
        $hotels = Hotel::select('id', 'name')->get();
        return view('books.create', compact('customer', 'hotels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->input('action') === 'cancel') {
            $customer = Customer::find($request->customer_id);
            $customer->delete();
        } else {
            $book = new Book;
            $id = date('YmdHis');

            $book->id = $id;
            // $book->checked_in = $request->checked_in;
            // $book->checked_out = $request->checked_out;
            $book->adults = $request->adults;
            $dateRange = explode(' - ', $request->daterange);
            $book->checked_in = Carbon::parse($dateRange[0])->format('Y-m-d H:i:s');
            $book->checked_out = Carbon::parse($dateRange[1])->format('Y-m-d H:i:s');
            $book->customer_id = $request->customer_id;
            $book->status = $request->status;
            $book->total_cost = RoomType::where('id', Room::where('id', $request->room_id)->first()->roomtype_id)->first()->price;

            $book->save();

            $room = Room::find($request->room_id);
            $room->update(['book_id' => $book->id, 'status' => 'occupied']);
        }
        return redirect('/books');
    }
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
    public function updateStatus($id, Request $request)
    {

        if ($request->input('action') === 'cancel') {
            $rooms = Room::where('book_id', $id)->get();
            foreach ($rooms as $room) {
                $room->update(['book_id' => null, 'status' => 'available']);
            }
            $book = Book::find($id);
            $book->status = 'cancelled';
            $book->save();
        } elseif ($request->input('action') === 'pay') {
            $book = Book::find($id);
            $book->status = 'paid';
            $book->save();
        }

        return redirect('/books');
    }
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
