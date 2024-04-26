<?php

namespace App\Http\Controllers;

use App\Models\UserAccountModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserAccountController extends Controller
{

    public function GET()
    {
        //return 'Hello'; 
        return response()->json(UserAccountModel::all(),200);
    }
    
    //Get All
    //Get detail
    //Post
    //

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tbl = UserAccountModel::all();
        return view('useraccount.index', ['tbl' => $tbl]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('useraccount.create');
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
            $ID = $timestamp . $randomNumber;

            return $ID;
        }

        $txtuserid = generateSubjectID();
        $txtusername = request("txtusername");
        $txtuserpassword = request("txtuserpassword");
        $create_at = date("Y-m-d H:i:s");

        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|mimes:pdf,xlx,csv,gif,png,jpg,jpeg|max:20480',
            ]);
            $file = $txtuserid . '.' . $request->file->extension();
            $request->file->move(public_path('assets/imguser'), $file);
        } else {
            $file = 'no-img.jpg';
        }
        
        DB::insert("INSERT INTO tbluser (userid, username, photo, userpassword, create_at) VALUES (?, ?, ?, ?, ?)", [$txtuserid, $txtusername, $file, $txtuserpassword, $create_at]);

        return redirect('/useraccount');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserAccountModel $userAccountModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tbl = DB::select('SELECT * FROM tbluser WHERE userid = ?', [$id]);
        return view('useraccount.edit', ['tbl' => $tbl], ["id" => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        try{
            $file_pattern = "assets/imguser/$id.*";
            $file_path = glob($file_pattern)[0];
            unlink(public_path("$file_path"));

        }catch(Exception $e){

        }

        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|mimes:pdf,xlx,csv,gif,png,jpg,jpeg,|max:20480',
            ]);
            $file = $id . '.' . $request->file->extension();
            $request->file->move(public_path('assets/imguser'), $file);
        } else {
            $file = 'no-img.jpg';
        }

        $date = date("Y-m-d H:i:s");

        $txtusername = request("txtusername");
        $txtuserpassword = request("txtuserpassword");

        DB::insert("UPDATE tbluser SET 
            username= '$txtusername',
            userpassword= '$txtuserpassword', 
            update_at ='$date',
            photo = '$file'
            WHERE userid = $id");
        return redirect('/useraccount');
    }
    /**
     * Update the specified resource in storage.
     */
    public function delete($id)
    {
        return view("useraccount.delete", ["id" => $id]);
    }

    public function destroy($id)
    {
        try{
            $file_pattern = "assets/imguser/$id.*";
            $file_path = glob($file_pattern)[0];
            unlink(public_path("$file_path"));

        }catch(Exception $e){

        }

        $tbl = DB::delete('DELETE from tbluser where userid = ' . $id . ';');
        return redirect('/useraccount');
    }
}
