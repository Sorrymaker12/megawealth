<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return redirect()->route('home_page');
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', [UserController::class, 'index_login'])->name('login_page');
    Route::get('register', [UserController::class, 'index_register'])->name('register_page');
    Route::post('register', [UserController::class, 'register'])->name('register');
    Route::post('login', [UserController::class, 'login'])->name('login');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
});

Route::get('/home', [UserController::class, 'index_home'])->name('home_page');
