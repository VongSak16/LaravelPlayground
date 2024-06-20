<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Customer;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        return view('/dashboard', [
            //total
            'users_total' => User::all()->count(),
            'customers_total' => Customer::all()->count(),
            'rooms_total' => Room::all()->count(),
            'roomtypes_total' => RoomType::all()->count(),
            'hotels_total' => Hotel::all()->count(),
            'books_total' => Book::all()->count(),
            //today
            'users_created_today_total' => User::whereDate('created_at', today())->count(),
            'books_created_today_total' => Book::whereDate('created_at', today())->count(),
            'customers_created_today_total' => Customer::whereDate('created_at', today())->count(),
            'rooms_created_today_total' => Room::whereDate('created_at', today())->count(),
            'roomtypes_created_today_total' => RoomType::whereDate('created_at', today())->count(),
            'hotels_created_today_total' => Hotel::whereDate('created_at', today())->count(),
            //revenue
            'total_book_no_paid_yet' => Book::where('status', 'not paid yet')->sum('total_cost'),
            'total_book_paid' => Book::where('status', 'paid')->sum('total_cost'),
            'total_book_cancelled' => Book::where('status', 'cancelled')->sum('total_cost'),
            //revenue today
            'total_book_no_paid_yet_today' => Book::whereDate('created_at', today())->where('status', 'not paid yet')->sum('total_cost'),
            'total_book_paid_today' => Book::whereDate('created_at', today())->where('status', 'paid')->sum('total_cost'),
            'total_book_cancelled_today' => Book::whereDate('created_at', today())->where('status', 'cancelled')->sum('total_cost'),
        ]);
    }
}
