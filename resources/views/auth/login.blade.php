@extends('layouts.auth')

@section('title', 'Login - LMS Admin')

@section('content')
<div class="max-w-md mx-auto">
    <!-- Logo with subtle animation -->
    <div class="text-center mb-8 animate-fadeIn">
        <div class="relative inline-block">
            <img src="{{ asset('/assets/logo/logo2.png') }}"
                alt="LMS Logo"
                class="h-20 mx-auto relative z-10">
            <div class="absolute inset-0 bg-yellow-500/20 blur-2xl -z-10"></div>
        </div>
        <h2 class="text-2xl font-semibold mt-4 bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
            LMS Admin
        </h2>
        <p class="text-gray-500 text-sm mt-1">Sign in to your account</p>
    </div>

    <!-- Form with clean design -->
    <form method="POST" action="{{ route('auth.login') }}" class="space-y-5">
        @csrf

        <div>
            <label class="block text-sm text-gray-400 mb-1.5">Email</label>
            <input type="email"
                name="email"
                value="{{ old('email') }}"
                class="w-full px-4 py-3 bg-gray-900/50 border border-gray-800 rounded-lg text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/50 focus:bg-gray-900/80 transition-all">
            @error('email')
            <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm text-gray-400 mb-1.5">Password</label>
            <input type="password"
                name="password"
                class="w-full px-4 py-3 bg-gray-900/50 border border-gray-800 rounded-lg text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/50 focus:bg-gray-900/80 transition-all">
            @error('password')
            <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <label class="flex items-center gap-2">
                <input type="checkbox" name="remember" class="rounded border-gray-700 bg-gray-900 text-yellow-500 focus:ring-yellow-500/20">
                <span class="text-sm text-gray-400">Remember</span>
            </label>
            <a href="#" class="text-sm text-yellow-500 hover:text-yellow-400">Forgot?</a>
        </div>

        <button type="submit"
            class="w-full py-3 bg-yellow-500 text-black font-medium rounded-lg hover:bg-yellow-400 transition-colors">
            Sign in
        </button>

        <!-- Demo (minimal) -->
        <div class="text-center">
            <p class="text-xs text-gray-600">Demo: admin@lms.com / password</p>
        </div>
    </form>
</div>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 0.6s ease-out;
    }
</style>
@endsection