@php $current = request()->route()->getName(); @endphp

<aside class="w-72 bg-(--secondary-3) border-r border-(--border) text-white hidden md:flex flex-col">

    <!-- Logo -->
    <div class="flex flex-col items-center py-10 border-b border-(--border)">
        <img src="{{ asset('/assets/logo/logo.png') }}" class="w-24 mb-3">
        <h2 class="text-lg font-semibold tracking-wide text-(--primary)">LMS Admin</h2>
    </div>

    <!-- Nav -->
    <nav class="flex-1 px-6 py-8 space-y-3 text-sm font-medium">

        @php
            function navClass($route, $current)
            {
                return $route == $current
                    ? 'bg-[var(--primary)] text-black shadow-lg'
                    : 'text-[var(--text)] hover:bg-[var(--secondary-2)]';
            }
        @endphp

        <a href="{{ route('dashboard') }}"
            class="block px-5 py-3 rounded-xl transition {{ navClass('dashboard', $current) }}">
            Dashboard
        </a>

        <a href="{{ route('admin.users') }}"
            class="block px-5 py-3 rounded-xl transition {{ navClass('admin.users', $current) }}">
            Users
        </a>

        <a href="{{ route('admin.instructor') }}"
            class="block px-5 py-3 rounded-xl transition {{ navClass('admin.instructor', $current) }}">
            Instructors
        </a>

        <a href="{{ route('admin.courses') }}"
            class="block px-5 py-3 rounded-xl transition {{ navClass('admin.courses', $current) }}">
            Courses
        </a>

        <a href="{{ route('admin.lessons') }}"
            class="block px-5 py-3 rounded-xl transition {{ navClass('admin.lessons', $current) }}">
            Lessons
        </a>

        <a href="{{ route('admin.students') }}"
            class="block px-5 py-3 rounded-xl transition {{ navClass('admin.students', $current) }}">
            Students
        </a>

    </nav>

    <!-- Logout -->
    <div class="p-6 border-t border-(--border)">
        <button
            class="w-full py-3 border border-(--primary) rounded-xl text-(--primary)
                   hover:bg-(--primary) hover:text-black transition">
            Logout
        </button>
    </div>

</aside>
