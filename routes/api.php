<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// login
Route::post('login', [APIController::class, 'login']);
// register
Route::post('register', [APIController::class, 'register']);
// transaction
Route::post('get_data', [APIController::class, 'get_data'])->middleware('auth:api');
