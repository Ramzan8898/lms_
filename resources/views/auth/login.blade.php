@extends('layouts.auth')

@section('title', 'Login - LMS Admin')

@section('content')
    <div
        class="flex items-center justify-center bg-linear-to-br from-black via-gray-900 to-black border-r border-yellow-500/10 rounded-2xl p-8 lg:p-16">

        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <div class="absolute inset-0"
                style="background-image: radial-gradient(circle at 2px 2px, rgba(255,215,0,0.3) 1px, transparent 0); background-size: 40px 40px;">
            </div>
        </div>

        <!-- Glow Effects -->
        <div class="absolute top-20 left-10 w-40 h-40 bg-yellow-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-20 right-10 w-40 h-40 bg-orange-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 flex w-full">

            <!-- LEFT SIDE (Desktop Only) -->
            <div class="hidden lg:flex lg:w-1/2 items-center justify-center text-center px-16 border-r border-yellow-500/10">
                <div class="max-w-xl">

                    <a href="/">
                        <img src="{{ asset('/assets/logo/logo2.png') }}"
                            class="w-64 mb-8 drop-shadow-[0_0_20px_rgba(255,215,0,0.4)] mx-auto">
                    </a>

                    <h1 class="text-4xl font-bold text-white mb-6">
                        Welcome Back
                    </h1>

                    <p class="text-gray-400 text-lg mb-10">
                        Access your LMS dashboard and continue managing courses, students, and instructors.
                    </p>

                    <div class="p-6 bg-white/5 border border-yellow-500/20 rounded-2xl backdrop-blur">
                        <p class="text-gray-300 text-sm italic">
                            "Education is the passport to the future, for tomorrow belongs to those who prepare for it
                            today."
                        </p>
                    </div>

                </div>
            </div>

            <!-- RIGHT SIDE (Login Form) -->
            <div class="w-full lg:w-1/2 flex items-center justify-center p-8 lg:p-16">

                <div class="w-full max-w-md">

                    <!-- Mobile Logo -->
                    <div class="lg:hidden text-center mb-8">
                        <img src="{{ asset('/assets/logo/logo2.png') }}" class="h-16 mx-auto mb-4">
                        <h2
                            class="text-2xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                            LMS Admin
                        </h2>
                    </div>

                    <!-- Header -->
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-white mb-2">Sign In</h2>
                        <p class="text-gray-500">Sign in to your account</p>
                    </div>

                    <!-- FORM -->
                    <form method="POST" action="{{ route('auth.login') }}" class="space-y-5">
                        @csrf

                        <!-- Email -->
                        <div>
                            <label class="block text-sm text-gray-400 mb-2">Email Address</label>
                            <input type="email" name="email" value="{{ old('email') }}" required
                                class="w-full px-4 py-4 bg-white/5 border border-yellow-500/20 rounded-xl text-white
                                      focus:outline-none focus:border-yellow-500/40 transition-all">
                            @error('email')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div>
                            <label class="block text-sm text-gray-400 mb-2">Password</label>
                            <input type="password" name="password" required
                                class="w-full px-4 py-4 bg-white/5 border border-yellow-500/20 rounded-xl text-white
                                      focus:outline-none focus:border-yellow-500/40 transition-all">
                            @error('password')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Remember & Forgot -->
                        <div class="flex items-center justify-between">
                            <label class="flex items-center gap-2">
                                <input type="checkbox" name="remember"
                                    class="rounded border-yellow-500/30 bg-white/5 text-yellow-500 focus:ring-yellow-500/20">
                                <span class="text-sm text-gray-400">Remember Me</span>
                            </label>

                            <a href="#" class="text-sm text-yellow-500 hover:text-yellow-400 transition-colors">
                                Forgot Password?
                            </a>
                        </div>

                        <!-- Button -->
                        <button type="submit"
                            class="w-full py-4 bg-linear-to-r from-yellow-500 to-orange-500 text-black font-semibold
                                   rounded-xl transition-all hover:scale-[1.02] hover:shadow-lg hover:shadow-yellow-500/30">
                            Sign In →
                        </button>

                        <!-- Register Link -->
                        <div class="text-center text-sm text-gray-500">
                            Don't have an account?
                            <a href="{{ route('web.register') }}" class="text-yellow-500 hover:text-yellow-400 font-medium">
                                Sign up
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
