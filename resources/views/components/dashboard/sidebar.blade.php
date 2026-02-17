@php $current = request()->route()->getName(); @endphp

<!-- Ultra Premium Admin Sidebar -->
<aside class="w-80 bg-gradient-to-b from-[#0a0a0a] via-[#0f0f0f] to-black border-r border-yellow-600/20 text-white hidden md:flex flex-col relative overflow-hidden backdrop-blur-xl">

    <!-- Advanced Background Effects -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Gradient Orbs -->
        <div class="absolute -top-40 -left-40 w-80 h-80 bg-yellow-500/5 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute -bottom-40 -right-40 w-80 h-80 bg-orange-500/5 rounded-full blur-3xl animate-pulse-slow animation-delay-2000"></div>

        <!-- Subtle Grid Pattern -->
        <div class="absolute inset-0 opacity-5"
            style="background-image: radial-gradient(circle at 1px 1px, rgba(255,215,0,0.1) 1px, transparent 0); background-size: 30px 30px;">
        </div>

        <!-- Floating Particles -->
        <div class="absolute top-1/4 left-1/3 w-1 h-1 bg-yellow-400/20 rounded-full animate-float-slow"></div>
        <div class="absolute bottom-1/3 right-1/4 w-1.5 h-1.5 bg-orange-400/20 rounded-full animate-float"></div>
    </div>

    <!-- Premium Logo Section with Enhanced Design -->
    <div class="relative flex flex-col items-center py-12 border-b border-yellow-600/20 group">
        <!-- Logo Glow Effect -->
        <div class="absolute -inset-10 bg-gradient-to-r from-yellow-500/10 to-orange-500/10 rounded-full blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>

        <!-- Logo Container with Premium Effects -->
        <div class="relative mb-4 transform group-hover:scale-105 transition-all duration-700">
            <!-- Multi-layer Glow -->
            <div class="absolute -inset-4 bg-gradient-to-r from-yellow-500/30 to-orange-500/30 rounded-full blur-xl opacity-0 group-hover:opacity-60 transition-opacity duration-700"></div>
            <div class="absolute -inset-2 bg-gradient-to-r from-yellow-500/50 to-orange-500/50 rounded-full blur-lg opacity-0 group-hover:opacity-40 transition-opacity duration-700 delay-100"></div>

            <!-- Logo Image -->
            <img src="{{ asset('/assets/logo/logo.png') }}"
                class="w-28 h-auto object-contain drop-shadow-[0_0_15px_rgba(255,215,0,0.3)] group-hover:drop-shadow-[0_0_30px_rgba(255,215,0,0.5)] transition-all duration-700 relative z-10">

            <!-- Shine Effect -->
            <div class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1500 bg-gradient-to-r from-transparent via-white/10 to-transparent skew-x-12"></div>
        </div>

        <!-- Admin Title with Gradient -->
        <h2 class="text-xl font-bold tracking-wide relative">
            <span class="bg-gradient-to-r from-yellow-400 via-orange-500 to-yellow-600 bg-clip-text text-transparent">LMS Admin</span>
        </h2>

        <!-- Role Badge -->
        <span class="mt-2 px-3 py-1 bg-yellow-500/10 border border-yellow-500/30 rounded-full text-xs text-yellow-400 font-medium">
            Super Admin
        </span>

        <!-- Decorative Bottom Line -->
        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-16 h-0.5 bg-gradient-to-r from-transparent via-yellow-500 to-transparent"></div>
    </div>

    <!-- Premium Navigation -->
    <nav class="flex-1 px-5 py-8 space-y-2 text-sm font-medium relative z-10">

        @php
        function navClass($route, $current) {
        return $route == $current
        ? 'bg-gradient-to-r from-yellow-500 to-orange-500 text-black shadow-lg shadow-yellow-500/20'
        : 'text-gray-400 hover:text-yellow-400 hover:bg-white/5';
        }
        @endphp

        <!-- Dashboard Link -->
        <a href="{{ route('dashboard') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500 overflow-hidden {{ navClass('dashboard', $current) }}">
            <!-- Icon -->
            <svg class="w-5 h-5 {{ $current == 'dashboard' ? 'text-black' : 'text-gray-500 group-hover:text-yellow-400' }} transition-colors duration-500"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
            <span class="flex-1 font-medium">Dashboard</span>

            <!-- Active Indicator -->
            @if($current == 'dashboard')
            <span class="absolute right-3 w-1.5 h-1.5 bg-black rounded-full animate-ping"></span>
            @endif

            <!-- Shine Effect -->
            <div class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/10 to-transparent skew-x-12"></div>
        </a>

        <!-- Users Link -->
        <a href="{{ route('admin.users') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500 overflow-hidden {{ navClass('admin.users', $current) }}">
            <svg class="w-5 h-5 {{ $current == 'admin.users' ? 'text-black' : 'text-gray-500 group-hover:text-yellow-400' }} transition-colors duration-500"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
            <span class="flex-1 font-medium">Users</span>
            <!-- Badge -->
            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">245</span>
            <div class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/10 to-transparent skew-x-12"></div>
        </a>

        <!-- Instructors Link -->
        <a href="{{ route('admin.instructor') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500 overflow-hidden {{ navClass('admin.instructor', $current) }}">
            <svg class="w-5 h-5 {{ $current == 'admin.instructor' ? 'text-black' : 'text-gray-500 group-hover:text-yellow-400' }} transition-colors duration-500"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            <span class="flex-1 font-medium">Instructors</span>
            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">18</span>
            <div class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/10 to-transparent skew-x-12"></div>
        </a>

        <!-- Courses Link -->
        <a href="{{ route('admin.courses') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500 overflow-hidden {{ navClass('admin.courses', $current) }}">
            <svg class="w-5 h-5 {{ $current == 'admin.courses' ? 'text-black' : 'text-gray-500 group-hover:text-yellow-400' }} transition-colors duration-500"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
            <span class="flex-1 font-medium">Courses</span>
            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">42</span>
            <div class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/10 to-transparent skew-x-12"></div>
        </a>

        <!-- Lessons Link -->
        <a href="{{ route('admin.lessons') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500 overflow-hidden {{ navClass('admin.lessons', $current) }}">
            <svg class="w-5 h-5 {{ $current == 'admin.lessons' ? 'text-black' : 'text-gray-500 group-hover:text-yellow-400' }} transition-colors duration-500"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
            </svg>
            <span class="flex-1 font-medium">Lessons</span>
            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">156</span>
            <div class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/10 to-transparent skew-x-12"></div>
        </a>

        <!-- Students Link -->
        <a href="{{ route('admin.students') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500 overflow-hidden {{ navClass('admin.students', $current) }}">
            <svg class="w-5 h-5 {{ $current == 'admin.students' ? 'text-black' : 'text-gray-500 group-hover:text-yellow-400' }} transition-colors duration-500"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
            <span class="flex-1 font-medium">Students</span>
            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">2.1k</span>
            <div class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/10 to-transparent skew-x-12"></div>
        </a>

        <!-- Divider -->
        <div class="py-4">
            <div class="border-t border-yellow-600/20"></div>
        </div>

        <!-- Settings Link (Additional) -->
        <a href="#"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl text-gray-400 hover:text-yellow-400 hover:bg-white/5 transition-all duration-500 overflow-hidden">
            <svg class="w-5 h-5 text-gray-500 group-hover:text-yellow-400 transition-colors duration-500"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            <span class="flex-1 font-medium">Settings</span>
            <div class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/10 to-transparent skew-x-12"></div>
        </a>
    </nav>

    <!-- Premium Logout Section -->
    <div class="relative p-6 border-t border-yellow-600/20 group">
        <!-- Background Effect -->
        <div class="absolute inset-0 bg-gradient-to-t from-yellow-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

        <!-- Admin Profile Preview -->
        <div class="flex items-center gap-3 mb-4 px-2">
            <div class="relative">
                <img src="https://randomuser.me/api/portraits/men/1.jpg"
                    class="w-10 h-10 rounded-full border-2 border-yellow-500/50">
                <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-green-500 rounded-full border-2 border-black">
                    <span class="absolute inset-0 bg-green-500 rounded-full animate-ping opacity-75"></span>
                </span>
            </div>
            <div class="flex-1">
                <h4 class="text-white font-semibold text-sm">Admin User</h4>
                <p class="text-gray-500 text-xs">admin@lms.com</p>
            </div>
        </div>

        <!-- Logout Button with Premium Effects -->
        <button class="group/btn relative w-full py-3.5 rounded-xl overflow-hidden border-2 border-yellow-500/30 hover:border-yellow-500 transition-all duration-500">
            <!-- Background Effects -->
            <span class="absolute inset-0 bg-gradient-to-r from-yellow-500/10 to-orange-500/10 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-500"></span>

            <!-- Glow Effect -->
            <span class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-xl blur-lg opacity-0 group-hover/btn:opacity-30 transition-opacity duration-500"></span>

            <!-- Content -->
            <span class="relative flex items-center justify-center gap-3 text-yellow-400 group-hover/btn:text-yellow-300 font-semibold text-sm tracking-wider">
                <svg class="w-5 h-5 group-hover/btn:rotate-12 transition-transform duration-500"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                </svg>
                <span>Logout</span>
            </span>

            <!-- Shine Effect -->
            <span class="absolute inset-0 -translate-x-full group-hover/btn:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/20 to-transparent skew-x-12"></span>
        </button>

        <!-- Version Info -->
        <p class="text-center text-gray-600 text-xs mt-4">v2.0.0 • Super Admin</p>
    </div>

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

        @keyframes float-slow {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }
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

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-slow {
            animation: float-slow 8s ease-in-out infinite;
        }

        .animate-pulse-slow {
            animation: pulse-slow 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }
    </style>
</aside>