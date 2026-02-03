@extends('layouts.auth')

@section('content')
    <div class="text-center mb-8 flex justify-center">
        <img src="{{ asset('/assets/logo/logo.png') }}" alt="LOGO" class="w-36 h-36 object-contain">
    </div>

    <form method="POST" action="#" class="space-y-5">
        @csrf

        <div>
            <label class="text-md font-medium text-white uppercase tracking-wide">Email </label>
            <input type="email" name="email" value="{{ old('email') }}" required
                class="w-full mt-2 px-4 py-3 border border-(--white) rounded-md focus:ring-0.5 focus:ring-(--primary) focus:border-(--primary) outline-none transition text-white">

            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="text-md font-medium text-white uppercase tracking-wide">Password</label>
            <input type="password" name="password" required
                class="w-full mt-2 px-4 py-3 border border-(--white) rounded-md focus:ring-0.5 focus:ring-(--primary) focus:border-(--primary) outline-none transition text-white">

            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex justify-center items-center mt-5">

            <a href="{{ route('dashboard') }}"
                class="max-w-fit  uppercase text-center py-2 px-10 rounded-md border-2 border-(--primary) text-(--primary) font-semibold
            hover:bg-(--primary) hover:text-black transition-all duration-300">
                Login
            </a>
        </div>


    </form>
@endsection
