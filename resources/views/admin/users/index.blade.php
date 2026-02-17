@extends('layouts.dashboard')

@section('title', 'Users Management')
@section('page-header', 'Users')
@section('page-description', 'Manage all registered users')



@section('content')
<div class="space-y-6">

    <!-- Simple Breadcrumb -->
    <x-dashboard.breadcrumbs :items="[
        ['label' => 'Users']
    ]" />

    <!-- Quick Stats Row -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

        <div class="bg-gray-800/50 rounded-xl p-5 border border-gray-700">
            <div class="text-2xl font-bold text-white">1,890</div>
            <div class="text-sm text-gray-400">Active Users</div>
        </div>
        <div class="bg-gray-800/50 rounded-xl p-5 border border-gray-700">
            <div class="text-2xl font-bold text-white">124</div>
            <div class="text-sm text-gray-400">Joined This Month</div>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="bg-gray-800/30 rounded-xl p-4 border border-gray-700">
        <input type="text"
            placeholder="Search users by name or email..."
            class="w-full px-4 py-2 bg-gray-700/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-yellow-500 transition-colors">
    </div>

    <!-- Users Table -->
    <div class="bg-gray-800/30 rounded-xl border border-gray-700 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-700">
            <h3 class="text-white font-medium">All Users</h3>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-700/30 text-gray-300 text-xs uppercase">
                    <tr>
                        <th class="p-4 font-medium">User</th>
                        <th class="p-4 font-medium">Email</th>
                        <th class="p-4 font-medium">Role</th>
                        <th class="p-4 font-medium">Joined</th>
                        <th class="p-4 font-medium text-right">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-700">
                    @forelse($users as $user)
                    <tr class="hover:bg-gray-700/20 transition-colors">
                        <td class="p-4">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=555&color=fff&size=32"
                                    class="w-8 h-8 rounded-full">
                                <span class="text-white">{{ $user->name }}</span>
                            </div>
                        </td>

                        <td class="p-4 text-gray-300">{{ $user->email }}</td>

                        <td class="p-4">
                            @foreach($user->getRoleNames() as $role)
                            <span class="px-2 py-1 text-xs rounded-full bg-blue-500/20 text-blue-300">
                                {{ $role }}
                            </span>
                            @endforeach
                        </td>

                        <td class="p-4 text-gray-400 text-sm">
                            {{ $user->created_at->format('d M Y') }}
                        </td>

                        <td class="p-4 text-right">
                            <div class="flex justify-end gap-2">
                                <a href="{{ route('admin.users.edit', $user->id) }}"
                                    class="p-2 text-gray-400 hover:text-yellow-500 transition-colors"
                                    title="Edit">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </a>

                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Delete this user?')"
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
                            No users found
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection