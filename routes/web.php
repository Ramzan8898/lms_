<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;
use App\Http\Controllers\Admin\Profile;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Students\StudentDashboardController;
use App\Http\Controllers\Students\StudentEnrollmentController;
use App\Http\Controllers\Students\StudentLessons;
use App\Http\Controllers\website\PaymentController;
use App\Http\Controllers\Website\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, 'index'])->name('welcome');

Route::prefix('payment')->name('payment.')->group(function () {
    Route::get('/checkout/{course}', [PaymentController::class, 'checkout'])->name('checkout');
    Route::get('/success/{course}', [PaymentController::class, 'success'])->name('success');
    Route::get('/cancel/{course}', [PaymentController::class, 'cancel'])->name('cancel');

    // For custom form
    Route::post('/create-payment-intent/{course}', [PaymentController::class, 'createPaymentIntent'])->name('create-intent');
    Route::post('/confirm/{course}', [PaymentController::class, 'confirmPayment'])->name('confirm');
});

// Payments Management
Route::prefix('payments')->name('payments.')->group(function () {
    Route::get('/', [AdminPaymentController::class, 'index'])->name('index');
    Route::get('/export', [AdminPaymentController::class, 'export'])->name('export');
    Route::get('/{enrollment}', [AdminPaymentController::class, 'show'])->name('show');
    Route::get('/user/{user}', [AdminPaymentController::class, 'userPayments'])->name('user');
    Route::get('/course/{course}', [AdminPaymentController::class, 'coursePayments'])->name('course');
});

Route::prefix('lms')->group(function () {
    Route::get('/courses/{slug}', [WebsiteController::class, 'show'])->name('website.pages.show');
    Route::get('/web-courses', [WebsiteController::class, 'webCourses'])->name('web.courses');

    Route::get('/web-about', function () {
        return view('website.pages.about');
    })->name('web.about');

    Route::get('/web-contact', function () {
        return view('website.pages.contact');
    })->name('web.contact');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('web.register');
});

Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('auth.login');
    })->name('login');

    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
});

/* 🔒 Protected Routes */
Route::middleware('auth')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');
    Route::get('/student/dashboard', [DashboardController::class, 'studentDashboard'])
        ->name('student.dashboard');

    //profile
    Route::get('/profile', [Profile::class, 'index'])->name('admin.profile');

    Route::get('/users', [UserController::class, 'index'])->name('admin.users');
    Route::get('/users/add', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/users/add-user', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('/users/edit-user/{user}', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::post('/users/update/{user}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/destroy/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');

    //instructor
    Route::get('/instructor', [InstructorController::class, 'index'])->name('admin.instructors');
    Route::get('/instructor/add-instructor', [InstructorController::class, 'create'])->name('admin.instructor.create');
    Route::post('/instructor/store', [InstructorController::class, 'store'])->name('admin.instructor.store');
    Route::get('/instructor/edit-instructor/{instructor}', [InstructorController::class, 'edit'])->name('admin.instructor.edit');
    Route::put('/instructor/update/{instructor}', [InstructorController::class, 'update'])->name('admin.instructor.update');
    Route::delete('/instructor/destroy/{instructor}', [InstructorController::class, 'destroy'])->name('admin.instructor.destroy');

    //courses
    Route::get('/courses', [CourseController::class, 'index'])->name('admin.courses');
    Route::get('/courses/add-course', [CourseController::class, 'create'])->name('admin.courses.create');
    Route::post('/courses/store', [CourseController::class, 'store'])->name('admin.courses.store');
    Route::get('/courses/edit-course/{course}', [CourseController::class, 'edit'])->name('admin.courses.edit');
    Route::put('/courses/update/{course}', [CourseController::class, 'update'])->name('admin.courses.update');
    Route::delete('/courses/destroy/{course}', [CourseController::class, 'destroy'])->name('admin.courses.destroy');

    //lessons
    Route::get('/lessons', [LessonController::class, 'index'])->name('admin.lessons');
    Route::get('/lessons/add-lesson', [LessonController::class, 'create'])->name('admin.lessons.create');
    Route::post('/lessons/store', [LessonController::class, 'store'])->name('admin.lessons.store');
    Route::get('/lessons/edit-lesson/{lesson}', [LessonController::class, 'edit'])->name('admin.lessons.edit');
    Route::put('/lessons/update/{lesson}', [LessonController::class, 'update'])->name('admin.lessons.update');
    Route::delete('/lessons/destroy/{lesson}', [LessonController::class, 'destroy'])->name('admin.lessons.destroy');

    //students
    Route::get('/students', [StudentController::class, 'index'])->name('admin.students');
    Route::get('/students/add-student', [StudentController::class, 'create'])->name('admin.students.create');
    Route::post('/students/store', [StudentController::class, 'store'])->name('admin.students.store');
    Route::get('/students/edit-student/{student}', [StudentController::class, 'edit'])->name('admin.students.edit');
    Route::put('/students/update/{student}', [StudentController::class, 'update'])->name('admin.students.update');
    Route::delete('/students/destroy/{student}', [StudentController::class, 'destroy'])->name('admin.students.destroy');

    //student enrollment pages 
    Route::get('/students-lessons', [CourseController::class, 'ShowAllLessons'])->name('admin.students.lessons');
    Route::post('/courses/{course}/enroll', [CourseController::class, 'enroll'])->name('student.enroll');

    // Route::get('/students/dashboard', [StudentDashboardController::class, 'index'])->name('student.courses.index');
    // Route::get('/students/courses', [StudentDashboardController::class, 'myCourses'])->name('student.courses.show');
    // Route::get('/students/courses/{course}', [StudentDashboardController::class, 'showCourse'])->name('courses.show');
    // Route::get('/students/courses/{course}/lessons/{lesson}', [StudentDashboardController::class, 'showLesson'])->name('lessons.show');
    // Route::post('/students/lessons/{lesson}/complete', [StudentDashboardController::class, 'markLessonComplete'])->name('lessons.complete');
    // Route::post('/students/courses/{course}/enroll', [StudentEnrollmentController::class, 'enroll'])->name('enroll');
    // Route::get('/students/learning', [StudentEnrollmentController::class, 'myLearning'])->name('learning');

    //categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('/categories/update/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('/categories/destroy/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
});

Route::middleware(['auth'])->prefix('students')->name('student.')->group(function () {
    Route::get('/dashboard', [StudentDashboardController::class, 'index'])->name('courses.show');
    Route::get('/courses', [StudentDashboardController::class, 'myCourses'])->name('courses.index');
    Route::get('/courses/{course}', [StudentDashboardController::class, 'showCourse'])->name('Allcourses.show');
    // Single Lesson View
    Route::get('/courses/{course}/lessons/{lesson}', [StudentDashboardController::class, 'showLesson'])->name('lessons.show');

    // Mark Lesson Complete
    Route::post('/lessons/{lesson}/complete', [StudentDashboardController::class, 'markLessonComplete'])->name('lessons.complete');

    // Enroll in Course
    Route::post('/courses/{course}/enroll', [StudentEnrollmentController::class, 'enroll'])->name('enroll');

    // Learning Page
    Route::get('/learning', [StudentEnrollmentController::class, 'myLearning'])->name('learning');
});
