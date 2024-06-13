<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|mimes:xlx,csv,gif,png,jpg,jpeg|max:20480',
            ]);
            $file = $user->username . '.' . $request->file->extension();
            $request->file->move(public_path(substr(config('paths.image_users_path'), 1)), $file);
        } else {
            $file = null;
        }

        $user->photo = $file;
        $user->save();

        return redirect('/users');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        try {
            $file_pattern = substr(config('paths.image_users_path'), 1) . "$user->username.*";
            $file_path = glob($file_pattern)[0];
            unlink(public_path("$file_path"));
        } catch (Exception $e) {
        }
        $user->delete();

        return redirect('/users');
    }
}
