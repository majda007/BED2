<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ClanController;
use  App\Http\Controllers\KnjigaController;
use  App\Http\Controllers\PosudbaController;

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
    return view('welcome');
});
Route::resource('clan', ClanController::class);
Route::resource('knjiga', KnjigaController::class);
Route::resource('posudba', PosudbaController::class);