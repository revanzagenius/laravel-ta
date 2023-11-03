<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('index');
});

Route::view('/challenges', 'challenges');
Route::view('/create-challenges', 'create-challenges');
Route::view('/tambah-cl', 'tambah-cl');
Route::view('/login', 'login');
Route::view('/rank', 'rank');
