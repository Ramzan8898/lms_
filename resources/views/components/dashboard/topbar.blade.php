@php $current = request()->route()->getName(); @endphp

<!-- Ultra Premium Admin Header -->
<header
    class="relative h-24 bg-linear-to-r  from-[#0a0a0a] via-[#0f0f0f] to-black border-b border-yellow-600/20 flex items-center justify-between px-8 lg:px-12 backdrop-blur-xl">

    <!-- Advanced Background Effects -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Gradient Orbs -->
        <div class="absolute -top-20 -left-20 w-64 h-64 bg-yellow-500/5 rounded-full blur-3xl animate-pulse-slow"></div>
        <div
            class="absolute -bottom-20 -right-20 w-64 h-64 bg-orange-500/5 rounded-full blur-3xl animate-pulse-slow animation-delay-2000">
        </div>

        <!-- Subtle Grid Pattern -->
        <div class="absolute inset-0 opacity-5"
            style="background-image: radial-gradient(circle at 1px 1px, rgba(255,215,0,0.1) 1px, transparent 0); background-size: 30px 30px;">
        </div>

        <!-- Floating Particles -->
        <div class="absolute top-1/3 left-1/4 w-1 h-1 bg-yellow-400/20 rounded-full animate-float-slow"></div>
        <div class="absolute bottom-1/4 right-1/3 w-1.5 h-1.5 bg-orange-400/20 rounded-full animate-float"></div>
    </div>

    <!-- Animated Bottom Line -->
    <div class="absolute bottom-0 left-0 w-full h-px overflow-hidden">
        <div class="absolute inset-0 bg-linear-to-r from-transparent via-yellow-500 to-transparent animate-slide">
        </div>
    </div>

    <!-- Left Section - Page Title with Premium Effects -->
    <div class="relative flex items-center gap-4 group">

        <!-- Search Bar (Quick Access) -->
        <div class="hidden lg:block relative group/search">
            <input type="text" placeholder="Quick search..."
                class="w-150 pl-10 pr-4 py-2.5 bg-white/5 border border-white/10 rounded-xl text-white text-sm placeholder-gray-500 focus:outline-none focus:border-yellow-500/50 focus:ring-2 focus:ring-yellow-500/20 transition-all duration-300">
            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-500 group-hover/search:text-yellow-400 transition-colors"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <span class="absolute right-3 top-1/2 -translate-y-1/2 text-xs text-gray-600">⌘K</span>
        </div>
    </div>

    <!-- Right Section - User Info & Actions -->
    <div class="relative flex items-center gap-6">

        <!-- Action Buttons -->
        <div class="flex items-center gap-3">
            <!-- Notifications -->
            <button class="relative p-2.5 text-gray-400 hover:text-yellow-400 transition-colors group/notify">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                    </path>
                </svg>
                <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full">
                    <span class="absolute inset-0 bg-red-500 rounded-full animate-ping opacity-75"></span>
                </span>

                <!-- Tooltip -->
                <span
                    class="absolute -bottom-8 left-1/2 -translate-x-1/2 px-2 py-1 bg-gray-900 text-white text-xs rounded opacity-0 group-hover/notify:opacity-100 transition-opacity whitespace-nowrap">
                    Notifications
                </span>
            </button>

            <!-- Messages -->
            <button class="relative p-2.5 text-gray-400 hover:text-yellow-400 transition-colors group/msg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                    </path>
                </svg>
                <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-green-500 rounded-full"></span>

                <!-- Tooltip -->
                <span
                    class="absolute -bottom-8 left-1/2 -translate-x-1/2 px-2 py-1 bg-gray-900 text-white text-xs rounded opacity-0 group-hover/msg:opacity-100 transition-opacity whitespace-nowrap">
                    Messages
                </span>
            </button>

            <!-- Settings -->
            <button class="p-2.5 text-gray-400 hover:text-yellow-400 transition-colors group/settings">
                <svg class="w-5 h-5 group-hover/settings:rotate-90 transition-transform duration-500" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                    </path>
                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>

                <!-- Tooltip -->
                <span
                    class="absolute -bottom-8 left-1/2 -translate-x-1/2 px-2 py-1 bg-gray-900 text-white text-xs rounded opacity-0 group-hover/settings:opacity-100 transition-opacity whitespace-nowrap">
                    Settings
                </span>
            </button>
        </div>

        <!-- Vertical Divider -->
        <div class="w-px h-8 bg-linear-to-b from-transparent via-yellow-500/30 to-transparent"></div>

        <!-- User Profile Section -->
        <div class="relative group/profile">
            <!-- Glow Effect -->
            <div
                class="absolute -inset-3 bg-linear-to-r from-yellow-500/20 to-orange-500/20 rounded-full blur-xl opacity-0 group-hover/profile:opacity-100 transition-opacity duration-500">
            </div>

            <!-- Profile Container -->
            <div class="relative flex items-center gap-4 cursor-pointer">
                <!-- Avatar with Status -->
                <div class="relative">
                    <div
                        class="absolute -inset-1 bg-linear-to-r from-yellow-500 to-orange-500 rounded-full opacity-0 group-hover/profile:opacity-30 blur transition-opacity duration-500">
                    </div>

                    @if (auth()->user()->profile_photo ?? false)
                        <img src="{{ auth()->user()->profile_photo }}"
                            class="w-12 h-12 rounded-full border-2 border-yellow-500/50 group-hover/profile:border-yellow-400 transition-all duration-500">
                    @else
                        <div
                            class="w-12 h-12 rounded-full bg-linear-to-br from-yellow-500 to-orange-500 flex items-center justify-center text-black font-bold text-lg border-2 border-yellow-500/50 group-hover/profile:border-yellow-400 transition-all duration-500">
                            {{ substr(auth()->user()->name ?? 'Admin', 0, 1) }}
                        </div>
                    @endif

                    <!-- Online Status -->
                    <span class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-green-500 rounded-full border-2 border-black">
                        <span class="absolute inset-0 bg-green-500 rounded-full animate-ping opacity-75"></span>
                    </span>
                </div>

                <!-- User Info -->
                <div class="hidden lg:block">
                    <div class="flex items-center gap-2">
                        <h3
                            class="text-white font-semibold text-sm group-hover/profile:text-yellow-400 transition-colors">
                            {{ auth()->user()->name ?? '' }}
                        </h3>
                    </div>

                    <!-- Email and Meta -->
                    <div class="flex items-center gap-2 text-xs text-gray-500 mt-1">
                        <span
                            class="px-2 py-0.5 bg-yellow-500/10 border border-yellow-500/30 rounded-full text-xs text-yellow-400">{{ auth()->user()->email ?? 'admin@lms.com' }}</span>
                    </div>
                </div>

                <!-- Dropdown Arrow -->
                <svg class="w-4 h-4 text-yellow-400 group-hover/profile:text-yellow-400 transition-colors hidden lg:block"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>

            <!-- Dropdown Menu -->
            <div
                class="absolute top-full right-0 mt-4 w-64 opacity-0 invisible group-hover/profile:opacity-100 group-hover/profile:visible transition-all duration-500 transform group-hover/profile:translate-y-0 translate-y-2 z-9999">
                <div
                    class="relative bg-linear-to-b from-gray-900/95 to-black/95 backdrop-blur-2xl border border-yellow-500/20 rounded-2xl overflow-hidden shadow-2xl shadow-yellow-500/10">

                    <!-- Decorative Top Bar -->
                    <div class="absolute top-0 left-0 w-full h-1 bg-linear-to-r from-yellow-500 to-orange-500"></div>

                    <!-- Menu Items -->
                    <div class="relative p-3">
                        <!-- Profile -->
                        <a href="{{ route('admin.profile') }}"
                            class="flex items-center gap-3 px-4 py-3 text-gray-300 hover:text-yellow-400 hover:bg-white/5 rounded-xl transition-all duration-300 group/item">
                            <svg class="w-5 h-5 text-gray-500 group-hover/item:text-yellow-400 transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span class="flex-1">My Profile</span>
                        </a>

                     

                        <!-- Divider -->
                        <div class="my-2 border-t border-white/10"></div>

                        <!-- Logout -->
                        <form method="POST" action="{{ route('auth.logout') }}" class="block">
                            @csrf
                            <button type="submit"
                                class="w-full flex items-center gap-3 px-4 py-3 cursor-pointer text-red-400 hover:text-red-300 hover:bg-red-500/10 rounded-xl transition-all duration-300 group/item">
                                <svg class="w-5 h-5 group-hover/item:rotate-12 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                    </path>
                                </svg>
                                <span class="flex-1 text-left">Sign Out</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

        @keyframes float-slow {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 0.1;
            }

            50% {
                opacity: 0.2;
            }
        }

        @keyframes slide {
            0% {
                transform: translateX(-100%);
            }

            50% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-slow {
            animation: float-slow 8s ease-in-out infinite;
        }

        .animate-pulse-slow {
            animation: pulse-slow 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        .animate-slide {
            animation: slide 8s ease-in-out infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }
    </style>
</header>
