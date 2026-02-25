@extends('layouts.dashboard')
@section('title', $course->title . ' - Course Details')

@section('content')
<section class="relative  overflow-hidden min-h-screen">

    <div class="absolute inset-0">
        <div
            class="absolute top-40 right-0 w-150 h-150 bg-linear-to-r from-yellow-500/5 via-orange-500/5 to-transparent rounded-full blur-[120px] animate-pulse-slow">
        </div>
        <div
            class="absolute bottom-40 left-0 w-150 h-150 bg-linear-to-l from-yellow-500/5 via-orange-500/5 to-transparent rounded-full blur-[120px] animate-pulse-slow animation-delay-2000">
        </div>

        <div class="absolute inset-0 opacity-30"
            style="background-image: 
                 radial-linear(circle at 2px 2px, rgba(255,215,0,0.1) 1px, transparent 0),
                 linear-linear(45deg, rgba(255,215,0,0.02) 0%, transparent 50%);
                 background-size: 40px 40px, 100% 100%;">
        </div>
    </div>

    <div class="relative container mx-auto px-4 ">

        <!-- Main Content Grid - New Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Left Column - Banner + Course Details (2/3 width) -->
            <div class="lg:col-span-2 space-y-8">

                <!-- BANNER MOVED TO TOP OF LEFT SECTION - with overlay button -->
                <div
                    class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden">

                    <!-- Course Preview Image - Banner with overlay button -->
                    <div class="relative h-64 md:h-80 overflow-hidden group">
                        <img src="{{ $course->banner ? asset($course->banner) : 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=800&q=80' }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            alt="{{ $course->title }}">

                        <!-- linear Overlay -->
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/40 to-transparent"></div>

                        <!-- Price Badge on Banner -->
                        <div class="absolute top-4 right-4">
                            <div class="px-4 py-2 bg-black/60 backdrop-blur-xl border border-yellow-500/30 rounded-full">
                                <span class="text-2xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                                    ${{ number_format($course->price, 2) }}
                                </span>
                            </div>
                        </div>

                        <!-- Category Badge moved onto banner -->
                        <div class="absolute bottom-4 left-4 flex flex-wrap items-center gap-4">
                            <span
                                class="px-4 py-2 bg-linear-to-r from-yellow-500 to-orange-500 text-black font-semibold rounded-full text-sm shadow-lg">
                                {{ $course->category->title ?? 'Uncategorized' }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Course Title & Info (now under banner) -->
                <div
                    class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8">

                    <!-- Title -->
                    <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                        {{ $course->title }}
                    </h1>

                    <!-- Description -->
                    <p class="text-gray-300 text-lg leading-relaxed mb-8">
                        {{ $course->description }}
                    </p>

                    <!-- Instructor Info -->
                    <div class="flex items-center gap-6 p-6 bg-black/40 rounded-xl border border-white/5">
                        @if ($course->instructor && $course->instructor->user)
                        <img src="{{ $course->instructor->avatar ? asset($course->instructor->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode($course->instructor->user->name) }}"
                            class="w-20 h-20 rounded-full border-3 border-yellow-500/50"
                            alt="{{ $course->instructor->user->name }}">
                        <div>
                            <span class="text-gray-400 text-sm">Created by</span>
                            <h3 class="text-2xl font-bold text-white mb-1">{{ $course->instructor->user->name }}
                            </h3>
                            <p class="text-yellow-400">
                                {{ $course->instructor->qualification ?? 'Expert Instructor' }}
                            </p>
                        </div>
                        @else
                        <div>
                            <span class="text-gray-400 text-sm">Created by</span>
                            <h3 class="text-2xl font-bold text-white mb-1">Expert Instructor</h3>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- What You'll Learn Section -->
                <div
                    class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8">
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="w-1 h-8 bg-linear-to-b from-yellow-500 to-orange-500 rounded-full"></span>
                        What You'll Learn
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-yellow-500/20 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-300">Build real-world projects</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-yellow-500/20 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-300">Master industry best practices</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-yellow-500/20 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-300">Get certified upon completion</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-yellow-500/20 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-300">Lifetime access to materials</span>
                        </div>
                    </div>
                </div>

                <!-- Course Includes -->
                <div
                    class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8">
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="w-1 h-8 bg-linear-to-b from-yellow-500 to-orange-500 rounded-full"></span>
                        This Course Includes
                    </h2>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="flex items-center gap-3 p-4 bg-black/40 rounded-xl">
                            <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <p class="text-white font-semibold">Duration</p>
                                <p class="text-gray-400 text-xs">{{ $course->duration ?? 'Self-paced' }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-4 bg-black/40 rounded-xl">
                            <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <div>
                                <p class="text-white font-semibold">Lessons</p>
                                <p class="text-gray-400 text-xs">{{ $course->lessons->count() }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-4 bg-black/40 rounded-xl">
                            <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <div>
                                <p class="text-white font-semibold">Completion</p>
                                <p class="text-gray-400 text-xs">Certificate</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-4 bg-black/40 rounded-xl">
                            <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <p class="text-white font-semibold">Support</p>
                                <p class="text-gray-400 text-xs">24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Buttons & Lessons Only -->

            <div class="lg:col-span-1">
                <div class="fixed z-999 w-1/4 space-y-8">
                    @if($course->lessons->isNotEmpty())
                    <!-- Premium Lessons Card -->
                    <div class="group relative">
                        <!-- Animated linear Background -->
                        <div class="absolute -inset-1 bg-linear-to-r from-yellow-400 via-amber-500 to-orange-500 rounded-2xl opacity-0 "></div>

                        <!-- Main Card -->
                        <div class="relative bg-linear-to-br from-gray-900/95 via-gray-800/95 to-gray-900/95 backdrop-blur-xl border border-gray-700/50 rounded-2xl overflow-hidden shadow-2xl hover:shadow-yellow-500/10 transition-all duration-300">

                            <!-- Decorative Header Pattern -->
                            <div class="absolute top-0 right-0 w-32 h-32 bg-linear-to-br from-yellow-400/10 to-transparent rounded-full blur-2xl -mr-10 -mt-10"></div>
                            <div class="absolute bottom-0 left-0 w-32 h-32 bg-linear-to-tr from-amber-400/10 to-transparent rounded-full blur-2xl -ml-10 -mb-10"></div>

                            <!-- Header Section with Modern Design -->
                            <div class="relative p-6 border-b border-gray-700/50 bg-linear-to-r from-gray-900/50 to-gray-800/50">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <!-- Animated Icon -->
                                        <div class="relative">
                                            <div class="w-10 h-10 rounded-xl bg-linear-to-br from-yellow-400 to-amber-500 flex items-center justify-center shadow-lg shadow-yellow-500/20">
                                                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                                </svg>
                                            </div>
                                            <!-- Pulse Animation -->
                                            <div class="absolute -inset-1 bg-yellow-400/20 rounded-xl blur-md animate-pulse"></div>
                                        </div>

                                        <div>
                                            <h3 class="text-white font-bold text-lg tracking-tight">Course Curriculum</h3>
                                            <p class="text-gray-400 text-sm">Master the content step by step</p>
                                        </div>
                                    </div>

                                    <!-- Modern Counter Badge -->
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-linear-to-r from-yellow-400 to-amber-500 rounded-full blur-md opacity-50"></div>
                                        <span class="relative px-4 py-1.5 bg-linear-to-r from-yellow-400 to-amber-500 text-gray-900 rounded-full text-xs font-extrabold shadow-lg inline-flex items-center gap-1">
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path>
                                            </svg>
                                            {{ $course->lessons->count() }} Lessons
                                        </span>
                                    </div>
                                </div>

                                <!-- Progress Bar (Optional - if you have progress tracking) -->
                                @php
                                $completedLessons = $course->lessons->filter(function($lesson) {
                                return $lesson->is_completed ?? false;
                                })->count();
                                $progress = $course->lessons->count() > 0 ? round(($completedLessons / $course->lessons->count()) * 100) : 0;
                                @endphp

                                @if($progress > 0)
                                <div class="mt-4 space-y-2">
                                    <div class="flex justify-between text-xs">
                                        <span class="text-gray-400">Progress</span>
                                        <span class="text-yellow-400 font-semibold">{{ $progress }}%</span>
                                    </div>
                                    <div class="h-1.5 bg-gray-700/50 rounded-full overflow-hidden">
                                        <div class="h-full bg-linear-to-r from-yellow-400 to-amber-500 rounded-full" style="width: {{ $progress }}%"></div>
                                    </div>
                                </div>
                                @endif
                            </div>

                            <!-- Lessons List with Modern Design -->
                            <div class="relative divide-y divide-gray-700/30 max-h-96 overflow-y-auto custom-scrollbar">
                                @foreach($course->lessons as $index => $lesson)
                                <div class="p-4  transition-all duration-300 group/item">
                                    <div class="flex items-start gap-4">
                                        <!-- Modern Number Badge with Animation -->
                                        <div class="relative flex-shrink-0">
                                            <div class="w-8 h-8 rounded-lg bg-linear-to-br from-gray-700 to-gray-800 flex items-center justify-center">
                                                <span class="text-sm font-bold text-gray-400">
                                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                                </span>
                                            </div>
                                            <!-- Hover Pulse Effect -->
                                            <div class="absolute -inset-1 bg-yellow-400/0 rounded-l"></div>
                                        </div>

                                        <!-- Content -->
                                        <div class="flex-1 min-w-0">
                                            <div class="flex items-start justify-between gap-2">
                                                <div>
                                                    <h4 class="text-white font-medium group-hover/item:text-yellow-400 transition-colors duration-300 line-clamp-1">
                                                        {{ $lesson->title }}
                                                    </h4>
                                                    @if($lesson->duration)
                                                    <div class="flex items-center gap-2 mt-1">
                                                        <span class="text-xs text-gray-500">⏱️ {{ $lesson->duration }} min</span>
                                                    </div>
                                                    @endif
                                                </div>

                                                <!-- Status Indicator (Optional) -->
                                                @if(isset($lesson->is_completed) && $lesson->is_completed)
                                                <div class="flex-shrink-0">
                                                    <div class="w-5 h-5 rounded-full bg-green-500/20 flex items-center justify-center">
                                                        <svg class="w-3 h-3 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>

                                            @if($lesson->description)
                                            <p class="text-gray-400 text-xs mt-2 line-clamp-2 group-hover/item:text-gray-300 transition-colors duration-300">
                                                {{ Str::limit($lesson->description, 80) }}
                                            </p>
                                            @endif

                                            <!-- Lesson Meta Info -->
                                            <div class="flex items-center gap-3 mt-2">
                                                <span class="inline-flex items-center gap-1 text-xs text-gray-500">
                                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                    </svg>
                                                    Preview
                                                </span>
                                                <span class="w-1 h-1 rounded-full bg-gray-600"></span>
                                                <span class="text-xs text-gray-500">Free</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <!-- Footer with Modern Actions -->
                            <div class="relative p-6 border-t border-gray-700/50 bg-linear-to-r from-gray-900/50 to-gray-800/50">
                                <!-- Add New Lesson Button - Modern Design -->
                                <a href="{{ route('admin.lessons.create') }}"
                                    class="group/btn relative block w-full overflow-hidden rounded-xl bg-linear-to-r from-yellow-800 to-amber-500 p-0.5 transition-all duration-300 hover:scale-[1.02] hover:shadow-yellow-500/25">
                                    <div class="relative flex items-center justify-center gap-2 rounded-xl bg-gray-900 px-6 py-3 transition-all duration-300 group-hover/btn:bg-transparent">
                                        <svg class="w-5 h-5 text-yellow-400 transition-colors duration-300 group-hover/btn:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                        </svg>
                                        <span class="font-semibold text-white transition-colors duration-300">
                                            Create New Lesson
                                        </span>
                                    </div>
                                </a>

                                @if($course->lessons->count() > 5)
                                <!-- View All Link with Animation -->
                                <div class="mt-4 text-center">
                                    <a href="#" class="inline-flex items-center gap-2 text-sm font-medium text-gray-400 hover:text-yellow-400 transition-all duration-300 group/link">
                                        <span>View All {{ $course->lessons->count() }} Lessons</span>
                                        <svg class="w-4 h-4 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Additional Stats Card (Optional - Premium Addition) -->
                    <div class="relative group">
                        <div class="absolute -inset-1 bg-linear-to-r from-purple-400 to-pink-500 rounded-2xl opacity-0 "></div>
                        <div class="relative bg-linear-to-br from-gray-900/95 to-gray-800/95 backdrop-blur-xl border border-gray-700/50 rounded-2xl p-6">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-white">{{ $course->lessons->count() }}</div>
                                    <div class="text-xs text-gray-400 mt-1">Total Lessons</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-white">
                                        @php
                                        $totalMinutes = $course->lessons->sum('duration');
                                        $hours = floor($totalMinutes / 60);
                                        $minutes = $totalMinutes % 60;
                                        @endphp

                                        @if($totalMinutes > 0)
                                        @if($hours > 0){{ $hours }}h @endif
                                        @if($minutes > 0){{ $minutes }}m @endif
                                        @if($hours == 0 && $minutes == 0)0m @endif
                                        @else
                                        {{ $course->duration ?? 'Self-paced' }}
                                        @endif
                                    </div>
                                    <div class="text-xs text-gray-400 mt-1">Total Duration</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <!-- Empty State with Premium Design -->
                    <div class="relative group">
                        <div class="absolute -inset-1 bg-linear-to-r from-yellow-400 to-amber-500 rounded-2xl opacity-0"></div>
                        <div class="relative bg-linear-to-br from-gray-900/95 to-gray-800/95 backdrop-blur-xl border border-gray-700/50 rounded-2xl p-8 text-center">
                            <!-- Animated Icon -->
                            <div class="relative inline-block mb-4">
                                <div class="w-20 h-20 rounded-2xl bg-linear-to-br from-yellow-400/20 to-amber-500/20 flex items-center justify-center mx-auto">
                                    <svg class="w-10 h-10 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                                <div class="absolute -inset-1 bg-yellow-400/20 rounded-2xl blur-xl animate-pulse"></div>
                            </div>

                            <h3 class="text-white font-bold text-lg mb-2">No Lessons Yet</h3>
                            <p class="text-gray-400 text-sm mb-6">Start building your course by adding your first lesson</p>

                            <a href="{{ route('admin.lessons.create') }}"
                                class="inline-flex items-center gap-2 px-6 py-3 bg-linear-to-r from-yellow-400 to-amber-500 text-gray-900 rounded-xl font-semibold hover:shadow-lg hover:shadow-yellow-500/25 transition-all duration-300 group/btn">
                                <svg class="w-5 h-5 transform group-hover/btn:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                                <span>Create First Lesson</span>
                            </a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Custom Scrollbar Styles -->
            <style>
                .custom-scrollbar::-webkit-scrollbar {
                    width: 4px;
                }

                .custom-scrollbar::-webkit-scrollbar-track {
                    background: rgba(255, 255, 255, 0.05);
                    border-radius: 10px;
                }

                .custom-scrollbar::-webkit-scrollbar-thumb {
                    background: linear-linear(to bottom, #FBBF24, #F59E0B);
                    border-radius: 10px;
                }

                .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                    background: linear-linear(to bottom, #FCD34D, #FBBF24);
                }

                /* Smooth Transitions */
                * {
                    transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform;
                    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                    transition-duration: 150ms;
                }
            </style>
        </div>
    </div>

    <style>
        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 0.1;
            }

            50% {
                opacity: 0.3;
            }
        }

        .animate-pulse-slow {
            animation: pulse-slow 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        /* Custom Scrollbar */
        .custom-scrollbar::-webkit-scrollbar {
            width: 5px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(255, 215, 0, 0.2);
            border-radius: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 215, 0, 0.4);
        }

        /* Line clamp utilities */
        .line-clamp-1 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
        }

        .line-clamp-2 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }

        /* Wishlist button styles */
        .wishlist-btn.in-wishlist {
            background: rgba(239, 68, 68, 0.1);
            border-color: rgba(239, 68, 68, 0.3);
            color: #ef4444;
        }

        .wishlist-btn.in-wishlist:hover {
            background: rgba(239, 68, 68, 0.2);
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .animate-spin {
            animation: spin 1s linear infinite;
        }
    </style>
</section>
@endsection