<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\LessonProgress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Get all enrolled courses with their lessons and progress
        $enrolledCourses = $user->enrolledCourses()
            ->with(['instructor.user', 'category', 'lessons'])
            ->latest()
            ->get();

        // Add progress to each course
        foreach ($enrolledCourses as $course) {
            $course->progress_percentage = $course->getUserProgress($user->id);
            $course->completed_lessons = $course->getCompletedLessonsCount($user->id);
        }

        // Calculate stats
        $totalCourses = $enrolledCourses->count();
        $totalLessons = $enrolledCourses->sum(function ($course) {
            return $course->lessons->count();
        });

        $totalCompletedLessons = LessonProgress::where('user_id', $user->id)
            ->where('completed', true)
            ->count();

        // Get recent enrollments
        $recentEnrollments = $user->enrollments()
            ->with('course')
            ->where('status', 'completed')
            ->latest()
            ->take(5)
            ->get();

        return view('admin.students.dashboard', compact(
            'enrolledCourses',
            'totalCourses',
            'totalLessons',
            'totalCompletedLessons',
            'recentEnrollments'
        ));
    }

    public function myCourses()
    {
        $user = Auth::user();

        $courses = $user->enrolledCourses()
            ->with(['instructor.user', 'category', 'lessons'])
            ->latest()
            ->paginate(12);

        // Add progress to each course
        foreach ($courses as $course) {
            $course->progress_percentage = $course->getUserProgress($user->id);
            $course->completed_lessons = $course->getCompletedLessonsCount($user->id);
        }

        return view('admin.students.courses.index', compact('courses'));
    }

    public function showCourse($courseId)
    {
        $user = Auth::user();

        // Check if user is enrolled
        $course = $user->enrolledCourses()
            ->with(['instructor.user', 'category', 'lessons'])
            ->where('course_id', $courseId)
            ->firstOrFail();

        // Check which lessons are completed
        foreach ($course->lessons as $lesson) {
            $lesson->is_completed = $lesson->isCompletedByUser($user->id);
        }

        // Calculate progress
        $progress = $course->getUserProgress($user->id);
        $completedLessons = $course->getCompletedLessonsCount($user->id);

        return view('admin.students.courses.show', compact('course', 'progress', 'completedLessons'));
    }

    public function showLesson($courseId, $lessonId)
    {
        $user = Auth::user();

        // Check if user is enrolled
        $course = $user->enrolledCourses()
            ->with(['lessons'])
            ->where('course_id', $courseId)
            ->firstOrFail();

        $lesson = $course->lessons()->findOrFail($lessonId);

        // Check if lesson is completed
        $lesson->is_completed = $lesson->isCompletedByUser($user->id);

        return view('admin.students.courses.lesson', compact('course', 'lesson'));
    }

    public function markLessonComplete(Request $request, $lessonId)
    {
        $user = Auth::user();
        $lesson = \App\Models\Lesson::findOrFail($lessonId);

        // Check if user is enrolled in the course
        if (!$user->enrolledCourses()->where('course_id', $lesson->course_id)->exists()) {
            return response()->json([
                'success' => false,
                'message' => 'You are not enrolled in this course'
            ], 403);
        }

        // Update or create progress
        $progress = LessonProgress::updateOrCreate(
            [
                'user_id' => $user->id,
                'lesson_id' => $lessonId,
                'course_id' => $lesson->course_id
            ],
            [
                'completed' => true,
                'completed_at' => now()
            ]
        );

        // Calculate new course progress
        $course = $lesson->course;
        $totalLessons = $course->lessons()->count();
        $completedLessons = LessonProgress::where('user_id', $user->id)
            ->where('course_id', $course->id)
            ->where('completed', true)
            ->count();

        $progressPercentage = $totalLessons > 0 ? round(($completedLessons / $totalLessons) * 100) : 0;

        return response()->json([
            'success' => true,
            'message' => 'Lesson marked as complete',
            'progress' => $progressPercentage,
            'completed_lessons' => $completedLessons,
            'total_lessons' => $totalLessons
        ]);
    }
}
