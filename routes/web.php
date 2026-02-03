<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AuthController::class, 'index']);

Route::view('/dashboard', 'layouts.dashboard')->name('dashboard');
