@extends('layouts.dashboard')

@section('content')



<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-white">Lessons</h1>
        <x-dashboard.breadcrumbs :items="[
    ['label' => 'lessons']]" />
    </div>

    <a href="{{route('admin.lessons.create')}}"
        class="px-5 py-2 rounded-lg border-2 border-(--primary) text-(--primary)
              hover:bg-(--primary) hover:text-white transition">
        + Create Lessons
    </a>
</div>

<div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl shadow-xl overflow-hidden">
    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="bg-black/30 text-white uppercase text-xs tracking-wider">
                <tr>
                    <th class="p-4">#</th>
                    <th class="p-4">Lesson</th>
                    <th class="p-4">Course</th>
                    <th class="p-4">Type</th>
                    <th class="p-4">File</th>
                    <th class="p-4 text-right">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-yellow-500/10">
                @foreach($lessons as $index => $lesson)
                <tr class="hover:bg-white/5 transition-colors text-white">

                    <td class="p-4">{{ $index + 1 }}</td>

                    {{-- Lesson Title --}}
                    <td class="p-4 font-medium">
                        {{ $lesson->title }}
                    </td>

                    {{-- Course --}}
                    <td class="p-4">
                        {{ $lesson->course->title }}
                    </td>

                    {{-- Type --}}
                    <td class="p-4 capitalize">
                        {{ $lesson->type }}
                    </td>

                    {{-- File --}}
                    <td class="p-4">
                        <a href="{{ asset('storage/'.$lesson->file) }}"
                            target="_blank"
                            class="text-blue-600 underline">
                            View File
                        </a>
                    </td>

                    {{-- Actions --}}
                    <td class="p-4 text-right">
                        <div class="flex justify-end gap-2">

                            <a href="{{ route('admin.lessons.edit', $lesson->id) }}"
                                class="p-2 bg-white/5 border border-yellow-500/20 rounded-lg text-gray-400 hover:text-yellow-400 transition-colors"
                                title="Edit User">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </a>

                            <form action="{{ route('admin.lessons.destroy', $lesson->id) }}"
                                method="POST"
                                onsubmit="return confirm('Delete this lesson?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete this user? This action cannot be undone.')"
                                    class="p-2 bg-white/5 border border-yellow-500/20 rounded-lg text-gray-400 hover:text-red-400 transition-colors"
                                    title="Delete User">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
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