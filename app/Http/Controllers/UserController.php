<?php

namespace App\Http\Controllers;

use App\Models\RealEstate;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

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
        $user->id = Str::uuid();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = "member";
        $user->save();

        return redirect()->route('login_page');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::attempt($credentials)) {
            // Cookie::queue('LoginCookie', $request->input('email'), 5);

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

    public function index_about()
    {
        return view('view.about');
    }

    public function index_buy()
    {
        return view('view.buy', [
            'RealEstates' => RealEstate::where([['status', '=', 'available'], ['sales_type', '=', 'Buy']])->paginate(4)
        ]);
    }

    public function index_rent()
    {
        return view('view.rent', [
            'RealEstates' => RealEstate::where([['status', '=', 'available'], ['sales_type', '=', 'Rent']])->paginate(4)
        ]);
    }

    public function index_cart()
    {
        return view('view.cart');
    }

    public function index_result()
    {
        return view('view.result');
    }

    public function index_managecompany()
    {
        return view('admin.managecompany');
    }

    public function index_addoffice()
    {
        return view('admin.addoffice');
    }

    public function index_updateoffice()
    {
        return view('admin.updateoffice');
    }

    public function index_managerealestate()
    {
        return view('admin.managerealestate');
    }

    public function index_addrealestate()
    {
        return view('admin.addrealestate');
    }

    public function index_updaterealestate()
    {
        return view('admin.updaterealestate');
    }
}
