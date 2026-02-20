{{-- resources/views/admin/payments/show.blade.php --}}
@extends('layouts.dashboard')

@section('title', 'Payment Details #' . $enrollment->id)

@section('content')
<div class="min-h-screen bg-black py-8">
    <div class="container mx-auto px-4">

        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center gap-4 mb-4">
                <a href="{{ route('payments.index') }}" class="text-gray-400 hover:text-yellow-400 transition-colors">
                    ← Back to Payments
                </a>
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Payment Details #{{ $enrollment->id }}</h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Payment Info -->
            <div class="lg:col-span-2">
                <div class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6">
                    <h2 class="text-xl font-bold text-white mb-6">Payment Information</h2>

                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <p class="text-gray-400 text-sm mb-1">Payment ID</p>
                            <p class="text-white font-semibold">#{{ $enrollment->id }}</p>
                        </div>

                        <div>
                            <p class="text-gray-400 text-sm mb-1">Payment Intent ID</p>
                            <p class="text-white font-mono text-sm">{{ $enrollment->payment_intent_id ?? 'N/A' }}</p>
                        </div>

                        <div>
                            <p class="text-gray-400 text-sm mb-1">Amount</p>
                            <p class="text-2xl font-bold text-green-400">${{ number_format($enrollment->amount, 2) }}</p>
                        </div>

                        <div>
                            <p class="text-gray-400 text-sm mb-1">Currency</p>
                            <p class="text-white uppercase">{{ $enrollment->currency }}</p>
                        </div>

                        <div>
                            <p class="text-gray-400 text-sm mb-1">Status</p>
                            @if($enrollment->status == 'completed')
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm font-semibold">Completed</span>
                            @elseif($enrollment->status == 'pending')
                            <span class="px-3 py-1 bg-yellow-500/20 text-yellow-400 rounded-full text-sm font-semibold">Pending</span>
                            @else
                            <span class="px-3 py-1 bg-red-500/20 text-red-400 rounded-full text-sm font-semibold">Failed</span>
                            @endif
                        </div>

                        <div>
                            <p class="text-gray-400 text-sm mb-1">Payment Date</p>
                            <p class="text-white">{{ $enrollment->created_at->format('F j, Y \a\t h:i A') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User Info -->
            <div class="lg:col-span-1">
                <div class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6">
                    <h2 class="text-xl font-bold text-white mb-6">Student Information</h2>

                    @if($enrollment->user)
                    <div class="flex items-center gap-4 mb-6">
                        <img src="{{ $enrollment->user->avatar ?? 'https://ui-avatars.com/api/?name='.urlencode($enrollment->user->name) }}"
                            class="w-16 h-16 rounded-full border-2 border-yellow-500/50"
                            alt="{{ $enrollment->user->name }}">
                        <div>
                            <h3 class="text-white font-bold">{{ $enrollment->user->name }}</h3>
                            <p class="text-gray-400 text-sm">{{ $enrollment->user->email }}</p>
                        </div>
                    </div>

                    <div class="space-y-3 pt-4 border-t border-white/10">
                        <div class="flex justify-between">
                            <span class="text-gray-400">Total Spent:</span>
                            <span class="text-white font-semibold">
                            </span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-400">Courses Enrolled:</span>
                            <span class="text-white font-semibold">
                            </span>
                        </div>
                    </div>

                    <a href="#"
                        class="block w-full mt-6 py-3 text-center bg-yellow-500/20 text-yellow-400 border border-yellow-500/30 rounded-xl hover:bg-yellow-500/30 transition-colors">
                        View Student Profile
                    </a>
                    @else
                    <p class="text-gray-400">User not found</p>
                    @endif
                </div>
            </div>

            <!-- Course Info -->
            <div class="lg:col-span-3">
                <div class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6">
                    <h2 class="text-xl font-bold text-white mb-6">Course Information</h2>

                    @if($enrollment->course)
                    <div class="flex gap-6">
                        <img src="{{ $enrollment->course->banner ? asset('storage/'.$enrollment->course->banner) : 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=800&q=80' }}"
                            class="w-48 h-32 object-cover rounded-xl"
                            alt="{{ $enrollment->course->title }}">

                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-white mb-2">{{ $enrollment->course->title }}</h3>
                            <p class="text-gray-400 mb-4">{{ Str::limit($enrollment->course->description, 200) }}</p>

                            <div class="grid grid-cols-3 gap-4">
                                <div>
                                    <p class="text-gray-400 text-sm">Category</p>
                                    <p class="text-white">{{ $enrollment->course->category->title ?? 'Uncategorized' }}</p>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-sm">Instructor</p>
                                    <p class="text-white">{{ $enrollment->course->instructor->user->name ?? 'N/A' }}</p>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-sm">Price</p>
                                    <p class="text-green-400 font-bold">${{ number_format($enrollment->course->price, 2) }}</p>
                                </div>
                            </div>

                            <a href="#"
                                class="inline-block mt-4 px-6 py-2 bg-yellow-500/20 text-yellow-400 border border-yellow-500/30 rounded-xl hover:bg-yellow-500/30 transition-colors">
                                View Course Details
                            </a>
                        </div>
                    </div>
                    @else
                    <p class="text-gray-400">Course not found</p>
                    @endif
                </div>
            </div>

            <!-- Payment Details -->
            @if($enrollment->payment_details)
            <div class="lg:col-span-3">
                <div class="bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6">
                    <h2 class="text-xl font-bold text-white mb-6">Raw Payment Details</h2>

                    <pre class="bg-black/40 p-4 rounded-xl text-gray-300 text-sm overflow-x-auto">
                    {{ json_encode($enrollment->payment_details, JSON_PRETTY_PRINT) }}
                    </pre>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection