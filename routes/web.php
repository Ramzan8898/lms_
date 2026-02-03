<?php

use App\Http\Controllers\Admin\DashboardController;
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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
