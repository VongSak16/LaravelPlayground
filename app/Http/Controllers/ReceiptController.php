<?php

namespace App\Http\Controllers;

use App\Models\ReceiptModel;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{

    //GET
    public function GET()
    {
        return response()->json(ReceiptModel::all(), 200);
    }


    //POST
    public function POST(Request $request)
    {
        $tbl = new ReceiptModel;
        //$tbl->ReceiptID =  $id;
        $tbl->ReceiptNumber = request("ReceiptNumber");
        $tbl->WaitingNumber = request("WaitingNumber");
        $tbl->DateOrder = request("DateOrder");
        $tbl->Vat = request("Vat");
        $tbl->ShopID = request("ShopID");
        $tbl->UserID = request("UserID");
        $tbl->CustomerID = request("CustomerID");
        $tbl->WifiID = request("WifiID");
        $tbl->ExchangeID = request("ExchangeID");

        $tbl->save();
        return response()->json(['message' => 'Inserted']);
    }

    //PUT
    public function PUT(Request $request)
    {
        $ReceiptID = request("ReceiptID");
        $tbl = ReceiptModel::find($ReceiptID);
        $tbl->ReceiptNumber = request("ReceiptNumber");
        $tbl->WaitingNumber = request("WaitingNumber");
        $tbl->DateOrder = request("DateOrder");
        $tbl->Vat = request("Vat");
        $tbl->ShopID = request("ShopID");
        $tbl->UserID = request("UserID");
        $tbl->CustomerID = request("CustomerID");
        $tbl->WifiID = request("WifiID");
        $tbl->ExchangeID = request("ExchangeID");

        $tbl->save();
        return response()->json(['message' => 'Updated']);
    }

    //DELETE
    public function DELETE(Request $request)
    {
        $ReceiptID = request("ReceiptID");
        $tbl = ReceiptModel::find($ReceiptID);

        $tbl->delete();

        return response()->json(['message' => 'Deleted']);
    }

    //GETDetai
    public function GETDetail()
    {
        $ReceiptID = request("ReceiptID");
        $tbl = ReceiptModel::find($ReceiptID);
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
    public function show(ReceiptModel $receiptModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReceiptModel $receiptModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ReceiptModel $receiptModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReceiptModel $receiptModel)
    {
        //
    }
}
