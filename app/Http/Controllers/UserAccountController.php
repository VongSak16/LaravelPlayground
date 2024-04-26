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
        return response()->json(UserAccountModel::all(), 200);
    }

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
            $timestamp = time();
            $randomNumber = mt_rand(1000, 9999);
            $ID = $timestamp . $randomNumber;
            return $ID;
        }

        $tbl = new UserAccountModel;

        $tbl->userid = generateSubjectID();
        $tbl->username = request("txtusername");
        $tbl->userpassword = request("txtuserpassword");
        $tbl->create_at = date("Y-m-d H:i:s");
        $tbl->update_at = null;

        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|mimes:pdf,xlx,csv,gif,png,jpg,jpeg|max:20480',
            ]);
            $file = $tbl->userid . '.' . $request->file->extension();
            $request->file->move(public_path('assets/imguser'), $file);
        } else {
            $file = 'no-img.jpg';
        }

        $tbl->photo = $file;

        $tbl->save();

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
        $tbl = UserAccountModel::where('userid', $id)->first();
        return view('useraccount.edit', ['tbl' => $tbl], ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        if ($request->hasFile('file')) {
            
            try {
                $file_pattern = "assets/imguser/$id.*";
                $file_path = glob($file_pattern)[0];
                unlink(public_path("$file_path"));
            } catch (Exception $e) {
            }

            $request->validate([
                'file' => 'required|mimes:pdf,xlx,csv,gif,jpeg,webp,png,jpg,jpeg,|max:20480',
            ]);
            $file = $id . '.' . $request->file->extension();

            $request->file->move(public_path('assets/imguser'), $file);
        } else {
            $file = UserAccountModel::where('userid', $id)->first()->photo;
        }

        $date = date("Y-m-d H:i:s");

        UserAccountModel::where('userid', $id)
            ->update([
                'username' => request('txtusername'),
                'userpassword' => request('txtuserpassword'),
                'update_at' => $date,
                'photo' => $file,
            ]);

        //WHY MY PROJECT WONT WORK
        // $tbl = UserAccountModel::where('userid', $id)->first();
        // $tbl->username = request("txtusername");
        // $tbl->userpassword = request("txtuserpassword");
        // $tbl->update_at = $date;
        // $tbl->photo=$file;
        // $tbl->save();

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
        try {
            $file_pattern = "assets/imguser/$id.*";
            $file_path = glob($file_pattern)[0];
            unlink(public_path("$file_path"));
        } catch (Exception $e) {
        }

        UserAccountModel::where('userid', $id)->delete();
        return redirect('/useraccount');
    }
}
