<?php

namespace App\Http\Controllers;

use App\Models\SubjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // try {
        //     $tbl = DB::select('select * from tblsubject;');
        //     return view('subject​.index', ['tbl' => $tbl]);
        // } catch (\Exception $e) {
        //     print($e);
        // }


        $tbl = DB::select('select * from tblsubject;');
        return view('subject.index', ['tbl' => $tbl]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subject.create');
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
    public function show(SubjectModel $subjectModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubjectModel $subjectModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubjectModel $subjectModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tbl = DB::delete('DELETE FROM tblsubject WHERE subjectid ='.$id.';');
        return redirect('subject');
    }
}
