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

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="w-full text-sm text-left">
        <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
            <tr>
                <th class="p-4">#</th>
                <th class="p-4">Lesson</th>
                <th class="p-4">Course</th>
                <th class="p-4">Type</th>
                <th class="p-4">File</th>
                <th class="p-4 text-right">Actions</th>
            </tr>
        </thead>

        <tbody class="divide-y">
            @foreach($lessons as $index => $lesson)
            <tr class="hover:bg-gray-50">

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
                            class="px-4 py-1.5 rounded-md border border-(--primary) text-black
                           hover:bg-(--primary) hover:text-white transition text-sm">
                            Edit
                        </a>

                        <form action="{{ route('admin.lessons.destroy', $lesson->id) }}"
                            method="POST"
                            onsubmit="return confirm('Delete this lesson?')">
                            @csrf
                            @method('DELETE')
                            <button
                                class="px-4 py-1.5 rounded-md border border-red-600 text-red-600
                                hover:bg-red-600 hover:text-white transition text-sm">
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