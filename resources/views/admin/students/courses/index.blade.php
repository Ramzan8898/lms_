{{-- resources/views/students/courses/index.blade.php --}}
@extends('layouts.dashboard')

@section('title', 'My Courses')

@section('content')
<div class="space-y-8">

    <!-- Header -->
    <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-8">
        <h1 class="text-3xl font-bold text-white mb-2">My Courses</h1>
        <p class="text-gray-400">All the courses you're enrolled in</p>
    </div>

    <!-- Courses Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($courses as $course)
        <div class="group bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl overflow-hidden hover:border-yellow-500/40 transition-all">
            <!-- Course Image -->
            <div class="relative h-48 overflow-hidden">
                <img src="{{ $course->banner ? asset('storage/'.$course->banner) : 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=800&q=80' }}"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    alt="{{ $course->title }}">

                <!-- Category Badge -->
                <div class="absolute top-4 left-4">
                    <span class="px-3 py-1 bg-black/60 backdrop-blur-sm border border-yellow-500/30 rounded-full text-yellow-400 text-xs font-medium">
                        {{ $course->category->title ?? 'Development' }}
                    </span>
                </div>
            </div>

            <!-- Content -->
            <div class="p-6">
                <!-- Instructor -->
                <div class="flex items-center gap-3 mb-4">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($course->instructor->user->name ?? 'Instructor') }}&background=FFB347&color=fff&size=32"
                        class="w-8 h-8 rounded-full border border-yellow-500/50">
                    <div>
                        <p class="text-xs text-gray-400">Instructor</p>
                        <p class="text-sm text-white">{{ $course->instructor->user->name ?? 'John Doe' }}</p>
                    </div>
                </div>

                <!-- Title -->
                <h3 class="text-xl font-bold text-white mb-2 line-clamp-2">
                    {{ $course->title }}
                </h3>

                <!-- Description -->
                <p class="text-gray-400 text-sm mb-4 line-clamp-2">
                    {{ $course->description ?? 'Learn the fundamentals and advanced concepts with hands-on projects.' }}
                </p>

                <!-- Course Stats -->
                <div class="flex items-center justify-between pt-4 border-t border-yellow-500/10">
                    <div class="flex items-center gap-2 text-sm text-gray-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <span>{{ $course->lessons->count() }} lessons</span>
                    </div>

                    <a href="{{ route('student.courses.show', $course->id) }}"
                        class="px-5 py-2 bg-gradient-to-r from-yellow-500 to-orange-500 text-black font-semibold rounded-xl hover:shadow-lg hover:shadow-yellow-500/25 transition-all flex items-center gap-2">
                        <span>Continue</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full py-12">
            <div class="text-center">
                <svg class="w-20 h-20 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                <h3 class="text-xl font-semibold text-white mb-2">No courses yet</h3>
                <p class="text-gray-500 mb-6">You haven't enrolled in any courses.</p>
                <a href="{{ route('web.courses') }}"
                    class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-yellow-500 to-orange-500 text-black font-semibold rounded-xl hover:shadow-lg hover:shadow-yellow-500/25 transition-all">
                    Browse Courses
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
        @endforelse
    </div>

    <!-- Pagination -->
    @if($courses->hasPages())
    <div class="mt-8">
        {{ $courses->links() }}
    </div>
    @endif
</div>
@endsection