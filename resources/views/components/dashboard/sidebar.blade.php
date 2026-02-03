@php $current = request()->route()->getName(); @endphp

<aside class="w-64 bg-(--secondary) text-white hidden md:flex flex-col">

    <div class="flex justify-center py-8 border-b border-white/20">
        <img src="{{ asset('/assets/logo/logo.png') }}"
            class="w-28 h-28 object-contain">
    </div>

    <nav class="flex-1 px-4 py-6 space-y-2 text-sm font-medium items-center">

        <a href="{{ route('dashboard') }}"
            class="block px-4 py-3 rounded-lg transition
           {{ $current == 'dashboard'
                ? 'bg-white text-(--primary)'
                : 'hover:bg-white/10' }}">
            Dashboard
        </a>

        <a href="{{route('admin.users')}}"
            class="block px-4 py-3 rounded-lg transition
           {{ $current == 'admin.users'
                ? 'bg-white text-(--primary)'
                : 'hover:bg-white/10' }}">
            Users
        </a>

        <a href="{{route('admin.instructor')}}"
            class="block px-4 py-3 rounded-lg transition
           {{ $current == 'admin.instructor'
                ? 'bg-white text-(--primary)'
                : 'hover:bg-white/10' }}">
            Instructors
        </a>

        <a href="#"
            class="block px-4 py-3 rounded-lg hover:bg-white/10 transition">
            Courses
        </a>

        <a href="#"
            class="block px-4 py-3 rounded-lg hover:bg-white/10 transition">
            Quizzes
        </a>

        <a href="#"
            class="block px-4 py-3 rounded-lg hover:bg-white/10 transition">
            Certificates
        </a>

        <a href="#"
            class="block px-4 py-3 rounded-lg hover:bg-white/10 transition">
            Payments
        </a>

    </nav>

    <div class="p-4 border-t border-white/20">
        <form method="POST" action="#">
            @csrf
            <button
                class="w-full py-2 border border-white rounded-lg text-black
                       bg-white hover:text-(--primary) transition">
                Logout
            </button>
        </form>
    </div>

</aside>