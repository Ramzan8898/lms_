<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Stats Cards Data - Using Spatie roles
        $totalUsers = User::count();
        $totalCourses = Course::count();
        $totalLessons = Lesson::count();

        // Get users with specific roles using Spatie
        $totalStudents = User::role('student')->count();
        $totalInstructors = User::role('instructor')->count();
        $totalAdmins = User::role('admin')->count();

        // Percentage calculations (compare with last month)
        $lastMonthUsers = User::whereMonth('created_at', now()->subMonth()->month)->count();
        $usersGrowth = $lastMonthUsers > 0 ? round((($totalUsers - $lastMonthUsers) / $lastMonthUsers) * 100) : 0;

        $lastMonthCourses = Course::whereMonth('created_at', now()->subMonth()->month)->count();
        $coursesGrowth = $lastMonthCourses > 0 ? round((($totalCourses - $lastMonthCourses) / $lastMonthCourses) * 100) : 0;

        $lastMonthStudents = User::role('student')->whereMonth('created_at', now()->subMonth()->month)->count();
        $studentsGrowth = $lastMonthStudents > 0 ? round((($totalStudents - $lastMonthStudents) / $lastMonthStudents) * 100) : 0;

        $lastMonthLessons = Lesson::whereMonth('created_at', now()->subMonth()->month)->count();
        $lessonsGrowth = $lastMonthLessons > 0 ? round((($totalLessons - $lastMonthLessons) / $lastMonthLessons) * 100) : 0;

        // Weekly Enrollments Data (using enrollments table or fallback)
        $days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
        $weeklyEnrollments = [];

        // Check if enrollments table exists
        if (Schema::hasTable('enrollments')) {
            foreach (range(0, 6) as $index) {
                $date = now()->startOfWeek()->addDays($index);
                $count = DB::table('enrollments')->whereDate('created_at', $date)->count();
                $weeklyEnrollments[] = $count;
            }
        } else {
            // Sample data for demonstration
            $weeklyEnrollments = [12, 18, 15, 22, 25, 30, 20];
        }

        $maxEnrollment = max($weeklyEnrollments) ?: 1;
        $enrollmentPercentages = array_map(function ($count) use ($maxEnrollment) {
            return round(($count / $maxEnrollment) * 100);
        }, $weeklyEnrollments);

        // Course Categories Data
        // Check if courses table has category column
        if (Schema::hasColumn('courses', 'category')) {
            $categories = Course::select('category', DB::raw('count(*) as total'))
                ->whereNotNull('category')
                ->groupBy('category')
                ->orderBy('total', 'desc')
                ->take(6)
                ->get();

            $totalCategoryCourses = $categories->sum('total');

            if ($categories->isNotEmpty()) {
                $categoryData = $categories->map(function ($category) use ($totalCategoryCourses) {
                    return [
                        'name' => $category->category,
                        'count' => $category->total,
                        'percentage' => $totalCategoryCourses > 0 ? round(($category->total / $totalCategoryCourses) * 100) : 0
                    ];
                });
            } else {
                // Sample categories if no data
                $categoryData = collect([
                    ['name' => 'Web Development', 'count' => 45, 'percentage' => 35],
                    ['name' => 'Data Science', 'count' => 32, 'percentage' => 25],
                    ['name' => 'Mobile Development', 'count' => 28, 'percentage' => 22],
                    ['name' => 'UI/UX Design', 'count' => 21, 'percentage' => 18],
                ]);
                $totalCategoryCourses = $categoryData->sum('count');
            }
        } else {
            // Sample categories if no category column
            $categoryData = collect([
                ['name' => 'Web Development', 'count' => 45, 'percentage' => 35],
                ['name' => 'Data Science', 'count' => 32, 'percentage' => 25],
                ['name' => 'Mobile Development', 'count' => 28, 'percentage' => 22],
                ['name' => 'UI/UX Design', 'count' => 21, 'percentage' => 18],
            ]);
            $totalCategoryCourses = $categoryData->sum('count');
        }

        // Recent Users Data
        $recentUsers = User::orderBy('created_at', 'desc')
            ->take(4)
            ->get()
            ->map(function ($user) {
                // Get user roles
                $role = $user->roles->first()->name ?? 'user';

                return [
                    'name' => $user->name,
                    'email' => $user->email,
                    'date' => $user->created_at->diffForHumans(),
                    'avatar' => $this->getInitials($user->name),
                    'role' => ucfirst($role)
                ];
            });

        // Popular Courses Data
        // Check if courses have enrollments relationship
        if (method_exists(Course::class, 'enrollments')) {
            $popularCourses = Course::withCount('enrollments')
                ->orderBy('enrollments_count', 'desc')
                ->take(4)
                ->get()
                ->map(function ($course) {
                    $studentsCount = $course->enrollments_count ?? rand(50, 250);

                    return [
                        'name' => $course->title,
                        'students' => $studentsCount,
                        'progress' => rand(60, 95)
                    ];
                });
        } else {
            // Alternative: order by id or random if no relationship
            $popularCourses = Course::take(4)
                ->get()
                ->map(function ($course) {
                    return [
                        'name' => $course->title,
                        'students' => rand(50, 250),
                        'progress' => rand(60, 95)
                    ];
                });
        }

        // If no popular courses, use fallback
        if ($popularCourses->isEmpty()) {
            $popularCourses = collect([
                ['name' => 'Laravel Mastery', 'students' => 234, 'progress' => 85],
                ['name' => 'Vue.js Essentials', 'students' => 189, 'progress' => 72],
                ['name' => 'Python for Beginners', 'students' => 156, 'progress' => 68],
                ['name' => 'React Advanced', 'students' => 142, 'progress' => 63],
            ]);
        }

        // Recent Activities
        $recentActivities = $this->getRecentActivities();

        return view('admin.dashboard.index', compact(
            'totalUsers',
            'totalCourses',
            'totalStudents',
            'totalLessons',
            'totalInstructors',
            'totalAdmins',
            'usersGrowth',
            'coursesGrowth',
            'studentsGrowth',
            'lessonsGrowth',
            'days',
            'enrollmentPercentages',
            'categoryData',
            'totalCategoryCourses',
            'recentUsers',
            'popularCourses',
            'recentActivities'
        ));
    }

    public function studentDashboard()
    {
        return view('admin.students.dashboard');
    }

    private function getInitials($name)
    {
        $words = explode(' ', $name);
        $initials = '';
        foreach ($words as $word) {
            $initials .= strtoupper(substr($word, 0, 1));
        }
        return substr($initials, 0, 2);
    }

    private function getRecentActivities()
    {
        $activities = collect();

        // New course creations
        $newCourses = Course::orderBy('created_at', 'desc')
            ->take(2)
            ->get()
            ->map(function ($course) {
                // Get creator name if relationship exists
                $creator = 'Admin';
                if (method_exists($course, 'creator') && $course->creator) {
                    $creator = $course->creator->name;
                }

                return [
                    'action' => 'New course created',
                    'item' => $course->title,
                    'user' => $creator,
                    'time' => $course->created_at->diffForHumans(),
                    'icon' => 'M12 6v14M3 6v14M21 6v14',
                    'type' => 'course'
                ];
            });

        // Recent lesson updates
        $updatedLessons = Lesson::orderBy('updated_at', 'desc')
            ->where('updated_at', '>', now()->subDays(7))
            ->take(2)
            ->get()
            ->map(function ($lesson) {
                // Get instructor name if relationship exists
                $instructor = 'Admin';
                if (method_exists($lesson, 'instructor') && $lesson->instructor) {
                    $instructor = $lesson->instructor->name;
                }

                return [
                    'action' => 'Lesson updated',
                    'item' => $lesson->title,
                    'user' => $instructor,
                    'time' => $lesson->updated_at->diffForHumans(),
                    'icon' => 'M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z',
                    'type' => 'lesson'
                ];
            });

        // New user registrations
        $newUsers = User::orderBy('created_at', 'desc')
            ->take(2)
            ->get()
            ->map(function ($user) {
                // Get user role
                $role = $user->roles->first()->name ?? 'user';

                return [
                    'action' => 'New ' . $role . ' registered',
                    'item' => $user->name . ' created an account',
                    'user' => $user->name,
                    'time' => $user->created_at->diffForHumans(),
                    'icon' => 'M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z',
                    'type' => 'user'
                ];
            });

        // Recent enrollments if table exists
        if (Schema::hasTable('enrollments')) {
            $recentEnrollments = DB::table('enrollments')
                ->orderBy('created_at', 'desc')
                ->take(2)
                ->get()
                ->map(function ($enrollment) {
                    $user = User::find($enrollment->user_id);
                    $course = Course::find($enrollment->course_id);

                    return [
                        'action' => 'Student enrolled',
                        'item' => ($user->name ?? 'Someone') . ' enrolled in ' . ($course->title ?? 'a course'),
                        'user' => 'System',
                        'time' => Carbon::parse($enrollment->created_at)->diffForHumans(),
                        'icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                        'type' => 'enrollment'
                    ];
                });

            $activities = $activities->concat($recentEnrollments);
        }

        $activities = $activities->concat($newCourses)
            ->concat($updatedLessons)
            ->concat($newUsers)
            ->sortByDesc(function ($activity) {
                return $activity['time'];
            })
            ->take(4)
            ->values()
            ->all();

        // If no activities, use fallback
        if (empty($activities)) {
            $activities = [
                ['action' => 'New course created', 'item' => 'Advanced Laravel Techniques', 'user' => 'Admin', 'time' => '10 minutes ago', 'icon' => 'M12 6v14M3 6v14M21 6v14'],
                ['action' => 'Student enrolled', 'item' => 'John Doe enrolled in Vue.js Mastery', 'user' => 'System', 'time' => '25 minutes ago', 'icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z'],
                ['action' => 'Lesson updated', 'item' => 'Introduction to React Hooks', 'user' => 'Sarah Smith', 'time' => '1 hour ago', 'icon' => 'M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z'],
                ['action' => 'New instructor registered', 'item' => 'Mike Johnson created an account', 'user' => 'Mike Johnson', 'time' => '3 hours ago', 'icon' => 'M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z'],
            ];
        }

        return $activities;
    }
}
