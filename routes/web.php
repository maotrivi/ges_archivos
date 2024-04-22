<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SecretariaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('secretaria', SecretariaController::class);
Route::view('/login','auth.login')->name('login');
Route::view('/register','auth.register')->name('register');
Route::post('/register', [LoginController::class,'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
