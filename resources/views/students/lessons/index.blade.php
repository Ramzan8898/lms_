@extends('layouts.dashboard')

@section('content')



<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-white">Lessons</h1>
        <x-dashboard.breadcrumbs :items="[
    ['label' => 'Lessons']]" />
    </div>



</div>


<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    @forelse($courses ?? [] as $course)
    <!-- Course Card -->
    <div class="group bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl overflow-hidden hover:border-yellow-500/40 transition-all duration-300">

        <!-- Course Image -->
        <div class="relative h-48 overflow-hidden">
            @if($course->thumbnail)
            <img src="{{ asset('storage/'.$course->thumbnail) }}"
                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            @else
            <div class="w-full h-full bg-gradient-to-br from-yellow-500/20 to-orange-500/20 flex items-center justify-center">
                <svg class="w-16 h-16 text-yellow-500/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
            </div>
            @endif

            <!-- Category Badge -->
            <div class="absolute top-4 left-4">
                <span class="px-3 py-1 bg-black/60 backdrop-blur-sm border border-yellow-500/30 rounded-full text-yellow-400 text-xs font-medium">
                    {{ $course->category ?? 'Development' }}
                </span>
            </div>

            <!-- Duration Badge -->
            <div class="absolute top-4 right-4">
                <span class="px-3 py-1 bg-black/60 backdrop-blur-sm border border-yellow-500/30 rounded-full text-gray-300 text-xs flex items-center gap-1">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    {{ $course->duration ?? '12 weeks' }}
                </span>
            </div>
        </div>

        <!-- Course Content -->
        <div class="p-6">
            <!-- Instructor -->
            <div class="flex items-center gap-3 mb-4">
                <img src="https://ui-avatars.com/api/?name={{ urlencode($course->instructor->user->name ?? 'Instructor') }}&background=FFB347&color=fff&size=32"
                    class="w-8 h-8 rounded-full border border-yellow-500/50">
                <span class="text-sm text-gray-400">{{ $course->instructor->user->name ?? 'John Doe' }}</span>
            </div>

            <!-- Title -->
            <h3 class="text-xl font-bold text-white mb-2 line-clamp-2">
                {{ $course->title }}
            </h3>

            <!-- Description -->
            <p class="text-gray-400 text-sm mb-4 line-clamp-2">
                {{ $course->description ?? 'Learn the fundamentals and advanced concepts with hands-on projects and expert guidance.' }}
            </p>

            <!-- Rating & Students -->
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-2">
                    <div class="flex gap-0.5">
                        @for($i = 1; $i <= 5; $i++)
                            <svg class="w-4 h-4 {{ $i <= ($course->rating ?? 4) ? 'text-yellow-400' : 'text-gray-600' }}" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            @endfor
                    </div>
                    <span class="text-sm text-gray-400">({{ $course->reviews_count ?? 124 }})</span>
                </div>
                <div class="flex items-center gap-1 text-sm text-gray-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <span>{{ $course->students_count ?? 234 }} students</span>
                </div>
            </div>

            <!-- Price & Enrollment -->
            <div class="flex items-center justify-between pt-4 border-t border-yellow-500/10">
                <div>
                    <span class="text-2xl font-bold bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                        ${{ $course->price ?? 49 }}
                    </span>
                    @if($course->original_price ?? false)
                    <span class="text-sm text-gray-500 line-through ml-2">${{ $course->original_price }}</span>
                    @endif
                </div>

                <!-- Enroll Button -->
                <form action="{{route('student.enroll', $course->id)}}" method="POST">
                    @csrf
                    <button type="submit"
                        class="px-5 py-2.5 bg-gradient-to-r from-yellow-500 to-orange-500 text-black font-semibold rounded-xl hover:shadow-lg hover:shadow-yellow-500/25 transition-all flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        <span>Enroll Now</span>
                    </button>
                </form>
            </div>

            <!-- Enrollment Status (if already enrolled) -->
            @if($course->is_enrolled ?? false)
            <div class="mt-3">
                <span class="text-sm text-green-400 flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    You're enrolled in this course
                </span>
            </div>
            @endif
        </div>
    </div>
    @empty
    <!-- Empty State -->
    <div class="col-span-full py-12">
        <div class="text-center">
            <svg class="w-20 h-20 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linecap="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
            <h3 class="text-xl font-semibold text-white mb-2">No courses available</h3>
            <p class="text-gray-500">Check back later for new courses.</p>
        </div>
    </div>
    @endforelse
</div>



@endsection