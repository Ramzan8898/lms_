<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel') . ' - Admin Panel')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon.ico') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles -->
    @stack('styles')
</head>

<body class="bg-gradient-to-br from-[#0a0a0a] via-[#0f0f0f] to-black text-gray-200 font-['Inter'] antialiased overflow-hidden">

    <!-- Premium Static Background -->
    <div class="fixed inset-0 pointer-events-none">
        <!-- Subtle Gradient Orbs (Static) -->
        <div class="absolute top-0 left-0 w-[800px] h-[800px] bg-gradient-to-r from-yellow-500/5 to-transparent rounded-full blur-[120px]"></div>
        <div class="absolute bottom-0 right-0 w-[800px] h-[800px] bg-gradient-to-l from-orange-500/5 to-transparent rounded-full blur-[120px]"></div>

        <!-- Premium Grid Pattern -->
        <div class="absolute inset-0 opacity-10"
            style="background-image: 
                     linear-gradient(rgba(255,215,0,0.03) 1px, transparent 1px),
                     linear-gradient(90deg, rgba(255,215,0,0.03) 1px, transparent 1px);
                     background-size: 50px 50px;">
        </div>

        <!-- Radial Gradient for Depth -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,rgba(255,215,0,0.03),transparent_50%)]"></div>
    </div>

    <div class="flex h-screen overflow-hidden relative z-10">

        <!-- Sidebar Component -->
        <x-dashboard.sidebar />

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col overflow-hidden">

            <!-- Topbar Component -->
            <x-dashboard.topbar />

            <!-- Main Content with Scroll -->
            <main class="flex-1 overflow-y-auto overflow-x-hidden scrollbar-thin">

                <!-- Page Header (Conditional) -->
                @hasSection('page-header')
                <div class="px-8 pt-8">
                    <div class="relative">
                        <!-- Static Gradient Line -->
                        <div class="absolute left-0 top-0 w-1 h-12 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></div>

                        <div class="pl-6">
                            <h1 class="text-3xl font-bold tracking-tight">
                                <span class="bg-gradient-to-r from-yellow-400 via-orange-500 to-yellow-600 bg-clip-text text-transparent">
                                    @yield('page-header')
                                </span>
                            </h1>
                            @hasSection('page-description')
                            <p class="text-gray-500 text-sm mt-2 font-light tracking-wide">
                                @yield('page-description')
                            </p>
                            @endif
                        </div>

                        <!-- Page Actions -->
                        @hasSection('page-actions')
                        <div class="absolute right-0 top-1/2 -translate-y-1/2">
                            <div class="flex items-center gap-3">
                                @yield('page-actions')
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @endif

                <!-- Main Content Card -->
                <div class="p-8">
                    <!-- Premium Static Card -->
                    <div class="relative">
                        <!-- Subtle Border Glow -->
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/10 to-orange-500/10 rounded-2xl blur-md"></div>

                        <!-- Main Card -->
                        <div class="relative bg-gradient-to-b from-[#1a1a1a] to-[#0f0f0f] rounded-2xl border border-yellow-500/20 shadow-2xl overflow-hidden">

                            <!-- Card Header Decoration -->
                            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-yellow-500 to-orange-500"></div>

                            <!-- Card Header (Optional) -->
                            @hasSection('card-header')
                            <div class="px-8 py-6 border-b border-yellow-500/10">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <!-- Decorative Icon/Line -->
                                        <div class="w-1 h-6 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></div>
                                        <h2 class="text-lg font-semibold text-white tracking-wide">
                                            @yield('card-header')
                                        </h2>
                                    </div>
                                    @hasSection('card-actions')
                                    <div class="flex items-center gap-2">
                                        @yield('card-actions')
                                    </div>
                                    @endif
                                </div>
                            </div>
                            @endif

                            <!-- Card Body -->
                            <div class="p-8">
                                @yield('content')
                            </div>

                            <!-- Card Footer (Optional) -->
                            @hasSection('card-footer')
                            <div class="px-8 py-4 bg-black/30 border-t border-yellow-500/10">
                                <div class="text-sm text-gray-500">
                                    @yield('card-footer')
                                </div>
                            </div>
                            @endif

                            <!-- Premium Static Decorations -->
                            <div class="absolute top-20 right-20 w-40 h-40 bg-yellow-500/5 rounded-full blur-3xl"></div>
                            <div class="absolute bottom-20 left-20 w-40 h-40 bg-orange-500/5 rounded-full blur-3xl"></div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Premium Footer -->
            <footer class="relative px-8 py-3 border-t border-yellow-500/10 bg-black/30">
                <div class="flex items-center justify-between">
                    <!-- Left Section -->
                    <div class="flex items-center gap-4">
                        <span class="text-xs text-gray-600 font-light tracking-wide">
                            © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                        </span>
                        <span class="w-1 h-1 bg-yellow-500/30 rounded-full"></span>
                        <span class="text-xs text-gray-600 font-light">
                            v2.0.0
                        </span>
                    </div>

                    <!-- Right Section -->
                    <div class="flex items-center gap-6">
                        <span class="text-xs text-gray-600 font-light hover:text-gray-400 transition-colors duration-300 cursor-default">
                            Terms
                        </span>
                        <span class="text-xs text-gray-600 font-light hover:text-gray-400 transition-colors duration-300 cursor-default">
                            Privacy
                        </span>
                        <span class="text-xs text-gray-600 font-light hover:text-gray-400 transition-colors duration-300 cursor-default">
                            Help
                        </span>

                        <!-- Status Indicator -->
                        <div class="flex items-center gap-2 pl-4 border-l border-yellow-500/20">
                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                            <span class="text-xs text-gray-500 font-light">System Online</span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Custom Scripts -->
    @stack('scripts')

    <style>
        /* Custom Scrollbar - Premium Static Design */
        .scrollbar-thin::-webkit-scrollbar {
            width: 4px;
        }

        .scrollbar-thin::-webkit-scrollbar-track {
            background: rgba(255, 215, 0, 0.02);
        }

        .scrollbar-thin::-webkit-scrollbar-thumb {
            background: rgba(255, 215, 0, 0.15);
            border-radius: 20px;
        }

        /* Smooth Font Rendering */
        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Selection Style */
        ::selection {
            background: rgba(255, 215, 0, 0.2);
            color: #fff;
        }

        /* Placeholder Style */
        ::placeholder {
            color: rgba(255, 255, 255, 0.3);
            font-weight: 300;
        }
    </style>
</body>

</html>