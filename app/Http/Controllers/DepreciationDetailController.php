<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use App\Models\DepreciationDetailModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepreciationDetailController extends Controller
{
    //GET
    public function GET()
    {
        //return response()->json(DepreciationDetailModel::all(), 200);
    }

    //POST
    public function POST(Request $request)
    {
    }

    //PUT
    public function PUT(Request $request)
    {
    }

    //DELETE
    public function DELETE(Request $request)
    {
    }

    //GETDetail
    public function GETDetail()
    {
    }

    public function index($id)
    {
        $tbl = DepreciationDetailModel::where('cusid', $id)->get();
        $tblCus = CustomerModel::find($id);
        return view('depreciationdetail.index', ['tbl' => $tbl], ['tblCus' => $tblCus]);
    }

    public function update($id)
    {
        $tbl = DepreciationDetailModel::find($id);
        $tbl->clear_date = date("Y-m-d H:i:s");
        $tbl->clear_by_userid = Auth::user()->id;
        $tbl->save();

        $cusid = $tbl->cusid;

        return redirect('/depreciationdetail/' . $cusid);
    }
}
