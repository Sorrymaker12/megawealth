<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index_register(){
        return view('auth.register');
    }

    public function index_login(){
        return view('auth.login');
    }

    public function register(){

    }

    public function login(){

    }

    public function logout(){

    }

    public function index_home(){

    }
}
