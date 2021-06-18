<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    // all users
    public function index()
    {
        $users = User::all()->toArray();
        return $users;
    }

    // add user
    public function add(Request $request)
    {
        $this->validate($request, [
            'nick' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:4',
            'fullname' => 'required|string'
        ]);

        $user = new User([
            'nick' => $request->nick,
            'email' => $request->email,
            'role' =>$request->role,
            'password'=> Hash::make($request->password),
            'fullname' => $request->fullname,
        ]);
        $user->save();

        return response()->json('The user successfully added');
    }

    // edit user
    public function edit($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    // update user
    public function update($id, Request $request)
    {
        /*
        $user = User::find($id);

        $this->validate($request, [
            'nick' => 'string|max:255|unique:users,nick,' . $user->nick,
            'email' => 'string|email|max:255|unique:users,email,' . $user->email,
            //'password' => 'string|confirmed|min:4',
            'fullname' => 'string'
        ]);

        //$user->fill($request->all());
        //$user->password = Hash::make($request->password);


        $user->update($request->all());


        return response()->json('The user successfully updated'); */


        $user = User::find($id);
        $user->update($request->all());
    }

    // delete user
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return response()->json('The user successfully deleted');
    }
}
