<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentLessons extends Controller
{
    public function index()
    {
        return view('students.lessons.index');
    }
}
