@extends('layouts.dashboard')
@section('content')
    <!-- Welcome Section -->
    <div class="relative overflow-hidden mb-8">
        <div class="absolute inset-0 bg-linear-to-r from-yellow-500/10 to-orange-500/10 rounded-2xl blur-3xl"></div>
        <div
            class="relative bg-linear-to-br from-gray-900/50 to-black/50 backdrop-blur-xl border border-yellow-600/20 rounded-2xl p-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-3xl font-bold mb-2 text-white">Welcome Back, {{ Auth::user()->name ?? 'Admin' }}! 👋</h1>
                    <p class="text-gray-400 text-lg">Here's what's happening with your LMS platform today</p>
                </div>
                <div class="mt-4 md:mt-0 flex gap-3">
                    <span class="px-4 py-2 bg-yellow-500/10 border border-yellow-500/30 rounded-xl text-yellow-400 text-sm">
                        {{ now()->format('l, d F Y') }}
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection
