<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/',[App\Http\Controllers\PageController::class,'welcome'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [App\Http\Controllers\CustomController::class, 'index'])->name('login');
Route::post('/login', [App\Http\Controllers\CustomController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\CustomController::class, 'logout'])->name('logout');
Route::post('/passcode',[App\Http\Controllers\CustomController::class, 'passcode'])->name('passcode');
Route::view('/passcode', 'passcode')->name('passcode');
