<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //GET
    public function GET()
    {
        return response()->json(UserModel::all(), 200);
    }

    //POST
    public function POST(Request $request)
    {

        $tbl = new UserModel;
        $tbl->userid = date('YmdHis');
        $tbl->username = request('username');
        $tbl->userpassword = request("userpassword");
        $tbl->created_at = date("Y-m-d H:i:s");
        $tbl->updated_at = null;

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
        return response()->json($tbl, 201);
    }

    //PUT
    public function PUT(Request $request)
    {
        $id = request("id");
        $tbl = UserModel::find($id);
        $tbl->username = request('username');
        $tbl->userpassword = request("userpassword");
        $tbl->updated_at = date("Y-m-d H:i:s");

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
            $file = $tbl->photo;
        }

        $tbl->photo = $file;
        $tbl->save();

        return response()->json($tbl, 202);
    }

    //DELETE
    public function DELETE(Request $request)
    {
        $id = request("id");
        $tbl = UserModel::find($id);
        $tbl->delete();
        try {
            $file_pattern = "assets/imguser/$id.*";
            $file_path = glob($file_pattern)[0];
            unlink(public_path("$file_path"));
        } catch (Exception $e) {
        }

        return response()->json($tbl, 202);
    }

    //GETDetail
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


    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $tbl = UserModel::all();
    //     return view('user.index', ['tbl' => $tbl]);
    // }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tbl = new UserModel;

        $tbl->userid = date('YmdHis');
        $tbl->username = request("txtusername");
        $tbl->userpassword = request("txtuserpassword");
        $tbl->created_at = date("Y-m-d H:i:s");
        $tbl->updated_at = null;

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

        return redirect('/user');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserModel $userModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //$tbl = UserModel::where('userid', $id)->first();

        // $tbl = User::find($id);
        // return view('users.edit', ['tbl' => $tbl], ['id' => $id]);
        return view('users.login');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $tbl = UserModel::find($id);
        // $date = date("Y-m-d H:i:s");

        // if ($request->hasFile('file')) {

        //     try {
        //         $file_pattern = "assets/imguser/$id.*";
        //         $file_path = glob($file_pattern)[0];
        //         unlink(public_path("$file_path"));
        //     } catch (Exception $e) {
        //     }

        //     $request->validate([
        //         'file' => 'required|mimes:pdf,xlx,csv,gif,jpeg,webp,png,jpg,jpeg,|max:20480',
        //     ]);
        //     $file = $id . '.' . $request->file->extension();

        //     $request->file->move(public_path('assets/imguser'), $file);
        // } else {
        //     $file = $tbl->photo;
        // }

        // $tbl->username = request("txtusername");
        // $tbl->userpassword = request("txtuserpassword");
        // $tbl->updated_at = $date;
        // $tbl->photo = $file;
        // $tbl->save();

        // // UserModel::where('userid', $id)
        // //     ->update([
        // //         'username' => request('txtusername'),
        // //         'userpassword' => request('txtuserpassword'),
        // //         'updated_at' => $date,
        // //         'photo' => $file,
        // //     ]);

        // return redirect('/user');
    }
    /**
     * Update the specified resource in storage.
     */
    public function deletes($id)
    {
        return view("user.delete", ["id" => $id]);
    }

    public function destroy($id)
    {
        try {
            $file_pattern = "assets/imguser/$id.*";
            $file_path = glob($file_pattern)[0];
            unlink(public_path("$file_path"));
        } catch (Exception $e) {
        }
        //UserModel::where('userid', $id)->delete();
        $tbl = UserModel::find($id);
        $tbl->delete();
        return redirect('/user');
    }
}
