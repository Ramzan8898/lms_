<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-web-header />
    <section class="relative bg-black overflow-hidden pt-15 pb-30">
        <div class="absolute inset-0 bg-linear-to-r from-black via-[#1a0f00] to-black"></div>
        <div class="absolute right-0 top-1/3 w-150 h-150 bg-yellow-600/20 blur-[150px] rounded-full"></div>
        <div class="relative container mx-auto flex flex-row items-center justify-between ">
            <div class="text-white max-w-2xl">
                <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6 uppercase">
                    Learn, Grow, <br>
                    <span
                        class="bg-linear-to-r from-yellow-400 via-orange-500 to-yellow-600 bg-clip-text text-transparent">
                        Succeed with LMS
                    </span>
                </h1>
                <p class="text-gray-400 text-lg mb-10 leading-relaxed">
                    The ultimate Laravel-based Learning Management System designed
                    to elevate your education experience with modern tools and powerful features.
                </p>
                <div class="flex flex-wrap gap-6">
                    <a href="#"
                        class="px-8 py-3 rounded-full font-semibold
                    bg-linear-to-r from-yellow-400 to-orange-500
                    text-black tracking-wide
                    transition-all duration-300
                    hover:scale-105 hover:shadow-[0_0_30px_rgba(255,170,0,0.7)]">
                        Get Started
                    </a>
                    <a href="#"
                        class="px-8 py-3 rounded-full font-semibold
                    border border-yellow-500/70 text-yellow-400
                    transition-all duration-300
                    hover:bg-yellow-500 hover:text-black
                    hover:scale-105">
                        View Courses
                    </a>

                </div>
            </div>
            <div>
                <img src="{{ asset('/assets/images/ChatGPT Image Feb 16, 2026, 02_22_42 PM.png') }}"
                    class="ml-35 w-250 drop-shadow-[0_0_40px_rgba(255,170,0,0.4)]">
            </div>
        </div>
    </section>

    <section class="py-20 px-6 md:px-16">
        <div class="max-w-7xl mx-auto">

            <!-- Section Heading -->
            <div class="text-center mb-16">
                <h2
                    class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-yellow-200 via-yellow-400 to-yellow-600 bg-clip-text text-transparent">
                    Why Choose Our Platform
                </h2>
                <p class="text-gray-400 mt-4 max-w-2xl mx-auto">
                    A modern AI-powered learning experience designed for real growth.
                </p>
            </div>

            <!-- Cards Grid -->
            <div class="grid md:grid-cols-3 gap-8">

                <!-- Card 1 -->
                <div
                    class="group relative bg-black/40 backdrop-blur-xl border border-yellow-500/20 rounded-2xl p-8 hover:border-yellow-400 transition-all duration-500 hover:shadow-[0_0_40px_rgba(255,215,0,0.4)]">

                    <div class="flex justify-center mb-6">
                        <div class="text-6xl text-yellow-400 group-hover:scale-110 transition duration-500">
                            📖
                        </div>
                    </div>

                    <h3 class="text-xl font-semibold text-center mb-3">
                        Comprehensive Courses
                    </h3>

                    <p class="text-gray-400 text-center text-sm leading-relaxed mb-6">
                        Access a wide range of courses designed for all levels, from coding to personal development.
                    </p>

                    <div class="flex justify-center">
                        <button
                            class="px-6 py-2 border border-yellow-400 text-yellow-400 rounded-full transition-all duration-300 hover:bg-yellow-400 hover:text-black hover:scale-105">
                            Explore
                        </button>
                    </div>

                </div>

                <!-- Card 2 -->
                <div
                    class="group relative bg-black/40 backdrop-blur-xl border border-yellow-500/20 rounded-2xl p-8 hover:border-yellow-400 transition-all duration-500 hover:shadow-[0_0_40px_rgba(255,215,0,0.4)]">

                    <div class="flex justify-center mb-6">
                        <div class="text-6xl text-yellow-400 group-hover:scale-110 transition duration-500">
                            👨‍🏫
                        </div>
                    </div>

                    <h3 class="text-xl font-semibold text-center mb-3">
                        Expert Instructors
                    </h3>

                    <p class="text-gray-400 text-center text-sm leading-relaxed mb-6">
                        Learn from industry experts with interactive lessons and real-world projects.
                    </p>

                    <div class="flex justify-center">
                        <button
                            class="px-6 py-2 border border-yellow-400 text-yellow-400 rounded-full transition-all duration-300 hover:bg-yellow-400 hover:text-black hover:scale-105">
                            Meet Experts
                        </button>
                    </div>

                </div>

                <!-- Card 3 -->
                <div
                    class="group relative bg-black/40 backdrop-blur-xl border border-yellow-500/20 rounded-2xl p-8 hover:border-yellow-400 transition-all duration-500 hover:shadow-[0_0_40px_rgba(255,215,0,0.4)]">

                    <div class="flex justify-center mb-6">
                        <div class="text-6xl text-yellow-400 group-hover:scale-110 transition duration-500">
                            📈
                        </div>
                    </div>

                    <h3 class="text-xl font-semibold text-center mb-3">
                        Track Your Progress
                    </h3>

                    <p class="text-gray-400 text-center text-sm leading-relaxed mb-6">
                        Monitor your learning journey with intuitive progress tracking and reporting tools.
                    </p>

                    <div class="flex justify-center">
                        <button
                            class="px-6 py-2 border border-yellow-400 text-yellow-400 rounded-full transition-all duration-300 hover:bg-yellow-400 hover:text-black hover:scale-105">
                            View Dashboard
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </section>



</body>

</html>
