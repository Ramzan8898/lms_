@extends('layouts.dashboard')

@section('content')

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-white">Students</h1>
        <x-dashboard.breadcrumbs :items="[
            ['label' => 'Students']
        ]" />
    </div>

    <a href="{{route('admin.students.create')}}"
        class="px-5 py-2 rounded-lg border-2 border-(--primary) text-(--primary)
              hover:bg-(--primary) hover:text-white transition">
        + Create Student
    </a>
</div>

<div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl shadow-xl overflow-hidden">
    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="bg-black/30 text-white uppercase text-xs tracking-wider">
                <tr>
                    <th class="p-4">#</th>
                    <th class="p-4">Student</th>
                    <th class="p-4">Email</th>
                    <th class="p-4">Phone</th>
                    <th class="p-4">Status</th>
                    <th class="p-4 text-right">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-yellow-500/10">
                @foreach($students as $index => $student)
                <tr class="hover:bg-white/5 transition-colors text-white">
                    <td class="p-4">{{ $index + 1 }}</td>

                    <td class="p-4 flex items-center gap-3">
                        <img src="{{ $student->avatar ? asset('storage/'.$student->avatar) : 'https://ui-avatars.com/api/?name='.$student->user->name }}"
                            class="w-10 h-10 rounded-full">
                        {{ $student->user->name }}
                    </td>

                    <td class="p-4">{{ $student->user->email }}</td>
                    <td class="p-4">{{ $student->phone }}</td>

                    <td class="p-4">
                        <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">
                            {{ ucfirst($student->status) }}
                        </span>
                    </td>

                    <td class="p-4 text-right flex gap-2 justify-end">
                        <a href="{{ route('admin.students.edit',$student->id) }}"
                            class="p-2 bg-white/5 border border-yellow-500/20 rounded-lg text-gray-400 hover:text-yellow-400 transition-colors"
                            title="Edit User">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg></a>

                        <form action="{{ route('admin.students.destroy',$student->id) }}"
                            method="POST">
                            @csrf
                            <button type="submit"
                                onclick="return confirm('Are you sure you want to delete this user? This action cannot be undone.')"
                                class="p-2 bg-white/5 border border-yellow-500/20 rounded-lg text-gray-400 hover:text-red-400 transition-colors"
                                title="Delete User">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    @endsection