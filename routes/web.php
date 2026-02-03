<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get(
    '/',
    function () {
        return view('welcome');
    }
)->name('welcome');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::view('/dashboard', 'layouts.dashboard')->name('dashboard');
