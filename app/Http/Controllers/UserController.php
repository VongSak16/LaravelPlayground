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
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'file' => 'nullable|mimes:xlx,csv,gif,png,jpg,jpeg|max:20480',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($request->hasFile('file')) {
            $file = $user->username . '.' . $request->file->extension();
            $request->file->move(public_path(substr(config('paths.image_users_path'), 1)), $file);
        } else {
            $file = null;
        }

        $user->photo = $file;
        $user->save();

        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'file' => 'nullable|mimes:xlx,csv,gif,png,jpg,jpeg|max:20480',
        ]);

        if ($request->hasFile('file')) {
            try {
                $file_pattern = substr(config('paths.image_users_path'), 1) . "$user->username.*";
                $file_path = glob($file_pattern)[0];
                unlink(public_path("$file_path"));
            } catch (Exception $e) {
            }

            $file = $user->username . '.' . $request->file->extension();
            $request->file->move(public_path(substr(config('paths.image_users_path'), 1)), $file);
        } else {
            $file = $user->photo;
        }

        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->photo = $file;
        $user->save();

        return redirect('/users')->with('success', 'User updated successfully');
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
