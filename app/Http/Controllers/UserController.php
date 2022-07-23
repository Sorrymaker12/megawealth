<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\RealEstate;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    public function index_register()
    {
        return view('auth.register');
    }

    public function index_login()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        $user = new User();
        $wa = Str::uuid();
        $user->id = $wa;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = "member";
        $user->save();

        $cart = new Cart();
        $cart->id = Str::uuid();
        $cart->user_id = $wa;
        $cart->save();

        return redirect()->route('login_page');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::attempt($credentials)) {
            Cookie::queue('LoginCookie', $request->input('email'), 5);

            //5 itu 5 menit cookie akan berlaku

            // return view('home', [
            //     'name' => $request->name,
            //     'email' => $request->email,
            //     'password' => $request->password
            // ]);

            return redirect()->route('home_page');
        } else {
            return redirect()->back()->withErrors(['creds' => 'Invalid Account']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login_page');
    }

    public function index_home()
    {
        return view('view.home');
    }
}
