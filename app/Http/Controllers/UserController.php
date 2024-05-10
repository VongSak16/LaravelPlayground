<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //GET
    public function GET()
    {
        //return 'Hello';
        return response()->json(UserModel::all(), 200);
    }

    //POST
    public function POST(Request $request)
    {
        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|mimes:pdf,xlx,csv,gif,png,jpg,jpeg|max:20480',
            ]);
            $fileName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('subjects'), $fileName);
        } else {
            $fileName = 'noimg.png';
        }

        $tbl = new UserModel;
        $tbl->userid =  date('YmdHis');
        $tbl->username = request("username");
        $tbl->userpassword = request("userpassword");
        $tbl->photo = $fileName;

        $tbl->save();
        return response()->json($tbl, 201);
    }

    //PUT
    public function PUT(Request $request)
    {
        $id = request("id");
        $tbl = UserModel::find($id);
        $tbl->username = request("username");
        $tbl->userpassword = request("userpassword");
        $tbl->save();

        return response()->json($tbl, 202);
    }

    //DELETE
    public function DELETE(Request $request)
    {
        $id = request("id");
        $tbl = UserModel::find($id);
        $tbl->delete();

        return response()->json($tbl, 202);
    }

    //GETDetai
    public function GETDetail()
    {
        $id = request("id"); //declare id to get id from parameter
        $tbl = UserModel::find($id);
        if ($tbl == null) {
            return response()->json('No Data Found!', 400);
        } else {
            return response()->json($tbl, 200);
        }
    }

    public function index()
    {
        //Get all data from table
        $tbl = UserModel::all();

        //Get first row
        $FirstRow = UserModel::first();
        //Get last row
        $LastRow = UserModel::all()->last();

        //Get one row
        $id = 102;
        $tblRow = UserModel::where('userid', '=', $id)->get()->first();

        //Get multi rows
        $tblNRow = UserModel::whereIn('userid', array(1, 2, 3))->get();

        return view('user', ['tbl' => $tbl, 'firstrow' => $FirstRow, 'tblRow' => $tblRow]);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //Save DATA using Raw SQL
        // DB::insert("INSERT INTO tblsubject(subjectname, price, duration,photo) 
        //             VALUES ('".$txtSubject."',".$txtPrice."
        //             ,".$txtduration.", '".$fileName."')"
        //             );
        // return redirect('/subject');

        //Save DATA using Eloquent
        $tbl = new UserModel;
        $tbl->userid = 103;
        $tbl->username = request("txtUsername");
        $tbl->save();
        return redirect('/subject');
    }

    public function show(UserModel $userModel)
    {
        //
    }


    public function edit(UserModel $userModel)
    {
        // Update Row using Eloquent
        $id = 101;
        $tbl = UserModel::find($id);
        $tbl->username = request("txtUsername");
        $tbl->save();
        return redirect('/subject');
    }


    public function update(Request $request, UserModel $userModel)
    {
        //
    }


    public function destroy(UserModel $userModel)
    {
        // Delete Row using Eloquent
        $id = 101;
        $tbl = UserModel::find($id);
        $tbl->delete();
        return redirect('/subject');
    }
}
