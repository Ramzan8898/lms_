@extends('layouts.dashboard')


@section('content')
<div class="space-y-8">

    <!-- Premium Breadcrumb -->
    <x-dashboard.breadcrumbs :items="[
    ['label' => 'Home']
]" />

    <!-- Welcome Section - Premium Static Design -->
    <div class="relative">
        <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/10 to-orange-500/10 rounded-2xl blur-xl"></div>

        <!-- Main Welcome Card -->
        <div class="relative bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-8 shadow-2xl">

            <!-- Decorative Elements -->
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-t-2xl"></div>
            <div class="absolute top-10 right-10 w-40 h-40 bg-yellow-500/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 left-10 w-40 h-40 bg-orange-500/5 rounded-full blur-3xl"></div>

            <!-- Content -->
            <div class="relative flex items-start justify-between">
                <div class="flex items-start gap-6">
                    <!-- Premium Icon -->
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-yellow-500/20 to-orange-500/20 flex items-center justify-center">
                        <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="1.8" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>

                    <!-- Text Content -->
                    <div>
                        <h1 class="text-3xl md:text-4xl font-bold tracking-tight">
                            <span class="text-white">Welcome back,</span>
                            <span class="bg-gradient-to-r from-yellow-400 via-orange-500 to-yellow-600 bg-clip-text text-transparent block md:inline md:ml-3">
                                {{ auth()->user()->name ?? 'Admin' }}
                            </span>
                        </h1>

                        <!-- Stats Row -->
                        <div class="flex items-center gap-6 mt-4">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                                <span class="text-gray-400 text-sm">System Online</span>
                            </div>
                            <div class="w-px h-4 bg-yellow-500/30"></div>
                            <div class="text-sm text-gray-400">
                                {{ now()->format('l, F j, Y') }}
                            </div>
                            <div class="w-px h-4 bg-yellow-500/30"></div>
                            <div class="text-sm text-gray-400">
                                {{ now()->format('h:i A') }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Date Badge -->
                <div class="hidden lg:block">
                    <div class="px-6 py-3 bg-white/5 border border-yellow-500/30 rounded-2xl">
                        <div class="text-3xl font-bold text-yellow-400 text-center">{{ now()->format('d') }}</div>
                        <div class="text-sm text-gray-400 text-center">{{ now()->format('M Y') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- Total Users Card -->
        <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-6 shadow-xl">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-blue-500/20 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-blue-400 bg-blue-500/10 px-3 py-1 rounded-full">+12%</span>
            </div>
            <h3 class="text-3xl font-bold text-white mb-1">2,345</h3>
            <p class="text-gray-400 text-sm">Total Users</p>
            <div class="mt-4 pt-4 border-t border-yellow-500/10">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-500">Active Users</span>
                    <span class="text-white font-medium">1,890</span>
                </div>
            </div>
        </div>

        <!-- Active Courses Card -->
        <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-6 shadow-xl">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-purple-500/20 flex items-center justify-center">
                    <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-purple-400 bg-purple-500/10 px-3 py-1 rounded-full">+8%</span>
            </div>
            <h3 class="text-3xl font-bold text-white mb-1">42</h3>
            <p class="text-gray-400 text-sm">Active Courses</p>
            <div class="mt-4 pt-4 border-t border-yellow-500/10">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-500">This Month</span>
                    <span class="text-white font-medium">+8</span>
                </div>
            </div>
        </div>

        <!-- Enrolled Students Card -->
        <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-6 shadow-xl">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-green-500/20 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-green-400 bg-green-500/10 px-3 py-1 rounded-full">+15%</span>
            </div>
            <h3 class="text-3xl font-bold text-white mb-1">2,150</h3>
            <p class="text-gray-400 text-sm">Enrolled Students</p>
            <div class="mt-4 pt-4 border-t border-yellow-500/10">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-500">Completion Rate</span>
                    <span class="text-white font-medium">78%</span>
                </div>
            </div>
        </div>

        <!-- Revenue Card -->
        <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-6 shadow-xl">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-yellow-500/20 flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-yellow-400 bg-yellow-500/10 px-3 py-1 rounded-full">+23%</span>
            </div>
            <h3 class="text-3xl font-bold text-white mb-1">$45.2K</h3>
            <p class="text-gray-400 text-sm">Total Revenue</p>
            <div class="mt-4 pt-4 border-t border-yellow-500/10">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-500">Monthly Goal</span>
                    <span class="text-white font-medium">$60K</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts & Activity Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- Recent Activity -->
        <div class="lg:col-span-2">
            <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-6 shadow-xl">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-3">
                        <div class="w-1 h-6 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></div>
                        <h2 class="text-lg font-semibold text-white">Recent Activity</h2>
                    </div>
                    <span class="text-sm text-yellow-400 cursor-default">View All →</span>
                </div>

                <div class="space-y-4">
                    <!-- Activity Item 1 -->
                    <div class="flex items-center gap-4 p-3 bg-white/5 rounded-xl">
                        <div class="w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-white font-medium">New user registered</p>
                            <p class="text-gray-500 text-sm">John Doe created an account</p>
                        </div>
                        <span class="text-xs text-gray-600">2 min ago</span>
                    </div>

                    <!-- Activity Item 2 -->
                    <div class="flex items-center gap-4 p-3 bg-white/5 rounded-xl">
                        <div class="w-10 h-10 rounded-full bg-purple-500/20 flex items-center justify-center">
                            <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-white font-medium">New course added</p>
                            <p class="text-gray-500 text-sm">Advanced JavaScript Masterclass</p>
                        </div>
                        <span class="text-xs text-gray-600">1 hour ago</span>
                    </div>

                    <!-- Activity Item 3 -->
                    <div class="flex items-center gap-4 p-3 bg-white/5 rounded-xl">
                        <div class="w-10 h-10 rounded-full bg-green-500/20 flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-white font-medium">Course completed</p>
                            <p class="text-gray-500 text-sm">Sarah Johnson finished UI/UX Design</p>
                        </div>
                        <span class="text-xs text-gray-600">3 hours ago</span>
                    </div>

                    <!-- Activity Item 4 -->
                    <div class="flex items-center gap-4 p-3 bg-white/5 rounded-xl">
                        <div class="w-10 h-10 rounded-full bg-yellow-500/20 flex items-center justify-center">
                            <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-white font-medium">Payment received</p>
                            <p class="text-gray-500 text-sm">$49.00 from Michael Chen</p>
                        </div>
                        <span class="text-xs text-gray-600">5 hours ago</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div>
            <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-6 shadow-xl">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-1 h-6 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></div>
                    <h2 class="text-lg font-semibold text-white">Quick Stats</h2>
                </div>

                <div class="space-y-6">
                    <!-- Completion Rate -->
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="text-gray-400">Course Completion</span>
                            <span class="text-yellow-400 font-semibold">78%</span>
                        </div>
                        <div class="w-full h-2 bg-gray-700 rounded-full overflow-hidden">
                            <div class="w-[78%] h-full bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full"></div>
                        </div>
                    </div>

                    <!-- Active Students -->
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="text-gray-400">Active Students</span>
                            <span class="text-yellow-400 font-semibold">1,890</span>
                        </div>
                        <div class="w-full h-2 bg-gray-700 rounded-full overflow-hidden">
                            <div class="w-[88%] h-full bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full"></div>
                        </div>
                    </div>

                    <!-- Revenue Goal -->
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="text-gray-400">Monthly Revenue Goal</span>
                            <span class="text-yellow-400 font-semibold">$45.2K / $60K</span>
                        </div>
                        <div class="w-full h-2 bg-gray-700 rounded-full overflow-hidden">
                            <div class="w-[75%] h-full bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full"></div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="border-t border-yellow-500/10"></div>

                    <!-- Mini Stats Grid -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center p-3 bg-white/5 rounded-xl">
                            <div class="text-2xl font-bold text-white">24</div>
                            <div class="text-xs text-gray-400">Pending Reviews</div>
                        </div>
                        <div class="text-center p-3 bg-white/5 rounded-xl">
                            <div class="text-2xl font-bold text-white">12</div>
                            <div class="text-xs text-gray-400">New Messages</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Courses Table -->
    <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-6 shadow-xl">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-3">
                <div class="w-1 h-6 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></div>
                <h2 class="text-lg font-semibold text-white">Recent Courses</h2>
            </div>
            <span class="text-sm text-yellow-400 cursor-default">View All →</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="text-left text-sm text-gray-400 border-b border-yellow-500/10">
                        <th class="pb-3 font-medium">Course</th>
                        <th class="pb-3 font-medium">Instructor</th>
                        <th class="pb-3 font-medium">Students</th>
                        <th class="pb-3 font-medium">Status</th>
                        <th class="pb-3 font-medium">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    <tr class="border-b border-yellow-500/10">
                        <td class="py-4">
                            <div class="flex items-center gap-3">
                                <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=40&h=40&fit=crop" class="w-10 h-10 rounded-lg object-cover">
                                <span class="text-white font-medium">Full Stack Web Dev</span>
                            </div>
                        </td>
                        <td class="py-4 text-gray-300">Sarah Johnson</td>
                        <td class="py-4 text-gray-300">45</td>
                        <td class="py-4">
                            <span class="px-2 py-1 bg-green-500/20 text-green-400 rounded-full text-xs">Active</span>
                        </td>
                        <td class="py-4">
                            <span class="text-yellow-400 cursor-default">Edit</span>
                        </td>
                    </tr>
                    <tr class="border-b border-yellow-500/10">
                        <td class="py-4">
                            <div class="flex items-center gap-3">
                                <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=40&h=40&fit=crop" class="w-10 h-10 rounded-lg object-cover">
                                <span class="text-white font-medium">UI/UX Design Mastery</span>
                            </div>
                        </td>
                        <td class="py-4 text-gray-300">Emily Chen</td>
                        <td class="py-4 text-gray-300">32</td>
                        <td class="py-4">
                            <span class="px-2 py-1 bg-green-500/20 text-green-400 rounded-full text-xs">Active</span>
                        </td>
                        <td class="py-4">
                            <span class="text-yellow-400 cursor-default">Edit</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-4">
                            <div class="flex items-center gap-3">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=40&h=40&fit=crop" class="w-10 h-10 rounded-lg object-cover">
                                <span class="text-white font-medium">Data Science & AI</span>
                            </div>
                        </td>
                        <td class="py-4 text-gray-300">Michael Roberts</td>
                        <td class="py-4 text-gray-300">28</td>
                        <td class="py-4">
                            <span class="px-2 py-1 bg-yellow-500/20 text-yellow-400 rounded-full text-xs">Draft</span>
                        </td>
                        <td class="py-4">
                            <span class="text-yellow-400 cursor-default">Edit</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection