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

        if($request->hasFile('file')){ 
            $request->validate([
                'file' => 'required|mimes:pdf,xlx,csv,gif,png,jpg,jpeg|max:20480',
            ]);    
            $file = time().'.'.$request->file->extension();  
            $request->file->move(public_path('assets/imgprd'), $file);
        }
        else{
            $file = 'no-img.png';
        }

        function generateSubjectID() {
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

        DB::insert("INSERT INTO tblsubject (subjectid, subjectname, price, duration, photo) VALUES ($txtsubjectid, '$txtsubject', $txtprice, $txtduration, '$file')");
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
    public function delete($id)
    {
        return view("subject.delete", ["id" => $id]);
    }
    public function destroy($id)
    {
        $tbl = DB::delete('DELETE from tblsubject where subjectid = ' . $id . ';');
        return redirect('/subject');
    }
}
