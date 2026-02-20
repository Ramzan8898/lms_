@extends('layouts.website')

@section('title', $course->title . ' - Course Details')

@section('content')
<section class="relative py-25 bg-black overflow-hidden min-h-screen">

    <!-- Advanced Background Effects -->
    <div class="absolute inset-0">
        <!-- Gradient Orbs -->
        <div
            class="absolute top-40 right-0 w-150 h-150 bg-linear-to-r from-yellow-500/5 via-orange-500/5 to-transparent rounded-full blur-[120px] animate-pulse-slow">
        </div>
        <div
            class="absolute bottom-40 left-0 w-150 h-150 bg-linear-to-l from-yellow-500/5 via-orange-500/5 to-transparent rounded-full blur-[120px] animate-pulse-slow animation-delay-2000">
        </div>

        <!-- Animated Mesh Grid -->
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

            <!-- Left Column - Course Details (2/3 width) -->
            <div class="lg:col-span-2 space-y-8">

                <!-- Course Title & Info -->
                <div class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8">

                    <!-- Category Badge -->
                    <div class="flex flex-wrap items-center gap-4 mb-6">
                        <span class="px-4 py-2 bg-linear-to-r from-yellow-500 to-orange-500 text-black font-semibold rounded-full text-sm">
                            {{ $course->category->title ?? 'Uncategorized' }}
                        </span>
                    </div>

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

                <!-- Course Includes moved here -->
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
                                <p class="text-white font-semibold">{{ $course->duration ?? 'Self-paced' }}</p>
                                <p class="text-gray-400 text-xs">Duration</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-4 bg-black/40 rounded-xl">
                            <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <div>
                                <p class="text-white font-semibold">{{ $course->lessons->count() }}</p>
                                <p class="text-gray-400 text-xs">Lessons</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-4 bg-black/40 rounded-xl">
                            <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <div>
                                <p class="text-white font-semibold">Certificate</p>
                                <p class="text-gray-400 text-xs">Completion</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-4 bg-black/40 rounded-xl">
                            <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <p class="text-white font-semibold">24/7</p>
                                <p class="text-gray-400 text-xs">Support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Banner & All Lessons -->
            <div class="lg:col-span-1">
                <div class="sticky top-24 space-y-6">

                    <!-- Course Preview Card - Banner at the very top -->
                    <div class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden">

                        <!-- Course Preview Image - Banner -->
                        <div class="relative h-56 overflow-hidden group cursor-pointer">
                            <img src="{{ $course->banner ? asset('storage/'.$course->banner) : 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=800&q=80' }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                alt="{{ $course->title }}">

                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>

                            <!-- Play Button Overlay -->
                            <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                <div class="w-16 h-16 bg-linear-to-r from-yellow-500 to-orange-500 rounded-full flex items-center justify-center">
                                    <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"></path>
                                    </svg>
                                </div>
                            </div>

                            <!-- Price Badge on Banner -->
                            <div class="absolute top-4 right-4">
                                <div class="px-4 py-2 bg-black/60 backdrop-blur-xl border border-yellow-500/30 rounded-full">
                                    <span class="text-2xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                                        ${{ number_format($course->price, 2) }}
                                    </span>
                                </div>
                            </div>

                            <!-- Preview Text -->
                            <div class="absolute bottom-4 left-4">
                                <span class="px-4 py-2 bg-black/60 backdrop-blur-xl border border-yellow-500/30 rounded-full text-yellow-400 text-sm font-semibold">
                                    Course Preview
                                </span>
                            </div>
                        </div>

                        <!-- Enroll Buttons - Directly under banner -->
                        <div class="p-6">
                            @auth
                            @php
                            $isEnrolled = $course->isUserEnrolled(Auth::id());
                            @endphp
                            @if($isEnrolled)
                            <div class="block w-full py-4 bg-green-500/20 border border-green-500/30 text-green-400 font-bold text-center rounded-xl mb-3">
                                ✓ You're Enrolled
                            </div>

                            <a href="#"
                                class="block w-full py-4 bg-linear-to-r from-yellow-500 to-orange-500 text-black font-bold text-center rounded-xl hover:shadow-lg hover:shadow-yellow-500/30 transition-all duration-500 transform hover:scale-105">
                                Start Learning Now
                            </a>
                            @else
                            <a href="{{ route('payment.checkout', $course->id) }}"
                                class="block w-full py-4 bg-linear-to-r from-yellow-500 to-orange-500 text-black font-bold text-center rounded-xl mb-3 hover:shadow-lg hover:shadow-yellow-500/30 transition-all duration-500 transform hover:scale-105">
                                Enroll Now - ${{ number_format($course->price, 2) }}
                            </a>

                            <a href="#" class="block w-full py-4 bg-white/5 border border-white/10 text-white font-bold text-center rounded-xl hover:bg-white/10 transition-all duration-500">
                                Add to Wishlist
                            </a>
                            @endif
                            @else
                            <a href="{{ route('login') }}"
                                class="block w-full py-4 bg-linear-to-r from-yellow-500 to-orange-500 text-black font-bold text-center rounded-xl hover:shadow-lg hover:shadow-yellow-500/30 transition-all duration-500 transform hover:scale-105">
                                Login to Enroll
                            </a>
                            @endauth
                        </div>
                    </div>

                    <!-- All Lessons List - Full width under banner -->
                    <div class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden">
                        <div class="p-4 border-b border-white/10 flex justify-between items-center">
                            <h3 class="text-white font-bold text-lg">Course Lessons</h3>
                            <span class="px-3 py-1 bg-yellow-500/20 text-yellow-400 rounded-full text-xs font-semibold">
                                {{ $course->lessons->count() }} Total
                            </span>
                        </div>

                        <div class="divide-y divide-white/5 max-h-[400px] overflow-y-auto custom-scrollbar">
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
                                        </div>

                                        <!-- Lesson Description (short) -->
                                        @if($lesson->description)
                                        <p class="text-gray-400 text-xs mt-2 line-clamp-2">
                                            {{ Str::limit($lesson->description, 80) }}
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

                    <!-- Related Courses - Moved to bottom of right column -->
                    @if($relatedCourses->isNotEmpty())
                    <div class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6">
                        <h3 class="text-white font-bold mb-4">Related Courses</h3>

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

        /* Lesson accordion styles - keeping for compatibility */
        .lesson-icon {
            transition: transform 0.3s ease;
        }

        .lesson-header.active .lesson-icon {
            transform: rotate(180deg);
        }

        .lesson-content {
            transition: all 0.3s ease;
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

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Keep existing accordion functionality for backward compatibility
        const lessonHeaders = document.querySelectorAll('.lesson-header');

        lessonHeaders.forEach(header => {
            header.addEventListener('click', function(e) {
                e.preventDefault();
                const lessonItem = this.closest('.lesson-item');
                const content = lessonItem.querySelector('.lesson-content');
                const icon = this.querySelector('.lesson-icon');

                if (content.classList.contains('hidden')) {
                    document.querySelectorAll('.lesson-content').forEach(c => {
                        if (c !== content) {
                            c.classList.add('hidden');
                            const parentIcon = c.closest('.lesson-item')?.querySelector('.lesson-icon');
                            if (parentIcon) {
                                parentIcon.style.transform = 'rotate(0deg)';
                            }
                        }
                    });
                    content.classList.remove('hidden');
                    icon.style.transform = 'rotate(180deg)';
                } else {
                    content.classList.add('hidden');
                    icon.style.transform = 'rotate(0deg)';
                }
            });
        });
    });
</script>
@endpush
@endsection