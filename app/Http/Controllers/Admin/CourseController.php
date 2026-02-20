<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with(['instructor.user', 'category'])->latest()->get();
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
        $categories = Category::latest()->get();

        return view('admin.courses.create', compact('instructors', 'categories'));
    }


    public function enroll(Course $course)
    {
        $course = Course::with('lessons',)->find($course->id);
        return view('students.lessons.enroll', compact('course'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'instructor_id' => 'required',
            'category_id'   => 'required',
            'title'         => 'required',
            'price'         => 'required|numeric',
            'duration'      => 'required',
            'description'   => 'required|string',
            'banner'        => 'nullable|image',
        ]);

        Course::create([
            'instructor_id' => $request->instructor_id,
            'category_id'   => $request->category_id,
            'title'         => $request->title,
            'slug'          => Str::slug($request->title),
            'description'   => $request->description,
            'price'         => $request->price,
            'duration'      => $request->duration,
            'banner'        => $request->file('banner')?->store('courses', 'public'),
        ]);

        return redirect()->route('admin.courses')
            ->with('success', 'Course created successfully!');
    }


    public function edit(Course $course)
    {
        $instructors = Instructor::with('user')->get();
        $categories = Category::latest()->get();

        return view('admin.courses.update', compact('course', 'instructors', 'categories'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'instructor_id' => 'required',
            'category_id'   => 'required',
            'title'         => 'required',
            'price'         => 'required|numeric',
            'duration'      => 'required',
            'description'   => 'required|string',
            'banner'        => 'nullable|image',
        ]);

        $slug = Str::slug($request->title);

        if ($request->hasFile('banner')) {

            if ($course->banner && Storage::disk('public')->exists($course->banner)) {
                Storage::disk('public')->delete($course->banner);
            }

            $banner = $request->file('banner')->store('courses', 'public');
        } else {
            $banner = $course->banner;
        }



        $course->update([
            'instructor_id' => $request->instructor_id,
            'category_id'   => $request->category_id,
            'title'         => $request->title,
            'slug'          => $slug,
            'description'   => $request->description,
            'price'         => $request->price,
            'duration'      => $request->duration,
            'banner'        => $banner,
        ]);

        return redirect()->route('admin.courses.index')
            ->with('success', 'Course updated successfully!');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return back()->with('success', 'Course deleted!');
    }
}
