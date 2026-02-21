@extends('layouts.website')

@section('title', $course->title . ' - Course Details')

@section('content')
<section class="relative py-25 bg-black overflow-hidden min-h-screen">

    <div class="absolute inset-0">
        <div
            class="absolute top-40 right-0 w-150 h-150 bg-linear-to-r from-yellow-500/5 via-orange-500/5 to-transparent rounded-full blur-[120px] animate-pulse-slow">
        </div>
        <div
            class="absolute bottom-40 left-0 w-150 h-150 bg-linear-to-l from-yellow-500/5 via-orange-500/5 to-transparent rounded-full blur-[120px] animate-pulse-slow animation-delay-2000">
        </div>

        <div class="absolute inset-0 opacity-30"
            style="background-image: 
                 radial-gradient(circle at 2px 2px, rgba(255,215,0,0.1) 1px, transparent 0),
                 linear-gradient(45deg, rgba(255,215,0,0.02) 0%, transparent 50%);
                 background-size: 40px 40px, 100% 100%;">
        </div>
    </div>

    <div class="relative container mx-auto px-4 py-25">

        <!-- Main Content Grid - New Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Left Column - Banner + Course Details (2/3 width) -->
            <div class="lg:col-span-2 space-y-8">

                <!-- BANNER MOVED TO TOP OF LEFT SECTION - with overlay button -->
                <div class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden">

                    <!-- Course Preview Image - Banner with overlay button -->
                    <div class="relative h-64 md:h-80 overflow-hidden group">
                        <img src="{{ $course->banner ? asset('storage/'.$course->banner) : 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=800&q=80' }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            alt="{{ $course->title }}">

                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>



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
                            <span class="px-4 py-2 bg-linear-to-r from-yellow-500 to-orange-500 text-black font-semibold rounded-full text-sm shadow-lg">
                                {{ $course->category->title ?? 'Uncategorized' }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Course Title & Info (now under banner) -->
                <div class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8">

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
                        @if($course->instructor && $course->instructor->user)
                        <img src="{{ $course->instructor->avatar ? asset('storage/'.$course->instructor->avatar) : 'https://ui-avatars.com/api/?name='.urlencode($course->instructor->user->name) }}"
                            class="w-20 h-20 rounded-full border-3 border-yellow-500/50"
                            alt="{{ $course->instructor->user->name }}">
                        <div>
                            <span class="text-gray-400 text-sm">Created by</span>
                            <h3 class="text-2xl font-bold text-white mb-1">{{ $course->instructor->user->name }}</h3>
                            <p class="text-yellow-400">{{ $course->instructor->qualification ?? 'Expert Instructor' }}</p>
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
                <div class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8">
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="w-1 h-8 bg-linear-to-b from-yellow-500 to-orange-500 rounded-full"></span>
                        What You'll Learn
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-yellow-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-300">Build real-world projects</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-yellow-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-300">Master industry best practices</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-yellow-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-300">Get certified upon completion</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-yellow-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-300">Lifetime access to materials</span>
                        </div>
                    </div>
                </div>

                <!-- Course Includes -->
                <div class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8">
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
                                <p class="text-white font-semibold" >Duration</p>
                                <p class="text-gray-400 text-xs">{{ $course->duration ?? 'Self-paced' }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-4 bg-black/40 rounded-xl">
                            <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <div>
                                <p class="text-white font-semibold" >Lessons</p>
                                <p class="text-gray-400 text-xs">{{ $course->lessons->count() }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-4 bg-black/40 rounded-xl">
                            <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <div>
                                <p class="text-white font-semibold">Completion</p>
                                <p class="text-gray-400 text-xs" >Certificate</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-4 bg-black/40 rounded-xl">
                            <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <p class="text-white font-semibold" >Support</p>
                                <p class="text-gray-400 text-xs">24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Buttons & Lessons Only (Banner removed from here) -->
            <div class="lg:col-span-1">
                <div class="sticky top-24 space-y-6">

                    <!-- Enroll Buttons - Moved to top of right column -->
                    <div class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6">
                        <h3 class="text-white font-bold text-lg mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Enrollment Options
                        </h3>

                        @auth
                        @php
                        $isEnrolled = $course->isUserEnrolled(Auth::id());
                        @endphp

                        @if($isEnrolled)
                        <div class="block w-full py-4 bg-green-500/20 border border-green-500/30 text-green-400 font-bold text-center rounded-xl mb-3 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            ✓ You're Enrolled
                        </div>

                        <a href="#"
                            class="block w-full py-4 bg-linear-to-r from-yellow-500 to-orange-500 text-black font-bold text-center rounded-xl hover:shadow-lg hover:shadow-yellow-500/30 transition-all duration-500 transform hover:scale-105 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm0-2a6 6 0 100-12 6 6 0 000 12z" clip-rule="evenodd"></path>
                            </svg>
                            Start Learning Now
                        </a>
                        @else
                        <a href="{{ route('payment.checkout', $course->id) }}"
                            class="block w-full py-4 bg-linear-to-r from-yellow-500 to-orange-500 text-black font-bold text-center rounded-xl mb-3 hover:shadow-lg hover:shadow-yellow-500/30 transition-all duration-500 transform hover:scale-105 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                            </svg>
                            Enroll Now - ${{ number_format($course->price, 2) }}
                        </a>

                        <a href="#" class="block w-full py-4 bg-white/5 border border-white/10 text-white font-bold text-center rounded-xl hover:bg-white/10 transition-all duration-500 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                            </svg>
                            Add to Wishlist
                        </a>
                        @endif
                        @else
                        <a href="{{ route('login') }}"
                            class="block w-full py-4 bg-linear-to-r from-yellow-500 to-orange-500 text-black font-bold text-center rounded-xl hover:shadow-lg hover:shadow-yellow-500/30 transition-all duration-500 transform hover:scale-105 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Login to Enroll
                        </a>
                        @endauth
                    </div>

                    <!-- All Lessons List - Under buttons -->
                    <div class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden">
                        <div class="p-4 border-b border-white/10 flex justify-between items-center">
                            <h3 class="text-white font-bold text-lg flex items-center gap-2">
                                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
                                </svg>
                                Course Lessons
                            </h3>
                            <span class="px-3 py-1 bg-yellow-500/20 text-yellow-400 rounded-full text-xs font-semibold">
                                {{ $course->lessons->count() }} Total
                            </span>
                        </div>

                        <div class="divide-y divide-white/5 max-h-[450px] overflow-y-auto custom-scrollbar">
                            @forelse($course->lessons as $index => $lesson)
                            <div class="p-4 hover:bg-white/5 transition-colors group">
                                <div class="flex items-start gap-3">
                                    <!-- Lesson Number with Icon -->
                                    <div class="w-8 h-8 rounded-full bg-yellow-500/20 flex items-center justify-center flex-shrink-0 mt-0.5 group-hover:bg-yellow-500/30 transition-colors">
                                        <span class="text-yellow-400 text-sm font-semibold">{{ $index + 1 }}</span>
                                    </div>

                                    <div class="flex-1">
                                        <!-- Lesson Title -->
                                        <h4 class="text-white font-medium group-hover:text-yellow-400 transition-colors line-clamp-1">
                                            {{ $lesson->title }}
                                        </h4>

                                        <!-- Lesson Meta Info -->
                                        <div class="flex items-center gap-3 mt-1">
                                            @if($lesson->duration)
                                            <div class="flex items-center gap-1 text-gray-500 text-xs">
                                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <span>{{ $lesson->duration }}</span>
                                            </div>
                                            @endif

                                            @if($lesson->video_url)
                                            <div class="flex items-center gap-1 text-green-500 text-xs">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm0-2a6 6 0 100-12 6 6 0 000 12z"></path>
                                                </svg>
                                                <span>Video</span>
                                            </div>
                                            @endif

                                            @if($lesson->is_free)
                                            <div class="flex items-center gap-1 text-green-400 text-xs">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span>Free</span>
                                            </div>
                                            @endif
                                        </div>

                                        <!-- Lesson Description (short) -->
                                        @if($lesson->description)
                                        <p class="text-gray-400 text-xs mt-2 line-clamp-2">
                                            {{ Str::limit($lesson->description, 70) }}
                                        </p>
                                        @endif
                                    </div>

                                    <!-- Play Icon -->
                                    @if($lesson->video_url)
                                    <a href="#" class="text-yellow-400 hover:text-yellow-300 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                    @endif
                                </div>
                            </div>
                            @empty
                            <div class="p-8 text-center">
                                <p class="text-gray-400">No lessons available yet.</p>
                            </div>
                            @endforelse
                        </div>

                        <!-- View All Button -->
                        @if($course->lessons->count() > 5)
                        <div class="p-4 border-t border-white/10">
                            <button class="w-full py-2 text-center text-yellow-400 hover:text-yellow-300 text-sm font-semibold transition-colors">
                                View All Lessons →
                            </button>
                        </div>
                        @endif
                    </div>

                    <!-- Related Courses -->
                    @if(isset($relatedCourses) && $relatedCourses->isNotEmpty())
                    <div class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6">
                        <h3 class="text-white font-bold mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
                            </svg>
                            Related Courses
                        </h3>

                        @foreach($relatedCourses as $related)
                        <a href="{{ route('website.pages.show', $related->slug) }}" class="flex items-center gap-3 p-3 hover:bg-white/5 rounded-xl transition-colors group mb-2 last:mb-0">
                            <img src="{{ $related->banner ? asset('storage/'.$related->banner) : 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=800&q=80' }}"
                                class="w-16 h-16 rounded-lg object-cover"
                                alt="{{ $related->title }}">
                            <div class="flex-1">
                                <h4 class="text-white text-sm font-semibold group-hover:text-yellow-400 transition-colors line-clamp-2">
                                    {{ $related->title }}
                                </h4>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="text-yellow-400 text-xs font-bold">${{ number_format($related->price, 2) }}</span>
                                    <span class="text-gray-600 text-xs">|</span>
                                    <span class="text-gray-400 text-xs">{{ $related->lessons->count() }} lessons</span>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
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
    </style>
</section>
@endsection