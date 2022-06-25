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
    return redirect()->route('home_page');
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', [UserController::class, 'index_login'])->name('login_page');
    Route::get('register', [UserController::class, 'index_register'])->name('register_page');
    Route::post('register', [UserController::class, 'register'])->name('register');
    Route::post('login', [UserController::class, 'login'])->name('login');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
});


Route::group(['prefix' => 'view'], function () {
    Route::get('home', [UserController::class, 'index_home'])->name('home_page');
    Route::get('about', [UserController::class, 'index_about'])->name('about_page');
    Route::get('buy', [UserController::class, 'index_buy'])->name('buy_page');
    Route::get('rent', [UserController::class, 'index_rent'])->name('rent_page');
    Route::get('cart', [UserController::class, 'index_cart'])->name('cart_page');
    Route::get('result', [UserController::class, 'index_result'])->name('result_page');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('managecompany', [UserController::class, 'index_managecompany'])->name('managecompany_page');
    Route::get('addoffice', [UserController::class, 'index_addoffice'])->name('addoffice_page');
    Route::get('updateoffice', [UserController::class, 'index_updateoffice'])->name('updateoffice_page');
    Route::get('managerealestate', [UserController::class, 'index_managerealestate'])->name('managerealestate_page');
    Route::get('addrealestate', [UserController::class, 'index_addrealestate'])->name('addrealestate_page');
    Route::get('updaterealstate', [UserController::class, 'index_updaterealestate'])->name('updaterealestate_page');
});
