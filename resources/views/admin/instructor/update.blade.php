@extends('layouts.dashboard')

@section('title', 'Edit Instructor')
@section('page-header', 'Edit Instructor Profile')
@section('page-description', 'Update instructor information, credentials, and profile details.')

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

    /* Avatar preview animation */
    .avatar-preview {
        transition: all 0.3s ease;
    }

    .avatar-preview:hover {
        transform: scale(1.05);
        box-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
    }
</style>
@endpush

<div class="space-y-8">

    {{-- Premium Breadcrumb --}}
    <x-dashboard.breadcrumbs :items="[
        ['label' => 'Instructors', 'url' => route('admin.instructor'), 'icon' => '<svg class=\" w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
        <path stroke-linecap=\"round\" stroke-linecap=\"round\" stroke-width=\"2\" d=\"M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\" /></svg>'],
        ['label' => 'Edit']
        ]" />

        {{-- Success Message --}}
        @if(session('success'))
        <div class="bg-gradient-to-r from-green-500/20 to-emerald-500/20 border border-green-500/30 rounded-2xl p-5">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-full bg-green-500/20 flex items-center justify-center">
                    <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-white font-semibold">Success!</h3>
                    <p class="text-green-400 text-sm">{{ session('success') }}</p>
                </div>
            </div>
        </div>
        @endif

        {{-- Error Messages --}}
        @if($errors->any())
        <div class="bg-gradient-to-r from-red-500/20 to-pink-500/20 border border-red-500/30 rounded-2xl p-5">
            <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-full bg-red-500/20 flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-white font-semibold mb-2">Please fix the following errors:</h3>
                    <ul class="list-disc list-inside text-red-400 text-sm space-y-1">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endif

        {{-- Form Container --}}
        <form action="{{ route('admin.instructor.update', $instructor->id) }}"
            method="POST"
            enctype="multipart/form-data"
            class="space-y-8">
            @csrf
            @method('PUT')

            <input type="hidden" name="id" value="{{ $instructor->id }}">

            {{-- Form Header with Instructor Name --}}
            <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-6 shadow-xl">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="w-1 h-8 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></div>
                        <div>
                            <h2 class="text-lg font-semibold text-white">Editing: <span class="text-yellow-400">{{ $instructor->user->name }}</span></h2>
                            <p class="text-sm text-gray-500">Last updated: {{ $instructor->updated_at->format('F j, Y \a\t g:i A') }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="px-3 py-1 bg-yellow-500/10 border border-yellow-500/30 rounded-full text-yellow-400 text-xs">ID: #{{ $instructor->id }}</span>
                        <span class="px-3 py-1 {{ $instructor->status == 'active' ? 'bg-green-500/10 text-green-400 border-green-500/30' : 'bg-gray-500/10 text-gray-400 border-gray-500/30' }} border rounded-full text-xs">
                            {{ ucfirst($instructor->status) }}
                        </span>
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
                                        value="{{ old('name', $instructor->user->name) }}"
                                        placeholder="e.g., John Doe"
                                        class="w-full px-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/40 transition-colors duration-300 @error('name') border-red-500/50 @enderror">
                                    @error('name')
                                    <p class="text-red-400 text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- Email Address --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-2">
                                        Email Address <span class="text-yellow-500">*</span>
                                    </label>
                                    <input type="email"
                                        name="email"
                                        value="{{ old('email', $instructor->user->email) }}"
                                        placeholder="instructor@example.com"
                                        class="w-full px-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/40 transition-colors duration-300 @error('email') border-red-500/50 @enderror">
                                    @error('email')
                                    <p class="text-red-400 text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- Password (Optional) --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-2">
                                        New Password
                                    </label>
                                    <input type="password"
                                        name="password"
                                        placeholder="Leave blank to keep current"
                                        class="w-full px-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/40 transition-colors duration-300">
                                    <p class="text-xs text-gray-600 mt-2">Minimum 8 characters if changing</p>
                                </div>

                                {{-- Phone Number --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-2">
                                        Phone Number
                                    </label>
                                    <input type="text"
                                        name="phone"
                                        value="{{ old('phone', $instructor->phone) }}"
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
                                        value="{{ old('expertise', $instructor->expertise) }}"
                                        placeholder="e.g., Web Development, AI, Mathematics"
                                        class="w-full px-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/40 transition-colors duration-300 @error('expertise') border-red-500/50 @enderror">
                                    @error('expertise')
                                    <p class="text-red-400 text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- Experience --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-2">
                                        Experience (Years)
                                    </label>
                                    <input type="number"
                                        name="experience"
                                        value="{{ old('experience', $instructor->experience) }}"
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
                                        value="{{ old('qualification', $instructor->qualification) }}"
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
                                        class="w-full px-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/40 transition-colors duration-300 resize-none">{{ old('bio', $instructor->bio) }}</textarea>
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
                                        class="w-full px-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-yellow-500/40 transition-colors duration-300 resize-none">{{ old('description', $instructor->description) }}</textarea>
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
                                {{-- Current Avatar --}}
                                <div class="relative mb-4 group">
                                    <div class="absolute -inset-2 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500"></div>
                                    @if($instructor->avatar)
                                    <img src="{{ asset('storage/'.$instructor->avatar) }}"
                                        class="w-32 h-32 rounded-2xl object-cover border-2 border-yellow-500/30 avatar-preview">
                                    @else
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($instructor->user->name) }}&background=FFB347&color=fff&size=128"
                                        class="w-32 h-32 rounded-2xl border-2 border-yellow-500/30 avatar-preview">
                                    @endif
                                </div>

                                {{-- File Input --}}
                                <div class="file-input-wrapper w-full">
                                    <div class="px-5 py-3 bg-white/5 border border-yellow-500/20 rounded-xl text-gray-400 text-center cursor-pointer hover:border-yellow-500/40 transition-colors duration-300">
                                        <span>Change Profile Photo</span>
                                    </div>
                                    <input type="file" name="avatar" accept="image/*">
                                </div>

                                <p class="text-xs text-gray-600 mt-3">Recommended: Square JPG or PNG, max 2MB</p>

                                @if($instructor->avatar)
                                <div class="mt-3 flex items-center gap-2">
                                    <input type="checkbox" name="remove_avatar" id="remove_avatar" class="rounded border-yellow-500/30 bg-white/5 text-yellow-500">
                                    <label for="remove_avatar" class="text-xs text-gray-400">Remove current avatar</label>
                                </div>
                                @endif
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
                                        value="{{ old('facebook', $instructor->facebook) }}"
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
                                        value="{{ old('linkedin', $instructor->linkedin) }}"
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
                                    value="{{ old('payout_email', $instructor->payout_email) }}"
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
                                    <option value="active" {{ $instructor->status == 'active' ? 'selected' : '' }} class="bg-[#1e1e1e]">Active</option>
                                    <option value="inactive" {{ $instructor->status == 'inactive' ? 'selected' : '' }} class="bg-[#1e1e1e]">Inactive</option>
                                    <option value="pending" {{ $instructor->status == 'pending' ? 'selected' : '' }} class="bg-[#1e1e1e]">Pending</option>
                                </select>

                                <div class="mt-4 p-4 bg-yellow-500/5 border border-yellow-500/20 rounded-xl">
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-yellow-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <p class="text-xs text-gray-400">Active instructors can create courses and interact with students. Inactive profiles are hidden from public view.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Account Statistics --}}
                    <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl shadow-xl overflow-hidden">
                        <div class="px-8 py-6 border-b border-yellow-500/10">
                            <div class="flex items-center gap-3">
                                <div class="w-1 h-6 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></div>
                                <h3 class="text-lg font-semibold text-white">Statistics</h3>
                            </div>
                        </div>

                        <div class="p-8">
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400 text-sm">Courses</span>
                                    <span class="text-white font-semibold">{{ $instructor->courses_count ?? 0 }}</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400 text-sm">Students</span>
                                    <span class="text-white font-semibold">{{ $instructor->students_count ?? 0 }}</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400 text-sm">Total Earnings</span>
                                    <span class="text-yellow-400 font-semibold">${{ number_format($instructor->total_earnings ?? 0, 2) }}</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400 text-sm">Joined</span>
                                    <span class="text-gray-300 text-sm">{{ $instructor->created_at->format('d M Y') }}</span>
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
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                            <span>Update Instructor</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
</div>
@endsection