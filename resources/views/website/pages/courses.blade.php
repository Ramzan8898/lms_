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

                <!-- Category Filter Pills -->
                <div class="flex flex-wrap justify-center gap-4 mt-12">
                    <button
                        class="px-8 py-3 rounded-full bg-linear-to-r from-yellow-500 to-orange-500 text-black font-semibold hover:scale-105 transition-transform duration-300 shadow-lg shadow-yellow-500/20">
                        All Courses
                    </button>
                    <button
                        class="px-8 py-3 rounded-full border border-white/10 text-white/70 hover:text-yellow-400 hover:border-yellow-500/50 backdrop-blur-sm transition-all duration-300">
                        Development
                    </button>
                    <button
                        class="px-8 py-3 rounded-full border border-white/10 text-white/70 hover:text-yellow-400 hover:border-yellow-500/50 backdrop-blur-sm transition-all duration-300">
                        Design
                    </button>
                    <button
                        class="px-8 py-3 rounded-full border border-white/10 text-white/70 hover:text-yellow-400 hover:border-yellow-500/50 backdrop-blur-sm transition-all duration-300">
                        Business
                    </button>
                    <button
                        class="px-8 py-3 rounded-full border border-white/10 text-white/70 hover:text-yellow-400 hover:border-yellow-500/50 backdrop-blur-sm transition-all duration-300">
                        Marketing
                    </button>
                </div>
            </div>

            <!-- Premium Course Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Course Card 1 - Featured -->
                <div class="group relative">
                    <!-- Card Glow Effect on Hover -->
                    <div
                        class="absolute -inset-0.5 bg-linear-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-30 blur-xl transition-all duration-700">
                    </div>

                    <!-- Main Card -->
                    <div
                        class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden hover:-translate-y-2 transition-all duration-500 hover:border-yellow-500/30">

                        <!-- Image Container with Overlay -->
                        <div class="relative h-56 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Web Development Course"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/30 to-transparent"></div>

                            <!-- Category Badge -->
                            <span
                                class="absolute top-4 left-4 px-4 py-1.5 bg-black/60 backdrop-blur-sm border border-yellow-500/30 rounded-full text-yellow-400 text-sm font-semibold">
                                Development
                            </span>

                            <!-- Rating Badge -->
                            <div
                                class="absolute top-4 right-4 flex items-center space-x-1 px-3 py-1.5 bg-black/60 backdrop-blur-sm rounded-full">
                                <span class="text-yellow-400 text-sm">★</span>
                                <span class="text-white text-sm font-semibold">4.9</span>
                                <span class="text-gray-400 text-xs">(2.5k)</span>
                            </div>

                            <!-- Duration Badge -->
                            <div class="absolute bottom-4 left-4 flex items-center space-x-2">
                                <span
                                    class="px-3 py-1 bg-black/60 backdrop-blur-sm rounded-full text-gray-300 text-xs flex items-center">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    12 Weeks
                                </span>
                                <span
                                    class="px-3 py-1 bg-black/60 backdrop-blur-sm rounded-full text-gray-300 text-xs flex items-center">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    45 Students
                                </span>
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div class="p-6">
                            <!-- Title and Instructor -->
                            <div class="mb-4">
                                <h3
                                    class="text-2xl font-bold text-white mb-2 group-hover:text-yellow-400 transition-colors">
                                    Full Stack Web Development
                                </h3>
                                <div class="flex items-center space-x-2">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Instructor"
                                        class="w-6 h-6 rounded-full border-2 border-yellow-500/50">
                                    <span class="text-gray-400 text-sm">Sarah Johnson</span>
                                    <span class="text-gray-600 text-sm">•</span>
                                    <span class="text-yellow-500 text-sm">Master</span>
                                </div>
                            </div>

                            <!-- Description -->
                            <p class="text-gray-400 text-sm leading-relaxed mb-6 line-clamp-2">
                                Master modern web development with React, Node.js, and MongoDB. Build real-world
                                applications and learn industry best practices.
                            </p>

                            <!-- Course Stats -->
                            <div class="flex items-center justify-between mb-6 pb-6 border-b border-white/10">
                                <div class="flex items-center space-x-4">
                                    <div class="flex items-center space-x-1">
                                        <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <span class="text-gray-300 text-sm">4.9</span>
                                    </div>
                                    <div class="flex items-center space-x-1">
                                        <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                            </path>
                                        </svg>
                                        <span class="text-gray-300 text-sm">24 Lessons</span>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span
                                        class="text-3xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">$49</span>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex items-center space-x-3">
                                <a href="#"
                                    class="flex-1 px-6 py-3 bg-linear-to-r from-yellow-500 to-orange-500 text-black font-semibold rounded-xl hover:scale-105 transition-transform duration-300 text-center shadow-lg shadow-yellow-500/20">
                                    Enroll Now
                                </a>
                                <button
                                    class="p-3 border border-white/10 rounded-xl hover:border-yellow-500/50 hover:text-yellow-400 transition-all duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course Card 2 - UI/UX Design -->
                <div class="group relative">
                    <div
                        class="absolute -inset-0.5 bg-linear-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-30 blur-xl transition-all duration-700">
                    </div>
                    <div
                        class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden hover:-translate-y-2 transition-all duration-500 hover:border-yellow-500/30">

                        <div class="relative h-56 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="UI/UX Design Course"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                            <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/30 to-transparent"></div>

                            <span
                                class="absolute top-4 left-4 px-4 py-1.5 bg-black/60 backdrop-blur-sm border border-yellow-500/30 rounded-full text-yellow-400 text-sm font-semibold">
                                Design
                            </span>

                            <div
                                class="absolute top-4 right-4 flex items-center space-x-1 px-3 py-1.5 bg-black/60 backdrop-blur-sm rounded-full">
                                <span class="text-yellow-400 text-sm">★</span>
                                <span class="text-white text-sm font-semibold">4.8</span>
                                <span class="text-gray-400 text-xs">(1.8k)</span>
                            </div>

                            <div class="absolute bottom-4 left-4 flex items-center space-x-2">
                                <span
                                    class="px-3 py-1 bg-black/60 backdrop-blur-sm rounded-full text-gray-300 text-xs flex items-center">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    8 Weeks
                                </span>
                                <span
                                    class="px-3 py-1 bg-black/60 backdrop-blur-sm rounded-full text-gray-300 text-xs flex items-center">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    32 Students
                                </span>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="mb-4">
                                <h3
                                    class="text-2xl font-bold text-white mb-2 group-hover:text-yellow-400 transition-colors">
                                    UI/UX Design Masterclass
                                </h3>
                                <div class="flex items-center space-x-2">
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Instructor"
                                        class="w-6 h-6 rounded-full border-2 border-yellow-500/50">
                                    <span class="text-gray-400 text-sm">Emily Chen</span>
                                    <span class="text-gray-600 text-sm">•</span>
                                    <span class="text-yellow-500 text-sm">Expert</span>
                                </div>
                            </div>

                            <p class="text-gray-400 text-sm leading-relaxed mb-6 line-clamp-2">
                                Learn user-centered design principles, wireframing, prototyping, and Figma. Create stunning
                                interfaces that users love.
                            </p>

                            <div class="flex items-center justify-between mb-6 pb-6 border-b border-white/10">
                                <div class="flex items-center space-x-4">
                                    <div class="flex items-center space-x-1">
                                        <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <span class="text-gray-300 text-sm">4.8</span>
                                    </div>
                                    <div class="flex items-center space-x-1">
                                        <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                            </path>
                                        </svg>
                                        <span class="text-gray-300 text-sm">18 Lessons</span>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span
                                        class="text-3xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">$39</span>
                                </div>
                            </div>

                            <div class="flex items-center space-x-3">
                                <a href="#"
                                    class="flex-1 px-6 py-3 bg-linear-to-r from-yellow-500 to-orange-500 text-black font-semibold rounded-xl hover:scale-105 transition-transform duration-300 text-center shadow-lg shadow-yellow-500/20">
                                    Enroll Now
                                </a>
                                <button
                                    class="p-3 border border-white/10 rounded-xl hover:border-yellow-500/50 hover:text-yellow-400 transition-all duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course Card 3 - Data Science -->
                <div class="group relative">
                    <div
                        class="absolute -inset-0.5 bg-linear-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-30 blur-xl transition-all duration-700">
                    </div>
                    <div
                        class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden hover:-translate-y-2 transition-all duration-500 hover:border-yellow-500/30">

                        <div class="relative h-56 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Data Science Course"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                            <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/30 to-transparent"></div>

                            <span
                                class="absolute top-4 left-4 px-4 py-1.5 bg-black/60 backdrop-blur-sm border border-yellow-500/30 rounded-full text-yellow-400 text-sm font-semibold">
                                Data Science
                            </span>

                            <div
                                class="absolute top-4 right-4 flex items-center space-x-1 px-3 py-1.5 bg-black/60 backdrop-blur-sm rounded-full">
                                <span class="text-yellow-400 text-sm">★</span>
                                <span class="text-white text-sm font-semibold">4.7</span>
                                <span class="text-gray-400 text-xs">(1.2k)</span>
                            </div>

                            <div class="absolute bottom-4 left-4 flex items-center space-x-2">
                                <span
                                    class="px-3 py-1 bg-black/60 backdrop-blur-sm rounded-full text-gray-300 text-xs flex items-center">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    16 Weeks
                                </span>
                                <span
                                    class="px-3 py-1 bg-black/60 backdrop-blur-sm rounded-full text-gray-300 text-xs flex items-center">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    28 Students
                                </span>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="mb-4">
                                <h3
                                    class="text-2xl font-bold text-white mb-2 group-hover:text-yellow-400 transition-colors">
                                    Data Science & AI
                                </h3>
                                <div class="flex items-center space-x-2">
                                    <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Instructor"
                                        class="w-6 h-6 rounded-full border-2 border-yellow-500/50">
                                    <span class="text-gray-400 text-sm">Michael Roberts</span>
                                    <span class="text-gray-600 text-sm">•</span>
                                    <span class="text-yellow-500 text-sm">PhD</span>
                                </div>
                            </div>

                            <p class="text-gray-400 text-sm leading-relaxed mb-6 line-clamp-2">
                                Master Python, Machine Learning, and AI algorithms. Work with real datasets and build
                                predictive models.
                            </p>

                            <div class="flex items-center justify-between mb-6 pb-6 border-b border-white/10">
                                <div class="flex items-center space-x-4">
                                    <div class="flex items-center space-x-1">
                                        <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <span class="text-gray-300 text-sm">4.7</span>
                                    </div>
                                    <div class="flex items-center space-x-1">
                                        <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                            </path>
                                        </svg>
                                        <span class="text-gray-300 text-sm">32 Lessons</span>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span
                                        class="text-3xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">$79</span>
                                </div>
                            </div>

                            <div class="flex items-center space-x-3">
                                <a href="#"
                                    class="flex-1 px-6 py-3 bg-linear-to-r from-yellow-500 to-orange-500 text-black font-semibold rounded-xl hover:scale-105 transition-transform duration-300 text-center shadow-lg shadow-yellow-500/20">
                                    Enroll Now
                                </a>
                                <button
                                    class="p-3 border border-white/10 rounded-xl hover:border-yellow-500/50 hover:text-yellow-400 transition-all duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View All Courses Button -->
            <div class="text-center mt-16">
                <a href="#"
                    class="inline-flex items-center space-x-3 px-10 py-4 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full text-white font-semibold hover:bg-linear-to-r hover:from-yellow-500 hover:to-orange-500 hover:text-black hover:border-transparent transition-all duration-500 group">
                    <span>View All Courses</span>
                    <span class="text-xl group-hover:translate-x-2 transition-transform">→</span>
                </a>
            </div>
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
