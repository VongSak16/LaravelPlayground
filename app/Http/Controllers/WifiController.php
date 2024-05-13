<?php

namespace App\Http\Controllers;

use App\Models\WifiModel;
use Illuminate\Http\Request;

class WifiController extends Controller
{
    //GET
    public function GET()
    {
        return response()->json(WifiModel::all(), 200);
    }


    //POST
    public function POST(Request $request)
    {
        $tbl = new WifiModel;
        //$tbl->WifiID =  $id;
        $tbl->WifiName = request("WifiName");
        $tbl->WifiPassword = request("WifiPassword");

        $tbl->save();
        return response()->json(['message' => 'Inserted']);
    }

    //PUT
    public function PUT(Request $request)
    {
        $WifiID = request("WifiID");
        $tbl = WifiModel::find($WifiID);
        $tbl->WifiName = request("WifiName");
        $tbl->WifiPassword = request("WifiPassword");

        $tbl->save();
        return response()->json(['message' => 'Updated']);
    }

    //DELETE
    public function DELETE(Request $request)
    {
        $WifiID = request("WifiID");
        $tbl = WifiModel::find($WifiID);

        $tbl->delete();

        return response()->json(['message' => 'Deleted']);
    }

    //GETDetai
    public function GETDetail()
    {
        $WifiID = request("WifiID");
        $tbl = WifiModel::find($WifiID);
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
    public function show(WifiModel $wifiModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WifiModel $wifiModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WifiModel $wifiModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WifiModel $wifiModel)
    {
        //
    }
}
