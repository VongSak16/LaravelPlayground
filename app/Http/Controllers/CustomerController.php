<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    //GET
    public function GET()
    {
        return response()->json(CustomerModel::all(), 200);
    }


    //POST
    public function POST(Request $request)
    {
        $tbl = new CustomerModel;
        //$tbl->CustomerID =  $id;
        $tbl->CustomerNumber = request("CustomerNumber");
        $tbl->CustomerName = request("CustomerName");
        $tbl->Tel = request("Tel");

        $tbl->save();
        return response()->json(['message' => 'Inserted']);
    }

    //PUT
    public function PUT(Request $request)
    {
        $CustomerID = request("CustomerID");
        $tbl = CustomerModel::find($CustomerID);
        $tbl->CustomerNumber = request("CustomerNumber");
        $tbl->CustomerName = request("CustomerName");
        $tbl->Tel = request("Tel");

        $tbl->save();
        return response()->json(['message' => 'Updated']);
    }

    //DELETE
    public function DELETE(Request $request)
    {
        $CustomerID = request("CustomerID");
        $tbl = CustomerModel::find($CustomerID);

        $tbl->delete();

        return response()->json(['message' => 'Deleted']);
    }

    //GETDetai
    public function GETDetail()
    {
        $CustomerID = request("CustomerID");
        $tbl = CustomerModel::find($CustomerID);
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
    public function show(CustomerModel $customerModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerModel $customerModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CustomerModel $customerModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerModel $customerModel)
    {
        //
    }
}
