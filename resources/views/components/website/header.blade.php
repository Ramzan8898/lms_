{{-- resources/views/components/premium-header.blade --}}
@props(['variant' => 'default'])

{{-- Detect current route for active link underlining --}}
@php
$currentRoute = request()->route()->getName();
@endphp

<header class="w-full bg-(--black)/95 shadow-2xl py-4 border-b border-(--primary)/30 fixed z-999 top-0 backdrop-blur-md bg-opacity-95"
    style="backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);">

    {{-- Animated gradient line at top --}}
    <div class="absolute top-0 left-0 w-full h-0.5 bg-gradient-to-r from-transparent via-(--primary) to-transparent animate-shimmer"></div>

    <div class="flex items-center justify-between container mx-auto px-4 md:px-6 relative">

        {{-- Logo with premium 3D hover effect --}}
        <a href="{{ route('welcome') }}" class="text-center flex justify-center group relative">
            {{-- Glow effect behind logo --}}
            <div class="absolute inset-0 bg-(--primary)/20 blur-xl rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
            <img src="{{ asset('/assets/logo/logo2.png') }}" alt="LOGO"
                class="w-46 h-auto object-contain drop-shadow-2xl brightness-110 transition-all duration-500 
                       group-hover:scale-110 group-hover:rotate-1 group-hover:brightness-125 relative z-10">
        </a>

        {{-- Right section: navigation + auth/dashboard --}}
        <div class="flex flex-row items-center gap-6 lg:gap-8">

            {{-- Desktop Navigation with active page underline --}}
            <nav class="hidden md:flex items-center gap-8 text-gray-200 font-medium">
                <a href="{{ route('welcome') }}"
                    class="text-white/90 uppercase tracking-wider text-sm font-medium hover:text-(--primary) transition-all duration-300 
                          relative px-1 py-2 group overflow-hidden
                          {{ $currentRoute === 'welcome' ? 'text-(--primary) nav-link-active' : '' }}">
                    <span class="relative z-10">Home</span>
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-(--primary) transform transition-transform duration-300 origin-left 
                                 {{ $currentRoute === 'welcome' ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
                    <span class="absolute inset-0  opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-0 rounded
                                 {{ $currentRoute === 'welcome' ? 'opacity-100' : '' }}"></span>
                </a>

                <a href="{{ route('web.courses') }}"
                    class="text-white/90 uppercase tracking-wider text-sm font-medium hover:text-(--primary) transition-all duration-300 
                          relative px-1 py-2 group overflow-hidden
                          {{ $currentRoute === 'web.courses' ? 'text-(--primary) nav-link-active' : '' }}">
                    <span class="relative z-10">Courses</span>
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-(--primary) transform transition-transform duration-300 origin-left 
                                 {{ $currentRoute === 'web.courses' ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
                    <span class="absolute inset-0  opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-0 rounded
                                 {{ $currentRoute === 'web.courses' ? 'opacity-100' : '' }}"></span>
                </a>

                <a href="{{ route('web.about') }}"
                    class="text-white/90 uppercase tracking-wider text-sm font-medium hover:text-(--primary) transition-all duration-300 
                          relative px-1 py-2 group overflow-hidden
                          {{ $currentRoute === 'web.about' ? 'text-(--primary) nav-link-active' : '' }}">
                    <span class="relative z-10">About</span>
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-(--primary) transform transition-transform duration-300 origin-left 
                                 {{ $currentRoute === 'web.about' ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
                    <span class="absolute inset-0  opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-0 rounded
                                 {{ $currentRoute === 'web.about' ? 'opacity-100' : '' }}"></span>
                </a>

                <a href="{{ route('web.contact') }}"
                    class="text-white/90 uppercase tracking-wider text-sm font-medium hover:text-(--primary) transition-all duration-300 
                          relative px-1 py-2 group overflow-hidden
                          {{ $currentRoute === 'web.contact' ? 'text-(--primary) nav-link-active' : '' }}">
                    <span class="relative z-10">Contact</span>
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-(--primary) transform transition-transform duration-300 origin-left 
                                 {{ $currentRoute === 'web.contact' ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
                    <span class="absolute inset-0  opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-0 rounded
                                 {{ $currentRoute === 'web.contact' ? 'opacity-100' : '' }}"></span>
                </a>
            </nav>

            {{-- CONDITIONAL AUTH / GUEST with ultra-premium design --}}
            @auth
            {{-- Authenticated: Dashboard button with premium gradient and 3D effects --}}
            <a href="{{ route('admin.dashboard') }}"
                class="relative px-6 py-3 rounded-xl bg-gradient-to-r from-amber-400 via-yellow-500 to-amber-400 
                      text-(--dark) font-bold uppercase tracking-wider text-sm 
                      hover:shadow-2xl hover:shadow-amber-500/50 transition-all duration-500 
                      premium-glow flex items-center gap-3 group border border-amber-300/50
                      hover:scale-105 active:scale-95
                      {{ $currentRoute === 'admin.dashboard' ? 'ring-2 ring-(--primary) ring-offset-2 ring-offset-(--black)' : '' }}"
                style="background-size: 200% auto;"
                onmouseover="this.style.backgroundPosition='right center'"
                onmouseout="this.style.backgroundPosition='left center'">

                {{-- Animated ring --}}
                <span class="absolute inset-0 rounded-xl border-2 border-transparent group-hover:border-amber-300/30 
                             animate-pulse-slow"></span>

                <span class="relative">
                    Dashboard
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-white/30 scale-x-0 group-hover:scale-x-100 
                                 transition-transform duration-300 origin-left
                                 {{ $currentRoute === 'admin.dashboard' ? 'scale-x-100' : '' }}"></span>
                </span>

                <i class="fas fa-chevron-right text-xs opacity-70 group-hover:translate-x-1.5 group-hover:opacity-100 
                         transition-all duration-300"></i>

                {{-- Shine effect --}}
             
            </a>
            @else
            {{-- Guest: Sign In button with premium glassmorphism --}}
            <a href="{{ route('login') }}"
                class="relative px-6 py-3 rounded-xl bg-transparent backdrop-blur-sm
                      border-2 border-(--primary)/50 text-(--primary) font-bold 
                      uppercase tracking-wider text-sm hover:bg-(--primary) hover:border-(--primary) 
                      hover:text-(--dark) transition-all duration-500 premium-glow-hover 
                      flex items-center gap-3 group overflow-hidden
                      hover:scale-105 active:scale-95
                      shadow-[0_0_20px_rgba(251,191,36,0.3)] hover:shadow-[0_0_30px_rgba(251,191,36,0.6)]
                      {{ $currentRoute === 'login' ? 'bg-(--primary)/10 border-(--primary)' : '' }}">

                {{-- Background animation --}}
                <span class="absolute inset-0 bg-(--primary) opacity-0 group-hover:opacity-100 transition-opacity duration-500 
                             -z-10"></span>

                {{-- Icon with animation --}}
                <span class="relative z-10 flex items-center gap-2">
                    <i class="fas fa-arrow-right-to-bracket text-sm opacity-80 group-hover:opacity-100 
                              group-hover:translate-x-1 transition-all duration-300"></i>
                    <span class="relative">
                        Sign In
                        <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-(--dark) scale-x-0 group-hover:scale-x-100 
                                     transition-transform duration-300 origin-left
                                     {{ $currentRoute === 'login' ? 'scale-x-100 bg-(--primary)' : '' }}"></span>
                    </span>
                </span>

                {{-- Glow particles --}}
                <span class="absolute w-20 h-20 bg-(--primary)/30 rounded-full blur-3xl opacity-0 
                             group-hover:opacity-100 transition-opacity duration-700 -z-5"></span>
            </a>
            @endauth

            {{-- Premium Mobile menu trigger with animation --}}
            <button class="block md:hidden text-white text-2xl focus:outline-none hover:text-(--primary) 
                           transition-all duration-300 hover:rotate-90 hover:scale-110 relative group"
                aria-label="Toggle menu"
                x-data @click="$dispatch('toggle-mobile-menu')">
                <i class="fas fa-bars"></i>
                <span class="absolute inset-0 bg-(--primary)/20 rounded-full blur-xl opacity-0 
                             group-hover:opacity-100 transition-opacity duration-300"></span>
            </button>
        </div>
    </div>

    {{-- Bottom shimmer line --}}
    <div class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-(--primary)/50 to-transparent"></div>
</header>

{{-- Include Font Awesome if not already present in layout --}}
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endpush

{{-- Premium custom styles --}}
@push('styles')
<style>
    /* Custom CSS variables with expanded palette */
    :root {
        --black: #0a0a0a;
        --primary: #fbbf24;
        --primary-light: #fcd34d;
        --primary-dark: #d97706;
        --dark: #0f0f0f;
        --dark-light: #1a1a1a;
    }

    /* Premium glow effects */
    .premium-glow {
        box-shadow: 0 0 0 1px rgba(251, 191, 36, 0.3),
            0 4px 15px rgba(251, 191, 36, 0.3),
            0 0 30px rgba(251, 191, 36, 0.2);
        animation: glowPulse 3s infinite;
    }

    .premium-glow-hover {
        transition: all 0.3s ease;
    }

    .premium-glow-hover:hover {
        box-shadow: 0 0 0 2px rgba(251, 191, 36, 0.5),
            0 8px 25px rgba(251, 191, 36, 0.4),
            0 0 40px rgba(251, 191, 36, 0.3);
    }

    /* Active link styling */
    .nav-link-active {
        @apply text-(--primary);
    }

    .nav-link-active .absolute.bottom-0 {
        @apply scale-x-100;
    }

    /* Animations */
    @keyframes glowPulse {

        0%,
        100% {
            box-shadow: 0 0 0 1px rgba(251, 191, 36, 0.3),
                0 4px 15px rgba(251, 191, 36, 0.3),
                0 0 30px rgba(251, 191, 36, 0.2);
        }

        50% {
            box-shadow: 0 0 0 2px rgba(251, 191, 36, 0.4),
                0 6px 20px rgba(251, 191, 36, 0.4),
                0 0 40px rgba(251, 191, 36, 0.3);
        }
    }

    @keyframes shimmer {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(100%);
        }
    }

    .animate-shimmer {
        animation: shimmer 3s infinite;
    }

    @keyframes pulse-slow {

        0%,
        100% {
            opacity: 0.3;
        }

        50% {
            opacity: 0.6;
        }
    }

    .animate-pulse-slow {
        animation: pulse-slow 3s infinite;
    }

    /* Smooth transitions */
    .transition {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Backdrop blur support */
    .backdrop-blur-md {
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
    }

    /* Custom scrollbar for premium feel */
    ::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }

    ::-webkit-scrollbar-track {
        background: var(--dark);
    }

    ::-webkit-scrollbar-thumb {
        background: var(--primary);
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: var(--primary-dark);
    }
</style>
@endpush

{{-- Alpine.js component for mobile menu with premium interactions --}}
@push('scripts')
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('mobileMenu', () => ({
            open: false,
            toggle() {
                this.open = !this.open;
                if (this.open) {
                    document.body.style.overflow = 'hidden';
                } else {
                    document.body.style.overflow = '';
                }
            }
        }));
    });

    // Optional: Close mobile menu on resize
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            document.body.style.overflow = '';
        }
    });
</script>
@endpush

{{-- Tailwind custom utilities if not using @apply --}}
@push('styles')
<style>
    .bg-\(\--black\) {
        background-color: var(--black);
    }

    .text-\(\--primary\) {
        color: var(--primary);
    }

    .border-\(\--primary\) {
        border-color: var(--primary);
    }

    .hover\:bg-\(\--primary\):hover {
        background-color: var(--primary);
    }

    .hover\:border-\(\--primary\):hover {
        border-color: var(--primary);
    }

    .hover\:text-\(\--dark\):hover {
        color: var(--dark);
    }

    .bg-\(\--dark\) {
        background-color: var(--dark);
    }

    .from-\(\--primary\) {
        --tw-gradient-from: var(--primary);
    }

    .via-\(\--primary-light\) {
        --tw-gradient-via: var(--primary-light);
    }

    .to-\(\--primary-dark\) {
        --tw-gradient-to: var(--primary-dark);
    }
</style>
@endpush