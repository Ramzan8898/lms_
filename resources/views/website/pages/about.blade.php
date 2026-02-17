@extends('layouts.website')
@section('content')
    <!-- About Section - Premium Design -->
    <section class="relative py-32 px-6 md:px-16 bg-black text-white overflow-hidden">

        <!-- Animated Background Elements -->
        <div class="absolute inset-0 bg-linear-to-br from-black via-[#0f0f0f] to-black"></div>

        <!-- Premium Gradient Orbs -->
        <div class="absolute top-20 left-1/4 w-96 h-96 bg-yellow-500/10 rounded-full blur-[120px] animate-pulse"></div>
        <div
            class="absolute bottom-20 right-1/4 w-80 h-80 bg-orange-500/10 rounded-full blur-[120px] animate-pulse animation-delay-2000">
        </div>

        <!-- Grid Pattern Overlay -->
        <div class="absolute inset-0 opacity-20"
            style="background-image: radial-gradient(circle at 1px 1px, rgba(255,215,0,0.15) 1px, transparent 0); background-size: 40px 40px;">
        </div>

        <div class="relative max-w-7xl mx-auto">

            <!-- Premium Section Header with Animated Underline -->
            <div class="text-center mb-20">
                <span
                    class="inline-block px-4 py-2 rounded-full bg-yellow-500/10 border border-yellow-500/20 text-yellow-400 text-sm font-semibold tracking-wider mb-6 backdrop-blur-sm">
                    ✦ ABOUT OUR PLATFORM ✦
                </span>

                <h1 class="text-5xl md:text-7xl font-bold mb-8 tracking-tight">
                    Redefining
                    <span
                        class="bg-linear-to-r from-yellow-400 via-orange-500 to-yellow-600 bg-clip-text text-transparent relative inline-block">
                        Digital Learning
                        <svg class="absolute -bottom-4 left-0 w-full" viewBox="0 0 300 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10C50 3 150 3 298 10" stroke="url(#gradient)" stroke-width="4"
                                stroke-linecap="round" />
                            <defs>
                                <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" stop-color="#FBBF24" />
                                    <stop offset="50%" stop-color="#F97316" />
                                    <stop offset="100%" stop-color="#EAB308" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                </h1>

                <p class="text-gray-400 max-w-3xl mx-auto text-lg md:text-xl leading-relaxed">
                    We provide high-quality courses designed to help students grow,
                    upgrade skills, and achieve real-world success in today's
                    competitive digital landscape.
                </p>
            </div>

            <!-- Premium Content Grid with Glass Morphism -->
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- Image with Premium Effects -->
                <div class="relative group">
                    <!-- Decorative Elements -->
                    <div
                        class="absolute -inset-4 bg-linear-to-r from-yellow-500 to-orange-500 rounded-3xl opacity-20 group-hover:opacity-30 blur-xl transition-all duration-700">
                    </div>
                    <div
                        class="absolute -inset-1 bg-linear-to-r from-yellow-500 to-orange-500 rounded-3xl opacity-30 group-hover:opacity-40 blur-md transition-all duration-700">
                    </div>

                    <!-- Main Image Container -->
                    <div class="relative rounded-3xl overflow-hidden border border-yellow-500/30 backdrop-blur-sm">
                        <img src="{{ asset('assets/images/bgImage.png') }}"
                            class="w-full h-auto transform group-hover:scale-105 transition-transform duration-700 ease-out">

                        <!-- Overlay Gradient -->
                        <div class="absolute inset-0 bg-linear-to-t from-black/60 via-transparent to-transparent">
                        </div>

                        <!-- Floating Stats Card -->
                        <div class="absolute bottom-6 left-6 right-6 md:bottom-8 md:left-8 md:right-8">
                            <div
                                class="backdrop-blur-xl bg-black/40 border border-yellow-500/30 rounded-2xl p-5 transform translate-y-0 group-hover:translate-y-1 transition-all duration-500">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 rounded-xl bg-yellow-500/20 flex items-center justify-center">
                                            <span class="text-yellow-400 text-xl">✦</span>
                                        </div>
                                        <div>
                                            <p class="text-white/80 text-sm">Active Students</p>
                                            <p class="text-2xl font-bold text-yellow-400">50K+</p>
                                        </div>
                                    </div>
                                    <div
                                        class="h-10 w-px bg-linear-to-b from-transparent via-yellow-500/50 to-transparent">
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 rounded-xl bg-orange-500/20 flex items-center justify-center">
                                            <span class="text-orange-400 text-xl">★</span>
                                        </div>
                                        <div>
                                            <p class="text-white/80 text-sm">Course Rating</p>
                                            <p class="text-2xl font-bold text-orange-400">4.9</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Premium Text Content with Enhanced Typography -->
                <div class="space-y-8">
                    <!-- Section Badge -->
                    <div
                        class="inline-flex items-center space-x-2 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full px-5 py-2.5">
                        <span class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></span>
                        <span class="text-yellow-400 font-semibold tracking-wider text-sm">WHY CHOOSE US</span>
                    </div>

                    <!-- Main Heading with Gradient -->
                    <h2 class="text-4xl md:text-5xl font-bold leading-tight">
                        Empowering Tomorrow's
                        <span
                            class="bg-linear-to-r from-yellow-400 via-orange-400 to-yellow-500 bg-clip-text text-transparent block mt-2">
                            Leaders Today
                        </span>
                    </h2>

                    <!-- Description with Enhanced Readability -->
                    <p class="text-gray-300 text-lg leading-relaxed">
                        Our mission is to create a modern learning environment
                        where students can access premium courses,
                        learn from industry experts, and track their progress easily
                        through our cutting-edge platform.
                    </p>

                    <!-- Premium Feature List with Icons -->
                    <ul class="space-y-5">
                        <li class="flex items-start space-x-4 group cursor-pointer">
                            <div
                                class="w-7 h-7 rounded-full bg-linear-to-r from-yellow-500 to-orange-500 flex items-center justify-center shrink-0 mt-1 group-hover:scale-110 transition-transform duration-300">
                                <span class="text-black text-sm font-bold">✓</span>
                            </div>
                            <div>
                                <span class="text-white font-semibold text-lg">Premium Quality Courses</span>
                                <p class="text-gray-400 text-sm">Industry-leading content updated regularly</p>
                            </div>
                        </li>

                        <li class="flex items-start space-x-4 group cursor-pointer">
                            <div
                                class="w-7 h-7 rounded-full bg-linear-to-r from-yellow-500 to-orange-500 flex items-center justify-center shrink-0 mt-1 group-hover:scale-110 transition-transform duration-300">
                                <span class="text-black text-sm font-bold">✓</span>
                            </div>
                            <div>
                                <span class="text-white font-semibold text-lg">Expert Instructors</span>
                                <p class="text-gray-400 text-sm">Learn from industry professionals</p>
                            </div>
                        </li>

                        <li class="flex items-start space-x-4 group cursor-pointer">
                            <div
                                class="w-7 h-7 rounded-full bg-linear-to-r from-yellow-500 to-orange-500 flex items-center justify-center shrink-0 mt-1 group-hover:scale-110 transition-transform duration-300">
                                <span class="text-black text-sm font-bold">✓</span>
                            </div>
                            <div>
                                <span class="text-white font-semibold text-lg">Real-World Projects</span>
                                <p class="text-gray-400 text-sm">Hands-on experience with practical tasks</p>
                            </div>
                        </li>

                        <li class="flex items-start space-x-4 group cursor-pointer">
                            <div
                                class="w-7 h-7 rounded-full bg-linear-to-r from-yellow-500 to-orange-500 flex items-center justify-center shrink-0 mt-1 group-hover:scale-110 transition-transform duration-300">
                                <span class="text-black text-sm font-bold">✓</span>
                            </div>
                            <div>
                                <span class="text-white font-semibold text-lg">Progress Tracking</span>
                                <p class="text-gray-400 text-sm">Advanced analytics dashboard</p>
                            </div>
                        </li>
                    </ul>

                    <!-- CTA Buttons with Premium Effects -->
                    <div class="flex flex-wrap gap-5 pt-5">
                        <a href="{{ route('web.courses') }}"
                            class="group relative px-8 py-4 rounded-2xl bg-linear-to-r from-yellow-400 to-orange-500 text-black font-semibold overflow-hidden transition-all duration-300 hover:scale-105 hover:shadow-[0_0_40px_rgba(255,170,0,0.5)]">
                            <span class="relative z-10 flex items-center space-x-2">
                                <span>Explore Courses</span>
                                <span class="text-xl group-hover:translate-x-1 transition-transform">→</span>
                            </span>
                            <div
                                class="absolute inset-0 bg-linear-to-r from-yellow-300 to-orange-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </a>

                        <a href="#"
                            class="group px-8 py-4 rounded-2xl border border-yellow-500/30 text-yellow-400 font-semibold backdrop-blur-sm hover:bg-yellow-500/10 transition-all duration-300 hover:border-yellow-400/50 flex items-center space-x-2">
                            <span>Watch Demo</span>
                            <span class="text-lg">▶</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Premium Stats Bar -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-24 pt-12 border-t border-white/10">
                <div class="text-center group cursor-pointer">
                    <div
                        class="text-3xl md:text-4xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent mb-2">
                        500+</div>
                    <div class="text-gray-400 text-sm uppercase tracking-wider">Premium Courses</div>
                </div>
                <div class="text-center group cursor-pointer">
                    <div
                        class="text-3xl md:text-4xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent mb-2">
                        50K+</div>
                    <div class="text-gray-400 text-sm uppercase tracking-wider">Active Students</div>
                </div>
                <div class="text-center group cursor-pointer">
                    <div
                        class="text-3xl md:text-4xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent mb-2">
                        150+</div>
                    <div class="text-gray-400 text-sm uppercase tracking-wider">Expert Mentors</div>
                </div>
                <div class="text-center group cursor-pointer">
                    <div
                        class="text-3xl md:text-4xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent mb-2">
                        98%</div>
                    <div class="text-gray-400 text-sm uppercase tracking-wider">Success Rate</div>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 0.1;
            }

            50% {
                opacity: 0.2;
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
