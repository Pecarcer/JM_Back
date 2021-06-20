<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
/*
* Registers a new user
*/
    public function register(Request $request)
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
            'role' =>"user",
            'password'=> Hash::make($request->password),
            'fullname' => $request->fullname,
        ]);
        $user->save();

        $token = $user->createToken('my-app-token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

/*
* Logins the user based on the credentials provided
*/
    public function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['Las credenciales no son correctas.']
            ], 404);
        }

        $token = $user->createToken('my-app-token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }
}

