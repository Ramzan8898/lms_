@extends('layouts.dashboard')

@section('content')

    <x-dashboard.breadcrumbs :items="[['label' => 'Users']]" />

    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-white">Users</h1>
            <p class="text-white">All registered users</p>
        </div>
        <a href="{{ route('admin.users.create') }}"
            class="px-5 py-2 rounded-lg border-2 border-(--primary) text-(--primary)
              hover:bg-(--primary) hover:text-white transition">
            + Create user
        </a>
    </div>

    <div
        class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl shadow-xl overflow-hidden">



        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="bg-black/30 text-gray-400 uppercase text-xs tracking-wider">
                    <tr>
                        <th class="p-4 font-medium">#</th>
                        <th class="p-4 font-medium">User</th>
                        <th class="p-4 font-medium">Email</th>
                        <th class="p-4 font-medium">Roles</th>
                        <th class="p-4 font-medium">Joined</th>
                        <th class="p-4 font-medium text-right">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-yellow-500/10">
                    @forelse($users as $index => $user)
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="p-4 text-gray-300">{{ $user->id }}</td>

                            <td class="p-4">
                                <div class="flex items-center gap-3">
                                    <div class="relative">
                                        <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=FFB347&color=fff&size=40"
                                            class="w-10 h-10 rounded-full border-2 border-yellow-500/30">
                                        @if ($user->is_active ?? true)
                                            <span
                                                class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-green-500 rounded-full border-2 border-[#1e1e1e]"></span>
                                        @endif
                                    </div>
                                    <div>
                                        <span class="font-medium text-white">{{ $user->name }}</span>
                                        @if ($user->email_verified_at)
                                            <span
                                                class="ml-2 px-1.5 py-0.5 bg-green-500/20 text-green-400 text-[10px] rounded-full">Verified</span>
                                        @endif
                                    </div>
                                </div>
                            </td>

                            <td class="p-4 text-gray-300">{{ $user->email }}</td>

                            <td class="p-4">
                                <div class="flex flex-wrap gap-1">
                                    @foreach ($user->getRoleNames() as $role)
                                        <span
                                            class="px-2.5 py-1 text-xs rounded-full 
                                    @if ($role == 'admin') bg-red-500/20 text-red-400
                                    @elseif($role == 'instructor') bg-blue-500/20 text-blue-400
                                    @else bg-green-500/20 text-green-400 @endif">
                                            {{ $role }}
                                        </span>
                                    @endforeach
                                </div>
                            </td>

                            <td class="p-4 text-gray-400 text-sm">
                                {{ $user->created_at->format('d M Y') }}
                                <span class="block text-xs text-gray-600">{{ $user->created_at->diffForHumans() }}</span>
                            </td>

                            <td class="p-4 text-right">
                                <div class="flex justify-end gap-2">


                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.users.edit', $user->id) }}"
                                        class="p-2 bg-white/5 border border-yellow-500/20 rounded-lg text-gray-400 hover:text-yellow-400 transition-colors"
                                        title="Edit User">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                    </a>

                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this user? This action cannot be undone.')"
                                            class="p-2 bg-white/5 border border-yellow-500/20 rounded-lg text-gray-400 hover:text-red-400 transition-colors"
                                            title="Delete User">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-8 text-center">
                                <div class="flex flex-col items-center justify-center">
                                    <svg class="w-16 h-16 text-gray-600 mb-4" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                        </path>
                                    </svg>
                                    <h3 class="text-lg font-semibold text-white mb-2">No users found</h3>
                                    <p class="text-gray-500">Try adjusting your search or filter to find what you're looking
                                        for.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>


    </div>

@endsection
