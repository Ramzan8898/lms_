<header class="w-full bg-(--black) shadow-md py-4 border-b border-yellow-600/30">
    <div class="flex items-center justify-between container mx-auto ">

        <a href="{{ route('welcome') }}" class="text-center flex justify-center">
            <img src="{{ asset('/assets/logo/logo2.png') }}" alt="LOGO" class="w-46 h-auto object-contain">
        </a>

        <div class="flex flex-row items-center gap-8">
            <nav class="hidden md:flex items-end justify-end  gap-8 text-gray-700 font-medium">
                <a href="{{route('welcome')}}" class="text-white uppercase font-normal hover:text-(--primary) transition">Home</a>
                <a href="{{ route('web.courses') }}" class="text-white uppercase font-normal hover:text-(--primary) transition">Courses</a>
                <a href="{{ route('web.about') }}" class="text-white uppercase font-normal hover:text-(--primary) transition">About</a>
                <a href="{{ route('web.contact') }}" class="text-white uppercase font-normal hover:text-(--primary) transition">Contact</a>
            </nav>

            <a href="{{ route('login') }}"
                class="px-5 py-2 rounded-md border border-(--primary) text-(--primary) font-normal uppercase text-sm
                      hover:bg-(--primary) hover:border-(--primary) hover:text-(--dark) transition-all duration-300 ">
                Sign In
            </a>

        </div>

    </div>
</header>
