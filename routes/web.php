<?php

use App\Http\Controllers\Auth_controller;
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
/* end auth_controler */