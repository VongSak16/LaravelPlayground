<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $cities = config('cities');
        return view('homepages.home', compact('cities'));
    }

    public function searchresults(Request $request)
    {


        // $dateRange = explode(' - ', $request->daterange);
        $cities = config('cities');
        $dataRange = $request->daterange;
        $adults = $request->adults;
        $rooms = $request->rooms;
        $city = $request->city;

        // $book->checked_in = Carbon::parse($dateRange[0])->format('Y-m-d H:i:s'); 
        // $book->checked_out = Carbon::parse($dateRange[1])->format('Y-m-d H:i:s');
        return view('homepages.searchresults', compact('dataRange', 'cities', 'city', 'adults', 'rooms'));
    }
}
