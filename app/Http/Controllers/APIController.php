<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class APIController extends Controller
{
    // login
    public function login(Request $request)
    {
        $creds = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        if (!auth()->attempt($creds)) {
            return response()->json([
                'Message' => 'Login Failed',
            ]);
        } else {
            return response()->json([
                'Message' => 'Login Successful',
                'Token' => $request->user()->createToken('BearerToken')->accessToken,
            ]);
        }
    }
    // register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = new User();
        $user->id = Str::uuid('id');
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json([
            'Status' => 'Register Success'
        ]);
    }
}
