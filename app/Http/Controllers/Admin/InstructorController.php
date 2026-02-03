<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function index()
    {
        return view('admin.instructor.index');
    }

    public function create()
    {
        return view('admin.instructor.create');
    }
}
