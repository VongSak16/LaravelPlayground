<?php

namespace App\Http\Controllers;

use App\Models\ExchangeRateModel;
use Illuminate\Http\Request;

class ExchangeRateController extends Controller
{
    //GET
    public function GET()
    {
        return response()->json(ExchangeRateModel::all(), 200);
    }


    //POST
    public function POST(Request $request)
    {
        $tbl = new ExchangeRateModel;
        //$tbl->ExchangeID =  $id;
        $tbl->KhmerRiel = request("KhmerRiel");

        $tbl->save();
        return response()->json(['message' => 'Inserted']);
    }

    //PUT
    public function PUT(Request $request)
    {
        $ExchangeID = request("ExchangeID");
        $tbl = ExchangeRateModel::find($ExchangeID);
        $tbl->KhmerRiel = request("KhmerRiel");

        $tbl->save();
        return response()->json(['message' => 'Updated']);
    }

    //DELETE
    public function DELETE(Request $request)
    {
        $ExchangeID = request("ExchangeID");
        $tbl = ExchangeRateModel::find($ExchangeID);

        $tbl->delete();

        return response()->json(['message' => 'Deleted']);
    }

    //GETDetai
    public function GETDetail()
    {
        $ExchangeID = request("ExchangeID");
        $tbl = ExchangeRateModel::find($ExchangeID);
        if ($tbl == null) {
            return response()->json('No Data Found!', 400);
        } else {
            return response()->json($tbl, 200);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ExchangeRateModel $exchangeRateModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExchangeRateModel $exchangeRateModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExchangeRateModel $exchangeRateModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExchangeRateModel $exchangeRateModel)
    {
        //
    }
}
