<?php

namespace App\Http\Controllers;

use App\Models\SubjectModel;
use Exception;
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
        function generateSubjectID()
        {
            // Get the current timestamp (in seconds)
            $timestamp = time();

            // Generate a random number (you can adjust the range as needed)
            $randomNumber = mt_rand(1000, 9999);

            // Combine the timestamp and random number to create the subject ID
            $subjectID = $timestamp . $randomNumber;

            return $subjectID;
        }

        $txtsubjectid = generateSubjectID();
        $txtsubject = request("txtsubject");
        $txtprice = request("txtprice");
        $txtduration = request("txtduration");
        $create_at = date("Y-m-d H:i:s");

        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|mimes:pdf,xlx,csv,gif,png,jpg,jpeg|max:20480',
            ]);
            $file = $txtsubjectid . '.' . $request->file->extension();
            $request->file->move(public_path('assets/imgprd'), $file);
        } else {
            $file = 'no-img.jpg';
        }

        DB::insert("INSERT INTO tblsubject (subjectid, subjectname, create_at ,price, duration, photo) VALUES ($txtsubjectid, '$txtsubject', '$create_at', $txtprice, $txtduration, '$file')");
        return redirect('/subject');

        // DB::insert("INSERT INTO tblsubject(subjectid, subjectname, postdate,price, photo,create_at, update_at,duration) VALUES ('".$idSubject."','".$txtSubject."', ".$txtPrice.",".$txtduration.")");
        // return redirect('/subject');
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
    public function edit($id)
    {
        $tbl = DB::select('SELECT * FROM tblsubject WHERE subjectid = ?', [$id]);
        return view('subject.edit', ['tbl' => $tbl], ["id" => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $file_pattern = "assets/imgprd/$id.*";
            $file_path = glob($file_pattern)[0];
            unlink(public_path("$file_path"));

        }catch(Exception $e){

        }

        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|mimes:pdf,xlx,csv,gif,png,jpg,jpeg|max:20480',
            ]);
            $file = $id . '.' . $request->file->extension();
            $request->file->move(public_path('assets/imgprd'), $file);
        } else {
            $file = 'no-img.jpg';
        }

        $date = date("Y-m-d H:i:s");

        $txtsubject = request("txtsubject");
        $txtprice = request("txtprice");
        $txtduration = request("txtduration");

        DB::insert("UPDATE tblsubject SET 
            subjectname= '$txtsubject', 
            price= $txtprice, 
            duration = $txtduration, 
            photo= '$file',
            update_at='$date'
            WHERE subjectid=$id");
        return redirect('/subject');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        return view("subject.delete", ["id" => $id]);
    }
    public function destroy($id)
    {
        try{
            $file_pattern = "assets/imgprd/$id.*";
            $file_path = glob($file_pattern)[0];
            unlink(public_path("$file_path"));

        }catch(Exception $e){

        }

        $tbl = DB::delete('DELETE from tblsubject where subjectid = ' . $id . ';');
        return redirect('/subject');
    }
}
