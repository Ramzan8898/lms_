@extends('layouts.website')
@section('content')
<!-- Contact Section - Premium Design -->
<section class="relative py-32 px-6 md:px-16 bg-black text-white overflow-hidden">

    <!-- Premium Animated Background -->
    <div class="absolute inset-0 bg-linear-to-br from-black via-[#0a0a0a] to-black"></div>

    <!-- Floating Gradient Orbs -->
    <div class="absolute top-20 left-1/4 w-96 h-96 bg-yellow-500/5 rounded-full blur-[120px] animate-pulse-slow"></div>
    <div
        class="absolute bottom-20 right-1/4 w-80 h-80 bg-orange-500/5 rounded-full blur-[120px] animate-pulse-slow animation-delay-2000">
    </div>

    <!-- Geometric Pattern Overlay -->
    <div class="absolute inset-0 opacity-5"
        style="background-image: url('data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M30 5 L55 30 L30 55 L5 30 L30 5' stroke='%23FBBF24' stroke-width='0.5' fill='none' opacity='0.3'/%3E%3C/svg%3E'); background-size: 60px 60px;">
    </div>

    <div class="relative max-w-7xl mx-auto">

        <div class="text-center mb-20">
            <div
                class="inline-flex items-center space-x-2 bg-white/5 backdrop-blur-sm border border-yellow-500/20 rounded-full px-6 py-2 mb-8 animate-float">
                <span class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></span>
                <span class="text-yellow-400 font-semibold tracking-wider text-sm">✦ GET IN TOUCH ✦</span>
            </div>

            <h1 class="text-5xl md:text-7xl font-bold mb-8 tracking-tight">
                <span class="bg-linear-to-r from-white to-gray-400 bg-clip-text text-transparent">Let's</span>
                <span class="bg-linear-to-r from-yellow-400 via-orange-500 to-yellow-600 bg-clip-text text-transparent">
                    Connect</span>
            </h1>

            <div class="flex justify-center items-center space-x-4 mb-8">
                <div class="w-16 h-0.5 bg-linear-to-r from-transparent via-yellow-500 to-transparent"></div>
                <span class="text-yellow-500 text-2xl animate-spin-slow">✧</span>
                <div class="w-16 h-0.5 bg-linear-to-r from-transparent via-yellow-500 to-transparent"></div>
            </div>

            <p class="text-gray-400 max-w-2xl mx-auto text-lg md:text-xl leading-relaxed">
                Have questions about our courses or platform? We'd love to hear from you.
                Our team is ready to help you on your learning journey.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8 items-start">

            <div class="lg:col-span-1 space-y-6">
                <!-- Phone Card -->
                <div class="group relative">
                    <div
                        class="absolute -inset-0.5 bg-linear-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-30 blur-xl transition-all duration-700">
                    </div>
                    <div
                        class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 hover:border-yellow-500/30 transition-all duration-500">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-14 h-14 rounded-2xl bg-linear-to-br from-yellow-500/20 to-orange-500/20 flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-7 h-7 text-yellow-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">Phone</h3>
                                <p class="text-gray-400 text-sm mb-2">Mon-Fri 9am-6pm</p>
                                <a href="tel:+1234567890"
                                    class="text-yellow-400 hover:text-yellow-300 transition-colors text-lg font-semibold">+1
                                    (234) 567-890</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Email Card -->
                <div class="group relative">
                    <div
                        class="absolute -inset-0.5 bg-linear-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-30 blur-xl transition-all duration-700">
                    </div>
                    <div
                        class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 hover:border-yellow-500/30 transition-all duration-500">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-14 h-14 rounded-2xl bg-linear-to-br from-yellow-500/20 to-orange-500/20 flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-7 h-7 text-yellow-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">Email</h3>
                                <p class="text-gray-400 text-sm mb-2">24/7 Support</p>
                                <a href="mailto:support@lms.com"
                                    class="text-yellow-400 hover:text-yellow-300 transition-colors text-lg font-semibold">support@lms.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Location Card -->
                <div class="group relative">
                    <div
                        class="absolute -inset-0.5 bg-linear-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-30 blur-xl transition-all duration-700">
                    </div>
                    <div
                        class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 hover:border-yellow-500/30 transition-all duration-500">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-14 h-14 rounded-2xl bg-linear-to-br from-yellow-500/20 to-orange-500/20 flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-7 h-7 text-yellow-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">Location</h3>
                                <p class="text-gray-400 text-sm mb-2">Visit our HQ</p>
                                <p class="text-white text-lg">Sargodha, Pakistan</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div
                    class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6">
                    <h3 class="text-lg font-semibold text-white mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-linear-to-r hover:from-yellow-500 hover:to-orange-500 hover:text-black transition-all duration-300 group">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-black" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z">
                                </path>
                            </svg>
                        </a>
                        <a href="#"
                            class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-linear-to-r hover:from-yellow-500 hover:to-orange-500 hover:text-black transition-all duration-300 group">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-black" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                </path>
                            </svg>
                        </a>
                        <a href="#"
                            class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-linear-to-r hover:from-yellow-500 hover:to-orange-500 hover:text-black transition-all duration-300 group">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-black" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.03-2.688-.103-.253-.447-1.27.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.38.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z">
                                </path>
                            </svg>
                        </a>
                        <a href="#"
                            class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-linear-to-r hover:from-yellow-500 hover:to-orange-500 hover:text-black transition-all duration-300 group">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-black" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form - Right Side -->
            <div class="lg:col-span-2">
                <div class="group relative">
                    <!-- Glow Effect -->
                    <div
                        class="absolute -inset-1 bg-linear-to-r from-yellow-500 to-orange-500 rounded-3xl opacity-20 group-hover:opacity-30 blur-2xl transition-all duration-700">
                    </div>

                    <!-- Form Container with Premium Styling -->
                    <div
                        class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-8 md:p-10 hover:border-yellow-500/30 transition-all duration-500">

                        <form method="POST" action="#" class="space-y-6">
                            @csrf

                            <!-- Name Field with Icon -->
                            <div class="relative">
                                <label class="block text-gray-300 text-sm font-semibold mb-2 tracking-wide">
                                    FULL NAME
                                </label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-yellow-500">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                            </path>
                                        </svg>
                                    </span>
                                    <input type="text" name="name" placeholder="John Doe"
                                        class="w-full bg-black/50 border border-gray-700 rounded-xl pl-12 pr-4 py-4 
                                                      text-white placeholder-gray-500
                                                      focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 
                                                      outline-none transition-all duration-300
                                                      hover:border-gray-600">
                                </div>
                            </div>

                            <!-- Email Field with Icon -->
                            <div class="relative">
                                <label class="block text-gray-300 text-sm font-semibold mb-2 tracking-wide">
                                    EMAIL ADDRESS
                                </label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-yellow-500">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </span>
                                    <input type="email" name="email" placeholder="john@example.com"
                                        class="w-full bg-black/50 border border-gray-700 rounded-xl pl-12 pr-4 py-4 
                                                      text-white placeholder-gray-500
                                                      focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 
                                                      outline-none transition-all duration-300
                                                      hover:border-gray-600">
                                </div>
                            </div>

                            <!-- Subject Field (Optional) -->
                            <div class="relative">
                                <label class="block text-gray-300 text-sm font-semibold mb-2 tracking-wide">
                                    SUBJECT
                                </label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-yellow-500">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-5-5A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                            </path>
                                        </svg>
                                    </span>
                                    <select name="subject"
                                        class="w-full bg-black/50 border border-gray-700 rounded-xl pl-12 pr-4 py-4 
                                                       text-white
                                                       focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 
                                                       outline-none transition-all duration-300
                                                       hover:border-gray-600 appearance-none cursor-pointer">
                                        <option value="" disabled selected>Select a subject</option>
                                        <option value="general" class="bg-[#0a0a0a]">General Inquiry</option>
                                        <option value="support" class="bg-[#0a0a0a]">Technical Support</option>
                                        <option value="billing" class="bg-[#0a0a0a]">Billing Question</option>
                                        <option value="partnership" class="bg-[#0a0a0a]">Partnership</option>
                                    </select>
                                    <span class="absolute right-4 top-1/2 -translate-y-1/2 text-yellow-500">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <!-- Message Field with Icon -->
                            <div class="relative">
                                <label class="block text-gray-300 text-sm font-semibold mb-2 tracking-wide">
                                    MESSAGE
                                </label>
                                <div class="relative">
                                    <span class="absolute left-4 top-6 text-yellow-500">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                                            </path>
                                        </svg>
                                    </span>
                                    <textarea name="message" rows="6" placeholder="Tell us how we can help..."
                                        class="w-full bg-black/50 border border-gray-700 rounded-xl pl-12 pr-4 py-4 
                                                         text-white placeholder-gray-500
                                                         focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 
                                                         outline-none transition-all duration-300
                                                         hover:border-gray-600 resize-none"></textarea>
                                </div>
                            </div>

                            <!-- Submit Button with Premium Effects -->
                            <div class="pt-4">
                                <button type="submit"
                                    class="group relative w-full px-8 py-5 bg-linear-to-r from-yellow-500 to-orange-500 
                                                   text-black font-semibold rounded-xl overflow-hidden 
                                                   transition-all duration-500 hover:scale-105 hover:shadow-[0_0_40px_rgba(255,170,0,0.5)]
                                                   flex items-center justify-center space-x-3">
                                    <span class="relative z-10 text-lg tracking-wide">SEND MESSAGE</span>
                                    <span
                                        class="relative z-10 text-xl group-hover:translate-x-2 transition-transform">→</span>
                                    <div
                                        class="absolute inset-0 bg-linear-to-r from-yellow-400 to-orange-400 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                    </div>
                                </button>
                            </div>

                            <!-- Trust Badge -->
                            <p
                                class="text-center text-gray-500 text-sm mt-6 flex items-center justify-center space-x-2">
                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Your information is secure and encrypted</span>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section (Optional Premium Addition) -->
        <div class="mt-20">
            <div class="group relative">
                <div
                    class="absolute -inset-1 bg-linear-to-r from-yellow-500 to-orange-500 rounded-3xl opacity-20 group-hover:opacity-30 blur-2xl transition-all duration-700">
                </div>

                <div
                    class="relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-3xl overflow-hidden h-80 hover:border-yellow-500/30 transition-all duration-500">

                    <iframe
                        src="https://www.google.com/maps?q=Corporation+Town+Silanwali+Road+Sargodha+Pakistan&output=embed"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        class="filter grayscale hover:grayscale-0 transition-all duration-700 opacity-70 hover:opacity-100">
                    </iframe>

                    <!-- Map Overlay Gradient -->
                    <div
                        class="absolute inset-0 pointer-events-none bg-linear-to-t from-black/50 via-transparent to-transparent">
                    </div>

                    <!-- Map Badge -->
                    <div
                        class="absolute bottom-6 left-6 bg-black/60 backdrop-blur-xl border border-yellow-500/30 rounded-xl px-6 py-3">
                        <p class="text-white font-semibold">Visit Our Campus</p>
                        <p class="text-gray-400 text-sm">Corporation Town, Silanwali Road<br>Sargodha, Pakistan</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    @keyframes spin-slow {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .animate-spin-slow {
        animation: spin-slow 12s linear infinite;
    }

    @keyframes pulse-slow {

        0%,
        100% {
            opacity: 0.2;
        }

        50% {
            opacity: 0.4;
        }
    }

    .animate-pulse-slow {
        animation: pulse-slow 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }
</style>
@endsection