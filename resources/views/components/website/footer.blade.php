    @php
        $setting = App\Models\Setting::first();

    @endphp
    <!-- Premium Footer -->
    <footer class="relative bg-black border-t border-white/10 pt-20 pb-10 overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-linear-to-b from-black to-[#0a0a0a]"></div>
        <div class="absolute left-0 top-0 w-96 h-96 bg-yellow-500/5 blur-[120px] rounded-full"></div>
        <div class="absolute right-0 bottom-0 w-96 h-96 bg-orange-500/5 blur-[120px] rounded-full"></div>

        <div class="relative container mx-auto px-4">
            <!-- Footer Top -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 mb-16">
                <!-- Brand Column -->
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <a href="{{ route('welcome') }}" class="text-center flex justify-center">
                            <img src="{{ asset($setting->logo) }}" alt="LOGO" class="w-52 h-auto object-contain">
                        </a>
                    </div>
                    <p class="text-gray-400 mb-6 leading-relaxed max-w-md">{{ $setting->website_about }}</p>
                    <div class="flex space-x-4">
                            <a href="{{ $setting->facebook }}"
                                class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-linear-to-r hover:from-yellow-500 hover:to-orange-500 hover:text-black transition-all duration-300 group">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-black" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z">
                                    </path>
                                </svg>
                            </a>
                            <a href="{{ $setting->instagram }}"
                                class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-linear-to-r hover:from-yellow-500 hover:to-orange-500 hover:text-black transition-all duration-300 group">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-black" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1112.324 0 6.162 6.162 0 01-12.324 0zM12 16a4 4 0 110-8 4 4 0 010 8zm4.965-10.405a1.44 1.44 0 112.881.001 1.44 1.44 0 01-2.881-.001z" />
                                </svg>
                            </a>
                            <a href="{{ $setting->linkedin }}"
                                class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-linear-to-r hover:from-yellow-500 hover:to-orange-500 hover:text-black transition-all duration-300 group">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-black" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451c.979 0 1.771-.773 1.771-1.729V1.729C24 .774 23.204 0 22.225 0z" />
                                </svg>
                            </a>
                            <a href="{{ $setting->youtube }}"
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

                <!-- Quick Links -->
                <div>
                    <h4 class="text-white font-bold text-lg mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('web.courses') }}"
                                class="text-gray-400 hover:text-yellow-400 transition-colors">Courses</a>
                        </li>
                        <li><a href="{{ route('web.about') }}"
                                class="text-gray-400 hover:text-yellow-400 transition-colors">About
                                Us</a></li>
                        <li><a href="{{ route('web.contact') }}"
                                class="text-gray-400 hover:text-yellow-400 transition-colors">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h4 class="text-white font-bold text-lg mb-6">What you'll Get</h4>
                    <ul class="space-y-3">
                        <li class="text-gray-400 hover:text-yellow-400 transition-colors">Certification</li>
                        <li class="text-gray-400 hover:text-yellow-400 transition-colors">Live Sessions</li>
                        <li class="text-gray-400 hover:text-yellow-400 transition-colors">Expert Mentors</li>
                        <li class="text-gray-400 hover:text-yellow-400 transition-colors">Community</li>

                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-white font-bold text-lg mb-6">Contact Us</h4>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-gray-400">
                            <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            <span>{{ $setting->number }}</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-400">
                            <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span>{{ $setting->email }}</span>
                        </li>
                        <li class="flex items-start gap-3 text-gray-400">
                            <svg class="w-10 h-auto text-yellow-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>{{ $setting->address }}</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="relative pt-8 border-t border-white/10">
                <div class="flex flex-col md:flex-row justify-center items-center gap-4">
                    <p class="text-gray-500 text-sm">© 2026 LearnMaster LMS. All rights reserved. Made with ❤️ for
                        learners worldwide</p>
                </div>
            </div>
        </div>
    </footer>
