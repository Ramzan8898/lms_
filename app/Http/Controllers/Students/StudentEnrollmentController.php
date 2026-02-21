<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentEnrollmentController extends Controller
{
    public function enroll(Course $course)
    {
        $user = Auth::user();

        // Check if already enrolled
        if ($user->enrolledCourses()->where('course_id', $course->id)->exists()) {
            return redirect()->back()->with('error', 'You are already enrolled in this course!');
        }

        // Check if payment is required (if price > 0)
        if ($course->price > 0) {
            return redirect()->route('payment.checkout', $course->id);
        }

        // Free course - direct enrollment
        $enrollment = \App\Models\Enrollment::create([
            'user_id' => $user->id,
            'course_id' => $course->id,
            'amount' => 0,
            'currency' => 'usd',
            'status' => 'completed',
            'payment_details' => json_encode(['type' => 'free_enrollment']),
        ]);

        return redirect()->route('student.courses.show', $course->id)
            ->with('success', 'Successfully enrolled in the course!');
    }

    public function myLearning()
    {
        $user = Auth::user();

        $recentCourses = $user->enrolledCourses()
            ->with(['lessons'])
            ->latest()
            ->take(3)
            ->get();

        return view('students.learning.index', compact('recentCourses'));
    }
}
