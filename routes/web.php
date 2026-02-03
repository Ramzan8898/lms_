<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'store'])->name('auth.login');


/* 🔒 Protected Routes */
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

        Route::get('/users',[UserController::class,'index'])->name('admin.users');
        Route::get('/instructor',[InstructorController::class,'index'])->name('admin.instructor');
        Route::get('/instructor/create',[InstructorController::class,'create'])->name('admin.instructor.create');
});


