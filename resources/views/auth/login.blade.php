@extends('layouts.auth')

@section('content')

<div class="text-center mb-8">
    <h2 class="text-3xl font-bold text-gray-800">Welcome Back 👋</h2>
    <p class="text-gray-500 text-sm">Login to continue to your dashboard</p>
</div>

<form method="POST" action="#" class="space-y-5">
    @csrf

    <div>
        <label class="text-sm font-medium text-gray-700">Email Address</label>
        <input type="email" name="email" value="{{ old('email') }}" required
            class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition">

        @error('email')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" required
            class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition">

        @error('password')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex items-center justify-between text-sm">
        <label class="flex items-center gap-2">
            <input type="checkbox" name="remember" class="rounded text-indigo-600 focus:ring-indigo-500">
            Remember me
        </label>

    </div>

    <a href="{{ route('dashboard') }}"
        class="w-full inline-block text-center py-3 rounded-xl border-2 border-indigo-600 text-indigo-600 font-semibold
          hover:bg-indigo-600 hover:text-white transition-all duration-300">
        Go to Dashboard
    </a>


</form>



@endsection