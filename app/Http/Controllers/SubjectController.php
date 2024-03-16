<?php

namespace App\Http\Controllers;

use App\Models\SubjectModel;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('subject.index');
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
    public function destroy(SubjectModel $subjectModel)
    {
        //
    }
}
