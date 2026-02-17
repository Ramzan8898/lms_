@extends('layouts.dashboard')

@section('title', 'Instructors Management')
@section('page-header', 'Instructors')
@section('page-description', 'Manage all course instructors')

@section('content')
<div class="space-y-6">

    <!-- Header with Breadcrumb and Create Button -->
    <div class="flex items-center justify-between">
        <div>
            <x-dashboard.breadcrumbs :items="[
                ['label' => 'Instructors']
            ]" />
        </div>

        <a href="{{ route('admin.instructor.create') }}"
            class="px-5 py-2 bg-yellow-500 text-black rounded-lg text-sm font-medium hover:bg-yellow-400 transition-colors">
            + New Instructor
        </a>
    </div>

    <!-- Quick Stats Row -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-gray-800/50 rounded-xl p-5 border border-gray-700">
            <div class="text-2xl font-bold text-white">{{ $instructors->count() }}</div>
            <div class="text-sm text-gray-400">Total Instructors</div>
        </div>
        <div class="bg-gray-800/50 rounded-xl p-5 border border-gray-700">
            <div class="text-2xl font-bold text-white">{{ $instructors->where('status', 'active')->count() }}</div>
            <div class="text-sm text-gray-400">Active Instructors</div>
        </div>
        <div class="bg-gray-800/50 rounded-xl p-5 border border-gray-700">
            <div class="text-2xl font-bold text-white">{{ $instructors->where('status', 'inactive')->count() }}</div>
            <div class="text-sm text-gray-400">Inactive</div>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="bg-gray-800/30 rounded-xl p-4 border border-gray-700">
        <input type="text"
            placeholder="Search instructors by name or email..."
            class="w-full px-4 py-2 bg-gray-700/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-yellow-500 transition-colors">
    </div>

    <!-- Instructors Table -->
    <div class="bg-gray-800/30 rounded-xl border border-gray-700 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-700">
            <h3 class="text-white font-medium">All Instructors</h3>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-700/30 text-gray-300 text-xs uppercase">
                    <tr>
                        <th class="p-4 font-medium">Instructor</th>
                        <th class="p-4 font-medium">Email</th>
                        <th class="p-4 font-medium">Role</th>
                        <th class="p-4 font-medium">Status</th>
                        <th class="p-4 font-medium text-right">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-700">
                    @forelse($instructors as $instructor)
                    <tr class="hover:bg-gray-700/20 transition-colors">
                        <!-- Avatar + Name -->
                        <td class="p-4">
                            <div class="flex items-center gap-3">
                                <img src="{{ $instructor->avatar ? asset('storage/'.$instructor->avatar) : 'https://ui-avatars.com/api/?name='.urlencode($instructor->user->name).'&background=555&color=fff&size=32' }}"
                                    class="w-8 h-8 rounded-full object-cover border border-gray-600">
                                <span class="text-white font-medium">{{ $instructor->user->name }}</span>
                            </div>
                        </td>

                        <!-- Email -->
                        <td class="p-4 text-gray-300">
                            {{ $instructor->user->email }}
                        </td>

                        <!-- Role -->
                        <td class="p-4">
                            <span class="px-2 py-1 text-xs rounded-full bg-blue-500/20 text-blue-300">
                                {{ $instructor->user->getRoleNames()->first() }}
                            </span>
                        </td>

                        <!-- Status -->
                        <td class="p-4">
                            @if($instructor->status === 'active')
                            <span class="px-2 py-1 text-xs rounded-full bg-green-500/20 text-green-300">
                                Active
                            </span>
                            @else
                            <span class="px-2 py-1 text-xs rounded-full bg-red-500/20 text-red-300">
                                Inactive
                            </span>
                            @endif
                        </td>

                        <!-- Actions -->
                        <td class="p-4 text-right">
                            <div class="flex justify-end gap-2">
                                <!-- Edit Button -->
                                <a href="{{ route('admin.instructor.edit', $instructor->id) }}"
                                    class="p-2 text-gray-400 hover:text-yellow-500 transition-colors"
                                    title="Edit">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </a>

                                <!-- Delete Button -->
                                <form action="{{ route('admin.instructor.destroy', $instructor->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Delete this instructor?')"
                                        class="p-2 text-gray-400 hover:text-red-500 transition-colors"
                                        title="Delete">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="p-8 text-center text-gray-400">
                            <div class="flex flex-col items-center">
                                <svg class="w-12 h-12 text-gray-600 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                <p>No instructors found</p>
                                <a href="{{ route('admin.instructor.create') }}" class="mt-2 text-yellow-500 hover:text-yellow-400">
                                    Add your first instructor
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection