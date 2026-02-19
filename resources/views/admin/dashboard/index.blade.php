@extends('layouts.dashboard')

@section('content')

<x-dashboard.breadcrumbs :items="[
    ['label' => 'Dashboard', 'url' => route('admin.dashboard')],
    ['label' => 'Home']
]" />

<!-- Welcome Section -->
<div class="relative overflow-hidden mb-8">
    <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/10 to-orange-500/10 rounded-2xl blur-3xl"></div>
    <div class="relative bg-gradient-to-br from-gray-900/50 to-black/50 backdrop-blur-xl border border-yellow-600/20 rounded-2xl p-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
                <h1 class="text-3xl font-bold mb-2 text-white">Welcome Back, {{ Auth::user()->name ?? 'Admin' }}! 👋</h1>
                <p class="text-gray-400 text-lg">Here's what's happening with your LMS platform today</p>
            </div>
            <div class="mt-4 md:mt-0 flex gap-3">
                <span class="px-4 py-2 bg-yellow-500/10 border border-yellow-500/30 rounded-xl text-yellow-400 text-sm">
                    {{ now()->format('l, d F Y') }}
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

    <!-- Total Users Card -->
    <div class="group relative">
        <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-2xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
        <div class="relative bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6 hover:border-yellow-500/50 transition-all duration-500">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-yellow-500/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-width="2" d="M12 4a4 4 0 100 8 4 4 0 000-8zm-7 16a7 7 0 0114 0" />
                    </svg>
                </div>
                @if($usersGrowth > 0)
                <span class="text-xs font-medium text-green-400 bg-green-400/10 px-2 py-1 rounded-full">+{{ $usersGrowth }}%</span>
                @else
                <span class="text-xs font-medium text-gray-400 bg-gray-400/10 px-2 py-1 rounded-full">{{ $usersGrowth }}%</span>
                @endif
            </div>
            <h3 class="text-2xl font-bold text-white mb-1">{{ number_format($totalUsers) }}</h3>
            <p class="text-gray-500 text-sm">Total Users</p>
            <div class="mt-4 h-1 w-full bg-gray-800 rounded-full overflow-hidden">
                @php
                $userPercentage = $totalUsers > 0 ? min(100, round(($totalUsers / 5000) * 100)) : 0;
                @endphp
                <div class="h-full bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full" style="width: {{ $userPercentage }}%"></div>
            </div>
        </div>
    </div>

    <!-- Total Courses Card -->
    <div class="group relative">
        <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-2xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
        <div class="relative bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6 hover:border-yellow-500/50 transition-all duration-500">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-yellow-500/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-width="2" d="M12 6v14M3 6v14M21 6v14" />
                    </svg>
                </div>
                @if($coursesGrowth > 0)
                <span class="text-xs font-medium text-green-400 bg-green-400/10 px-2 py-1 rounded-full">+{{ $coursesGrowth }}%</span>
                @else
                <span class="text-xs font-medium text-gray-400 bg-gray-400/10 px-2 py-1 rounded-full">{{ $coursesGrowth }}%</span>
                @endif
            </div>
            <h3 class="text-2xl font-bold text-white mb-1">{{ number_format($totalCourses) }}</h3>
            <p class="text-gray-500 text-sm">Active Courses</p>
            <div class="mt-4 h-1 w-full bg-gray-800 rounded-full overflow-hidden">
                @php
                $coursePercentage = $totalCourses > 0 ? min(100, round(($totalCourses / 300) * 100)) : 0;
                @endphp
                <div class="h-full bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full" style="width: {{ $coursePercentage }}%"></div>
            </div>
        </div>
    </div>

    <!-- Enrolled Students Card -->
    <div class="group relative">
        <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-2xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
        <div class="relative bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6 hover:border-yellow-500/50 transition-all duration-500">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-yellow-500/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                @if($studentsGrowth > 0)
                <span class="text-xs font-medium text-green-400 bg-green-400/10 px-2 py-1 rounded-full">+{{ $studentsGrowth }}%</span>
                @else
                <span class="text-xs font-medium text-gray-400 bg-gray-400/10 px-2 py-1 rounded-full">{{ $studentsGrowth }}%</span>
                @endif
            </div>
            <h3 class="text-2xl font-bold text-white mb-1">{{ number_format($totalStudents) }}</h3>
            <p class="text-gray-500 text-sm">Enrolled Students</p>
            <div class="mt-4 h-1 w-full bg-gray-800 rounded-full overflow-hidden">
                @php
                $studentPercentage = $totalStudents > 0 ? min(100, round(($totalStudents / 5000) * 100)) : 0;
                @endphp
                <div class="h-full bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full" style="width: {{ $studentPercentage }}%"></div>
            </div>
        </div>
    </div>

    <!-- Total Lessons Card -->
    <div class="group relative">
        <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-2xl blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
        <div class="relative bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6 hover:border-yellow-500/50 transition-all duration-500">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-yellow-500/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                @if($lessonsGrowth > 0)
                <span class="text-xs font-medium text-green-400 bg-green-400/10 px-2 py-1 rounded-full">+{{ $lessonsGrowth }}%</span>
                @else
                <span class="text-xs font-medium text-yellow-400 bg-yellow-400/10 px-2 py-1 rounded-full">{{ $lessonsGrowth }}%</span>
                @endif
            </div>
            <h3 class="text-2xl font-bold text-white mb-1">{{ number_format($totalLessons) }}</h3>
            <p class="text-gray-500 text-sm">Total Lessons</p>
            <div class="mt-4 h-1 w-full bg-gray-800 rounded-full overflow-hidden">
                @php
                $lessonPercentage = $totalLessons > 0 ? min(100, round(($totalLessons / 1500) * 100)) : 0;
                @endphp
                <div class="h-full bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full" style="width: {{ $lessonPercentage }}%"></div>
            </div>
        </div>
    </div>
</div>

<!-- Charts Section -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">

    <!-- Enrollment Chart -->
    <div class="bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-white font-semibold">Weekly Enrollments</h3>
            <select class="bg-black border border-yellow-600/30 rounded-xl px-3 py-1 text-sm text-gray-400 focus:outline-none focus:border-yellow-500">
                <option>Last 7 days</option>
                <option>Last 30 days</option>
                <option>Last 3 months</option>
            </select>
        </div>
        <div class="h-64 flex items-end justify-between gap-2">
            @foreach($days as $index => $day)
            <div class="flex-1 flex flex-col items-center gap-2 group">
                <div class="w-[70%] relative">
                    <div class="absolute inset-0 bg-yellow-500/20 blur-lg opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative h-48 w-[70%] bg-gray-800/50 rounded-lg overflow-hidden">
                        <div class="absolute bottom-0 w-full bg-gradient-to-t from-yellow-500 to-orange-500 rounded-lg transition-all duration-500 group-hover:from-yellow-400 group-hover:to-orange-400"
                            style="height: {{ $enrollmentPercentages[$index] }}%"></div>
                    </div>
                </div>
                <span class="text-xs text-gray-500">{{ $day }}</span>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Course Categories -->
    <div class="bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-white font-semibold">Course Categories</h3>
            <span class="text-xs text-gray-500">Total: {{ $totalCategoryCourses }} courses</span>
        </div>
        <div class="space-y-4">
            @forelse($categoryData as $category)
            <div>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-gray-300 text-sm">{{ $category['name'] }}</span>
                    <span class="text-gray-500 text-xs">{{ $category['count'] }} courses</span>
                </div>
                <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                    <div class="h-full bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full" style="width: {{ $category['percentage'] }}%"></div>
                </div>
            </div>
            @empty
            <div class="text-center py-8">
                <p class="text-gray-500">No categories found</p>
            </div>
            @endforelse
        </div>
    </div>
</div>

<!-- Recent Activities Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    <!-- Recent Users -->
    <div class="bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-white font-semibold">Recent Users</h3>
            <a href="{{ route('admin.users') }}" class="text-xs text-yellow-400 hover:text-yellow-300 transition-colors">View All</a>
        </div>
        <div class="space-y-4">
            @forelse($recentUsers as $user)
            <div class="flex items-center gap-3 group hover:bg-white/5 p-2 rounded-xl transition-all">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-yellow-500 to-orange-500 flex items-center justify-center text-white font-bold text-sm">
                    {{ $user['avatar'] }}
                </div>
                <div class="flex-1">
                    <h4 class="text-white text-sm font-medium">{{ $user['name'] }}</h4>
                    <p class="text-gray-500 text-xs">{{ $user['email'] }}</p>
                    <span class="text-xs text-gray-600">{{ $user['role'] }}</span>
                </div>
                <span class="text-xs text-gray-600">{{ $user['date'] }}</span>
            </div>
            @empty
            <div class="text-center py-4">
                <p class="text-gray-500">No recent users</p>
            </div>
            @endforelse
        </div>
    </div>

    <!-- Popular Courses -->
    <div class="bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-white font-semibold">Popular Courses</h3>
            <a href="{{ route('admin.courses') }}" class="text-xs text-yellow-400 hover:text-yellow-300 transition-colors">View All</a>
        </div>
        <div class="space-y-4">
            @forelse($popularCourses as $course)
            <div class="group hover:bg-white/5 p-3 rounded-xl transition-all">
                <div class="flex items-center justify-between mb-2">
                    <h4 class="text-white text-sm font-medium">{{ $course['name'] }}</h4>
                    <span class="text-xs text-gray-500">{{ $course['students'] }} students</span>
                </div>
                <div class="h-1.5 w-full bg-gray-800 rounded-full overflow-hidden">
                    <div class="h-full bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full" style="width: {{ $course['progress'] }}%"></div>
                </div>
            </div>
            @empty
            <div class="text-center py-4">
                <p class="text-gray-500">No courses found</p>
            </div>
            @endforelse
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6">
        <h3 class="text-white font-semibold mb-6">Quick Actions</h3>
        <div class="grid grid-cols-2 gap-3">
            <a href="{{ route('admin.courses.create') }}" class="group p-4 rounded-xl bg-white/5 hover:bg-gradient-to-br hover:from-yellow-500/20 hover:to-orange-500/20 border border-yellow-600/20 hover:border-yellow-500/50 transition-all duration-500">
                <svg class="w-6 h-6 text-yellow-400 mb-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <span class="text-xs text-white">New Course</span>
            </a>
            <a href="{{ route('admin.instructor.create') }}" class="group p-4 rounded-xl bg-white/5 hover:bg-gradient-to-br hover:from-yellow-500/20 hover:to-orange-500/20 border border-yellow-600/20 hover:border-yellow-500/50 transition-all duration-500">
                <svg class="w-6 h-6 text-yellow-400 mb-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                </svg>
                <span class="text-xs text-white">Add Instructor</span>
            </a>
            <a href="{{ route('admin.lessons.create') }}" class="group p-4 rounded-xl bg-white/5 hover:bg-gradient-to-br hover:from-yellow-500/20 hover:to-orange-500/20 border border-yellow-600/20 hover:border-yellow-500/50 transition-all duration-500">
                <svg class="w-6 h-6 text-yellow-400 mb-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
                <span class="text-xs text-white">New Lesson</span>
            </a>
            <a href="{{ route('admin.students.create') }}" class="group p-4 rounded-xl bg-white/5 hover:bg-gradient-to-br hover:from-yellow-500/20 hover:to-orange-500/20 border border-yellow-600/20 hover:border-yellow-500/50 transition-all duration-500">
                <svg class="w-6 h-6 text-yellow-400 mb-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                </svg>
                <span class="text-xs text-white">Add Student</span>
            </a>
        </div>
    </div>
</div>

<!-- Activity Timeline -->
<div class="mt-8 bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6">
    <h3 class="text-white font-semibold mb-6">Recent Activity Timeline</h3>
    <div class="space-y-4">
        @forelse($recentActivities as $activity)
        <div class="flex items-start gap-4 group hover:bg-white/5 p-3 rounded-xl transition-all">
            <div class="w-8 h-8 rounded-full bg-yellow-500/10 flex items-center justify-center flex-shrink-0">
                <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-width="2" d="{{ $activity['icon'] }}" />
                </svg>
            </div>
            <div class="flex-1">
                <p class="text-white text-sm">
                    <span class="font-medium">{{ $activity['action'] }}</span>
                    <span class="text-gray-400"> - {{ $activity['item'] }}</span>
                </p>
                <div class="flex items-center gap-2 mt-1">
                    <span class="text-xs text-gray-600">by {{ $activity['user'] }}</span>
                    <span class="text-xs text-gray-700">•</span>
                    <span class="text-xs text-gray-600">{{ $activity['time'] }}</span>
                </div>
            </div>
            <span class="text-xs text-yellow-400 opacity-0 group-hover:opacity-100 transition-opacity">View</span>
        </div>
        @empty
        <div class="text-center py-8">
            <p class="text-gray-500">No recent activities</p>
        </div>
        @endforelse
    </div>
</div>

@endsection