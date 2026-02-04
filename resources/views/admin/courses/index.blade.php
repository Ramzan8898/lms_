@extends('layouts.dashboard')

@section('content')



<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold">Instructors</h1>
        <x-dashboard.breadcrumbs :items="[
    ['label' => 'Courses']]" />
    </div>

    <a href="{{route('admin.courses.create')}}"
        class="px-5 py-2 rounded-lg border-2 border-(--primary) text-(--primary)
              hover:bg-(--primary) hover:text-white transition">
        + Create Courses
    </a>
</div>

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="w-full text-sm text-left">
        <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
            <tr>
                <th class="p-4">#</th>
                <th class="p-4">Course</th>
                <th class="p-4">Slug</th>
                <th class="p-4">Instructor</th>
                <th class="p-4">Thumbnail</th>
                <th class="p-4 text-right">Actions</th>
            </tr>
        </thead>

        <tbody class="divide-y">
            @foreach($courses as $index => $course)
            <tr class="hover:bg-gray-50">

                <td class="p-4">{{ $index + 1 }}</td>

                {{-- Course Title --}}
                <td class="p-4 font-medium">
                    {{ $course->title }}
                </td>

                {{-- Slug --}}
                <td class="p-4">
                    {{ $course->slug }}
                </td>

                {{-- Instructor --}}
                <td class="p-4">
                    {{ $course->instructor->user->name }}
                </td>

                {{-- Thumbnail --}}
                <td class="p-4">
                    @if($course->thumbnail)
                    <img src="{{ asset('storage/'.$course->thumbnail) }}"
                        class="w-14 h-14 object-cover rounded border">
                    @else
                    <span class="text-gray-400">No Image</span>
                    @endif
                </td>

                {{-- Actions --}}
                <td class="p-4 text-right">
                    <div class="flex justify-end gap-2">

                        <a href="{{ route('admin.courses.edit', $course->id) }}"
                            class="px-4 py-1.5 rounded-md border border-(--primary) text-black
                           hover:bg-(--primary) hover:text-white transition-all duration-200 text-sm font-medium">
                            Edit
                        </a>

                        <form action="{{ route('admin.courses.destroy', $course->id) }}"
                            method="POST"
                            onsubmit="return confirm('Delete this course?')">
                            @csrf
                            @method('DELETE')
                            <button
                                class="px-4 py-1.5 rounded-md border border-red-600 text-red-600
                                hover:bg-red-600 hover:text-white transition-all duration-200 text-sm font-medium">
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