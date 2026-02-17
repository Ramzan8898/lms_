@props(['items' => [], 'homeIcon' => true, 'showIcons' => true])

<!-- Ultra Premium Breadcrumb Component -->
<nav class="relative mb-8 text-sm group" aria-label="Breadcrumb">

    <!-- Background Glow Effect -->
    <div class="absolute -inset-2 bg-gradient-to-r from-yellow-500/5 to-orange-500/5 rounded-xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

    <!-- Main Breadcrumb Container -->
    <div class="relative flex items-center justify-between">

        <!-- Breadcrumb Trail -->
        <ol class="flex flex-wrap items-center gap-1.5 text-gray-400">

            <!-- Home/Dashboard Link with Premium Icon -->
            <li class="flex items-center">
                <a href="{{ route('dashboard') }}"
                    class="group/item relative flex items-center gap-2 px-3 py-2 rounded-lg
                          bg-gradient-to-r from-yellow-500/0 to-orange-500/0
                          hover:from-yellow-500/10 hover:to-orange-500/10
                          transition-all duration-500 overflow-hidden">

                    <!-- Icon with Animation -->
                    <span class="relative flex items-center justify-center">
                        @if($homeIcon)
                        <svg class="w-4 h-4 text-yellow-400 group-hover/item:scale-110 group-hover/item:rotate-3 transition-all duration-500"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        @endif
                    </span>

                    <!-- Text -->
                    <span class="font-medium text-yellow-400 group-hover/item:text-yellow-300 transition-colors">
                        Dashboard
                    </span>

                    <!-- Shine Effect -->
                    <span class="absolute inset-0 -translate-x-full group-hover/item:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/10 to-transparent skew-x-12"></span>
                </a>
            </li>

            <!-- Dynamic Breadcrumb Items -->
            @foreach ($items as $index => $item)
            <!-- Separator with Animation -->
            <li class="flex items-center">
                <span class="flex items-center justify-center w-5 h-5">
                    <svg class="w-3 h-3 text-gray-600 group-hover:text-gray-500 transition-colors"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </span>
            </li>

            <!-- Breadcrumb Item -->
            <li class="flex items-center">
                @if(isset($item['url']) && $item['url'])
                <!-- Linked Item -->
                <a href="{{ $item['url'] }}"
                    class="group/item relative flex items-center gap-2 px-3 py-2 rounded-lg
                                  bg-gradient-to-r from-yellow-500/0 to-orange-500/0
                                  hover:from-yellow-500/10 hover:to-orange-500/10
                                  transition-all duration-500 overflow-hidden">

                    <!-- Icon (if available) -->
                    @if($showIcons && isset($item['icon']))
                    <span class="text-gray-500 group-hover/item:text-yellow-400 transition-colors duration-500">
                        {!! $item['icon'] !!}
                    </span>
                    @endif

                    <!-- Label -->
                    <span class="text-gray-300 group-hover/item:text-yellow-400 transition-colors duration-500 font-medium">
                        {{ $item['label'] }}
                    </span>

                    <!-- Shine Effect -->
                    <span class="absolute inset-0 -translate-x-full group-hover/item:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/10 to-transparent skew-x-12"></span>
                </a>
                @else
                <!-- Current Page (Active) -->
                <div class="relative flex items-center gap-2 px-3 py-2">
                    <!-- Active Indicator -->
                    <span class="absolute inset-0 bg-gradient-to-r from-yellow-500/20 to-orange-500/20 rounded-lg blur-sm"></span>
                    <span class="absolute inset-0 border border-yellow-500/30 rounded-lg"></span>

                    <!-- Icon (if available) -->
                    @if($showIcons && isset($item['icon']))
                    <span class="relative z-10 text-yellow-400">
                        {!! $item['icon'] !!}
                    </span>
                    @endif

                    <!-- Label with Gradient -->
                    <span class="relative z-10 font-bold bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                        {{ $item['label'] }}
                    </span>

                    <!-- Current Page Badge -->
                    <span class="relative z-10 ml-2 px-1.5 py-0.5 bg-yellow-500/20 border border-yellow-500/30 rounded text-[10px] text-yellow-400">
                        Current
                    </span>
                </div>
                @endif
            </li>
            @endforeach
        </ol>

        <!-- Right Side Actions (Optional) -->
        <div class="flex items-center gap-3">
            <!-- Page View Toggle (Example) -->
            <button class="p-2 text-gray-500 hover:text-yellow-400 transition-colors group/btn relative">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                </svg>

                <!-- Tooltip -->
                <span class="absolute -bottom-8 left-1/2 -translate-x-1/2 px-2 py-1 bg-gray-900 text-white text-xs rounded opacity-0 group-hover/btn:opacity-100 transition-opacity whitespace-nowrap">
                    Grid View
                </span>
            </button>

            <!-- Refresh Button -->
            <button onclick="window.location.reload()"
                class="p-2 text-gray-500 hover:text-yellow-400 transition-colors group/btn relative">
                <svg class="w-4 h-4 group-hover/btn:rotate-180 transition-transform duration-1000"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>

                <!-- Tooltip -->
                <span class="absolute -bottom-8 left-1/2 -translate-x-1/2 px-2 py-1 bg-gray-900 text-white text-xs rounded opacity-0 group-hover/btn:opacity-100 transition-opacity whitespace-nowrap">
                    Refresh
                </span>
            </button>
        </div>
    </div>

    <!-- Usage Example (Commented) -->
    {{--
    @component('components.premium-breadcrumb', [
        'items' => [
            ['label' => 'Users', 'url' => route('admin.users'), 'icon' => '<svg>...</svg>'],
            ['label' => 'Edit User'], // current page
        ],
        'homeIcon' => true,
        'showIcons' => true
    ])
    @endcomponent
    --}}
</nav>

<!-- Alternative Compact Version (for smaller spaces) -->
@once
<style>
    /* Premium Breadcrumb Animations */
    .breadcrumb-enter {
        opacity: 0;
        transform: translateX(-10px);
    }

    .breadcrumb-enter-active {
        opacity: 1;
        transform: translateX(0);
        transition: opacity 0.3s, transform 0.3s;
    }

    /* Gradient Text Animation */
    @keyframes gradientShift {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .gradient-text {
        background-size: 200% auto;
        animation: gradientShift 3s ease infinite;
    }
</style>
@endonce