<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\RealEstateController;

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
    Route::get('about', [OfficeController::class, 'index_about'])->name('about_page');
    Route::get('buy', [RealEstateController::class, 'index_buy'])->name('buy_page');
    Route::post('buy', [RealEstateController::class, 'buy'])->name('buy')->middleware('user');
    Route::get('rent', [RealEstateController::class, 'index_rent'])->name('rent_page');
    Route::post('rent', [RealEstateController::class, 'rent'])->name('rent')->middleware('user');
    Route::get('cart', [RealEstateController::class, 'index_cart'])->name('cart_page')->middleware('user');
    Route::post('cart_checkout', [RealEstateController::class, 'cart_checkout'])->name('cart_checkout')->middleware('user');
    Route::post('cart_delete', [RealEstateController::class, 'cart_delete'])->name('cart_delete')->middleware('user');
    Route::get('result', [RealEstateController::class, 'index_result'])->name('result_page');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('managecompany', [OfficeController::class, 'index_managecompany'])->name('managecompany_page');
    Route::get('addoffice', [OfficeController::class, 'index_addoffice'])->name('addoffice_page');
    Route::get('updateoffice', [OfficeController::class, 'index_updateoffice'])->name('updateoffice_page');
    Route::get('managerealestate', [RealEstateController::class, 'index_managerealestate'])->name('managerealestate_page');
    Route::get('addrealestate', [RealEstateController::class, 'index_addrealestate'])->name('addrealestate_page');
    Route::get('updaterealstate', [RealEstateController::class, 'index_updaterealestate'])->name('updaterealestate_page');
});
