@extends('layouts.website')
@section('content')
<!-- Courses Section - Premium Design -->
<section class="relative py-32 px-6 md:px-16 bg-black overflow-hidden">

    <!-- Sophisticated Background with Gradient Orbs -->
    <div class="absolute inset-0 bg-linear-to-br from-black via-[#0a0a0a] to-black"></div>

    <!-- Animated Gradient Orbs -->
    <div
        class="absolute top-0 right-0 w-200 h-200 bg-linear-to-br from-yellow-500/5 via-orange-500/5 to-transparent rounded-full blur-[120px] animate-pulse-slow">
    </div>
    <div
        class="absolute bottom-0 left-0 w-150 h-150 bg-linear-to-tr from-orange-500/5 via-yellow-500/5 to-transparent rounded-full blur-[120px] animate-pulse-slow animation-delay-2000">
    </div>

    <!-- Geometric Pattern Overlay -->
    <div class="absolute inset-0 opacity-5"
        style="background-image: url('data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M30 30 L30 0 L60 30 L30 60 L0 30 L30 0' stroke='%23FBBF24' stroke-width='0.5' fill='none' opacity='0.3'/%3E%3C/svg%3E'); background-size: 60px 60px;">
    </div>

    <div class="relative max-w-7xl mx-auto">

        <!-- Premium Section Header with Animation -->
        <div class="text-center mb-20">
            <!-- Floating Badge -->
            <div
                class="inline-flex items-center space-x-2 bg-white/5 backdrop-blur-sm border border-yellow-500/20 rounded-full px-6 py-2 mb-8 animate-float">
                <span class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></span>
                <span class="text-yellow-400 font-semibold tracking-wider text-sm">✦ OUR COURSES ✦</span>
            </div>

            <!-- Main Heading with Gradient and Underline -->
            <h2 class="text-5xl md:text-7xl font-bold mb-6 tracking-tight">
                <span class="bg-linear-to-r from-white to-gray-400 bg-clip-text text-transparent">Start</span>
                <span
                    class="bg-linear-to-r from-yellow-400 via-orange-500 to-yellow-600 bg-clip-text text-transparent">
                    Learning</span>
                <br class="hidden md:block">
                <span class="bg-linear-to-r from-gray-400 to-white bg-clip-text text-transparent">Today</span>
            </h2>

            <!-- Decorative Line -->
            <div class="flex justify-center items-center space-x-4 mb-8">
                <div class="w-12 h-0.5 bg-linear-to-r from-transparent via-yellow-500 to-transparent"></div>
                <span class="text-yellow-500 text-2xl">✦</span>
                <div class="w-12 h-0.5 bg-linear-to-r from-transparent via-yellow-500 to-transparent"></div>
            </div>

            <p class="text-gray-400 max-w-3xl mx-auto text-lg md:text-xl leading-relaxed">
                Explore our wide range of premium courses designed by industry experts
                to help you master new skills and advance your career.
            </p>


        </div>

        <section class="relative   overflow-hidden">

            <!-- Advanced Background Effects -->
            <div class="absolute inset-0">


                <!-- Animated Mesh Grid -->
                <div class="absolute inset-0 opacity-30"
                    style="background-image: 
                 radial-gradient(circle at 2px 2px, rgba(255,215,0,0.1) 1px, transparent 0),
                 linear-gradient(45deg, rgba(255,215,0,0.02) 0%, transparent 50%);
                 background-size: 40px 40px, 100% 100%;">
                </div>

                <!-- Floating Particles -->
                <div class="absolute inset-0">
                    <div class="absolute top-1/3 left-1/4 w-1 h-1 bg-yellow-400/30 rounded-full animate-float-slow"></div>
                    <div class="absolute top-2/3 right-1/3 w-2 h-2 bg-orange-400/30 rounded-full animate-float-slower">
                    </div>
                    <div class="absolute bottom-1/4 left-1/2 w-1.5 h-1.5 bg-yellow-500/30 rounded-full animate-float">
                    </div>
                </div>
            </div>

            <div class="relative container mx-auto">

                <!-- Section Header with Premium Animations -->
                <div class="text-center ">

                    <div class="flex flex-wrap justify-center gap-4 mb-12">
                        <button
                            class="category-filter px-8 py-3 rounded-full border transition-all duration-300"
                            data-category="all">
                            All Courses
                        </button>

                        @foreach($categories as $category)
                        <button
                            class="category-filter px-8 py-3 rounded-full border transition-all duration-300"
                            data-category="{{ $category->title }}">
                            {{ $category->title }}
                        </button>
                        @endforeach
                    </div>
                </div>

                <!-- Courses Grid - Premium Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 courses-grid py-4">
                    @forelse($courses as $course)
                    <div class="group relative perspective-1000 course-card" data-category="{{ $course->category->title ?? strtolower($course->category) }}">
                        <!-- 3D Glow Effect -->
                        <div
                            class="absolute -inset-0.5 bg-linear-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-30 blur-xl transition-all duration-700">
                        </div>

                        <!-- Main Card -->
                        <div
                            class="relative  border border-white/10 rounded-2xl overflow-hidden 
                        hover:border-yellow-500/30 hover:shadow-2xl hover:shadow-yellow-500/20
                        transition-all duration-500 ease-out
                        group-hover:scale-105 group-hover:-translate-y-2">

                            <!-- Image Container with Overlay -->
                            <div class="relative h-56 overflow-hidden">
                                <img src="{{ $course->banner  ? asset('storage/'.$course->banner)  : 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=800&q=80' }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                    alt="{{ $course->title }}">

                                <!-- Gradient Overlay -->
                                <div class="absolute inset-0 bg-linear-to-t from-black/90 via-black/40 to-transparent">
                                </div>

                                <!-- Category Badge with Animation -->
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-4 py-2 bg-black/60 backdrop-blur-xl border border-yellow-500/30 rounded-full text-yellow-400 text-xs font-semibold
                                   group-hover:bg-linear-to-r group-hover:from-yellow-500 group-hover:to-orange-500 group-hover:text-black
                                   transition-all duration-500">
                                        {{ $course->category->title ?? $course->category->title    }}
                                    </span>
                                </div>

                                <!-- Rating Badge -->
                                <div
                                    class="absolute top-4 right-4 flex items-center gap-1 px-3 py-2 bg-black/60 backdrop-blur-xl border border-yellow-500/30 rounded-full">
                                    <span class="text-yellow-400 text-sm">★</span>
                                    <span class="text-white text-sm font-bold">4.7</span>
                                    <span class="text-gray-400 text-xs">(124)</span>
                                </div>



                                <!-- Shine Effect on Image -->
                                <div
                                    class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-linear-to-r from-transparent via-white/20 to-transparent skew-x-12">
                                </div>


                                <div class="absolute top-45 left-4 flex items-center gap-1 px-3 py-2 bg-black/60 backdrop-blur-xl border border-yellow-500/30 rounded-full">


                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-gray-300 text-xs">{{ $course->duration }}</span>
                                    </div>
                                </div>

                                <div class="absolute top-45 right-4 flex items-center gap-1 px-3 py-2 bg-black/60 backdrop-blur-xl border border-yellow-500/30 rounded-full">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                            </path>
                                        </svg>
                                        <span class="text-gray-300 text-xs">{{ number_format($course->enrolled_count) }} Students</span>
                                    </div>
                                </div>




                            </div>

                            <div class="p-6">
                                <div class="flex items-center gap-3 mb-4">
                                    <img src="{{ $course->instructor->avatar ? asset('storage/'.$course->instructor->avatar) : 'https://ui-avatars.com/api/?name='.$course->instructor->user->name }}"
                                        class="w-10 h-10 rounded-full border-2 border-yellow-500/50"
                                        alt="{{ $course->instructor->name }}">
                                    <div>
                                        <h4 class="text-white font-semibold text-sm uppercase">{{ $course->instructor->user->name }}</h4>
                                        <p class="text-gray-400 text-xs ">{{ $course->instructor->qualification }}</p>
                                    </div>
                                </div>

                                <h3
                                    class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors duration-500 line-clamp-2">
                                    <a href="{{route('website.pages.show', $course->slug)}}" class="hover:underline">
                                        {{ $course->title }}
                                    </a>
                                </h3>

                                <!-- Description -->
                                <p class="text-gray-400 text-sm mb-4 leading-relaxed line-clamp-2">
                                    {{ $course->description }}
                                </p>

                                <!-- Course Features -->
                                <div class="grid grid-cols-2 gap-3 mb-5">

                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-gray-300 text-xs">{{ $course->has_certificate ? 'Certificate' : 'No Certificate' }}</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                            </path>
                                        </svg>
                                        <span class="text-gray-300 text-xs">24/7 Support</span>
                                    </div>
                                </div>

                                <!-- Price and CTA -->
                                <div
                                    class="flex items-center justify-between pt-4 border-t border-white/10 group-hover:border-yellow-500/30 transition-colors duration-500">

                                    <div class="flex items-center gap-1">
                                        <span class="text-3xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">{{$course->price}}$</span>
                                    </div>


                                    <a href="#" class="relative px-6 py-3 rounded-xl overflow-hidden group/btn">
                                        <span class="absolute inset-0 bg-linear-to-r from-yellow-500 to-orange-500"></span>
                                        <span
                                            class="absolute inset-0 bg-linear-to-r from-yellow-400 to-orange-400 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-500"></span>
                                        <span class="relative text-black font-semibold text-sm flex items-center gap-2">
                                            Enroll Now
                                            <span class="text-lg group-hover/btn:translate-x-1 transition-transform">→</span>
                                        </span>
                                    </a>
                                </div>

                                <!-- Limited Time Offer Badge -->
                                @if($course->has_limited_offer)
                                <div class="absolute -top-2 -right-2 w-16 h-16">
                                    <div
                                        class="absolute inset-0 bg-linear-to-r from-yellow-500 to-orange-500 rounded-full animate-pulse">
                                    </div>
                                    <div
                                        class="absolute inset-1 bg-black rounded-full flex items-center justify-center text-center">
                                        <span
                                            class="text-yellow-400 text-[10px] font-bold leading-tight">LIMITED<br>OFFER</span>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-4 text-center py-20">
                        <p class="text-gray-400 text-xl">No courses found.</p>
                    </div>
                    @endforelse
                </div>


            </div>

            <style>
                @keyframes float {

                    0%,
                    100% {
                        transform: translateY(0px);
                    }

                    50% {
                        transform: translateY(-15px);
                    }
                }

                @keyframes float-slow {

                    0%,
                    100% {
                        transform: translateY(0px);
                    }

                    50% {
                        transform: translateY(-25px);
                    }
                }

                @keyframes float-slower {

                    0%,
                    100% {
                        transform: translateY(0px);
                    }

                    50% {
                        transform: translateY(-35px);
                    }
                }

                .animate-float {
                    animation: float 6s ease-in-out infinite;
                }

                .animate-float-slow {
                    animation: float-slow 8s ease-in-out infinite;
                }

                .animate-float-slower {
                    animation: float-slower 10s ease-in-out infinite;
                }

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

                .perspective-1000 {
                    perspective: 1000px;
                }

                /* Category filter animations */
                .category-filter.active .absolute.inset-0.bg-linear-to-r {
                    opacity: 1;
                }

                .category-filter.active span.relative {
                    color: black;
                }

                .category-filter {
                    background: rgba(255, 255, 255, 0.05);
                    border: 1px solid rgba(255, 255, 255, 0.1);
                    color: white;
                }

                .category-filter.active {
                    background: linear-gradient(to right, #facc15, #f97316);
                    color: black;
                    border: none;
                }
            </style>
        </section>

    </div>
</section>

<style>
    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    @keyframes pulse-slow {

        0%,
        100% {
            opacity: 0.3;
        }

        50% {
            opacity: 0.6;
        }
    }

    .animate-pulse-slow {
        animation: pulse-slow 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }
</style>
@endsection