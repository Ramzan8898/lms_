@extends('layouts.dashboard')

@section('title', 'Payments Management')

@section('content')
<div class="min-h-screen bg-black py-8">
    <div class="container mx-auto px-4">

        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Payments Management</h1>
            <p class="text-gray-400">Track and manage all course payments</p>
        </div>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Total Revenue -->
            <div class="bg-gradient-to-br from-green-500/10 to-green-600/5 backdrop-blur-xl border border-green-500/20 rounded-2xl p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-full bg-green-500/20 flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <span class="text-green-400 text-sm font-semibold">Total Revenue</span>
                </div>
                <div class="text-3xl font-bold text-white mb-1">${{ number_format($totalRevenue, 2) }}</div>
                <div class="text-sm text-gray-400">Lifetime earnings</div>
            </div>

            <!-- Today's Revenue -->
            <div class="bg-gradient-to-br from-blue-500/10 to-blue-600/5 backdrop-blur-xl border border-blue-500/20 rounded-2xl p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-full bg-blue-500/20 flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <span class="text-blue-400 text-sm font-semibold">Today's Revenue</span>
                </div>
                <div class="text-3xl font-bold text-white mb-1">${{ number_format($todayRevenue, 2) }}</div>
                <div class="text-sm text-gray-400">{{ now()->format('F j, Y') }}</div>
            </div>

            <!-- Total Payments -->
            <div class="bg-gradient-to-br from-yellow-500/10 to-yellow-600/5 backdrop-blur-xl border border-yellow-500/20 rounded-2xl p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-full bg-yellow-500/20 flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <span class="text-yellow-400 text-sm font-semibold">Total Payments</span>
                </div>
                <div class="text-3xl font-bold text-white mb-1">{{ number_format($totalPayments) }}</div>
                <div class="flex items-center gap-2 text-sm">
                    <span class="text-yellow-400">{{ number_format($pendingPayments) }} pending</span>
                    <span class="text-gray-600">|</span>
                    <span class="text-red-400">{{ number_format($failedPayments) }} failed</span>
                </div>
            </div>

            <!-- Monthly Revenue -->
            <div class="bg-gradient-to-br from-purple-500/10 to-purple-600/5 backdrop-blur-xl border border-purple-500/20 rounded-2xl p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-full bg-purple-500/20 flex items-center justify-center">
                        <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <span class="text-purple-400 text-sm font-semibold">This Month</span>
                </div>
                <div class="text-3xl font-bold text-white mb-1">${{ number_format($monthRevenue, 2) }}</div>
                <div class="text-sm text-gray-400">{{ now()->format('F Y') }}</div>
            </div>
        </div>

        <!-- Revenue by Course -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <div class="lg:col-span-1">
                <div class="bg-gradient-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6">
                    <h3 class="text-white font-bold mb-4">Top Performing Courses</h3>
                    <div class="space-y-4">
                        @foreach($revenueByCourse as $item)
                        <div class="flex items-center justify-between p-3 bg-black/40 rounded-xl">
                            <div>
                                <h4 class="text-white font-semibold text-sm mb-1">{{ $item->course->title ?? 'Unknown' }}</h4>
                                <div class="flex items-center gap-2 text-xs">
                                    <span class="text-yellow-400">{{ $item->total_enrollments }} enrollments</span>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-green-400 font-bold">${{ number_format($item->total_revenue, 2) }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2">
                <div class="bg-gradient-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6">
                    <h3 class="text-white font-bold mb-4">Recent Payments</h3>

                    <!-- Filters -->
                    <form method="GET" class="mb-6 flex flex-wrap gap-4">
                        <input type="text" name="search" placeholder="Search by user or course..."
                            value="{{ request('search') }}"
                            class="flex-1 min-w-[200px] px-4 py-2 bg-black/40 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:border-yellow-500/50 focus:outline-none">

                        <select name="status" class="px-4 py-2 bg-black/40 border border-white/10 rounded-xl text-white focus:border-yellow-500/50 focus:outline-none">
                            <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>All Status</option>
                            <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="failed" {{ request('status') == 'failed' ? 'selected' : '' }}>Failed</option>
                        </select>

                        <input type="date" name="date_from" value="{{ request('date_from') }}"
                            class="px-4 py-2 bg-black/40 border border-white/10 rounded-xl text-white focus:border-yellow-500/50 focus:outline-none">

                        <input type="date" name="date_to" value="{{ request('date_to') }}"
                            class="px-4 py-2 bg-black/40 border border-white/10 rounded-xl text-white focus:border-yellow-500/50 focus:outline-none">

                        <button type="submit" class="px-6 py-2 bg-yellow-500/20 text-yellow-400 border border-yellow-500/30 rounded-xl hover:bg-yellow-500/30 transition-colors">
                            Filter
                        </button>

                        <a href="{{ route('payments.export', request()->query()) }}"
                            class="px-6 py-2 bg-green-500/20 text-green-400 border border-green-500/30 rounded-xl hover:bg-green-500/30 transition-colors">
                            Export CSV
                        </a>
                    </form>

                    <!-- Payments Table -->
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="text-left text-gray-400 text-sm border-b border-white/10">
                                    <th class="pb-3 font-semibold">ID</th>
                                    <th class="pb-3 font-semibold">User</th>
                                    <th class="pb-3 font-semibold">Course</th>
                                    <th class="pb-3 font-semibold">Amount</th>
                                    <th class="pb-3 font-semibold">Status</th>
                                    <th class="pb-3 font-semibold">Date</th>
                                    <th class="pb-3 font-semibold">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm">
                                @forelse($payments as $payment)
                                <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                                    <td class="py-4 text-white">#{{ $payment->id }}</td>
                                    <td class="py-4">
                                        <div>
                                            <div class="text-white font-medium">{{ $payment->user->name ?? 'N/A' }}</div>
                                            <div class="text-gray-500 text-xs">{{ $payment->user->email ?? '' }}</div>
                                        </div>
                                    </td>
                                    <td class="py-4">
                                        <div class="text-white">{{ Str::limit($payment->course->title ?? 'N/A', 30) }}</div>
                                    </td>
                                    <td class="py-4">
                                        <div class="text-white font-semibold">${{ number_format($payment->amount, 2) }}</div>
                                        <div class="text-gray-500 text-xs">{{ $payment->currency }}</div>
                                    </td>
                                    <td class="py-4">
                                        @if($payment->status == 'completed')
                                        <span class="px-2 py-1 bg-green-500/20 text-green-400 rounded-full text-xs font-semibold">Completed</span>
                                        @elseif($payment->status == 'pending')
                                        <span class="px-2 py-1 bg-yellow-500/20 text-yellow-400 rounded-full text-xs font-semibold">Pending</span>
                                        @else
                                        <span class="px-2 py-1 bg-red-500/20 text-red-400 rounded-full text-xs font-semibold">Failed</span>
                                        @endif
                                    </td>
                                    <td class="py-4">
                                        <div class="text-white">{{ $payment->created_at->format('M d, Y') }}</div>
                                        <div class="text-gray-500 text-xs">{{ $payment->created_at->format('h:i A') }}</div>
                                    </td>
                                    <td class="py-4">
                                        <a href="{{ route('payments.show', $payment) }}"
                                            class="text-yellow-400 hover:text-yellow-300 transition-colors">
                                            View Details
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="py-8 text-center text-gray-400">
                                        No payments found
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-6">
                        {{ $payments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection