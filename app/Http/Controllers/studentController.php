<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //GET
    public function GET()
    {
        //return 'Hello';
        return response()->json(StudentModel::all(), 200);
    }


    //POST
    public function POST(Request $request)
    {
        $tbl = new StudentModel;
        $tbl->sid =  date('YmdHis');
        $tbl->fullname = request("fullname");
        $tbl->gender = request("gender");
        $tbl->dob = request("dob");
        $tbl->telephone = request("telephone");
        $tbl->created_at = now();
        
        $tbl->save();
        return response()->json(['message' => 'Inserted']);
    }

    //PUT
    public function PUT(Request $request)
    {
        $sid = request("sid");
        $tbl = StudentModel::find($sid);
        $tbl->fullname = request("fullname");
        $tbl->gender = request("gender");
        $tbl->dob = request("dob");
        $tbl->telephone = request("telephone");
        $tbl->created_at = request("created_at");
        $tbl->updated_at = now();

        $tbl->save();

        return response()->json(['message' => 'Updated']);
    }

    //DELETE
    public function DELETE(Request $request)
    {
        $sid = request("sid");
        $tbl = StudentModel::find($sid);
        
        $tbl->delete();

        return response()->json(['message' => 'Deleted']);
    }

    //GETDetai
    public function GETDetail()
    {
        $sid = request("sid");
        $tbl = StudentModel::find($sid);
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
    public function show(StudentModel $studentModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentModel $studentModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentModel $studentModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentModel $studentModel)
    {
        //
    }
}
