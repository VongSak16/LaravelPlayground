<?php

namespace App\Http\Controllers;

use App\Models\SubjectModel;
use Illuminate\Http\Request;
use DB;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tbl = DB::select('select * from tblsubject;');
        
        return view('subjects.index', ['tbl'=>$tbl] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("subjects.create");
    }

    public function store(Request $request)
    {
        if($request->hasFile('file')){ 
            $request->validate([
                'file' => 'required|mimes:pdf,xlx,csv,gif,png,jpg,jpeg|max:20480',
            ]);    
            $fileName = time().'.'.$request->file->extension();  
            $request->file->move(public_path('subjects'), $fileName);
        }
        else{
            $fileName = 'noimg.png';
        }

        $txtSubject = request("txtSubject");
        $txtprice = request("txtprice");
        $txtduration = request("txtduration");

        DB::insert("INSERT INTO tblsubject(subjectname, price, duration, photo) 
        VALUES ('".$txtSubject."', ".$txtprice.",".$txtduration.",'".$fileName."')");
        return redirect('/subject');
    
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
        $tbl = DB::SelectOne('select * from tblsubject where subjectid='.$id.';');
        return view('subjects.edit',['id'=>$id,'tbl'=>$tbl]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        if($request->hasFile('file')){ 
            $request->validate([
                'file' => 'required|mimes:pdf,xlx,csv,gif,png,jpg,jpeg|max:20480',
            ]);    
            $fileName = time().'.'.$request->file->extension();  
            $request->file->move(public_path('subjects'), $fileName);

        }
        else{
           
        }

        $txtSubject = request("txtSubject");
        $txtprice = request("txtprice");
        $txtduration = request("txtduration");
        DB::update("UPDATE tblsubject SET photo='".$fileName."', subjectname = '".$txtSubject."' WHERE subjectid = '".$id."'");

        
        // DB::insert("INSERT INTO tblsubject(subjectname, price, duration, photo) 
        // VALUES ('".$txtSubject."', ".$txtprice.",".$txtduration.",'".$fileName."')");
        return redirect('/subject');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        return view('subjects.delete',['id'=>$id]);
    }
    public function destroy($id)
    {

        $tbl = DB::delete('DELETE from tblsubject where subjectid = '.$id.';');
        return redirect('/subject');
    }
}



// $data = categorys::findOrFail($id);
// $data->delete();
