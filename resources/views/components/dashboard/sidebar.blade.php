<!-- Ultra Premium Admin Sidebar -->
<aside class="w-80 bg-linear-to-b from-[#0a0a0a] via-[#0f0f0f] to-black border-r border-yellow-600/20 text-white hidden md:flex flex-col min-h-screen">

    <!-- Logo Section -->
    <div class="flex flex-col items-center py-6 border-b border-yellow-600/20 group">

        <div class="relative mb-4 transition-all duration-500 group-hover:scale-105">

            <div class="absolute -inset-3 bg-linear-to-r from-yellow-500/40 to-orange-500/40 rounded-full blur-xl opacity-0 group-hover:opacity-60 transition duration-500"></div>

            <img src="/assets/logo/logo.png"
                class="w-32 relative z-10 drop-shadow-[0_0_15px_rgba(255,215,0,0.3)] group-hover:drop-shadow-[0_0_25px_rgba(255,215,0,0.6)] transition-all duration-500">
        </div>

        <div class="w-16 h-0.5 bg-linear-to-r from-transparent via-yellow-500 to-transparent"></div>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-5 py-8 space-y-2 text-sm font-medium">

        @php
        $user = Auth::user();
        $userRole = $user->roles->first()->name ?? 'student';
        @endphp

        <!-- ADMIN ROUTES - All routes for admin -->
        @if($userRole === 'admin')
        <!-- Dashboard -->
        <a href="{{ route('admin.dashboard') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500
           {{ request()->routeIs('admin.dashboard') ? 'text-yellow-400 bg-white/5' : 'text-gray-400 hover:text-yellow-400 hover:bg-white/5' }}">

            <svg class="w-5 h-5 transition-colors duration-500
                {{ request()->routeIs('admin.dashboard') ? 'text-yellow-400' : 'text-gray-500 group-hover:text-yellow-400' }}"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-width="2"
                    d="M3 12l2-2 7-7 7 7 2 2M5 10v10h14V10" />
            </svg>

            <span class="flex-1">Dashboard</span>

            @if(request()->routeIs('admin.dashboard'))
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

            @php
            $totalUsers = App\Models\User::count();
            @endphp
            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">
                {{ $totalUsers > 999 ? number_format($totalUsers / 1000, 1) . 'k' : $totalUsers }}
            </span>

            @if(request()->routeIs('admin.users'))
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

            @php
            $totalCourses = App\Models\Course::count();
            @endphp
            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">
                {{ $totalCourses }}
            </span>

            @if(request()->routeIs('admin.courses'))
            <span class="w-2 h-2 rounded-full bg-yellow-400 animate-ping"></span>
            @endif
        </a>

        <!-- Categories -->
        <a href="{{ route('admin.categories') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500
           {{ request()->routeIs('admin.categories') ? 'text-yellow-400 bg-white/5' : 'text-gray-400 hover:text-yellow-400 hover:bg-white/5' }}">

            <svg class="w-5 h-5 transition-colors duration-500
                {{ request()->routeIs('admin.categories') ? 'text-yellow-400' : 'text-gray-500 group-hover:text-yellow-400' }}"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-width="2"
                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-5-5A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
            </svg>

            <span class="flex-1">Categories</span>

            @php
            $totalCategories = App\Models\Category::count();
            @endphp
            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">
                {{ $totalCategories }}
            </span>

            @if(request()->routeIs('admin.categories'))
            <span class="w-2 h-2 rounded-full bg-yellow-400 animate-ping"></span>
            @endif
        </a>

        <!-- Payments / Enrollments -->
        <a href="{{ route('payments.index') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500
            {{ request()->routeIs('payments.*') ? 'text-yellow-400 bg-white/5' : 'text-gray-400 hover:text-yellow-400 hover:bg-white/5' }}">

            <svg class="w-5 h-5 transition-colors duration-500
                {{ request()->routeIs('payments.*') ? 'text-yellow-400' : 'text-gray-500 group-hover:text-yellow-400' }}"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>

            <span class="flex-1">Payments</span>

            @php
            $pendingPayments = App\Models\Enrollment::where('status', 'pending')->count();
            $totalPayments = App\Models\Enrollment::where('status', 'completed')->count();
            @endphp
            @if($pendingPayments > 0)
            <span class="px-2 py-0.5 bg-red-500/20 rounded-full text-xs text-red-400">
                {{ $pendingPayments }}
            </span>
            @else
            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">
                {{ $totalPayments > 999 ? number_format($totalPayments / 1000, 1) . 'k' : $totalPayments }}
            </span>
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
                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>

            <span class="flex-1">Lessons</span>

            @php
            $totalLessons = App\Models\Lesson::count();
            @endphp
            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">
                {{ $totalLessons }}
            </span>

            @if(request()->routeIs('admin.lessons'))
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

            @php
            $totalStudents = App\Models\User::role('student')->count();
            @endphp
            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">
                {{ $totalStudents > 999 ? number_format($totalStudents / 1000, 1) . 'k' : $totalStudents }}
            </span>

            @if(request()->routeIs('admin.students'))
            <span class="w-2 h-2 rounded-full bg-yellow-400 animate-ping"></span>
            @endif
        </a>

        <!-- Instructors -->
        <a href="{{ route('admin.instructors') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500
           {{ request()->routeIs('admin.instructors') ? 'text-yellow-400 bg-white/5' : 'text-gray-400 hover:text-yellow-400 hover:bg-white/5' }}">

            <svg class="w-5 h-5 transition-colors duration-500
                {{ request()->routeIs('admin.instructors') ? 'text-yellow-400' : 'text-gray-500 group-hover:text-yellow-400' }}"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>

            <span class="flex-1">Instructors</span>

            @php
            $totalInstructors = App\Models\User::role('instructor')->count();
            @endphp
            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">
                {{ $totalInstructors }}
            </span>

            @if(request()->routeIs('admin.instructors'))
            <span class="w-2 h-2 rounded-full bg-yellow-400 animate-ping"></span>
            @endif
        </a>
        @endif

        <!-- INSTRUCTOR ROUTES - Dashboard, Courses, Lessons, Categories -->
        @if($userRole === 'instructor')
        <!-- Dashboard -->
        <a href="{{ route('admin.dashboard') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500
           {{ request()->routeIs('admin.dashboard') ? 'text-yellow-400 bg-white/5' : 'text-gray-400 hover:text-yellow-400 hover:bg-white/5' }}">

            <svg class="w-5 h-5 transition-colors duration-500
                {{ request()->routeIs('admin.dashboard') ? 'text-yellow-400' : 'text-gray-500 group-hover:text-yellow-400' }}"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-width="2"
                    d="M3 12l2-2 7-7 7 7 2 2M5 10v10h14V10" />
            </svg>

            <span class="flex-1">Dashboard</span>

            @if(request()->routeIs('admin.dashboard'))
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

            @php
            $totalCourses = App\Models\Course::where('instructor_id', Auth::user()->instructor->id ?? 0)->count();
            @endphp
            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">
                {{ $totalCourses }}
            </span>

            @if(request()->routeIs('admin.courses'))
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
                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>

            <span class="flex-1">Lessons</span>

            @php
            // Get lessons count for instructor's courses
            $instructorId = Auth::user()->instructor->id ?? 0;
            $totalLessons = App\Models\Lesson::whereIn('course_id',
            App\Models\Course::where('instructor_id', $instructorId)->pluck('id')
            )->count();
            @endphp
            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">
                {{ $totalLessons }}
            </span>

            @if(request()->routeIs('admin.lessons'))
            <span class="w-2 h-2 rounded-full bg-yellow-400 animate-ping"></span>
            @endif
        </a>

        <!-- Categories (Read-only for instructors) -->
        <a href="{{ route('admin.categories') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500
           {{ request()->routeIs('admin.categories') ? 'text-yellow-400 bg-white/5' : 'text-gray-400 hover:text-yellow-400 hover:bg-white/5' }}">

            <svg class="w-5 h-5 transition-colors duration-500
                {{ request()->routeIs('admin.categories') ? 'text-yellow-400' : 'text-gray-500 group-hover:text-yellow-400' }}"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-width="2"
                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-5-5A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
            </svg>

            <span class="flex-1">Categories</span>

            @php
            $totalCategories = App\Models\Category::count();
            @endphp
            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">
                {{ $totalCategories }}
            </span>

            @if(request()->routeIs('admin.categories'))
            <span class="w-2 h-2 rounded-full bg-yellow-400 animate-ping"></span>
            @endif
        </a>
        @endif

        <!-- STUDENT ROUTES - Only Student Lessons -->
        @if($userRole === 'student')
        <!-- Student Lessons -->
        <a href="{{ route('student.courses.show') }}"
            class="group relative flex items-center gap-4 px-5 py-3.5 rounded-xl transition-all duration-500
           {{ request()->routeIs('student.courses.show') ? 'text-yellow-400 bg-white/5' : 'text-gray-400 hover:text-yellow-400 hover:bg-white/5' }}">

            <svg class="w-5 h-5 transition-colors duration-500
                {{ request()->routeIs('student.courses.show') ? 'text-yellow-400' : 'text-gray-500 group-hover:text-yellow-400' }}"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-width="2"
                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>

            <span class="flex-1">My Courses</span>

            @php
            $user = Auth::user();
            $enrolledCoursesCount = $user->enrolledCourses()->count();
            @endphp
            <span class="px-2 py-0.5 bg-white/10 rounded-full text-xs text-gray-400">
                {{ $enrolledCoursesCount }}
            </span>

            @if(request()->routeIs('student.courses.show'))
            <span class="w-2 h-2 rounded-full bg-yellow-400 animate-ping"></span>
            @endif
        </a>
        @endif

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

                <span class="absolute inset-0 bg-linear-to-r from-yellow-500/10 to-orange-500/10 opacity-0 group-hover:opacity-100 transition duration-500"></span>

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
                             bg-linear-to-r from-transparent via-white/20 to-transparent skew-x-12"></span>
            </button>
        </form>

        <p class="text-center text-gray-600 text-xs mt-4">
            v1.0.0
        </p>

    </div>

</aside>