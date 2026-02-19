<!-- Ultra Premium Admin Sidebar -->
<aside class="w-80 bg-gradient-to-b from-[#0a0a0a] via-[#0f0f0f] to-black border-r border-yellow-600/20 text-white hidden md:flex flex-col min-h-screen">

    <!-- Logo Section -->
    <div class="flex flex-col items-center py-6 border-b border-yellow-600/20 group">

        <div class="relative mb-4 transition-all duration-500 group-hover:scale-105">

            <div class="absolute -inset-3 bg-gradient-to-r from-yellow-500/40 to-orange-500/40 rounded-full blur-xl opacity-0 group-hover:opacity-60 transition duration-500"></div>

            <img src="/assets/logo/logo.png"
                class="w-32 relative z-10 drop-shadow-[0_0_15px_rgba(255,215,0,0.3)] group-hover:drop-shadow-[0_0_25px_rgba(255,215,0,0.6)] transition-all duration-500">
        </div>

        <div class="w-16 h-0.5 bg-gradient-to-r from-transparent via-yellow-500 to-transparent"></div>
    </div>


    <!-- Navigation -->
    <nav class="flex-1 px-5 py-8 space-y-2 text-sm font-medium">

        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500
           {{ request()->routeIs('dashboard') ? 'text-yellow-400 bg-white/5' : 'text-gray-400 hover:text-yellow-400 hover:bg-white/5' }}">

            <svg class="w-5 h-5 transition-colors duration-500
                {{ request()->routeIs('dashboard') ? 'text-yellow-400' : 'text-gray-500 group-hover:text-yellow-400' }}"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-width="2"
                    d="M3 12l2-2 7-7 7 7 2 2M5 10v10h14V10" />
            </svg>

            <span class="flex-1">Dashboard</span>

            @if(request()->routeIs('dashboard'))
            <span class="w-2 h-2 rounded-full bg-yellow-400 animate-ping"></span>
            @endif
        </a>


        <!-- Users -->
        <a href="{{ route('admin.users') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500
           {{ request()->routeIs('admin.users') ? 'text-yellow-400 bg-white/5' : 'text-gray-400 hover:text-yellow-400 hover:bg-white/5' }}">

            <svg class="w-5 h-5 transition-colors duration-500
                {{ request()->routeIs('admin.users') ? 'text-yellow-400' : 'text-gray-500 group-hover:text-yellow-400' }}"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-width="2"
                    d="M12 4a4 4 0 100 8 4 4 0 000-8zm-7 16a7 7 0 0114 0" />
            </svg>

            <span class="flex-1">Users</span>

            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">
                245
            </span>

            @if(request()->routeIs('users.*'))
            <span class="w-2 h-2 rounded-full bg-yellow-400 animate-ping"></span>
            @endif
        </a>


        <!-- Courses -->
        <a href="{{ route('admin.courses') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500
           {{ request()->routeIs('admin.courses') ? 'text-yellow-400 bg-white/5' : 'text-gray-400 hover:text-yellow-400 hover:bg-white/5' }}">

            <svg class="w-5 h-5 transition-colors duration-500
                {{ request()->routeIs('admin.courses') ? 'text-yellow-400' : 'text-gray-500 group-hover:text-yellow-400' }}"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-width="2"
                    d="M12 6v14M3 6v14M21 6v14" />
            </svg>

            <span class="flex-1">Courses</span>

            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">
                42
            </span>

            @if(request()->routeIs('courses.*'))
            <span class="w-2 h-2 rounded-full bg-yellow-400 animate-ping"></span>
            @endif
        </a>



        <!-- Lessons -->
        <a href="{{ route('admin.lessons') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500
           {{ request()->routeIs('admin.lessons') ? 'text-yellow-400 bg-white/5' : 'text-gray-400 hover:text-yellow-400 hover:bg-white/5' }}">

            <svg class="w-5 h-5 transition-colors duration-500
                {{ request()->routeIs('admin.lessons') ? 'text-yellow-400' : 'text-gray-500 group-hover:text-yellow-400' }}"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-width="2"
                    d="M12 6v14M3 6v14M21 6v14" />
            </svg>

            <span class="flex-1">Lessons</span>

            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">
                42
            </span>

            @if(request()->routeIs('courses.*'))
            <span class="w-2 h-2 rounded-full bg-yellow-400 animate-ping"></span>
            @endif
        </a>


        <!-- Students -->
        <a href="{{ route('admin.students') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500
           {{ request()->routeIs('admin.students') ? 'text-yellow-400 bg-white/5' : 'text-gray-400 hover:text-yellow-400 hover:bg-white/5' }}">

            <svg class="w-5 h-5 transition-colors duration-500
                {{ request()->routeIs('admin.students') ? 'text-yellow-400' : 'text-gray-500 group-hover:text-yellow-400' }}"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-width="2"
                    d="M12 4a4 4 0 100 8 4 4 0 000-8zm-7 16a7 7 0 0114 0" />
            </svg>

            <span class="flex-1">Students</span>

            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">
                2.1k
            </span>

            @if(request()->routeIs('students.*'))
            <span class="w-2 h-2 rounded-full bg-yellow-400 animate-ping"></span>
            @endif
        </a>


        <!-- //instructor -->
        <a href="{{ route('admin.instructor') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500
           {{ request()->routeIs('admin.instructor') ? 'text-yellow-400 bg-white/5' : 'text-gray-400 hover:text-yellow-400 hover:bg-white/5' }}">

            <svg class="w-5 h-5 transition-colors duration-500
                {{ request()->routeIs('admin.instructor') ? 'text-yellow-400' : 'text-gray-500 group-hover:text-yellow-400' }}"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-width="2"
                    d="M12 4a4 4 0 100 8 4 4 0 000-8zm-7 16a7 7 0 0114 0" />
            </svg>

            <span class="flex-1">Instructors</span>

            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">
                2.1k
            </span>

            @if(request()->routeIs('students.*'))
            <span class="w-2 h-2 rounded-full bg-yellow-400 animate-ping"></span>
            @endif
        </a>



        <!-- //Student Lessons  -->
        <a href="{{ route('admin.students.lessons') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500
           {{ request()->routeIs('admin.students.lessons') ? 'text-yellow-400 bg-white/5' : 'text-gray-400 hover:text-yellow-400 hover:bg-white/5' }}">

            <svg class="w-5 h-5 transition-colors duration-500
                {{ request()->routeIs('admin.students.lessons') ? 'text-yellow-400' : 'text-gray-500 group-hover:text-yellow-400' }}"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-width="2"
                    d="M12 4a4 4 0 100 8 4 4 0 000-8zm-7 16a7 7 0 0114 0" />
            </svg>

            <span class="flex-1">Student Lessons</span>

            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">
                2.1k
            </span>

            @if(request()->routeIs('admin.students.lessons'))
            <span class="w-2 h-2 rounded-full bg-yellow-400 animate-ping"></span>
            @endif
        </a>

        <div class="py-6">
            <div class="border-t border-yellow-600/20"></div>
        </div>

    </nav>


    <!-- Logout -->
    <div class="p-6 border-t border-yellow-600/20">

        <form method="POST" action="{{ route('auth.logout') }}">
            @csrf

            <button type="submit"
                class="group relative w-full py-3.5 rounded-xl overflow-hidden
                       border-2 border-yellow-500/30 hover:border-yellow-500
                       transition-all duration-500">

                <span class="absolute inset-0 bg-gradient-to-r from-yellow-500/10 to-orange-500/10 opacity-0 group-hover:opacity-100 transition duration-500"></span>

                <span class="relative flex items-center justify-center gap-3 text-yellow-400 font-semibold tracking-wider text-sm
                             group-hover:text-yellow-300 transition">

                    <svg class="w-5 h-5 group-hover:rotate-12 transition-transform duration-500"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-width="2"
                            d="M17 16l4-4-4-4M7 12h14" />
                    </svg>

                    Logout
                </span>

                <span class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000
                             bg-gradient-to-r from-transparent via-white/20 to-transparent skew-x-12"></span>
            </button>
        </form>

        <p class="text-center text-gray-600 text-xs mt-4">
            v2.0.0
        </p>

    </div>

</aside>