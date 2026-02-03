<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get(
    '/',
    function () {
        return view('welcome');
    }
)->name('welcome');

Route::view('/dashboard', 'layouts.dashboard')->name('dashboard');
