<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    //GET
    public function GET()
    {
        return response()->json(User::all(), 200);
    }

    //POST
    public function POST(Request $request)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
        //     'username' => ['required', 'string', 'max:255', 'unique:' . User::class],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|mimes:pdf,xlx,csv,gif,png,jpg,jpeg|max:20480',
            ]);
            $file = $request->username . '.' . $request->file->extension();
            $request->file->move(public_path('assets/imguser'), $file);
        } else {
            $file = 'no-img.jpg';
        }

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'photo' => $file
        ]);

        event(new Registered($user));

        return response()->json(['message' => 'User Added'], 201);
    }

    //PUT
    public function PUT(Request $request)
    {

        //$tbl = UserModel::find(request("id"));
        $date = date("Y-m-d H:i:s");

        if ($request->hasFile('file')) {

            try {
                $file_pattern = "assets/imguser/$request->username.*";
                $file_path = glob($file_pattern)[0];
                unlink(public_path("$file_path"));
            } catch (Exception $e) {
            }

            $request->validate([
                'file' => 'required|mimes:pdf,xlx,csv,gif,jpeg,webp,png,jpg,jpeg,|max:20480',
            ]);
            $file = $request->username . '.' . $request->file->extension();

            $request->file->move(public_path('assets/imguser'), $file);
        }else{
            $file = User::where('id',$request->id)->value('photo');
        }

        User::where('id', request("id"))
            ->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'photo' => $file
            ]);
        // $tbl->name = request("name");
        // $tbl->username = $request->username;
        // $tbl->email = $request->email;
        // $tbl->password = Hash::make($request->password);
    //     $tbl->name = "test";
    //     $tbl->username = "test";
    //     $tbl->email = "test@gmail.com";
    //     $tbl->password = Hash::make("12345678");
    //    // $tbl->photo = $file;
        
    //     $tbl->save();
        return response()->json(['message' => 'User Added'], 201);
    }

    //DELETE
    public function DELETE(Request $request)
    {
        $id = request("id");
        $tbl = User::find($id);
        $tbl->delete();
        try {
            $file_pattern = "assets/imguser/$tbl->username.*";
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
        $tbl = User::find($id);
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
        $users = User::all();

        if (Auth::id()) {
            $username = Auth()->user()->username;
            if ($username == 'Admin') {
                return view('users.admin-index', compact('users'));
            } else {
                return view('users.index', compact('users'));
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::id()) {
            $username = Auth()->user()->username;
            if ($username == 'Admin') {
                return view('auth.admin-register');
            } else {
                abort(404);
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::id()) {
            $username = Auth()->user()->username;
            if ($username == 'Admin') {
                $request->validate([
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
                    'username' => ['required', 'string', 'max:255', 'unique:' . User::class],
                    'password' => ['required', 'confirmed', Rules\Password::defaults()],
                ]);

                if ($request->hasFile('file')) {
                    $request->validate([
                        'file' => 'required|mimes:pdf,xlx,csv,gif,png,jpg,jpeg|max:20480',
                    ]);
                    $file = $request->username . '.' . $request->file->extension();
                    $request->file->move(public_path('assets/imguser'), $file);
                } else {
                    $file = 'no-img.jpg';
                }

                $user = User::create([
                    'name' => $request->name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'photo' => $file
                ]);

                event(new Registered($user));
                return redirect('/user');
            } else {
                abort(404);
            }
        }
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
        if (Auth::id()) {
            $username = Auth()->user()->username;
            if ($username == 'Admin') {
                $tbl = User::find($id);
                return view('users.edit', ['tbl' => $tbl], ['id' => $id]);
            } else {
                abort(404);
            }
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (Auth::id()) {
            $username = Auth()->user()->username;
            if ($username == 'Admin') {
                $tbl = UserModel::find($id);
                $date = date("Y-m-d H:i:s");

                if ($request->hasFile('file')) {

                    try {
                        $file_pattern = "assets/imguser/$request->username.*";
                        $file_path = glob($file_pattern)[0];
                        unlink(public_path("$file_path"));
                    } catch (Exception $e) {
                    }

                    $request->validate([
                        'file' => 'required|mimes:pdf,xlx,csv,gif,jpeg,webp,png,jpg,jpeg,|max:20480',
                    ]);
                    $file = $request->username . '.' . $request->file->extension();

                    $request->file->move(public_path('assets/imguser'), $file);
                } else {
                    $file = $tbl->photo;
                }

                User::where('id', $id)
                    ->update([
                        'name' => $request->name,
                        'username' => $request->username,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                        'photo' => $file
                    ]);

                return redirect('/user');
            } else {
                abort(404);
            }
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function deletes($id)
    {
        if (Auth::id()) {
            $username = Auth()->user()->username;
            if ($username == 'Admin') {
                return view("users.delete", ["id" => $id]);
            } else {
                abort(404);
            }
        }
    }

    public function destroy($id)
    {
        if (Auth::id()) {
            $username = Auth()->user()->username;
            if ($username == 'Admin') {

                $tbl = User::find($id);
                try {
                    $file_pattern = "assets/imguser/$tbl->username.*";
                    $file_path = glob($file_pattern)[0];
                    unlink(public_path("$file_path"));
                } catch (Exception $e) {
                }
                $tbl->delete();
                return redirect('/user');
            } else {
                abort(404);
            }
        }
    }
}
