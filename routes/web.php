<?php

use App\Http\Controllers\Auth_controller;
use App\Http\Controllers\Club_controller;
use App\Http\Controllers\Home_controller;
use Illuminate\Support\Facades\Route;

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

// Home_controller
Route::get('/', [Home_controller::class, 'index'])->middleware('auth');
/* end Home_controller */


/* auth_controller */
Route::get('/Auth/login', [Auth_controller::class, 'login'])->name('login')->middleware('guest');
Route::post('/Auth/login', [Auth_controller::class, 'doLogin'])->middleware('guest');

Route::get('/Auth/register', [Auth_controller::class, 'register'])->middleware('guest');
Route::post('/Auth/register', [Auth_controller::class, 'doRegister'])->middleware('guest');

Route::post('/Auth/logout', [Auth_controller::class, 'logout'])->middleware('auth');
/* end auth_controler */



/* Club_controller */
Route::get('/Club', [Club_controller::class, 'index'])->middleware('auth');

Route::get('/Club/tim', [Club_controller::class, 'tim'])->middleware('auth');
/* end Club_controller */