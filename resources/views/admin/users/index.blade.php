@extends('layouts.dashboard')

@section('content')

<x-dashboard.breadcrumbs :items="[
    ['label' => 'Users']
]" />

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold">Users</h1>
        <p class="text-gray-600">All registered users</p>
    </div>
</div>

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="w-full text-sm text-left">
        <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
            <tr>
                <th class="p-4">#</th>
                <th class="p-4">User</th>
                <th class="p-4">Email</th>
                <th class="p-4">Roles</th>
                <th class="p-4">Joined</th>
                <th class="p-4 text-right">Actions</th>

            </tr>
        </thead>

        <tbody class="">
            @foreach($users as $index => $user)
            <tr class="hover:bg-gray-50">

                <td class="p-4">{{ $user->id }}</td>

                <td class="p-4">
                    <div class="flex items-center gap-3">
                        <img src="https://ui-avatars.com/api/?name={{ $user->name }}"
                            class="w-10 h-10 rounded-full ">
                        <span class="font-medium">{{ $user->name }}</span>
                    </div>
                </td>

                <td class="p-4">{{ $user->email }}</td>

                <td class="p-4">
                    @foreach($user->getRoleNames() as $role)
                    <span class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-700 mr-1">
                        {{ $role }}
                    </span>
                    @endforeach
                </td>

                <td class="p-4">
                    {{ $user->created_at->format('d M Y') }}
                </td>

                <td class="p-4 text-right">
                    <div class="flex justify-end gap-2">

                        <a href="{{ route('admin.users.edit', $user->id) }}"
                            class="px-4 py-1.5 rounded-md border border-(--primary) text-black hover:bg-(--primary) hover:text-white transition text-sm">
                            Edit
                        </a>

                        <form action="{{ route('admin.users.destroy', $user->id) }}"
                            method="POST"
                            onsubmit="return confirm('Delete this user?')">
                            @csrf
                            @method('DELETE')
                            <button
                                class="px-4 py-1.5 rounded-md border border-red-600 text-red-600 hover:bg-red-600 hover:text-white transition text-sm">
                                Delete
                            </button>
                        </form>

                    </div>
                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection