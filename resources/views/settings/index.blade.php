@extends('layouts.dashboard')
@section('content')
<div class="space-y-8">
    <!-- Header Section -->
    <div class="bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-8">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-white mb-2 flex items-center gap-3">
                    <span class="w-2 h-8 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></span>
                    Settings
                </h1>
                <p class="text-gray-400">Manage your website configuration</p>
            </div>
            <a href="{{ route('settings.edit') }}"
                class="px-6 py-3 bg-gradient-to-r from-yellow-500 to-orange-500 text-black font-semibold rounded-xl hover:shadow-lg hover:shadow-yellow-500/25 transition-all duration-300 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                </svg>
                Edit Settings
            </a>
        </div>
    </div>

    <!-- Settings Display Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Logo Card -->
        <div class="lg:col-span-1">
            <div class="bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6 h-full">
                <h3 class="text-white font-semibold text-lg mb-4 flex items-center gap-2">
                    <span class="w-1 h-6 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></span>
                    Website Logo
                </h3>
                <div class="flex flex-col items-center">
                    @if($settings && $settings->logo)
                    <div class="relative group">
                        <div class="absolute -inset-3 bg-gradient-to-r from-yellow-500/20 to-orange-500/20 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <img src="{{ asset('storage/'.$settings->logo) }}"
                            alt="Website Logo"
                            class="w-48 h-auto relative z-10 drop-shadow-[0_0_15px_rgba(255,215,0,0.3)]">
                    </div>
                    @else
                    <div class="w-48 h-48 bg-white/5 border-2 border-dashed border-yellow-600/20 rounded-2xl flex items-center justify-center">
                        <span class="text-gray-500">No logo uploaded</span>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="lg:col-span-2">
            <div class="bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6">
                <h3 class="text-white font-semibold text-lg mb-4 flex items-center gap-2">
                    <span class="w-1 h-6 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></span>
                    Contact Information
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Phone Number -->
                    <div class="p-4 bg-black/40 rounded-xl">
                        <div class="flex items-center gap-3 text-gray-400 text-sm mb-2">
                            <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Phone Number
                        </div>
                        <div class="text-white font-medium">{{ $settings->number ?? 'Not set' }}</div>
                    </div>

                    <!-- Email -->
                    <div class="p-4 bg-black/40 rounded-xl">
                        <div class="flex items-center gap-3 text-gray-400 text-sm mb-2">
                            <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Email
                        </div>
                        <div class="text-white font-medium">{{ $settings->email ?? 'Not set' }}</div>
                    </div>

                    <!-- Address -->
                    <div class="md:col-span-2 p-4 bg-black/40 rounded-xl">
                        <div class="flex items-center gap-3 text-gray-400 text-sm mb-2">
                            <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Address
                        </div>
                        <div class="text-white font-medium">{{ $settings->address ?? 'Not set' }}</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social Media Links -->
        <div class="lg:col-span-3">
            <div class="bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6">
                <h3 class="text-white font-semibold text-lg mb-4 flex items-center gap-2">
                    <span class="w-1 h-6 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></span>
                    Social Media Links
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Facebook -->
                    <div class="p-4 bg-black/40 rounded-xl group hover:bg-blue-600/10 transition-all">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 rounded-full bg-blue-600/20 flex items-center justify-center">
                                <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </div>
                            <span class="text-white font-medium">Facebook</span>
                        </div>
                        @if($settings && $settings->facebook)
                        <a href="{{ $settings->facebook }}" target="_blank" class="text-sm text-blue-400 hover:underline break-all">
                            {{ Str::limit($settings->facebook, 30) }}
                        </a>
                        @else
                        <span class="text-sm text-gray-500">Not set</span>
                        @endif
                    </div>

                    <!-- Instagram -->
                    <div class="p-4 bg-black/40 rounded-xl group hover:bg-pink-600/10 transition-all">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 rounded-full bg-pink-600/20 flex items-center justify-center">
                                <svg class="w-5 h-5 text-pink-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 011.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 01-1.153 1.772 4.915 4.915 0 01-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 01-1.772-1.153 4.904 4.904 0 01-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 011.153-1.772A4.897 4.897 0 015.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2z"></path>
                                </svg>
                            </div>
                            <span class="text-white font-medium">Instagram</span>
                        </div>
                        @if($settings && $settings->instagram)
                        <a href="{{ $settings->instagram }}" target="_blank" class="text-sm text-pink-400 hover:underline break-all">
                            {{ Str::limit($settings->instagram, 30) }}
                        </a>
                        @else
                        <span class="text-sm text-gray-500">Not set</span>
                        @endif
                    </div>

                    <!-- YouTube -->
                    <div class="p-4 bg-black/40 rounded-xl group hover:bg-red-600/10 transition-all">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 rounded-full bg-red-600/20 flex items-center justify-center">
                                <svg class="w-5 h-5 text-red-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path>
                                </svg>
                            </div>
                            <span class="text-white font-medium">YouTube</span>
                        </div>
                        @if($settings && $settings->youtube)
                        <a href="{{ $settings->youtube }}" target="_blank" class="text-sm text-red-400 hover:underline break-all">
                            {{ Str::limit($settings->youtube, 30) }}
                        </a>
                        @else
                        <span class="text-sm text-gray-500">Not set</span>
                        @endif
                    </div>

                    <!-- LinkedIn -->
                    <div class="p-4 bg-black/40 rounded-xl group hover:bg-blue-700/10 transition-all">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 rounded-full bg-blue-700/20 flex items-center justify-center">
                                <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                </svg>
                            </div>
                            <span class="text-white font-medium">LinkedIn</span>
                        </div>
                        @if($settings && $settings->linkedin)
                        <a href="{{ $settings->linkedin }}" target="_blank" class="text-sm text-blue-400 hover:underline break-all">
                            {{ Str::limit($settings->linkedin, 30) }}
                        </a>
                        @else
                        <span class="text-sm text-gray-500">Not set</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div class="lg:col-span-3">
            <div class="bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6">
                <h3 class="text-white font-semibold text-lg mb-4 flex items-center gap-2">
                    <span class="w-1 h-6 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></span>
                    About Website
                </h3>
                <div class="p-4 bg-black/40 rounded-xl">
                    @if($settings && $settings->website_about)
                    <p class="text-gray-300 leading-relaxed">{{ $settings->website_about }}</p>
                    @else
                    <p class="text-gray-500 italic">No about information provided.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection