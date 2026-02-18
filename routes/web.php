<?php

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Students\StudentLessons;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::prefix('lms')->group(function () {
    //courses Route Web Page
    Route::get('/web-courses', function () {
        return view('website.pages.courses');
    })->name('web.courses');

    Route::get('/web-about', function () {
        return view('website.pages.about');
    })->name('web.about');

    Route::get('/web-contact', function () {
        return view('website.pages.contact');
    })->name('web.contact');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('web.register');

    Route::get('/login', function () {
        return view('auth.login');
    })->name('web.login');
});

Route::post('/login', [AuthController::class, 'store'])->name('auth.login');




/* 🔒 Protected Routes */
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/users', [UserController::class, 'index'])->name('admin.users');
    Route::get('/users/edit/{user}', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/users/update/{user}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/destroy/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');

    //instructor
    Route::get('/instructor', [InstructorController::class, 'index'])->name('admin.instructor');
    Route::get('/instructor/create', [InstructorController::class, 'create'])->name('admin.instructor.create');
    Route::post('/instructor/store', [InstructorController::class, 'store'])->name('admin.instructor.store');
    Route::get('/instructor/edit/{instructor}', [InstructorController::class, 'edit'])->name('admin.instructor.edit');
    Route::put('/instructor/update/{instructor}', [InstructorController::class, 'update'])->name('admin.instructor.update');
    Route::delete('/instructor/destroy/{instructor}', [InstructorController::class, 'destroy'])->name('admin.instructor.destroy');


    //courses
    Route::get('/courses', [CourseController::class, 'index'])->name('admin.courses');
    Route::get('/courses/create', [CourseController::class, 'create'])->name('admin.courses.create');
    Route::post('/courses/store', [CourseController::class, 'store'])->name('admin.courses.store');
    Route::get('/courses/edit/{course}', [CourseController::class, 'edit'])->name('admin.courses.edit');
    Route::put('/courses/update/{course}', [CourseController::class, 'update'])->name('admin.courses.update');
    Route::delete('/courses/destroy/{course}', [CourseController::class, 'destroy'])->name('admin.courses.destroy');

    //lessons

    Route::get('/lessons', [LessonController::class, 'index'])->name('admin.lessons');
    Route::get('/lessons/create', [LessonController::class, 'create'])->name('admin.lessons.create');
    Route::post('/lessons/store', [LessonController::class, 'store'])->name('admin.lessons.store');
    Route::get('/lessons/edit/{lesson}', [LessonController::class, 'edit'])->name('admin.lessons.edit');
    Route::put('/lessons/update/{lesson}', [LessonController::class, 'update'])->name('admin.lessons.update');
    Route::delete('/lessons/destroy/{lesson}', [LessonController::class, 'destroy'])->name('admin.lessons.destroy');

    //students
    Route::get('/students', [StudentController::class, 'index'])->name('admin.students');
    Route::get('/students/create', [StudentController::class, 'create'])->name('admin.students.create');
    Route::post('/students/store', [StudentController::class, 'store'])->name('admin.students.store');
    Route::get('/students/edit/{student}', [StudentController::class, 'edit'])->name('admin.students.edit');
    Route::put('/students/update/{student}', [StudentController::class, 'update'])->name('admin.students.update');
    Route::delete('/students/destroy/{student}', [StudentController::class, 'destroy'])->name('admin.students.destroy');

    Route::get('/studentsLessons', [CourseController::class, 'ShowAllLessons'])->name('admin.students.lessons');
});
