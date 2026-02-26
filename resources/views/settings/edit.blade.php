@extends('layouts.dashboard')


@section('content')
    <div class="space-y-8">
        <!-- Header Section -->
        <div class="bg-linear-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-white mb-2 flex items-center gap-3">
                        <span class="w-2 h-8 bg-linear-to-b from-yellow-500 to-orange-500 rounded-full"></span>
                        Edit Settings
                    </h1>
                    <p class="text-gray-400">Update your website configuration</p>
                </div>
                <a href="{{ route('settings.index') }}"
                    class="px-6 py-3 bg-white/5 border border-white/10 text-white rounded-xl hover:bg-white/10 transition-all duration-300 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Settings
                </a>
            </div>
        </div>

        <!-- Edit Form -->
        <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Logo Upload -->
                <div class="lg:col-span-1">
                    <div
                        class="bg-linear-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6 sticky top-24">
                        <h3 class="text-white font-semibold text-lg mb-4 flex items-center gap-2">
                            <span class="w-1 h-6 bg-linear-to-b from-yellow-500 to-orange-500 rounded-full"></span>
                            Website Logo
                        </h3>

                        <div class="space-y-4">
                            <!-- Current Logo Preview -->
                            @if ($settings && $settings->logo)
                                <div class="mb-4">
                                    <label class="block text-gray-400 text-sm mb-4">Current Logo</label>
                                    <img src="{{ asset($settings->logo) }}" alt="Current Logo"
                                        class="w-66 h-auto ">
                                </div>
                            @endif

                            <!-- Upload New Logo -->
                            <div>
                                <label class="block text-gray-400 text-sm mb-2">Upload New Logo</label>
                                <div class="relative">
                                    <input type="file" name="logo" id="logo" accept="image/*" class="hidden"
                                        onchange="previewLogo(this)">
                                    <button type="button" onclick="document.getElementById('logo').click()"
                                        class="w-full px-6 py-4 bg-yellow-500/10 border border-yellow-500/30 rounded-xl text-yellow-400 hover:bg-yellow-500/20 transition-all flex items-center justify-center gap-2">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0l-4 4m4-4v12"></path>
                                        </svg>
                                        Choose Logo
                                    </button>
                                </div>
                                <div id="logo-preview" class="mt-4 hidden">
                                    <img src="#" alt="Logo Preview"
                                        class="w-32 h-auto rounded-lg border border-yellow-500">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Settings Form -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Contact Information -->
                    <div class="bg-linear-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6">
                        <h3 class="text-white font-semibold text-lg mb-4 flex items-center gap-2">
                            <span class="w-1 h-6 bg-linear-to-b from-yellow-500 to-orange-500 rounded-full"></span>
                            Contact Information
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Phone Number -->
                            <div>
                                <label class="block text-gray-400 text-sm mb-2">Phone Number</label>
                                <input type="text" name="number" value="{{ old('number', $settings->number ?? '') }}"
                                    placeholder="+1 234 567 890"
                                    class="w-full px-4 py-3 bg-black/50 border border-yellow-600/20 rounded-xl text-white placeholder-gray-500 focus:border-yellow-500/50 focus:outline-none transition-all">
                            </div>

                            <!-- Email -->
                            <div>
                                <label class="block text-gray-400 text-sm mb-2">Email Address</label>
                                <input type="email" name="email" value="{{ old('email', $settings->email ?? '') }}"
                                    placeholder="info@example.com"
                                    class="w-full px-4 py-3 bg-black/50 border border-yellow-600/20 rounded-xl text-white placeholder-gray-500 focus:border-yellow-500/50 focus:outline-none transition-all">
                            </div>

                            <!-- Address -->
                            <div class="md:col-span-2">
                                <label class="block text-gray-400 text-sm mb-2">Address</label>
                                <textarea name="address" rows="3" placeholder="123 Main Street, City, Country"
                                    class="w-full px-4 py-3 bg-black/50 border border-yellow-600/20 rounded-xl text-white placeholder-gray-500 focus:border-yellow-500/50 focus:outline-none transition-all">{{ old('address', $settings->address ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media Links -->
                    <div class="bg-linear-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6">
                        <h3 class="text-white font-semibold text-lg mb-4 flex items-center gap-2">
                            <span class="w-1 h-6 bg-linear-to-b from-yellow-500 to-orange-500 rounded-full"></span>
                            Social Media Links
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Facebook -->
                            <div>
                                <label class=" text-gray-400 text-sm mb-2 flex items-center gap-2">
                                    <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                    </svg>
                                    Facebook URL
                                </label>
                                <input type="url" name="facebook"
                                    value="{{ old('facebook', $settings->facebook ?? '') }}"
                                    placeholder="https://facebook.com/yourpage"
                                    class="w-full px-4 py-3 bg-black/50 border border-yellow-600/20 rounded-xl text-white placeholder-gray-500 focus:border-yellow-500/50 focus:outline-none transition-all">
                            </div>

                            <!-- Instagram -->
                            <div>
                                <label class=" text-gray-400 text-sm mb-2 flex items-center gap-2">
                                    <svg class="w-4 h-4 text-pink-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 011.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 01-1.153 1.772 4.915 4.915 0 01-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 01-1.772-1.153 4.904 4.904 0 01-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 011.153-1.772A4.897 4.897 0 015.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2z">
                                        </path>
                                    </svg>
                                    Instagram URL
                                </label>
                                <input type="url" name="instagram"
                                    value="{{ old('instagram', $settings->instagram ?? '') }}"
                                    placeholder="https://instagram.com/yourpage"
                                    class="w-full px-4 py-3 bg-black/50 border border-yellow-600/20 rounded-xl text-white placeholder-gray-500 focus:border-yellow-500/50 focus:outline-none transition-all">
                            </div>

                            <!-- YouTube -->
                            <div>
                                <label class=" text-gray-400 text-sm mb-2 flex items-center gap-2">
                                    <svg class="w-4 h-4 text-red-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z">
                                        </path>
                                    </svg>
                                    YouTube URL
                                </label>
                                <input type="url" name="youtube"
                                    value="{{ old('youtube', $settings->youtube ?? '') }}"
                                    placeholder="https://youtube.com/yourchannel"
                                    class="w-full px-4 py-3 bg-black/50 border border-yellow-600/20 rounded-xl text-white placeholder-gray-500 focus:border-yellow-500/50 focus:outline-none transition-all">
                            </div>

                            <!-- LinkedIn -->
                            <div>
                                <label class=" text-gray-400 text-sm mb-2 flex items-center gap-2">
                                    <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z">
                                        </path>
                                    </svg>
                                    LinkedIn URL
                                </label>
                                <input type="url" name="linkedin"
                                    value="{{ old('linkedin', $settings->linkedin ?? '') }}"
                                    placeholder="https://linkedin.com/company/yourpage"
                                    class="w-full px-4 py-3 bg-black/50 border border-yellow-600/20 rounded-xl text-white placeholder-gray-500 focus:border-yellow-500/50 focus:outline-none transition-all">
                            </div>
                        </div>
                    </div>

                    <!-- About Section -->
                    <div class="bg-linear-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6">
                        <h3 class="text-white font-semibold text-lg mb-4 flex items-center gap-2">
                            <span class="w-1 h-6 bg-linear-to-b from-yellow-500 to-orange-500 rounded-full"></span>
                            About Website
                        </h3>

                        <div>
                            <textarea name="website_about" rows="6" placeholder="Write something about your website..."
                                class="w-full px-4 py-3 bg-black/50 border border-yellow-600/20 rounded-xl text-white placeholder-gray-500 focus:border-yellow-500/50 focus:outline-none transition-all">{{ old('website_about', $settings->website_about ?? '') }}</textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end gap-4">
                        <a href="{{ route('settings.index') }}"
                            class="px-8 py-4 bg-white/5 border border-white/10 text-white rounded-xl hover:bg-white/10 transition-all duration-300">
                            Cancel
                        </a>
                        <button type="submit"
                            class="px-8 py-4 bg-linear-to-r from-yellow-500 to-orange-500 text-black font-semibold rounded-xl hover:shadow-lg hover:shadow-yellow-500/25 transition-all duration-300 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        function previewLogo(input) {
            const preview = document.getElementById('logo-preview');
            const previewImg = preview.querySelector('img');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    preview.classList.remove('hidden');
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
