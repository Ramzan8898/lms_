<header class="w-full bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <div class="text-2xl font-bold text-indigo-600">
            {{ config('app.name', 'LMS') }}
        </div>

        <nav class="hidden md:flex items-center gap-8 text-gray-700 font-medium">
            <a href="#" class="hover:text-indigo-600 transition">Home</a>
            <a href="#" class="hover:text-indigo-600 transition">Courses</a>
            <a href="#" class="hover:text-indigo-600 transition">About</a>
            <a href="#" class="hover:text-indigo-600 transition">Contact</a>
        </nav>

        <div class="flex items-center gap-3">

            <a href="{{ route('login') }}"
                class="px-5 py-2 rounded-xl border-2 border-indigo-600 text-indigo-600 font-semibold
                      hover:bg-indigo-600 hover:text-white transition-all duration-300">
                Student Portal
            </a>

            <a href="{{ route('login') }}"
                class="px-5 py-2 rounded-xl border-2 border-purple-600 text-purple-600 font-semibold
                      hover:bg-purple-600 hover:text-white transition-all duration-300">
                Instructor Portal
            </a>

            <a href="{{ route('login') }}"
                class="px-5 py-2 rounded-xl border-2 border-gray-800 text-gray-800 font-semibold
                      hover:bg-gray-800 hover:text-white transition-all duration-300">
                Admin Portal
            </a>

        </div>

    </div>
</header>