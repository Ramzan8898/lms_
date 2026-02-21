<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class StudentLessons extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $enrolledCourses = $user->enrolledCourses()
            ->with(['lessons'])
            ->get();

        return view('students.lessons.index', compact('enrolledCourses'));
    }
}
