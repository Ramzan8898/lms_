<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('instructor.user',)->latest()->get();
        return view('admin.courses.index', compact('courses'));
    }

        public function ShowAllLessons()
    {
        $courses = Course::with('lessons',)->get();
        return view('students.lessons.index', compact('courses'));
    }


    public function create()
    {
        $instructors = Instructor::with('user')->get();
        return view('admin.courses.create', compact('instructors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'instructor_id' => 'required',
            'title' => 'required',
            'slug' => 'required|unique:courses,slug',
            'banner' => 'image',
            'thumbnail' => 'image',
        ]);

        Course::create([
            'instructor_id' => $request->instructor_id,
            'title' => $request->title,
            'slug' => $request->slug,
            'banner' => $request->file('banner')?->store('courses', 'public'),
            'thumbnail' => $request->file('thumbnail')?->store('courses', 'public'),
        ]);

        return redirect()->route('admin.courses')->with('success', 'Course created!');
    }


    public function edit(Course $course)
    {
        $instructors = Instructor::with('user')->get();
        return view('admin.courses.update', compact('course', 'instructors'));
    }

    public function update(Request $request, Course $course)
    {
        $banner = $request->file('banner')?->store('courses', 'public');
        $thumb = $request->file('thumbnail')?->store('courses', 'public');

        $course->update([
            'instructor_id' => $request->instructor_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'banner' => $banner ?? $course->banner,
            'thumbnail' => $thumb ?? $course->thumbnail,
        ]);

        return redirect()->route('admin.courses')->with('success', 'Course updated!');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return back()->with('success', 'Course deleted!');
    }
}
