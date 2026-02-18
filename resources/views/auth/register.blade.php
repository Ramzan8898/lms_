@extends('layouts.auth')

@section('title', 'Sign Up - LMS')

@section('content')
    <div
        class="flex items-center justify-center bg-linear-to-br from-black via-gray-900 to-black border-r border-yellow-500/10 rounded-2xl p-8 lg:p-16">
        <!-- LEFT SIDE -->
        <div class="hidden lg:flex lg:w-1/2 justify-center items-center">
            <!-- Decorative Glow -->
            <div class="absolute top-20 left-10 w-40 h-40 bg-yellow-500/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-40 h-40 bg-orange-500/10 rounded-full blur-3xl"></div>

            <!-- Content -->
            <div class="relative flex flex-col items-center text-center max-w-xl px-10">
                <a href="/">
                    <img src="{{ asset('/assets/logo/logo2.png') }}" alt="LMS Logo"
                        class="w-64 mb-8 drop-shadow-[0_0_20px_rgba(255,215,0,0.4)]">
                </a>

                <h1 class="text-4xl font-bold text-white mb-6 leading-tight">
                    Start Your Learning Journey Today
                </h1>

                <p class="text-gray-400 text-lg mb-10 leading-relaxed">
                    Join thousands of students who are already learning and advancing their careers with our expert
                    instructors.
                </p>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 w-full">
                    <div>
                        <div
                            class="text-3xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                            500+
                        </div>
                        <div class="text-sm text-gray-500 mt-1">Courses</div>
                    </div>

                    <div>
                        <div
                            class="text-3xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                            50K+
                        </div>
                        <div class="text-sm text-gray-500 mt-1">Students</div>
                    </div>

                    <div>
                        <div
                            class="text-3xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                            150+
                        </div>
                        <div class="text-sm text-gray-500 mt-1">Instructors</div>
                    </div>
                </div>

                <!-- Testimonial -->
                <div class="mt-12 p-6 bg-white/5 border border-yellow-500/20 rounded-2xl backdrop-blur">
                    <p class="text-gray-300 text-sm italic mb-4">
                        "This platform transformed my career. The courses are well-structured and mentors are incredibly
                        supportive."
                    </p>

                    <div class="flex items-center justify-center gap-3">
                        <img src="https://ui-avatars.com/api/?name=Sarah+Johnson&background=FFB347&color=fff&size=40"
                            class="w-10 h-10 rounded-full border-2 border-yellow-500/50">

                        <div class="text-left">
                            <p class="text-white font-medium text-sm">Sarah Johnson</p>
                            <p class="text-yellow-500 text-xs">Web Developer</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="hidden lg:flex lg:w-1/2 items-center justify-center">

            <div class="w-full max-w-md">

                <!-- Mobile Logo -->
                <a href="/" class="lg:hidden text-center mb-8">
                    <img src="{{ asset('/assets/logo/logo2.png') }}" class="h-16 mx-auto mb-4">
                    <h2
                        class="text-2xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                        Create Account
                    </h2>
                </a>

                <!-- Header -->
                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-white mb-2">Sign Up</h2>
                    <p class="text-gray-500">Join our learning community today</p>
                </div>

                <!-- FORM -->
                <form method="POST" action="{{ route('auth.register') }}" class="space-y-5">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label class="block text-sm text-gray-400 mb-2">Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" required placeholder="John Doe"
                            class="w-full px-4 py-3 bg-white/5 border border-yellow-500/20 rounded-md text-white
                                  focus:outline-none focus:border-yellow-500/40 transition-all">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm text-gray-400 mb-2">Email Address</label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            placeholder="johndoe@gmail.com"
                            class="w-full px-4 py-3 bg-white/5 border border-yellow-500/20 rounded-md text-white
                                  focus:outline-none focus:border-yellow-500/40 transition-all">
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block text-sm text-gray-400 mb-2">Password</label>
                        <div class="relative">
                            <input type="password" name="password" id="password2" required
                                class="w-full px-4 py-3 bg-white/5 border border-yellow-500/20 rounded-md text-white
                                  focus:outline-none focus:border-yellow-500/40 transition-all">
                            <button type="button" onclick="togglePasswordFA('password2', this)"
                                class="absolute right-4 top-1/2 -translate-y-1/2 hover:opacity-80 transition-opacity">
                                <i
                                    class="fas fa-eye text-lg bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Confirm Password Field with Font Awesome -->
                    <div>
                        <label class="block text-sm text-gray-400 mb-2">Confirm Password</label>
                        <div class="relative">
                            <input type="password" name="password_confirmation" required
                                class="w-full px-4 py-3 bg-white/5 border border-yellow-500/20 rounded-md text-white
                                  focus:outline-none focus:border-yellow-500/40 transition-all">
                        </div>
                    </div>

                    <script>
                        function togglePasswordFA(inputId, button) {
                            const input = document.getElementById(inputId);
                            const icon = button.querySelector('i');

                            if (input.type === 'password') {
                                input.type = 'text';
                                icon.classList.remove('fa-eye');
                                icon.classList.add('fa-eye-slash');
                            } else {
                                input.type = 'password';
                                icon.classList.remove('fa-eye-slash');
                                icon.classList.add('fa-eye');
                            }
                        }
                    </script>

                    <!-- Terms -->
                    <div class="flex items-start gap-3">
                        <input type="checkbox" name="terms" required
                            class="mt-1 w-4 h-4 rounded border-yellow-500/30 bg-white/5 text-yellow-500">
                        <label class="text-sm text-gray-400">
                            I agree to the
                            <a href="#" class="text-yellow-500 hover:text-yellow-400">Terms</a>
                            and
                            <a href="#" class="text-yellow-500 hover:text-yellow-400">Privacy Policy</a>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full py-4 bg-linear-to-r from-yellow-500 to-orange-500 text-black font-semibold
                               rounded-xl transition-all hover:scale-[1.02] hover:shadow-lg hover:shadow-yellow-500/30">
                        Create Account →
                    </button>

                    <!-- Login Link -->
                    <div class="text-center text-sm text-gray-500">
                        Already have an account?
                        <a href="{{ route('web.login') }}" class="text-yellow-500 hover:text-yellow-400 font-medium">
                            Sign in
                        </a>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
