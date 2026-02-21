{{-- resources/views/students/dashboard.blade.php --}}
@extends('layouts.dashboard')

@section('title', 'Student Dashboard')

@section('content')
<div class="space-y-8">

    <!-- Welcome Section -->
    <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-8">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-white mb-2">
                    Welcome back, {{ Auth::user()->name }}! 👋
                </h1>
                <p class="text-gray-400">Continue your learning journey from where you left off.</p>
            </div>
            <div class="w-20 h-20 rounded-full bg-gradient-to-r from-yellow-500 to-orange-500 p-0.5">
                <img src="{{ Auth::user()->avatar ?? 'https://ui-avatars.com/api/?name='.urlencode(Auth::user()->name).'&background=FFB347&color=fff&size=80' }}"
                    class="w-full h-full rounded-full object-cover border-2 border-black"
                    alt="{{ Auth::user()->name }}">
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-6">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-yellow-500/20 flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-gray-400 text-sm">Enrolled Courses</p>
                    <p class="text-3xl font-bold text-white">{{ $totalCourses }}</p>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-6">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-yellow-500/20 flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-gray-400 text-sm">Total Lessons</p>
                    <p class="text-3xl font-bold text-white">{{ $totalLessons }}</p>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-6">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-green-500/20 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-gray-400 text-sm">Completed Lessons</p>
                    <p class="text-3xl font-bold text-white">{{ $totalCompletedLessons ?? 0 }}</p>
                </div>
            </div>

            <!-- Optional: Show completion rate -->
            @if(($totalLessons ?? 0) > 0)
            <div class="mt-3 pt-3 border-t border-yellow-500/10">
                <div class="flex items-center justify-between text-xs mb-1">
                    <span class="text-gray-400">Completion Rate</span>
                    <span class="text-green-400">
                        {{ $totalLessons > 0 ? round(($totalCompletedLessons / $totalLessons) * 100) : 0 }}%
                    </span>
                </div>
                <div class="w-full h-1.5 bg-white/10 rounded-full overflow-hidden">
                    <div class="h-full bg-gradient-to-r from-green-500 to-emerald-500 rounded-full"
                        style="width: {{ $totalLessons > 0 ? round(($totalCompletedLessons / $totalLessons) * 100) : 0 }}%"></div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- My Courses -->
    <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl overflow-hidden">
        <div class="px-8 py-6 border-b border-yellow-500/10">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-1 h-6 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></div>
                    <h2 class="text-lg font-semibold text-white">My Courses</h2>
                </div>
                <a href="{{ route('student.courses.index') }}" class="text-sm text-yellow-400 hover:text-yellow-300 transition-colors">
                    View All →
                </a>
            </div>
        </div>

        <div class="p-6">
            @if($enrolledCourses->isNotEmpty())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($enrolledCourses as $course)
                <div class="group bg-black/30 border border-yellow-500/10 rounded-xl overflow-hidden hover:border-yellow-500/30 transition-all">
                    <!-- Course Image -->
                    <div class="relative h-40 overflow-hidden">
                        <img src="{{ $course->banner ? asset('storage/'.$course->banner) : 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=800&q=80' }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            alt="{{ $course->title }}">

                        <!-- Progress Bar (example) -->
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-white/10">
                            <div class="h-full w-0 bg-gradient-to-r from-yellow-500 to-orange-500"></div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-5">
                        <h3 class="text-white font-semibold mb-2 line-clamp-1">{{ $course->title }}</h3>

                        <!-- In the course card on dashboard -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1 text-xs text-gray-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <span>{{ $course->lessons->count() }} lessons</span>
                            </div>
                            <div class="text-xs text-yellow-400">
                                {{ $course->completed_lessons ?? 0 }}/{{ $course->lessons->count() }}
                            </div>
                        </div>
                        <div class="mt-2 w-full h-1 bg-white/10 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full"
                                style="width: {{ $course->progress_percentage ?? 0 }}%"></div>
                        </div>
                        <div class="mt-4 w-full flex justify-end">

                            <a href="{{ route('student.Allcourses.show', $course->id) }}"
                                class="px-4 py-1.5 bg-yellow-500/20 text-yellow-400 rounded-lg text-xs font-semibold hover:bg-yellow-500/30 transition-colors">
                                Continue
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="text-center py-12">
                <svg class="w-16 h-16 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                <h3 class="text-lg font-semibold text-white mb-2">No courses yet</h3>
                <p class="text-gray-500 mb-4">You haven't enrolled in any courses.</p>
                <a href="{{ route('web.courses') }}"
                    class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-yellow-500 to-orange-500 text-black font-semibold rounded-xl hover:shadow-lg hover:shadow-yellow-500/25 transition-all">
                    Browse Courses
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
            @endif
        </div>
    </div>

    <!-- Recent Activity -->
    @if($recentEnrollments->isNotEmpty())
    <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-6">
        <h3 class="text-white font-semibold mb-4 flex items-center gap-2">
            <span class="w-1 h-5 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></span>
            Recent Enrollments
        </h3>

        <div class="space-y-3">
            @foreach($recentEnrollments as $enrollment)
            <div class="flex items-center justify-between p-3 bg-black/30 rounded-xl">
                <div class="flex items-center gap-3">
                    <img src="{{ $enrollment->course->banner ? asset('storage/'.$enrollment->course->banner) : 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=800&q=80' }}"
                        class="w-12 h-12 rounded-lg object-cover"
                        alt="{{ $enrollment->course->title }}">
                    <div>
                        <h4 class="text-white text-sm font-medium">{{ $enrollment->course->title }}</h4>
                        <p class="text-xs text-gray-500">Enrolled {{ $enrollment->created_at->diffForHumans() }}</p>
                    </div>
                </div>
                <span class="px-2 py-1 bg-green-500/20 text-green-400 text-xs rounded-full">Active</span>
            </div>
            @endforeach
        </div>
    </div>
    @endif
</div>
@endsection