<header class="w-full bg-white shadow-md">
    <div class="container mx-auto px-6 py-4 flex items-center justify-between">

        <div class="text-center mb-8 flex justify-center">
            <img src="{{ asset('/assets/logo/logo.png') }}" alt="LOGO" class="w-24 h-24 object-contain">
        </div>

        <nav class="hidden md:flex items-center gap-8 text-gray-700 font-medium">
            <a href="#" class="hover:text-(--primary) transition">Home</a>
            <a href="#" class="hover:text-(--primary) transition">Courses</a>
            <a href="#" class="hover:text-(--primary) transition">About</a>
            <a href="#" class="hover:text-(--primary) transition">Contact</a>
        </nav>

        <div class="flex items-center gap-3">

            <a href="#"
                class="px-5 py-2 rounded-xl border-2 border-gray-800 text-gray-800 font-semibold
                      hover:bg-(--primary)  hover:border-(--primary) hover:text-white transition-all duration-300 ">
                Student Portal
            </a>

            <a href="#"
                class="px-5 py-2 rounded-xl border-2 border-gray-800 text-gray-800 font-semibold
                      hover:bg-(--primary)  hover:border-(--primary) hover:text-white transition-all duration-300 ">
                Instructor Portal
            </a>

            <a href="#"
                class="px-5 py-2 rounded-xl border-2 border-gray-800 text-gray-800 font-semibold
                      hover:bg-(--primary)  hover:border-(--primary) hover:text-white transition-all duration-300">
                Admin Portal
            </a>

        </div>

    </div>
</header>