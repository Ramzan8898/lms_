@extends('layouts.website')
@section('content')
    <!-- Hero Section (Aapka wala, thoda enhanced) -->
    <section class="relative bg-black overflow-hidden py-32">
        <div class="absolute inset-0 bg-linear-to-br from-black via-[#1a0f00] to-black"></div>
        <div class="absolute right-0 top-1/3 w-150 h-150 bg-yellow-600/10 blur-[150px] rounded-full animate-pulse-slow">
        </div>
        <div
            class="absolute left-0 bottom-0 w-100 h-100 bg-orange-600/10 blur-[120px] rounded-full animate-pulse-slow animation-delay-2000">
        </div>
        <div class="absolute inset-0 opacity-20"
            style="background-image: radial-gradient(circle at 1px 1px, rgba(255,215,0,0.1) 1px, transparent 0); background-size: 40px 40px;">
        </div>

        <div class="relative container mx-auto">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-16">
                <!-- Left Content -->
                <div class="text-white max-w-2xl lg:max-w-xl">
                    <div
                        class="inline-flex items-center space-x-2 bg-white/5 backdrop-blur-sm border border-yellow-500/20 rounded-full px-5 py-2 mb-8 animate-float">
                        <span class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></span>
                        <span class="text-yellow-400 font-semibold tracking-wider text-sm">✦ WELCOME TO LMS ✦</span>
                    </div>

                    <h1 class="text-5xl md:text-7xl font-bold leading-tight mb-8">
                        Learn, Grow, <br>
                        <span
                            class="bg-linear-to-r from-yellow-400 via-orange-500 to-yellow-600 bg-clip-text text-transparent relative inline-block">
                            Succeed with LMS
                            <svg class="absolute -bottom-4 left-0 w-full" viewBox="0 0 300 12" fill="none">
                                <path d="M2 10C50 3 150 3 298 10" stroke="url(#gradient)" stroke-width="4"
                                    stroke-linecap="round" />
                                <defs>
                                    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%"
                                        y2="0%">
                                        <stop offset="0%" stop-color="#FBBF24" />
                                        <stop offset="50%" stop-color="#F97316" />
                                        <stop offset="100%" stop-color="#EAB308" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </span>
                    </h1>

                    <p class="text-gray-400 text-lg md:text-xl mb-10 leading-relaxed max-w-xl">
                        The ultimate Laravel-based Learning Management System designed to elevate your education
                        experience with modern tools, interactive courses, and powerful features.
                    </p>

                    <div class="flex items-center gap-8 mb-10">
                        <div>
                            <div class="text-2xl font-bold text-yellow-400">500+</div>
                            <div class="text-gray-500 text-sm">Premium Courses</div>
                        </div>
                        <div class="w-px h-10 bg-linear-to-b from-transparent via-yellow-500/30 to-transparent"></div>
                        <div>
                            <div class="text-2xl font-bold text-yellow-400">50K+</div>
                            <div class="text-gray-500 text-sm">Active Students</div>
                        </div>
                        <div class="w-px h-10 bg-linear-to-b from-transparent via-yellow-500/30 to-transparent"></div>
                        <div>
                            <div class="text-2xl font-bold text-yellow-400">150+</div>
                            <div class="text-gray-500 text-sm">Expert Mentors</div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-6">
                        <a href="#"
                            class="group relative px-8 py-4 rounded-full font-semibold bg-linear-to-r from-yellow-400 to-orange-500 text-black transition-all duration-500 hover:scale-105 hover:shadow-[0_0_40px_rgba(255,170,0,0.5)] flex items-center space-x-2 overflow-hidden">
                            <span class="relative z-10">Get Started</span>
                            <span class="relative z-10 text-xl group-hover:translate-x-1 transition-transform">→</span>
                            <div
                                class="absolute inset-0 bg-linear-to-r from-yellow-300 to-orange-400 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                        </a>
                        <a href="{{ route('web.courses') }}"
                            class="group px-8 py-4 rounded-full font-semibold border-2 border-yellow-500/30 text-yellow-400 hover:bg-yellow-500 hover:text-black hover:border-yellow-500 transition-all duration-500 hover:scale-105 flex items-center space-x-2">
                            <span>View Courses</span>
                            <span class="text-lg">▶</span>
                        </a>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="relative group">
                    <div
                        class="absolute -inset-4 bg-linear-to-r from-yellow-500 to-orange-500 rounded-full opacity-20 group-hover:opacity-30 blur-3xl transition-all duration-700">
                    </div>
                    <div class="relative">
                        <img src="{{ asset('/assets/images/ChatGPT Image Feb 16, 2026, 02_22_42 PM.png') }}"
                            class="w-full max-w-3xl drop-shadow-[0_0_60px_rgba(255,170,0,0.3)] group-hover:scale-105 transition-transform duration-700">
                        <div
                            class="absolute -bottom-6 -left-6 bg-black/60 backdrop-blur-xl border border-yellow-500/30 rounded-2xl p-4 animate-float">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-yellow-500/20 flex items-center justify-center">
                                    <span class="text-yellow-400 text-xl">📚</span>
                                </div>
                                <div>
                                    <p class="text-white text-sm">New Courses</p>
                                    <p class="text-yellow-400 font-bold">+15 This Week</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute -top-6 -right-6 bg-black/60 backdrop-blur-xl border border-yellow-500/30 rounded-2xl p-4 animate-float animation-delay-2000">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-yellow-500/20 flex items-center justify-center">
                                    <span class="text-yellow-400 text-xl">🏆</span>
                                </div>
                                <div>
                                    <p class="text-white text-sm">Success Rate</p>
                                    <p class="text-yellow-400 font-bold">98%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section - Ultra Premium -->
    <section class="relative py-25 px-4 bg-linear-to-b from-black via-[#0a0a0a] to-black overflow-hidden">

        <!-- Advanced Background Effects -->
        <div class="absolute inset-0">
            <!-- Multi-layer Gradient Orbs -->
            <div
                class="absolute top-20 left-1/4 w-150 h-150 bg-linear-to-r from-yellow-500/10 via-orange-500/10 to-transparent rounded-full blur-[150px] animate-pulse-slow">
            </div>
            <div
                class="absolute bottom-20 right-1/4 w-150 h-150 bg-linear-to-l from-yellow-500/10 via-orange-500/10 to-transparent rounded-full blur-[150px] animate-pulse-slow animation-delay-2000">
            </div>
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-200 h-200 bg-purple-500/5 rounded-full blur-[200px] animate-pulse-slow animation-delay-3000">
            </div>

            <!-- Animated Grid Pattern with Movement -->
            <div class="absolute inset-0 opacity-20"
                style="background-image: 
                     linear-gradient(rgba(255,215,0,0.03) 1px, transparent 1px),
                     linear-gradient(90deg, rgba(255,215,0,0.03) 1px, transparent 1px);
                     background-size: 50px 50px;
                     animation: gridMove 30s linear infinite;">
            </div>

            <!-- Enhanced Floating Particles -->
            <div class="absolute inset-0">
                <div class="absolute top-1/4 left-1/3 w-2 h-2 bg-yellow-400/30 rounded-full animate-float-slow"></div>
                <div class="absolute top-2/3 right-1/3 w-3 h-3 bg-orange-400/30 rounded-full animate-float"></div>
                <div class="absolute bottom-1/4 left-1/2 w-1.5 h-1.5 bg-yellow-500/30 rounded-full animate-float-slower">
                </div>
                <div
                    class="absolute top-1/3 right-1/4 w-2.5 h-2.5 bg-yellow-300/30 rounded-full animate-float animation-delay-1500">
                </div>
                <div
                    class="absolute bottom-2/3 left-1/4 w-2 h-2 bg-orange-300/30 rounded-full animate-float-slow animation-delay-2500">
                </div>
            </div>

            <!-- Radial Gradient Overlay -->
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,black_100%)] opacity-60">
            </div>
        </div>

        <div class="relative container mx-auto z-10">

            <!-- Section Heading with Premium Enhancements -->
            <div class="text-center mb-8">
                <!-- Animated Badge -->
                <div
                    class="inline-flex items-center gap-3 bg-linear-to-r from-yellow-500/20 to-orange-500/20 backdrop-blur-xl border border-yellow-500/30 rounded-full px-6 py-3 mb-8 relative group cursor-pointer hover:border-yellow-400 transition-all duration-500">
                    <span class="relative flex h-3 w-3">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-yellow-500"></span>
                    </span>
                    <span
                        class="text-yellow-400 font-semibold tracking-wider text-sm group-hover:text-yellow-300 transition-colors">✦
                        WHY TRUST US ✦</span>
                    <span class="bg-yellow-500/20 text-yellow-400 px-3 py-1 rounded-full text-xs font-bold">#1
                        PLATFORM</span>

                    <!-- Shine Effect -->
                    <div
                        class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-linear-to-r from-transparent via-white/10 to-transparent skew-x-12">
                    </div>
                </div>

                <!-- Main Heading with Advanced Gradient -->
                <h2 class="text-5xl md:text-7xl font-bold mb-8 tracking-tight">
                    <span class="bg-linear-to-r from-white via-gray-300 to-white bg-clip-text text-transparent">Why</span>
                    <span
                        class="bg-linear-to-r from-yellow-400 via-orange-500 to-yellow-600 bg-clip-text text-transparent relative inline-block mx-4">
                        Choose
                        <svg class="absolute -bottom-4 left-0 w-full" viewBox="0 0 200 8" fill="none">
                            <path d="M2 4C50 1 150 1 198 4" stroke="url(#gradient)" stroke-width="4"
                                stroke-linecap="round" />
                            <defs>
                                <linearGradient id="gradient" x1="0%" y1="0%" x2="100%"
                                    y2="0%">
                                    <stop offset="0%" stop-color="#FBBF24" />
                                    <stop offset="50%" stop-color="#F97316" />
                                    <stop offset="100%" stop-color="#EAB308" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                    <span class="bg-linear-to-r from-white via-gray-300 to-white bg-clip-text text-transparent">Us</span>
                </h2>

                <!-- Enhanced Description with Stats -->
                <p class="text-gray-400 max-w-4xl mx-auto text-lg md:text-xl leading-relaxed relative mb-12">
                    <span class="absolute -left-8 top-0 text-6xl text-yellow-500/20 font-serif">"</span>
                    <span class="relative z-10">
                        We don't just teach, we transform careers with
                        <span class="text-yellow-400 font-bold">industry-leading courses</span> and
                        <span class="text-yellow-400 font-bold">expert guidance</span> from top professionals
                    </span>
                    <span class="absolute -right-8 bottom-0 text-6xl text-yellow-500/20 font-serif">"</span>
                </p>

                <!-- Quick Stats Row -->
                <div class="flex flex-wrap justify-center gap-8 mb-8">
                    <div
                        class="flex items-center gap-3 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl px-6 py-3">
                        <span
                            class="text-3xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">10+</span>
                        <span class="text-gray-400">Years Experience</span>
                    </div>
                    <div
                        class="flex items-center gap-3 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl px-6 py-3">
                        <span
                            class="text-3xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">50K+</span>
                        <span class="text-gray-400">Students</span>
                    </div>
                    <div
                        class="flex items-center gap-3 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl px-6 py-3">
                        <span
                            class="text-3xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">4.9</span>
                        <span class="text-gray-400">Rating</span>
                    </div>

                    <div
                        class="flex items-center gap-3 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl px-6 py-3">
                        <span
                            class="text-3xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">24/7</span>
                        <span class="text-gray-400">Support</span>
                    </div>
                </div>

                <!-- Decorative Line with Icons -->
                <div class="flex justify-center items-center gap-4 mt-8">
                    <div class="w-16 h-0.5 bg-linear-to-r from-transparent via-yellow-500 to-yellow-500"></div>
                    <div class="relative">
                        <span class="text-yellow-500 text-3xl animate-spin-slow">✦</span>
                        <span class="absolute inset-0 text-yellow-500 text-3xl animate-ping opacity-20">✦</span>
                    </div>
                    <div class="w-16 h-0.5 bg-linear-to-r from-yellow-500 via-yellow-500 to-transparent"></div>
                </div>
            </div>

            <!-- Main Features Grid - Ultra Premium Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Card 1 - Premium Courses (Enhanced) -->
                <div class="group relative perspective-2000">
                    <!-- 3D Glow Effect -->
                    <div
                        class="absolute -inset-1 bg-linear-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-30 blur-2xl transition-all duration-700 group-hover:duration-300">
                    </div>

                    <!-- Card Container with Advanced 3D Hover -->
                    <div
                        class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 
                            hover:border-yellow-500/30 hover:shadow-2xl hover:shadow-yellow-500/20
                            transition-all duration-500 ease-out
                            group-hover:scale-105 group-hover:-translate-y-2
                            group-hover:rotate-1">

                        <!-- Icon with Advanced Animation -->
                        <div class="relative mb-6">
                            <!-- Icon Background Pulse -->
                            <div
                                class="absolute inset-0 bg-yellow-500/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Icon Container -->
                            <div
                                class="relative w-24 h-24 rounded-2xl bg-linear-to-br from-yellow-500/20 to-orange-500/20 
                                    flex items-center justify-center mx-auto
                                    group-hover:scale-110 group-hover:rotate-6
                                    transition-all duration-500">

                                <!-- Animated Border -->
                                <div
                                    class="absolute inset-0 rounded-2xl border-2 border-yellow-500/0 group-hover:border-yellow-500/50 transition-all duration-500">
                                </div>

                                <!-- Main Icon (Premium Book) -->
                                <svg class="w-12 h-12 text-yellow-400 group-hover:text-yellow-300 transition-colors duration-500"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="1.8"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>

                                <!-- Shine Effect -->
                                <div
                                    class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-linear-to-r from-transparent via-white/20 to-transparent skew-x-12">
                                </div>
                            </div>

                            <!-- Floating Number Badge -->
                            <div
                                class="absolute -top-3 -right-3 w-12 h-12 rounded-full bg-linear-to-r from-yellow-500 to-orange-500 
                                    flex items-center justify-center text-black font-bold text-lg
                                    opacity-0 group-hover:opacity-100 scale-0 group-hover:scale-100
                                    transition-all duration-500 delay-100 shadow-lg shadow-yellow-500/30">
                                01
                            </div>
                        </div>

                        <!-- Content -->
                        <h3
                            class="text-2xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors duration-500 text-center">
                            Premium Courses
                        </h3>

                        <p
                            class="text-gray-400 mb-6 leading-relaxed group-hover:text-gray-300 transition-colors duration-500 text-center">
                            Access 500+ industry-leading courses crafted by top experts with real-world projects and
                            hands-on experience.
                        </p>

                        <!-- Enhanced Stats -->
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-500 text-sm">Total Courses</span>
                                <span class="text-white font-semibold">500+</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-500 text-sm">Avg Rating</span>
                                <div class="flex items-center gap-2">
                                    <span class="text-yellow-400">★★★★★</span>
                                    <span class="text-white font-semibold">4.9</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-500 text-sm">Updated</span>
                                <span class="text-green-400 font-semibold">Monthly</span>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div
                            class="mt-4 pt-4 border-t border-white/10 group-hover:border-yellow-500/30 transition-colors duration-500">
                            <div class="flex justify-between text-xs text-gray-500 mb-1">
                                <span>Completion Rate</span>
                                <span>95%</span>
                            </div>
                            <div class="w-full h-1.5 bg-white/10 rounded-full overflow-hidden">
                                <div
                                    class="w-[95%] h-full bg-linear-to-r from-yellow-400 to-orange-500 rounded-full group-hover:scale-x-105 transition-transform duration-500">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 - Expert Mentors (Enhanced) -->
                <div class="group relative perspective-2000">
                    <div
                        class="absolute -inset-1 bg-linear-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-30 blur-2xl transition-all duration-700">
                    </div>

                    <div
                        class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 
                            hover:border-yellow-500/30 hover:shadow-2xl hover:shadow-yellow-500/20
                            transition-all duration-500 ease-out
                            group-hover:scale-105 group-hover:-translate-y-2
                            group-hover:-rotate-1">

                        <div class="relative mb-6">
                            <div
                                class="absolute inset-0 bg-yellow-500/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <div
                                class="relative w-24 h-24 rounded-2xl bg-linear-to-br from-yellow-500/20 to-orange-500/20 
                                    flex items-center justify-center mx-auto
                                    group-hover:scale-110 group-hover:-rotate-6
                                    transition-all duration-500">

                                <div
                                    class="absolute inset-0 rounded-2xl border-2 border-yellow-500/0 group-hover:border-yellow-500/50 transition-all duration-500">
                                </div>

                                <svg class="w-12 h-12 text-yellow-400 group-hover:text-yellow-300 transition-colors duration-500"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="1.8"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>

                                <div
                                    class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-linear-to-r from-transparent via-white/20 to-transparent skew-x-12">
                                </div>
                            </div>

                            <div
                                class="absolute -top-3 -right-3 w-12 h-12 rounded-full bg-linear-to-r from-yellow-500 to-orange-500 
                                    flex items-center justify-center text-black font-bold text-lg
                                    opacity-0 group-hover:opacity-100 scale-0 group-hover:scale-100
                                    transition-all duration-500 delay-100 shadow-lg shadow-yellow-500/30">
                                02
                            </div>
                        </div>

                        <h3
                            class="text-2xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors duration-500 text-center">
                            Expert Mentors
                        </h3>

                        <p
                            class="text-gray-400 mb-6 leading-relaxed group-hover:text-gray-300 transition-colors duration-500 text-center">
                            Learn from 150+ industry veterans with 10+ years of experience who provide personalized
                            guidance.
                        </p>

                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-500 text-sm">Expert Mentors</span>
                                <span class="text-white font-semibold">150+</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-500 text-sm">Avg Experience</span>
                                <span class="text-white font-semibold">12+ Years</span>
                            </div>
                            <div class="flex items-center justify-center -space-x-2 mt-2">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg"
                                    class="w-8 h-8 rounded-full border-2 border-yellow-500/50 hover:scale-110 transition-transform">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg"
                                    class="w-8 h-8 rounded-full border-2 border-yellow-500/50 hover:scale-110 transition-transform">
                                <img src="https://randomuser.me/api/portraits/men/67.jpg"
                                    class="w-8 h-8 rounded-full border-2 border-yellow-500/50 hover:scale-110 transition-transform">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg"
                                    class="w-8 h-8 rounded-full border-2 border-yellow-500/50 hover:scale-110 transition-transform">
                                <div
                                    class="w-8 h-8 rounded-full bg-linear-to-r from-yellow-500 to-orange-500 flex items-center justify-center text-black text-xs font-bold border-2 border-yellow-500/50">
                                    +150</div>
                            </div>
                        </div>

                        <div
                            class="mt-4 pt-4 border-t border-white/10 group-hover:border-yellow-500/30 transition-colors duration-500">
                            <div class="flex justify-between text-xs text-gray-500 mb-1">
                                <span>Mentor Rating</span>
                                <span>4.9/5</span>
                            </div>
                            <div class="w-full h-1.5 bg-white/10 rounded-full overflow-hidden">
                                <div class="w-[98%] h-full bg-linear-to-r from-yellow-400 to-orange-500 rounded-full">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 - Progress Tracking (Enhanced) -->
                <div class="group relative perspective-2000">
                    <div
                        class="absolute -inset-1 bg-linear-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-30 blur-2xl transition-all duration-700">
                    </div>

                    <div
                        class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 
                            hover:border-yellow-500/30 hover:shadow-2xl hover:shadow-yellow-500/20
                            transition-all duration-500 ease-out
                            group-hover:scale-105 group-hover:-translate-y-2
                            group-hover:rotate-1">

                        <div class="relative mb-6">
                            <div
                                class="absolute inset-0 bg-yellow-500/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <div
                                class="relative w-24 h-24 rounded-2xl bg-linear-to-br from-yellow-500/20 to-orange-500/20 
                                    flex items-center justify-center mx-auto
                                    group-hover:scale-110 group-hover:rotate-6
                                    transition-all duration-500">

                                <div
                                    class="absolute inset-0 rounded-2xl border-2 border-yellow-500/0 group-hover:border-yellow-500/50 transition-all duration-500">
                                </div>

                                <svg class="w-12 h-12 text-yellow-400 group-hover:text-yellow-300 transition-colors duration-500"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="1.8"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>

                                <div
                                    class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-linear-to-r from-transparent via-white/20 to-transparent skew-x-12">
                                </div>
                            </div>

                            <div
                                class="absolute -top-3 -right-3 w-12 h-12 rounded-full bg-linear-to-r from-yellow-500 to-orange-500 
                                    flex items-center justify-center text-black font-bold text-lg
                                    opacity-0 group-hover:opacity-100 scale-0 group-hover:scale-100
                                    transition-all duration-500 delay-100 shadow-lg shadow-yellow-500/30">
                                03
                            </div>
                        </div>

                        <h3
                            class="text-2xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors duration-500 text-center">
                            Progress Tracking
                        </h3>

                        <p
                            class="text-gray-400 mb-6 leading-relaxed group-hover:text-gray-300 transition-colors duration-500 text-center">
                            Real-time analytics, personalized insights, and milestone tracking to keep you motivated and
                            on target.
                        </p>

                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-500 text-sm">Success Rate</span>
                                <span class="text-white font-semibold">98%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-500 text-sm">Active Users</span>
                                <span class="text-white font-semibold">45K+</span>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between text-xs">
                                    <span class="text-gray-500">Course Progress</span>
                                    <span class="text-yellow-400">85% Avg</span>
                                </div>
                                <div class="w-full h-2 bg-white/10 rounded-full overflow-hidden">
                                    <div
                                        class="w-[85%] h-full bg-linear-to-r from-yellow-400 to-orange-500 rounded-full relative">
                                        <div class="absolute top-0 right-0 w-1 h-2 bg-white rounded-full animate-ping">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="mt-4 pt-4 border-t border-white/10 group-hover:border-yellow-500/30 transition-colors duration-500">
                            <div class="flex items-center justify-between text-xs text-gray-500">
                                <span>Milestones Achieved</span>
                                <span class="text-green-400">+2,345 this week</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 - Lifetime Access (Enhanced) -->
                <div class="group relative perspective-2000">
                    <div
                        class="absolute -inset-1 bg-linear-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-30 blur-2xl transition-all duration-700">
                    </div>

                    <div
                        class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 
                            hover:border-yellow-500/30 hover:shadow-2xl hover:shadow-yellow-500/20
                            transition-all duration-500 ease-out
                            group-hover:scale-105 group-hover:-translate-y-2
                            group-hover:-rotate-1">

                        <div class="relative mb-6">
                            <div
                                class="absolute inset-0 bg-yellow-500/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <div
                                class="relative w-24 h-24 rounded-2xl bg-linear-to-br from-yellow-500/20 to-orange-500/20 
                                    flex items-center justify-center mx-auto
                                    group-hover:scale-110 group-hover:-rotate-6
                                    transition-all duration-500">

                                <div
                                    class="absolute inset-0 rounded-2xl border-2 border-yellow-500/0 group-hover:border-yellow-500/50 transition-all duration-500">
                                </div>

                                <svg class="w-12 h-12 text-yellow-400 group-hover:text-yellow-300 transition-colors duration-500"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="1.8"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                                <div
                                    class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-linear-to-r from-transparent via-white/20 to-transparent skew-x-12">
                                </div>
                            </div>

                            <div
                                class="absolute -top-3 -right-3 w-12 h-12 rounded-full bg-linear-to-r from-yellow-500 to-orange-500 
                                    flex items-center justify-center text-black font-bold text-lg
                                    opacity-0 group-hover:opacity-100 scale-0 group-hover:scale-100
                                    transition-all duration-500 delay-100 shadow-lg shadow-yellow-500/30">
                                04
                            </div>
                        </div>

                        <h3
                            class="text-2xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors duration-500 text-center">
                            Lifetime Access
                        </h3>

                        <p
                            class="text-gray-400 mb-6 leading-relaxed group-hover:text-gray-300 transition-colors duration-500 text-center">
                            One-time payment, forever access. Learn at your own pace with unlimited course updates and
                            24/7 support.
                        </p>

                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-500 text-sm">Access Type</span>
                                <span class="text-green-400 font-semibold">∞ Unlimited</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-500 text-sm">Support</span>
                                <span class="text-yellow-400 font-semibold">24/7 Available</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-500 text-sm">Updates</span>
                                <span class="text-blue-400 font-semibold">Free Forever</span>
                            </div>
                        </div>

                        <!-- Price Tag -->
                        <div
                            class="mt-4 pt-4 border-t border-white/10 group-hover:border-yellow-500/30 transition-colors duration-500">
                            <div class="text-center">
                                <span class="text-gray-400 text-sm line-through">$999</span>
                                <span
                                    class="text-3xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent block">$499</span>
                                <span class="text-gray-500 text-xs">One-time payment</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <style>
            @keyframes float {

                0%,
                100% {
                    transform: translateY(0px);
                }

                50% {
                    transform: translateY(-20px);
                }
            }

            @keyframes float-slow {

                0%,
                100% {
                    transform: translateY(0px);
                }

                50% {
                    transform: translateY(-30px);
                }
            }

            @keyframes float-slower {

                0%,
                100% {
                    transform: translateY(0px);
                }

                50% {
                    transform: translateY(-40px);
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

            @keyframes spin-slow {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }

            .animate-spin-slow {
                animation: spin-slow 12s linear infinite;
            }

            @keyframes gridMove {
                0% {
                    transform: translateY(0);
                }

                100% {
                    transform: translateY(50px);
                }
            }

            .animation-delay-1000 {
                animation-delay: 1s;
            }

            .animation-delay-1500 {
                animation-delay: 1.5s;
            }

            .animation-delay-2000 {
                animation-delay: 2s;
            }

            .animation-delay-2500 {
                animation-delay: 2.5s;
            }

            .animation-delay-3000 {
                animation-delay: 3s;
            }

            .perspective-2000 {
                perspective: 2000px;
            }
        </style>
    </section>

    <!-- Popular Courses Section - Ultra Premium -->
    <section class="relative py-25 bg-black/96 overflow-hidden">

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
            <div class="text-center mb-20">
                <!-- Animated Badge with Counter -->
                <div
                    class="inline-flex items-center gap-4 bg-linear-to-r from-yellow-500/10 to-orange-500/10 backdrop-blur-xl border border-yellow-500/30 rounded-full px-6 py-3 mb-8 relative group cursor-pointer">
                    <span class="relative flex h-3 w-3">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-yellow-500"></span>
                    </span>
                    <span
                        class="text-yellow-400 font-semibold tracking-wider text-sm group-hover:text-yellow-300 transition-colors">✦
                        POPULAR COURSES ✦</span>
                    <span class="bg-yellow-500/20 text-yellow-400 px-3 py-1 rounded-full text-xs font-bold">LIVE</span>

                    <!-- Shine Effect -->
                    <div
                        class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-linear-to-r from-transparent via-white/10 to-transparent skew-x-12">
                    </div>
                </div>

                <!-- Main Heading with Advanced Typography -->
                <h2 class="text-5xl md:text-7xl font-bold mb-6 tracking-tight">
                    <span class="bg-linear-to-r from-white via-gray-300 to-white bg-clip-text text-transparent">Most</span>
                    <span
                        class="bg-linear-to-r from-yellow-400 via-orange-500 to-yellow-600 bg-clip-text text-transparent relative inline-block mx-4">
                        Enrolled
                        <svg class="absolute -bottom-4 left-0 w-full" viewBox="0 0 200 8" fill="none">
                            <path d="M2 4C50 1 150 1 198 4" stroke="url(#gradient)" stroke-width="3"
                                stroke-linecap="round" />
                            <defs>
                                <linearGradient id="gradient" x1="0%" y1="0%" x2="100%"
                                    y2="0%">
                                    <stop offset="0%" stop-color="#FBBF24" />
                                    <stop offset="50%" stop-color="#F97316" />
                                    <stop offset="100%" stop-color="#EAB308" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                    <span
                        class="bg-linear-to-r from-white via-gray-300 to-white bg-clip-text text-transparent">Courses</span>
                </h2>

                <!-- Description with Stats -->
                <p class="text-gray-400 max-w-2xl mx-auto text-lg md:text-xl leading-relaxed mb-10">
                    Join <span class="text-yellow-400 font-bold">50,000+</span> students learning from our most popular
                    courses,
                    rated <span class="text-yellow-400 font-bold">4.9/5</span> by the community
                </p>

                <!-- Category Filter Pills with Premium Design -->
                <div class="flex flex-wrap justify-center gap-4 mb-12">
                    <button class="group relative px-8 py-3 rounded-full overflow-hidden">
                        <span class="absolute inset-0 bg-linear-to-r from-yellow-500 to-orange-500"></span>
                        <span
                            class="absolute inset-0 bg-linear-to-r from-yellow-400 to-orange-400 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                        <span class="relative text-black font-semibold">All Courses</span>
                    </button>

                    <button
                        class="group relative px-8 py-3 rounded-full overflow-hidden bg-white/5 backdrop-blur-sm border border-white/10 hover:border-yellow-500/50 transition-all duration-500">
                        <span
                            class="relative text-white group-hover:text-yellow-400 transition-colors duration-500">Development</span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-linear-to-r from-yellow-500 to-orange-500 group-hover:w-full transition-all duration-500"></span>
                    </button>

                    <button
                        class="group relative px-8 py-3 rounded-full overflow-hidden bg-white/5 backdrop-blur-sm border border-white/10 hover:border-yellow-500/50 transition-all duration-500">
                        <span
                            class="relative text-white group-hover:text-yellow-400 transition-colors duration-500">Design</span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-linear-to-r from-yellow-500 to-orange-500 group-hover:w-full transition-all duration-500"></span>
                    </button>

                    <button
                        class="group relative px-8 py-3 rounded-full overflow-hidden bg-white/5 backdrop-blur-sm border border-white/10 hover:border-yellow-500/50 transition-all duration-500">
                        <span
                            class="relative text-white group-hover:text-yellow-400 transition-colors duration-500">Business</span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-linear-to-r from-yellow-500 to-orange-500 group-hover:w-full transition-all duration-500"></span>
                    </button>

                    <button
                        class="group relative px-8 py-3 rounded-full overflow-hidden bg-white/5 backdrop-blur-sm border border-white/10 hover:border-yellow-500/50 transition-all duration-500">
                        <span
                            class="relative text-white group-hover:text-yellow-400 transition-colors duration-500">Marketing</span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-linear-to-r from-yellow-500 to-orange-500 group-hover:w-full transition-all duration-500"></span>
                    </button>
                </div>
            </div>

            <!-- Courses Grid - Premium Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Course Card 1 - Full Stack Web Development -->
                <div class="group relative perspective-1000">
                    <!-- 3D Glow Effect -->
                    <div
                        class="absolute -inset-0.5 bg-linear-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-30 blur-xl transition-all duration-700">
                    </div>

                    <!-- Main Card -->
                    <div
                        class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden 
                            hover:border-yellow-500/30 hover:shadow-2xl hover:shadow-yellow-500/20
                            transition-all duration-500 ease-out
                            group-hover:scale-105 group-hover:-translate-y-2">

                        <!-- Image Container with Overlay -->
                        <div class="relative h-56 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-linear-to-t from-black/90 via-black/40 to-transparent">
                            </div>

                            <!-- Category Badge with Animation -->
                            <div class="absolute top-4 left-4">
                                <span
                                    class="px-4 py-2 bg-black/60 backdrop-blur-xl border border-yellow-500/30 rounded-full text-yellow-400 text-xs font-semibold
                                       group-hover:bg-linear-to-r group-hover:from-yellow-500 group-hover:to-orange-500 group-hover:text-black
                                       transition-all duration-500">
                                    Development
                                </span>
                            </div>

                            <!-- Rating Badge -->
                            <div
                                class="absolute top-4 right-4 flex items-center gap-1 px-3 py-2 bg-black/60 backdrop-blur-xl border border-yellow-500/30 rounded-full">
                                <span class="text-yellow-400 text-sm">★</span>
                                <span class="text-white text-sm font-bold">4.9</span>
                                <span class="text-gray-400 text-xs">(2.5k)</span>
                            </div>

                            <!-- Floating Elements on Image -->
                            <div class="absolute bottom-4 left-4 right-4 flex justify-between items-center">
                                <div class="flex items-center gap-2">
                                    <div class="flex -space-x-2">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg"
                                            class="w-8 h-8 rounded-full border-2 border-yellow-500/50">
                                        <img src="https://randomuser.me/api/portraits/women/44.jpg"
                                            class="w-8 h-8 rounded-full border-2 border-yellow-500/50">
                                        <img src="https://randomuser.me/api/portraits/men/67.jpg"
                                            class="w-8 h-8 rounded-full border-2 border-yellow-500/50">
                                    </div>
                                    <span class="text-white text-xs">45+ enrolled</span>
                                </div>
                                <span
                                    class="px-3 py-1 bg-yellow-500 text-black text-xs font-bold rounded-full">Bestseller</span>
                            </div>

                            <!-- Shine Effect on Image -->
                            <div
                                class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-linear-to-r from-transparent via-white/20 to-transparent skew-x-12">
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div class="p-6">
                            <!-- Instructor Info -->
                            <div class="flex items-center gap-3 mb-4">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg"
                                    class="w-10 h-10 rounded-full border-2 border-yellow-500/50">
                                <div>
                                    <h4 class="text-white font-semibold text-sm">Sarah Johnson</h4>
                                    <p class="text-gray-400 text-xs">Senior Developer, Google</p>
                                </div>
                            </div>

                            <!-- Title -->
                            <h3
                                class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors duration-500 line-clamp-2">
                                Full Stack Web Development Bootcamp
                            </h3>

                            <!-- Description -->
                            <p class="text-gray-400 text-sm mb-4 leading-relaxed line-clamp-2">
                                Master React, Node.js, MongoDB & more. Build 10+ real-world projects and land your dream
                                job.
                            </p>

                            <!-- Course Features -->
                            <div class="grid grid-cols-2 gap-3 mb-5">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-gray-300 text-xs">12 Weeks</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                    <span class="text-gray-300 text-xs">45 Students</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-gray-300 text-xs">Certificate</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                    <span class="text-gray-300 text-xs">Support</span>
                                </div>
                            </div>

                            <!-- Price and CTA -->
                            <div
                                class="flex items-center justify-between pt-4 border-t border-white/10 group-hover:border-yellow-500/30 transition-colors duration-500">
                                <div>
                                    <span class="text-gray-400 text-xs line-through">$199</span>
                                    <div class="flex items-center gap-1">
                                        <span
                                            class="text-3xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">$49</span>
                                        <span class="text-gray-500 text-xs">75% off</span>
                                    </div>
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
                        </div>
                    </div>
                </div>

                <!-- Course Card 2 - UI/UX Design Mastery -->
                <div class="group relative perspective-1000">
                    <div
                        class="absolute -inset-0.5 bg-linear-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-30 blur-xl transition-all duration-700">
                    </div>

                    <div
                        class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden 
                            hover:border-yellow-500/30 hover:shadow-2xl hover:shadow-yellow-500/20
                            transition-all duration-500 ease-out
                            group-hover:scale-105 group-hover:-translate-y-2">

                        <div class="relative h-56 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                            <div class="absolute inset-0 bg-linear-to-t from-black/90 via-black/40 to-transparent">
                            </div>

                            <div class="absolute top-4 left-4">
                                <span
                                    class="px-4 py-2 bg-black/60 backdrop-blur-xl border border-yellow-500/30 rounded-full text-yellow-400 text-xs font-semibold
                                       group-hover:bg-linear-to-r group-hover:from-yellow-500 group-hover:to-orange-500 group-hover:text-black
                                       transition-all duration-500">
                                    Design
                                </span>
                            </div>

                            <div
                                class="absolute top-4 right-4 flex items-center gap-1 px-3 py-2 bg-black/60 backdrop-blur-xl border border-yellow-500/30 rounded-full">
                                <span class="text-yellow-400 text-sm">★</span>
                                <span class="text-white text-sm font-bold">4.8</span>
                                <span class="text-gray-400 text-xs">(1.8k)</span>
                            </div>

                            <div class="absolute bottom-4 left-4 right-4 flex justify-between items-center">
                                <div class="flex items-center gap-2">
                                    <div class="flex -space-x-2">
                                        <img src="https://randomuser.me/api/portraits/women/68.jpg"
                                            class="w-8 h-8 rounded-full border-2 border-yellow-500/50">
                                        <img src="https://randomuser.me/api/portraits/men/75.jpg"
                                            class="w-8 h-8 rounded-full border-2 border-yellow-500/50">
                                    </div>
                                    <span class="text-white text-xs">32+ enrolled</span>
                                </div>
                                <span
                                    class="px-3 py-1 bg-yellow-500 text-black text-xs font-bold rounded-full">Trending</span>
                            </div>

                            <div
                                class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-linear-to-r from-transparent via-white/20 to-transparent skew-x-12">
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg"
                                    class="w-10 h-10 rounded-full border-2 border-yellow-500/50">
                                <div>
                                    <h4 class="text-white font-semibold text-sm">Emily Chen</h4>
                                    <p class="text-gray-400 text-xs">Lead Designer, Adobe</p>
                                </div>
                            </div>

                            <h3
                                class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors duration-500 line-clamp-2">
                                UI/UX Design Masterclass
                            </h3>

                            <p class="text-gray-400 text-sm mb-4 leading-relaxed line-clamp-2">
                                Master Figma, prototyping, user research & wireframing. Create stunning interfaces that
                                users love.
                            </p>

                            <div class="grid grid-cols-2 gap-3 mb-5">
                                <div class="flex items-center gap-2"><svg class="w-4 h-4 text-yellow-500" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg><span class="text-gray-300 text-xs">8 Weeks</span></div>
                                <div class="flex items-center gap-2"><svg class="w-4 h-4 text-yellow-500" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg><span class="text-gray-300 text-xs">32 Students</span></div>
                                <div class="flex items-center gap-2"><svg class="w-4 h-4 text-yellow-500" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg><span class="text-gray-300 text-xs">Certificate</span></div>
                                <div class="flex items-center gap-2"><svg class="w-4 h-4 text-yellow-500" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg><span class="text-gray-300 text-xs">Support</span></div>
                            </div>

                            <div
                                class="flex items-center justify-between pt-4 border-t border-white/10 group-hover:border-yellow-500/30 transition-colors duration-500">
                                <div>
                                    <span class="text-gray-400 text-xs line-through">$149</span>
                                    <div class="flex items-center gap-1">
                                        <span
                                            class="text-3xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">$39</span>
                                        <span class="text-gray-500 text-xs">74% off</span>
                                    </div>
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
                        </div>
                    </div>
                </div>

                <!-- Course Card 3 - Data Science & AI -->
                <div class="group relative perspective-1000">
                    <div
                        class="absolute -inset-0.5 bg-linear-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-30 blur-xl transition-all duration-700">
                    </div>

                    <div
                        class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden 
                            hover:border-yellow-500/30 hover:shadow-2xl hover:shadow-yellow-500/20
                            transition-all duration-500 ease-out
                            group-hover:scale-105 group-hover:-translate-y-2">

                        <div class="relative h-56 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                            <div class="absolute inset-0 bg-linear-to-t from-black/90 via-black/40 to-transparent">
                            </div>

                            <div class="absolute top-4 left-4">
                                <span
                                    class="px-4 py-2 bg-black/60 backdrop-blur-xl border border-yellow-500/30 rounded-full text-yellow-400 text-xs font-semibold
                                       group-hover:bg-linear-to-r group-hover:from-yellow-500 group-hover:to-orange-500 group-hover:text-black
                                       transition-all duration-500">
                                    Data Science
                                </span>
                            </div>

                            <div
                                class="absolute top-4 right-4 flex items-center gap-1 px-3 py-2 bg-black/60 backdrop-blur-xl border border-yellow-500/30 rounded-full">
                                <span class="text-yellow-400 text-sm">★</span>
                                <span class="text-white text-sm font-bold">4.7</span>
                                <span class="text-gray-400 text-xs">(1.2k)</span>
                            </div>

                            <div class="absolute bottom-4 left-4 right-4 flex justify-between items-center">
                                <div class="flex items-center gap-2">
                                    <div class="flex -space-x-2">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg"
                                            class="w-8 h-8 rounded-full border-2 border-yellow-500/50">
                                        <img src="https://randomuser.me/api/portraits/women/68.jpg"
                                            class="w-8 h-8 rounded-full border-2 border-yellow-500/50">
                                    </div>
                                    <span class="text-white text-xs">28+ enrolled</span>
                                </div>
                                <span class="px-3 py-1 bg-purple-500 text-white text-xs font-bold rounded-full">New</span>
                            </div>

                            <div
                                class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-linear-to-r from-transparent via-white/20 to-transparent skew-x-12">
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <img src="https://randomuser.me/api/portraits/men/67.jpg"
                                    class="w-10 h-10 rounded-full border-2 border-yellow-500/50">
                                <div>
                                    <h4 class="text-white font-semibold text-sm">Michael Roberts</h4>
                                    <p class="text-gray-400 text-xs">AI Researcher, OpenAI</p>
                                </div>
                            </div>

                            <h3
                                class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors duration-500 line-clamp-2">
                                Data Science & Artificial Intelligence
                            </h3>

                            <p class="text-gray-400 text-sm mb-4 leading-relaxed line-clamp-2">
                                Master Python, Machine Learning, Deep Learning & NLP. Build real-world AI applications.
                            </p>

                            <div class="grid grid-cols-2 gap-3 mb-5">
                                <div class="flex items-center gap-2"><svg class="w-4 h-4 text-yellow-500" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg><span class="text-gray-300 text-xs">16 Weeks</span></div>
                                <div class="flex items-center gap-2"><svg class="w-4 h-4 text-yellow-500" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg><span class="text-gray-300 text-xs">28 Students</span></div>
                                <div class="flex items-center gap-2"><svg class="w-4 h-4 text-yellow-500" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg><span class="text-gray-300 text-xs">Certificate</span></div>
                                <div class="flex items-center gap-2"><svg class="w-4 h-4 text-yellow-500" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg><span class="text-gray-300 text-xs">Support</span></div>
                            </div>

                            <div
                                class="flex items-center justify-between pt-4 border-t border-white/10 group-hover:border-yellow-500/30 transition-colors duration-500">
                                <div>
                                    <span class="text-gray-400 text-xs line-through">$299</span>
                                    <div class="flex items-center gap-1">
                                        <span
                                            class="text-3xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">$79</span>
                                        <span class="text-gray-500 text-xs">74% off</span>
                                    </div>
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
                        </div>
                    </div>
                </div>

                <!-- Course Card 4 - Digital Marketing -->
                <div class="group relative perspective-1000">
                    <div
                        class="absolute -inset-0.5 bg-linear-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-30 blur-xl transition-all duration-700">
                    </div>

                    <div
                        class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden 
                            hover:border-yellow-500/30 hover:shadow-2xl hover:shadow-yellow-500/20
                            transition-all duration-500 ease-out
                            group-hover:scale-105 group-hover:-translate-y-2">

                        <div class="relative h-56 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                            <div class="absolute inset-0 bg-linear-to-t from-black/90 via-black/40 to-transparent">
                            </div>

                            <div class="absolute top-4 left-4">
                                <span
                                    class="px-4 py-2 bg-black/60 backdrop-blur-xl border border-yellow-500/30 rounded-full text-yellow-400 text-xs font-semibold
                                       group-hover:bg-linear-to-r group-hover:from-yellow-500 group-hover:to-orange-500 group-hover:text-black
                                       transition-all duration-500">
                                    Marketing
                                </span>
                            </div>

                            <div
                                class="absolute top-4 right-4 flex items-center gap-1 px-3 py-2 bg-black/60 backdrop-blur-xl border border-yellow-500/30 rounded-full">
                                <span class="text-yellow-400 text-sm">★</span>
                                <span class="text-white text-sm font-bold">4.9</span>
                                <span class="text-gray-400 text-xs">(2.1k)</span>
                            </div>

                            <div class="absolute bottom-4 left-4 right-4 flex justify-between items-center">
                                <div class="flex items-center gap-2">
                                    <div class="flex -space-x-2">
                                        <img src="https://randomuser.me/api/portraits/women/44.jpg"
                                            class="w-8 h-8 rounded-full border-2 border-yellow-500/50">
                                        <img src="https://randomuser.me/api/portraits/men/75.jpg"
                                            class="w-8 h-8 rounded-full border-2 border-yellow-500/50">
                                        <img src="https://randomuser.me/api/portraits/women/68.jpg"
                                            class="w-8 h-8 rounded-full border-2 border-yellow-500/50">
                                    </div>
                                    <span class="text-white text-xs">52+ enrolled</span>
                                </div>
                                <span class="px-3 py-1 bg-yellow-500 text-black text-xs font-bold rounded-full">Hot</span>
                            </div>

                            <div
                                class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-linear-to-r from-transparent via-white/20 to-transparent skew-x-12">
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg"
                                    class="w-10 h-10 rounded-full border-2 border-yellow-500/50">
                                <div>
                                    <h4 class="text-white font-semibold text-sm">Lisa Anderson</h4>
                                    <p class="text-gray-400 text-xs">Marketing Director, HubSpot</p>
                                </div>
                            </div>

                            <h3
                                class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors duration-500 line-clamp-2">
                                Complete Digital Marketing Course
                            </h3>

                            <p class="text-gray-400 text-sm mb-4 leading-relaxed line-clamp-2">
                                Master SEO, Social Media, Google Ads, Email Marketing & Analytics. Drive real results.
                            </p>

                            <div class="grid grid-cols-2 gap-3 mb-5">
                                <div class="flex items-center gap-2"><svg class="w-4 h-4 text-yellow-500" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg><span class="text-gray-300 text-xs">10 Weeks</span></div>
                                <div class="flex items-center gap-2"><svg class="w-4 h-4 text-yellow-500" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg><span class="text-gray-300 text-xs">52 Students</span></div>
                                <div class="flex items-center gap-2"><svg class="w-4 h-4 text-yellow-500" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg><span class="text-gray-300 text-xs">Certificate</span></div>
                                <div class="flex items-center gap-2"><svg class="w-4 h-4 text-yellow-500" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg><span class="text-gray-300 text-xs">Support</span></div>
                            </div>

                            <div
                                class="flex items-center justify-between pt-4 border-t border-white/10 group-hover:border-yellow-500/30 transition-colors duration-500">
                                <div>
                                    <span class="text-gray-400 text-xs line-through">$179</span>
                                    <div class="flex items-center gap-1">
                                        <span
                                            class="text-3xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">$59</span>
                                        <span class="text-gray-500 text-xs">67% off</span>
                                    </div>
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
                        </div>
                    </div>
                </div>
            </div>

            <!-- View All Courses Button with Premium Effects -->
            <div class="text-center mt-16">
                <a href="{{ route('web.courses') }}"
                    class="group relative inline-flex items-center gap-4 px-10 py-5 rounded-full overflow-hidden">
                    <!-- Background with Gradient -->
                    <span
                        class="absolute inset-0 bg-linear-to-r from-yellow-500/10 to-orange-500/10 border border-yellow-500/30 rounded-full"></span>
                    <span
                        class="absolute inset-0 bg-linear-to-r from-yellow-500 to-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-full"></span>

                    <!-- Content -->
                    <span
                        class="relative text-white group-hover:text-black transition-colors duration-500 font-semibold text-lg">View
                        All Courses</span>
                    <span
                        class="relative w-8 h-8 rounded-full bg-yellow-500/20 group-hover:bg-white flex items-center justify-center transition-all duration-500">
                        <span
                            class="text-yellow-400 group-hover:text-black text-xl group-hover:translate-x-1 transition-all duration-500">→</span>
                    </span>

                    <!-- Shine Effect -->
                    <span
                        class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-linear-to-r from-transparent via-white/20 to-transparent skew-x-12"></span>
                </a>
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
        </style>
    </section>

    <!-- About Section - Premium -->
    <section class="py-25 bg-linear-to-b from-black to-[#0a0a0a]">
        <div class="container mx-auto">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left - Image -->
                <div class="relative group">
                    <div
                        class="absolute -inset-4 bg-linear-to-r from-yellow-500 to-orange-500 rounded-3xl opacity-20 group-hover:opacity-30 blur-2xl transition-all duration-700">
                    </div>
                    <div class="relative rounded-3xl overflow-hidden border border-yellow-500/30">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                            class="w-full h-auto group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <div class="backdrop-blur-xl bg-black/60 border border-yellow-500/30 rounded-2xl p-5">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-white/80 text-sm">Active Students</p>
                                        <p class="text-2xl font-bold text-yellow-400">50K+</p>
                                    </div>
                                    <div
                                        class="h-10 w-px bg-linear-to-b from-transparent via-yellow-500/50 to-transparent">
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

                <!-- Right - Content -->
                <div>
                    <span
                        class="inline-flex items-center gap-2 bg-white/5 backdrop-blur-sm border border-yellow-500/20 rounded-full px-5 py-2 mb-6">
                        <span class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></span>
                        <span class="text-yellow-400 font-semibold tracking-wider text-sm">ABOUT OUR LMS</span>
                    </span>
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Empowering Tomorrow's <span
                            class="bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">Leaders
                            Today</span></h2>
                    <p class="text-gray-400 text-lg leading-relaxed mb-8">Our mission is to create a modern learning
                        environment where students can access premium courses, learn from industry experts, and track
                        their progress easily through our cutting-edge platform.</p>

                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-yellow-500/20 flex items-center justify-center"><span
                                    class="text-yellow-400">✓</span></div>
                            <div>
                                <h4 class="text-white font-semibold">Expert Mentors</h4>
                                <p class="text-gray-400 text-sm">150+ professionals</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-yellow-500/20 flex items-center justify-center"><span
                                    class="text-yellow-400">✓</span></div>
                            <div>
                                <h4 class="text-white font-semibold">Live Sessions</h4>
                                <p class="text-gray-400 text-sm">Weekly interactive classes</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-yellow-500/20 flex items-center justify-center"><span
                                    class="text-yellow-400">✓</span></div>
                            <div>
                                <h4 class="text-white font-semibold">Certifications</h4>
                                <p class="text-gray-400 text-sm">Industry recognized</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-yellow-500/20 flex items-center justify-center"><span
                                    class="text-yellow-400">✓</span></div>
                            <div>
                                <h4 class="text-white font-semibold">Community</h4>
                                <p class="text-gray-400 text-sm">24/7 support</p>
                            </div>
                        </div>
                    </div>

                    <a href="#"
                        class="inline-flex items-center gap-3 px-8 py-4 bg-linear-to-r from-yellow-500 to-orange-500 text-black font-semibold rounded-full hover:scale-105 transition-all duration-500 hover:shadow-[0_0_40px_rgba(255,170,0,0.5)]">
                        Learn More About Us <span>→</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section - Ultra Premium -->
    <section class="relative py-25 bg-linear-to-b from-black via-[#0a0a0a] to-black overflow-hidden">

        <!-- Advanced Background Effects -->
        <div class="absolute inset-0">
            <!-- Gradient Orbs with Animation -->
            <div
                class="absolute top-40 left-1/4 w-150 h-150 bg-linear-to-r from-yellow-500/5 via-orange-500/5 to-transparent rounded-full blur-[120px] animate-pulse-slow">
            </div>
            <div
                class="absolute bottom-40 right-1/4 w-150 h-150 bg-linear-to-l from-yellow-500/5 via-orange-500/5 to-transparent rounded-full blur-[120px] animate-pulse-slow animation-delay-2000">
            </div>

            <!-- Animated Mesh Pattern -->
            <div class="absolute inset-0 opacity-20"
                style="background-image: 
                     linear-gradient(45deg, rgba(255,215,0,0.02) 25%, transparent 25%),
                     linear-gradient(-45deg, rgba(255,215,0,0.02) 25%, transparent 25%),
                     linear-gradient(45deg, transparent 75%, rgba(255,215,0,0.02) 75%),
                     linear-gradient(-45deg, transparent 75%, rgba(255,215,0,0.02) 75%);
                     background-size: 40px 40px;
                     background-position: 0 0, 0 20px, 20px -20px, -20px 0px;">
            </div>

            <!-- Floating Particles -->
            <div class="absolute inset-0">
                <div class="absolute top-1/3 left-1/4 w-2 h-2 bg-yellow-400/20 rounded-full animate-float-slow"></div>
                <div class="absolute top-2/3 right-1/3 w-3 h-3 bg-orange-400/20 rounded-full animate-float"></div>
                <div class="absolute bottom-1/4 left-1/2 w-1.5 h-1.5 bg-yellow-500/20 rounded-full animate-float-slower">
                </div>
            </div>
        </div>

        <div class="relative container mx-auto">

            <!-- Section Header with Premium Animations -->
            <div class="text-center mb-20">
                <!-- Animated Badge with Quote Icon -->
                <div
                    class="inline-flex items-center gap-4 bg-linear-to-r from-yellow-500/10 to-orange-500/10 backdrop-blur-xl border border-yellow-500/30 rounded-full px-6 py-3 mb-8 relative group cursor-pointer">
                    <span class="relative flex h-3 w-3">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-yellow-500"></span>
                    </span>
                    <span
                        class="text-yellow-400 font-semibold tracking-wider text-sm group-hover:text-yellow-300 transition-colors">✦
                        STUDENT SUCCESS STORIES ✦</span>
                    <span class="bg-yellow-500/20 text-yellow-400 px-3 py-1 rounded-full text-xs font-bold">REAL
                        REVIEWS</span>

                    <!-- Shine Effect -->
                    <div
                        class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-linear-to-r from-transparent via-white/10 to-transparent skew-x-12">
                    </div>
                </div>

                <!-- Main Heading with Advanced Typography -->
                <h2 class="text-5xl md:text-7xl font-bold mb-6 tracking-tight">
                    <span class="bg-linear-to-r from-white via-gray-300 to-white bg-clip-text text-transparent">What
                        Our</span>
                    <span
                        class="bg-linear-to-r from-yellow-400 via-orange-500 to-yellow-600 bg-clip-text text-transparent relative inline-block mx-4">
                        Students
                        <svg class="absolute -bottom-4 left-0 w-full" viewBox="0 0 200 8" fill="none">
                            <path d="M2 4C50 1 150 1 198 4" stroke="url(#gradient)" stroke-width="3"
                                stroke-linecap="round" />
                            <defs>
                                <linearGradient id="gradient" x1="0%" y1="0%" x2="100%"
                                    y2="0%">
                                    <stop offset="0%" stop-color="#FBBF24" />
                                    <stop offset="50%" stop-color="#F97316" />
                                    <stop offset="100%" stop-color="#EAB308" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                    <span class="bg-linear-to-r from-white via-gray-300 to-white bg-clip-text text-transparent">Say</span>
                </h2>

                <!-- Description with Stats -->
                <p class="text-gray-400 max-w-3xl mx-auto text-lg md:text-xl leading-relaxed mb-10">
                    Join <span class="text-yellow-400 font-bold">50,000+</span> happy students who have transformed
                    their careers and lives through our platform
                </p>

                <!-- Rating Summary Cards -->
                <div class="flex flex-wrap justify-center gap-8 mb-12">
                    <div
                        class="flex items-center gap-3 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl px-6 py-3">
                        <div class="flex gap-1 text-yellow-400 text-xl">★★★★★</div>
                        <span class="text-white font-bold">4.9</span>
                        <span class="text-gray-400 text-sm">(12.5k reviews)</span>
                    </div>
                    <div
                        class="flex items-center gap-3 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl px-6 py-3">
                        <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5">
                            </path>
                        </svg>
                        <span class="text-white font-bold">98%</span>
                        <span class="text-gray-400 text-sm">Success Rate</span>
                    </div>
                    <div
                        class="flex items-center gap-3 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl px-6 py-3">
                        <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span class="text-white font-bold">500+</span>
                        <span class="text-gray-400 text-sm">Job Placements</span>
                    </div>
                </div>
            </div>

            <!-- Testimonials Grid with Premium Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Testimonial Card 1 - Sarah Johnson -->
                <div class="group relative perspective-1000">
                    <!-- 3D Glow Effect -->
                    <div
                        class="absolute -inset-0.5 bg-linear-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-30 blur-xl transition-all duration-700">
                    </div>

                    <!-- Main Card -->
                    <div
                        class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 
                            hover:border-yellow-500/30 hover:shadow-2xl hover:shadow-yellow-500/20
                            transition-all duration-500 ease-out
                            group-hover:scale-105 group-hover:-translate-y-2">

                        <!-- Quote Icon -->
                        <div class="absolute top-6 right-6 text-6xl text-yellow-500/20 font-serif">"</div>

                        <!-- Profile Section with Verified Badge -->
                        <div class="flex items-start gap-4 mb-6">
                            <div class="relative">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg"
                                    class="w-20 h-20 rounded-full border-3 border-yellow-500/50 group-hover:border-yellow-400 transition-all duration-500">
                                <div
                                    class="absolute -bottom-1 -right-1 w-6 h-6 bg-linear-to-r from-yellow-500 to-orange-500 rounded-full flex items-center justify-center">
                                    <svg class="w-3 h-3 text-black" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-1">
                                    <h4 class="text-xl font-bold text-white group-hover:text-yellow-400 transition-colors">
                                        Sarah Johnson</h4>
                                    <span
                                        class="px-2 py-0.5 bg-blue-500/20 text-blue-400 text-xs rounded-full">Verified</span>
                                </div>
                                <p class="text-gray-400 text-sm mb-2">Senior Web Developer at Google</p>

                                <!-- Rating with Stars -->
                                <div class="flex items-center gap-2">
                                    <div class="flex gap-1 text-yellow-400">
                                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                                    </div>
                                    <span class="text-gray-400 text-sm">5.0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Content -->
                        <div class="relative">
                            <p class="text-gray-300 leading-relaxed mb-4 relative z-10">
                                "This platform completely transformed my career. The courses are well-structured and the
                                mentors are incredibly supportive. Landed my dream job at Google within 3 months of
                                completing the Full Stack program!"
                            </p>

                            <!-- Achievement Tags -->
                            <div class="flex flex-wrap gap-2 mt-4">
                                <span
                                    class="px-3 py-1 bg-yellow-500/10 border border-yellow-500/30 rounded-full text-yellow-400 text-xs">🎓
                                    Full Stack Graduate</span>
                                <span
                                    class="px-3 py-1 bg-green-500/10 border border-green-500/30 rounded-full text-green-400 text-xs">💼
                                    Placed at Google</span>
                                <span
                                    class="px-3 py-1 bg-purple-500/10 border border-purple-500/30 rounded-full text-purple-400 text-xs">⭐
                                    Top Performer</span>
                            </div>

                            <!-- Course Info -->
                            <div class="flex items-center gap-4 mt-6 pt-4 border-t border-white/10">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-gray-400 text-xs">Completed: 2024</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-gray-400 text-xs">Certificate Earned</span>
                                </div>
                            </div>
                        </div>

                        <!-- Hover Indicator -->
                        <div
                            class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <span class="text-yellow-400 text-sm flex items-center gap-1">
                                Read Full Story <span
                                    class="text-lg group-hover:translate-x-1 transition-transform">→</span>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Card 2 - Michael Chen with Video Thumbnail -->
                <div class="group relative perspective-1000">
                    <div
                        class="absolute -inset-0.5 bg-linear-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-30 blur-xl transition-all duration-700">
                    </div>

                    <div
                        class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 
                            hover:border-yellow-500/30 hover:shadow-2xl hover:shadow-yellow-500/20
                            transition-all duration-500 ease-out
                            group-hover:scale-105 group-hover:-translate-y-2">

                        <div class="absolute top-6 right-6 text-6xl text-yellow-500/20 font-serif">"</div>

                        <!-- Video Testimonial Thumbnail -->
                        <div class="relative mb-6 rounded-xl overflow-hidden cursor-pointer group/video">
                            <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                class="w-full h-32 object-cover group-hover/video:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                                <div
                                    class="w-12 h-12 rounded-full bg-linear-to-r from-yellow-500 to-orange-500 flex items-center justify-center group-hover/video:scale-110 transition-transform duration-300">
                                    <span class="text-black text-2xl">▶</span>
                                </div>
                            </div>
                            <span
                                class="absolute bottom-2 right-2 px-2 py-1 bg-black/60 text-white text-xs rounded">2:34</span>
                        </div>

                        <div class="flex items-start gap-4 mb-6">
                            <div class="relative">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg"
                                    class="w-20 h-20 rounded-full border-3 border-yellow-500/50 group-hover:border-yellow-400 transition-all duration-500">
                                <div
                                    class="absolute -bottom-1 -right-1 w-6 h-6 bg-linear-to-r from-yellow-500 to-orange-500 rounded-full flex items-center justify-center">
                                    <svg class="w-3 h-3 text-black" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-1">
                                    <h4 class="text-xl font-bold text-white group-hover:text-yellow-400 transition-colors">
                                        Michael Chen</h4>
                                    <span
                                        class="px-2 py-0.5 bg-blue-500/20 text-blue-400 text-xs rounded-full">Verified</span>
                                </div>
                                <p class="text-gray-400 text-sm mb-2">Data Scientist at OpenAI</p>
                                <div class="flex gap-1 text-yellow-400">★★★★★ <span
                                        class="text-gray-400 text-sm ml-2">5.0</span></div>
                            </div>
                        </div>

                        <div class="relative">
                            <p class="text-gray-300 leading-relaxed mb-4">
                                "The data science track is outstanding. Real-world projects and expert guidance helped
                                me switch careers smoothly. Best investment I ever made! Now leading AI projects at
                                OpenAI."
                            </p>

                            <div class="flex flex-wrap gap-2 mt-4">
                                <span
                                    class="px-3 py-1 bg-yellow-500/10 border border-yellow-500/30 rounded-full text-yellow-400 text-xs">🤖
                                    AI Graduate</span>
                                <span
                                    class="px-3 py-1 bg-green-500/10 border border-green-500/30 rounded-full text-green-400 text-xs">💼
                                    Placed at OpenAI</span>
                                <span
                                    class="px-3 py-1 bg-purple-500/10 border border-purple-500/30 rounded-full text-purple-400 text-xs">📊
                                    4 Projects</span>
                            </div>

                            <div class="flex items-center gap-4 mt-6 pt-4 border-t border-white/10">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-gray-400 text-xs">2024 Graduate</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-gray-400 text-xs">Certified</span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <span class="text-yellow-400 text-sm flex items-center gap-1">
                                Watch Video <span class="text-lg group-hover:translate-x-1 transition-transform">→</span>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Card 3 - Priya Patel -->
                <div class="group relative perspective-1000">
                    <div
                        class="absolute -inset-0.5 bg-linear-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-30 blur-xl transition-all duration-700">
                    </div>

                    <div
                        class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 
                            hover:border-yellow-500/30 hover:shadow-2xl hover:shadow-yellow-500/20
                            transition-all duration-500 ease-out
                            group-hover:scale-105 group-hover:-translate-y-2">

                        <div class="absolute top-6 right-6 text-6xl text-yellow-500/20 font-serif">"</div>

                        <div class="flex items-start gap-4 mb-6">
                            <div class="relative">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg"
                                    class="w-20 h-20 rounded-full border-3 border-yellow-500/50 group-hover:border-yellow-400 transition-all duration-500">
                                <div
                                    class="absolute -bottom-1 -right-1 w-6 h-6 bg-linear-to-r from-yellow-500 to-orange-500 rounded-full flex items-center justify-center">
                                    <svg class="w-3 h-3 text-black" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-1">
                                    <h4 class="text-xl font-bold text-white group-hover:text-yellow-400 transition-colors">
                                        Priya Patel</h4>
                                    <span
                                        class="px-2 py-0.5 bg-blue-500/20 text-blue-400 text-xs rounded-full">Verified</span>
                                    <span
                                        class="px-2 py-0.5 bg-yellow-500/20 text-yellow-400 text-xs rounded-full">Featured</span>
                                </div>
                                <p class="text-gray-400 text-sm mb-2">Lead UI/UX Designer at Adobe</p>
                                <div class="flex gap-1 text-yellow-400">★★★★★ <span
                                        class="text-gray-400 text-sm ml-2">5.0</span></div>
                            </div>
                        </div>

                        <div class="relative">
                            <p class="text-gray-300 leading-relaxed mb-4">
                                "The UI/UX course exceeded my expectations. The portfolio projects and feedback from
                                mentors helped me get multiple job offers. Within 6 months, I went from junior to lead
                                designer at Adobe!"
                            </p>

                            <!-- Portfolio Preview -->
                            <div class="grid grid-cols-3 gap-2 mt-4 mb-4">
                                <div class="relative rounded-lg overflow-hidden group/portfolio">
                                    <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                        class="w-full h-16 object-cover">
                                    <div
                                        class="absolute inset-0 bg-linear-to-r from-yellow-500/50 to-orange-500/50 opacity-0 group-hover/portfolio:opacity-100 transition-opacity">
                                    </div>
                                </div>
                                <div class="relative rounded-lg overflow-hidden group/portfolio">
                                    <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                        class="w-full h-16 object-cover">
                                    <div
                                        class="absolute inset-0 bg-linear-to-r from-yellow-500/50 to-orange-500/50 opacity-0 group-hover/portfolio:opacity-100 transition-opacity">
                                    </div>
                                </div>
                                <div class="relative rounded-lg overflow-hidden group/portfolio">
                                    <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                        class="w-full h-16 object-cover">
                                    <div
                                        class="absolute inset-0 bg-linear-to-r from-yellow-500/50 to-orange-500/50 opacity-0 group-hover/portfolio:opacity-100 transition-opacity">
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-2 mt-2">
                                <span
                                    class="px-3 py-1 bg-yellow-500/10 border border-yellow-500/30 rounded-full text-yellow-400 text-xs">🎨
                                    UI/UX Graduate</span>
                                <span
                                    class="px-3 py-1 bg-green-500/10 border border-green-500/30 rounded-full text-green-400 text-xs">💼
                                    Placed at Adobe</span>
                                <span
                                    class="px-3 py-1 bg-purple-500/10 border border-purple-500/30 rounded-full text-purple-400 text-xs">🌟
                                    5 Projects</span>
                            </div>

                            <div class="flex items-center gap-4 mt-6 pt-4 border-t border-white/10">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-gray-400 text-xs">2024 Graduate</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-gray-400 text-xs">Certified</span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <span class="text-yellow-400 text-sm flex items-center gap-1">
                                View Portfolio <span
                                    class="text-lg group-hover:translate-x-1 transition-transform">→</span>
                            </span>
                        </div>
                    </div>
                </div>
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
        </style>
    </section>

    <!-- CTA Section - Ultra Premium Conversion Optimized -->
    <section class="relative py-25 bg-linear-to-b from-black via-[#0a0a0a] to-black overflow-hidden">

        <!-- Advanced Background Effects -->
        <div class="absolute inset-0">
            <!-- Gradient Orbs with Animation -->
            <div
                class="absolute top-40 left-1/4 w-200 h-200 bg-linear-to-r from-yellow-500/5 via-orange-500/5 to-transparent rounded-full blur-[150px] animate-pulse-slow">
            </div>
            <div
                class="absolute bottom-40 right-1/4 w-200 h-200 bg-linear-to-l from-yellow-500/5 via-orange-500/5 to-transparent rounded-full blur-[150px] animate-pulse-slow animation-delay-2000">
            </div>

            <!-- Animated Particle Field -->
            <div class="absolute inset-0">
                <div class="absolute top-1/3 left-1/4 w-1 h-1 bg-yellow-400/30 rounded-full animate-float"></div>
                <div class="absolute top-2/3 right-1/3 w-2 h-2 bg-orange-400/30 rounded-full animate-float-slow">
                </div>
                <div class="absolute bottom-1/4 left-1/2 w-1.5 h-1.5 bg-yellow-500/30 rounded-full animate-float-slower">
                </div>
                <div
                    class="absolute top-1/2 left-1/3 w-1 h-1 bg-yellow-300/30 rounded-full animate-float animation-delay-1000">
                </div>
                <div
                    class="absolute top-1/4 right-1/4 w-2 h-2 bg-orange-300/30 rounded-full animate-float-slow animation-delay-2000">
                </div>
            </div>

            <!-- Animated Grid Pattern -->
            <div class="absolute inset-0 opacity-10"
                style="background-image: 
                     linear-gradient(rgba(255,215,0,0.03) 1px, transparent 1px),
                     linear-gradient(90deg, rgba(255,215,0,0.03) 1px, transparent 1px);
                     background-size: 50px 50px;
                     animation: gridMove 20s linear infinite;">
            </div>
        </div>

        <div class="">
            <!-- Main CTA Card -->
            <div class="relative container  mx-auto">
                <!-- Premium Glow Effect -->
                <div
                    class="absolute -inset-1 bg-linear-to-r from-yellow-500 to-orange-500 rounded-3xl opacity-20 blur-2xl animate-pulse-slow">
                </div>
                <div
                    class="absolute -inset-2 bg-linear-to-r from-yellow-500 to-orange-500 rounded-3xl opacity-10 blur-3xl">
                </div>

                <!-- Main Content Card -->
                <div
                    class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-2xl border border-white/10 rounded-3xl overflow-hidden shadow-2xl">

                    <!-- Background Image with Overlay -->
                    <div class="absolute inset-0">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                            class="w-full h-full object-cover opacity-10 scale-110 animate-ken-burns">
                        <div class="absolute inset-0 bg-linear-to-r from-black via-black/90 to-black"></div>
                    </div>

                    <!-- Floating Elements -->
                    <div class="absolute top-10 left-10 w-32 h-32 bg-yellow-500/10 rounded-full blur-3xl animate-float">
                    </div>
                    <div
                        class="absolute bottom-10 right-10 w-40 h-40 bg-orange-500/10 rounded-full blur-3xl animate-float animation-delay-2000">
                    </div>

                    <!-- Content -->
                    <div class="relative py-20 px-8 md:px-20 text-center z-10">

                        <!-- Limited Time Offer Badge -->
                        <div
                            class="inline-flex items-center gap-3 bg-linear-to-r from-yellow-500/20 to-orange-500/20 backdrop-blur-xl border border-yellow-500/30 rounded-full px-6 py-3 mb-8 relative group cursor-pointer">
                            <span class="relative flex h-3 w-3">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                            </span>
                            <span class="text-yellow-400 font-semibold tracking-wider text-sm">⚡ LIMITED TIME OFFER
                                ⚡</span>
                            <span
                                class="bg-red-500/20 text-red-400 px-3 py-1 rounded-full text-xs font-bold animate-pulse">HURRY!</span>

                            <!-- Shine Effect -->
                            <div
                                class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-linear-to-r from-transparent via-white/20 to-transparent skew-x-12">
                            </div>
                        </div>

                        <!-- Main Heading with Gradient -->
                        <h2 class="text-5xl md:text-7xl font-bold mb-6 tracking-tight">
                            <span
                                class="bg-linear-to-r from-white via-gray-300 to-white bg-clip-text text-transparent">Ready
                                to</span>
                            <span
                                class="bg-linear-to-r from-yellow-400 via-orange-500 to-yellow-600 bg-clip-text text-transparent relative inline-block mx-4">
                                Transform
                                <svg class="absolute -bottom-4 left-0 w-full" viewBox="0 0 200 8" fill="none">
                                    <path d="M2 4C50 1 150 1 198 4" stroke="url(#gradient)" stroke-width="3"
                                        stroke-linecap="round" />
                                    <defs>
                                        <linearGradient id="gradient" x1="0%" y1="0%" x2="100%"
                                            y2="0%">
                                            <stop offset="0%" stop-color="#FBBF24" />
                                            <stop offset="50%" stop-color="#F97316" />
                                            <stop offset="100%" stop-color="#EAB308" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span
                                class="bg-linear-to-r from-white via-gray-300 to-white bg-clip-text text-transparent block mt-2">Your
                                Future?</span>
                        </h2>

                        <!-- Description with Highlights -->
                        <p class="text-gray-400 max-w-3xl mx-auto text-lg md:text-xl leading-relaxed mb-10">
                            Join <span class="text-yellow-400 font-bold">50,000+</span> students already learning on
                            our platform.
                            Get <span class="text-yellow-400 font-bold">20% off</span> on annual plans +
                            <span class="text-yellow-400 font-bold">bonus workshops</span> worth $500
                        </p>

                        <!-- Countdown Timer -->
                        <div class="flex justify-center items-center gap-6 mb-12">
                            <div class="text-center">
                                <div
                                    class="text-4xl md:text-5xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                                    02</div>
                                <div class="text-gray-500 text-xs uppercase tracking-wider">Days</div>
                            </div>
                            <div class="text-4xl text-yellow-500">:</div>
                            <div class="text-center">
                                <div
                                    class="text-4xl md:text-5xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                                    23</div>
                                <div class="text-gray-500 text-xs uppercase tracking-wider">Hours</div>
                            </div>
                            <div class="text-4xl text-yellow-500">:</div>
                            <div class="text-center">
                                <div
                                    class="text-4xl md:text-5xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                                    59</div>
                                <div class="text-gray-500 text-xs uppercase tracking-wider">Mins</div>
                            </div>
                            <div class="text-4xl text-yellow-500">:</div>
                            <div class="text-center">
                                <div
                                    class="text-4xl md:text-5xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                                    45</div>
                                <div class="text-gray-500 text-xs uppercase tracking-wider">Secs</div>
                            </div>
                        </div>

                        <!-- CTA Buttons with Enhanced Design -->
                        <div class="flex flex-wrap gap-6 justify-center mb-12">
                            <!-- Primary CTA -->
                            <a href="#" class="group relative px-10 py-5 rounded-full overflow-hidden">
                                <!-- Background with Gradient -->
                                <span class="absolute inset-0 bg-linear-to-r from-yellow-400 to-orange-500"></span>
                                <span
                                    class="absolute inset-0 bg-linear-to-r from-yellow-300 to-orange-400 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>

                                <!-- Content -->
                                <span class="relative text-black font-bold text-lg flex items-center gap-3">
                                    <span>Start Free Trial</span>
                                    <span class="text-2xl group-hover:translate-x-2 transition-transform">→</span>
                                </span>

                                <!-- Shine Effect -->
                                <span
                                    class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-linear-to-r from-transparent via-white/30 to-transparent skew-x-12"></span>

                                <!-- Tooltip -->
                                <span
                                    class="absolute -top-12 left-1/2 -translate-x-1/2 px-3 py-2 bg-gray-900 text-white text-sm rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                                    No credit card required
                                    <span
                                        class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-2 h-2 bg-gray-900 rotate-45"></span>
                                </span>
                            </a>

                            <!-- Secondary CTA -->
                            <a href="#"
                                class="group relative px-10 py-5 rounded-full overflow-hidden border-2 border-yellow-500/30 hover:border-yellow-500 transition-all duration-500">
                                <span
                                    class="absolute inset-0 bg-linear-to-r from-yellow-500/10 to-orange-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                                <span
                                    class="relative text-yellow-400 group-hover:text-yellow-300 font-bold text-lg flex items-center gap-3">
                                    <span>Contact Sales</span>
                                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                        </div>

                        <!-- Trust Badges -->
                        <div class="flex flex-wrap justify-center items-center gap-8">
                            <!-- Money Back Guarantee -->
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-full bg-green-500/20 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="text-left">
                                    <p class="text-white font-semibold">30-Day Money Back</p>
                                    <p class="text-gray-500 text-sm">Guarantee</p>
                                </div>
                            </div>

                            <!-- Secure Payment -->
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-full bg-blue-500/20 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="text-left">
                                    <p class="text-white font-semibold">Secure Payment</p>
                                    <p class="text-gray-500 text-sm">256-bit SSL</p>
                                </div>
                            </div>

                            <!-- Instant Access -->
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-full bg-purple-500/20 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="text-left">
                                    <p class="text-white font-semibold">Instant Access</p>
                                    <p class="text-gray-500 text-sm">Start immediately</p>
                                </div>
                            </div>
                        </div>

                        <!-- Social Proof -->
                        <div class="mt-12 pt-8 border-t border-white/10">
                            <div class="flex flex-wrap justify-center items-center gap-8">
                                <!-- Student Avatars -->
                                <div class="flex -space-x-3">
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg"
                                        class="w-10 h-10 rounded-full border-2 border-yellow-500/50 hover:scale-110 transition-transform">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg"
                                        class="w-10 h-10 rounded-full border-2 border-yellow-500/50 hover:scale-110 transition-transform">
                                    <img src="https://randomuser.me/api/portraits/women/68.jpg"
                                        class="w-10 h-10 rounded-full border-2 border-yellow-500/50 hover:scale-110 transition-transform">
                                    <img src="https://randomuser.me/api/portraits/men/75.jpg"
                                        class="w-10 h-10 rounded-full border-2 border-yellow-500/50 hover:scale-110 transition-transform">
                                    <div
                                        class="w-10 h-10 rounded-full bg-linear-to-r from-yellow-500 to-orange-500 flex items-center justify-center text-black font-bold text-sm border-2 border-yellow-500/50">
                                        2k+</div>
                                </div>
                                <div class="text-left">
                                    <div class="flex items-center gap-2">
                                        <span class="text-yellow-400">★★★★★</span>
                                        <span class="text-white font-bold">4.9/5</span>
                                    </div>
                                    <p class="text-gray-500 text-sm">from 12,500+ reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            @keyframes float {

                0%,
                100% {
                    transform: translateY(0px);
                }

                50% {
                    transform: translateY(-20px);
                }
            }

            @keyframes float-slow {

                0%,
                100% {
                    transform: translateY(0px);
                }

                50% {
                    transform: translateY(-30px);
                }
            }

            @keyframes float-slower {

                0%,
                100% {
                    transform: translateY(0px);
                }

                50% {
                    transform: translateY(-40px);
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

            @keyframes gridMove {
                0% {
                    transform: translateY(0);
                }

                100% {
                    transform: translateY(50px);
                }
            }

            @keyframes kenBurns {
                0% {
                    transform: scale(1);
                }

                100% {
                    transform: scale(1.1);
                }
            }

            .animate-ken-burns {
                animation: kenBurns 20s ease alternate infinite;
            }

            .animation-delay-1000 {
                animation-delay: 1s;
            }

            .animation-delay-2000 {
                animation-delay: 2s;
            }
        </style>
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
