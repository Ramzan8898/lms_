<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get(
    '/',
    function () {
        return view('welcome');
    }
)->name('welcome');


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'store'])->name('login.post');

Route::view('/dashboard', 'layouts.dashboard')->name('dashboard');
