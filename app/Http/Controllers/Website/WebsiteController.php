<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
  

    public function index()
    {
        $courses = Course::with(['instructor', 'category'])->take(8)->get();
        $categories = Category::whereHas('courses')->get();
        return view('welcome', compact('courses', 'categories'));
    }

    public function show($slug)
    {
        $course = Course::with(['instructor.user', 'category', 'lessons'])
            ->where('slug', $slug)
            ->firstOrFail();

        // Get related courses from same category
        $relatedCourses = Course::with(['category', 'instructor'])
            ->where('category_id', $course->category_id)
            ->where('id', '!=', $course->id)
            ->latest()
            ->take(3)
            ->get();

        return view('website.pages.show', compact('course', 'relatedCourses'));
    }


    public function webCourses()
    {
        $courses = Course::with(['instructor', 'category'])->get();
        $categories = Category::whereHas('courses')->get();
        return view('website.pages.courses', compact('courses', 'categories'));
    }
}
