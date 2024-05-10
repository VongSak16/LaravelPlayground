<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$admin = new Admin;
        //$id = $admin->AutoID();
        //$tbl = Admin::all();
        //$subjectid = 1;
        //$tbl = Admin::where('subjectid', $subjectid )->get();
        // $tbl = DB::table('tblsubject')
        //         ->where('subjectid', '=', 1)
        //         ->get();
        // $tbl = DB::select('select * from tblsubject;');
        // $tbl = DB::select('select * from tblsubject where subjectid = '.$subjectid.';');
        return view('admin');
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
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
