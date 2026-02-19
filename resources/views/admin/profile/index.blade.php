@extends('layouts.dashboard')

@section('content')

<div class="space-y-8">

    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold text-white">Profile</h1>

        <div class="text-sm text-gray-400">
            <span>Dashboard</span>
            <span class="mx-2 text-gray-600">/</span>
            <span class="text-yellow-400">My Profile</span>
        </div>
    </div>


    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        <!-- LEFT SIDE -->
        <div class="lg:col-span-2 bg-linear-to-r  from-[#0a0a0a] via-[#0f0f0f] to-black border-b rounded-2xl p-8 backdrop-blur-xl">

            <h2 class="text-lg font-semibold text-white mb-6">Personal Information</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Full Name -->
                <div>
                    <label class="text-sm text-gray-400 mb-2 block">Full Name</label>

                    <div class="flex items-center gap-3 bg-gray-800/60 rounded-xl px-4 py-3 border border-transparent focus-within:border-yellow-500 transition">

                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-width="2"
                                d="M12 4a4 4 0 100 8 4 4 0 000-8m-7 16a7 7 0 0114 0" />
                        </svg>

                        <input type="text"
                            value="{{ auth()->user()->name }}"
                            class="bg-transparent w-full text-white focus:outline-none"
                            readonly>
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label class="text-sm text-gray-400 mb-2 block">Email Address</label>

                    <div class="flex items-center gap-3 bg-gray-800/60 rounded-xl px-4 py-3 border border-transparent focus-within:border-yellow-500 transition">

                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-width="2"
                                d="M16 12H8m0 0l-4-4m4 4l-4 4m8-8l4 4-4 4" />
                        </svg>

                        <input type="email"
                            value="{{ auth()->user()->email }}"
                            class="bg-transparent w-full text-white focus:outline-none"
                            readonly>
                    </div>
                </div>

            </div>



        </div>




    </div>

</div>

@endsection