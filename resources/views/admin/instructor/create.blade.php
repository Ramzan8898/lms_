@extends('layouts.dashboard')

@section('title', 'Create New Instructor')
@section('page-header', 'Create New Instructor')
@section('page-description', 'Add a new instructor to your platform with complete profile details.')

@section('content')
@push('styles')
<style>
    /* Custom file input styling */
    .file-input-wrapper {
        position: relative;
        overflow: hidden;
        display: inline-block;
        width: 100%;
    }

    .file-input-wrapper input[type=file] {
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
        width: 100%;
        height: 100%;
        cursor: pointer;
    }

    /* Form section transitions */
    .form-section {
        transition: all 0.3s ease;
    }
</style>
@endpush

<div class="space-y-8">

    {{-- Premium Breadcrumb --}}
    <x-dashboard.breadcrumbs :items="[
            ['label' => 'Instructors', 'url' => route('admin.instructor')],
            ['label' => 'Create']
        ]" />

    {{-- Form Container --}}
    <form action="{{ route('admin.instructor.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf

        {{-- Progress Indicator (Optional) --}}
        <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-6 shadow-xl">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <div class="w-1 h-8 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></div>
                    <div>
                        <h2 class="text-lg font-semibold text-white">Instructor Registration</h2>
                        <p class="text-sm text-gray-500">Complete all sections to create a new instructor profile</p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <span class="px-3 py-1 bg-yellow-500/10 border border-yellow-500/30 rounded-full text-yellow-400 text-xs">Step 1 of 1</span>
                </div>
            </div>
        </div>

        {{-- Main Form Grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            {{-- Left Side - Main Information (2 columns) --}}
            <div class="lg:col-span-2 space-y-8">

                {{-- Basic Information Section --}}
                <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl shadow-xl overflow-hidden">
                    <div class="px-8 py-6 border-b border-yellow-500/10">
                        <div class="flex items-center gap-3">
                            <div class="w-1 h-6 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></div>
                            <h3 class="text-lg font-semibold text-white">Basic Information</h3>
                            <span class="ml-auto text-xs text-gray-500">Required Fields *</span>
                        </div>
                    </div>

                    <div class="p-8 space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            {{-- Full Name --}}
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">
                                    Full Name <span class="text-yellow-500">*</span>
                                </label>
                                <input type="text"
                                    name="name"
                                    placeholder="e.g., John Doe"
                                    class="w-full px-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/40 transition-colors duration-300">
                            </div>

                            {{-- Email Address --}}
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">
                                    Email Address <span class="text-yellow-500">*</span>
                                </label>
                                <input type="email"
                                    name="email"
                                    placeholder="instructor@example.com"
                                    class="w-full px-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/40 transition-colors duration-300">
                            </div>

                            {{-- Password --}}
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">
                                    Password <span class="text-yellow-500">*</span>
                                </label>
                                <input type="password"
                                    name="password"
                                    placeholder="••••••••"
                                    class="w-full px-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/40 transition-colors duration-300">
                                <p class="text-xs text-gray-600 mt-2">Minimum 8 characters</p>
                            </div>

                            {{-- Phone Number --}}
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">
                                    Phone Number
                                </label>
                                <input type="text"
                                    name="phone"
                                    placeholder="+1 234 567 8900"
                                    class="w-full px-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/40 transition-colors duration-300">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Professional Information Section --}}
                <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl shadow-xl overflow-hidden">
                    <div class="px-8 py-6 border-b border-yellow-500/10">
                        <div class="flex items-center gap-3">
                            <div class="w-1 h-6 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></div>
                            <h3 class="text-lg font-semibold text-white">Professional Information</h3>
                        </div>
                    </div>

                    <div class="p-8 space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            {{-- Expertise --}}
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">
                                    Expertise / Subject <span class="text-yellow-500">*</span>
                                </label>
                                <input type="text"
                                    name="expertise"
                                    placeholder="e.g., Web Development, AI, Mathematics"
                                    class="w-full px-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/40 transition-colors duration-300">
                            </div>

                            {{-- Experience --}}
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">
                                    Experience (Years)
                                </label>
                                <input type="number"
                                    name="experience"
                                    placeholder="e.g., 5"
                                    min="0"
                                    class="w-full px-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/40 transition-colors duration-300">
                            </div>

                            {{-- Qualification --}}
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-300 mb-2">
                                    Qualification
                                </label>
                                <input type="text"
                                    name="qualification"
                                    placeholder="e.g., PhD in Computer Science, Master's in Design"
                                    class="w-full px-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/40 transition-colors duration-300">
                            </div>

                            {{-- Short Bio --}}
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-300 mb-2">
                                    Short Bio
                                </label>
                                <textarea name="bio"
                                    rows="3"
                                    placeholder="Brief introduction about the instructor..."
                                    class="w-full px-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/40 transition-colors duration-300 resize-none"></textarea>
                                <p class="text-xs text-gray-600 mt-2">Max 200 characters</p>
                            </div>

                            {{-- Detailed Description --}}
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-300 mb-2">
                                    Detailed Description
                                </label>
                                <textarea name="description"
                                    rows="5"
                                    placeholder="Comprehensive description of instructor's background, teaching philosophy, achievements..."
                                    class="w-full px-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/40 transition-colors duration-300 resize-none"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Side - Additional Information (1 column) --}}
            <div class="space-y-8">

                {{-- Avatar Upload Section --}}
                <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl shadow-xl overflow-hidden">
                    <div class="px-8 py-6 border-b border-yellow-500/10">
                        <div class="flex items-center gap-3">
                            <div class="w-1 h-6 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></div>
                            <h3 class="text-lg font-semibold text-white">Profile Photo</h3>
                        </div>
                    </div>

                    <div class="p-8">
                        <div class="flex flex-col items-center">
                            {{-- Avatar Preview --}}
                            <div class="w-32 h-32 rounded-2xl bg-gradient-to-br from-yellow-500/20 to-orange-500/20 border-2 border-yellow-500/30 flex items-center justify-center mb-4">
                                <svg class="w-12 h-12 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>

                            {{-- File Input --}}
                            <div class="file-input-wrapper w-full">
                                <div class="px-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-gray-400 text-center cursor-pointer hover:border-yellow-500/40 transition-colors duration-300">
                                    <span>Choose Profile Photo</span>
                                </div>
                                <input type="file" name="avatar" accept="image/*">
                            </div>

                            <p class="text-xs text-gray-600 mt-3">Recommended: Square JPG or PNG, max 2MB</p>
                        </div>
                    </div>
                </div>

                {{-- Social Media & Payment Section --}}
                <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl shadow-xl overflow-hidden">
                    <div class="px-8 py-6 border-b border-yellow-500/10">
                        <div class="flex items-center gap-3">
                            <div class="w-1 h-6 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></div>
                            <h3 class="text-lg font-semibold text-white">Social & Payment</h3>
                        </div>
                    </div>

                    <div class="p-8 space-y-5">
                        {{-- Facebook --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Facebook Profile
                            </label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-600">fb.com/</span>
                                <input type="text"
                                    name="facebook"
                                    placeholder="username"
                                    class="w-full pl-16 pr-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/40 transition-colors duration-300">
                            </div>
                        </div>

                        {{-- LinkedIn --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                LinkedIn Profile
                            </label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-600">linkedin.com/in/</span>
                                <input type="text"
                                    name="linkedin"
                                    placeholder="username"
                                    class="w-full pl-24 pr-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/40 transition-colors duration-300">
                            </div>
                        </div>

                        {{-- Payout Email --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Payout Email
                            </label>
                            <input type="email"
                                name="payout_email"
                                placeholder="payouts@example.com"
                                class="w-full px-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/40 transition-colors duration-300">
                            <p class="text-xs text-gray-600 mt-2">For earnings and commissions</p>
                        </div>
                    </div>
                </div>

                {{-- Status Section --}}
                <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl shadow-xl overflow-hidden">
                    <div class="px-8 py-6 border-b border-yellow-500/10">
                        <div class="flex items-center gap-3">
                            <div class="w-1 h-6 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></div>
                            <h3 class="text-lg font-semibold text-white">Account Status</h3>
                        </div>
                    </div>

                    <div class="p-8">
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Status
                            </label>
                            <select name="status" class="w-full px-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-gray-300 focus:outline-none focus:border-yellow-500/40 transition-colors duration-300 appearance-none">
                                <option value="active" class="bg-[#1e1e1e]">Active</option>
                                <option value="inactive" class="bg-[#1e1e1e]">Inactive</option>
                                <option value="pending" class="bg-[#1e1e1e]">Pending</option>
                            </select>

                            <div class="mt-4 p-4 bg-yellow-500/5 border border-yellow-500/20 rounded-xl">
                                <div class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-yellow-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <p class="text-xs text-gray-400">Active instructors can immediately start creating courses and interacting with students.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Form Actions --}}
        <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-6 shadow-xl">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">
                        <span class="text-yellow-400">*</span> Required fields
                    </p>
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ route('admin.instructor') }}"
                        class="px-6 py-3 border border-yellow-500/30 rounded-xl text-gray-300 hover:bg-white/5 transition-colors duration-300">
                        Cancel
                    </a>
                    <button type="submit"
                        class="px-8 py-3 bg-gradient-to-r from-yellow-500 to-orange-500 text-black font-semibold rounded-xl shadow-lg shadow-yellow-500/20 hover:shadow-yellow-500/30 transition-all duration-300 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        <span>Create Instructor</span>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection