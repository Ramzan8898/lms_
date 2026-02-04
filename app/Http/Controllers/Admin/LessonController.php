<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Course;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::with('course')->latest()->get();
        return view('admin.lessons.index', compact('lessons'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('admin.lessons.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'title' => 'required',
            'type' => 'required',
            'file' => 'required|file',
        ]);

        Lesson::create([
            'course_id' => $request->course_id,
            'title' => $request->title,
            'type' => $request->type,
            'file' => $request->file('file')->store('lessons', 'public'),
            'description' => $request->description,
        ]);

        return redirect()->route('admin.lessons')->with('success', 'Lesson created!');
    }

    public function edit(Lesson $lesson)
    {
        $courses = Course::all();
        return view('admin.lessons.update', compact('lesson', 'courses'));
    }

    public function update(Request $request, Lesson $lesson)
    {
        $file = $request->file('file')?->store('lessons', 'public');

        $lesson->update([
            'course_id' => $request->course_id,
            'title' => $request->title,
            'type' => $request->type,
            'file' => $file ?? $lesson->file,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.lessons')->with('success', 'Updated!');
    }

    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        return back()->with('success', 'Deleted!');
    }
}
