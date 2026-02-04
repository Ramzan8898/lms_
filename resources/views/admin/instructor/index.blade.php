@extends('layouts.dashboard')

@section('content')



<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold">Instructors</h1>
        <x-dashboard.breadcrumbs :items="[
    ['label' => 'Instructors']]" />
    </div>

    <a href="{{route('admin.instructor.create')}}"
        class="px-5 py-2 rounded-lg border-2 border-(--primary) text-(--primary)
              hover:bg-(--primary) hover:text-white transition">
        + Create Instructor
    </a>
</div>

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="w-full text-sm text-left">
        <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
            <tr>
                <th class="p-4">#</th>
                <th class="p-4">Name</th>
                <th class="p-4">Email</th>
                <th class="p-4">Role</th>
                <th class="p-4">Status</th>
                <th class="p-4 text-right">Actions</th>
            </tr>
        </thead>

        <tbody class="divide-y">
            @foreach($instructors as $index => $instructor)
            <tr class="hover:bg-gray-50">

                <td class="p-4">{{ $index + 1 }}</td>

                {{-- Avatar + Name --}}
                <td class="p-4">
                    <div class="flex items-center gap-3">
                        <img
                            src="{{ $instructor->avatar ? asset('storage/'.$instructor->avatar) : 'https://ui-avatars.com/api/?name='.$instructor->user->name }}"
                            class="w-10 h-10 rounded-full object-cover border">
                        <span class="font-medium">
                            {{ $instructor->user->name }}
                        </span>
                    </div>
                </td>

                {{-- Email --}}
                <td class="p-4">
                    {{ $instructor->user->email }}
                </td>

                {{-- Role --}}
                <td class="p-4 capitalize">
                    {{ $instructor->user->getRoleNames()->first() }}
                </td>


                {{-- Status --}}
                <td class="p-4">
                    @if($instructor->status === 'active')
                    <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">
                        Active
                    </span>
                    @else
                    <span class="px-3 py-1 text-xs rounded-full bg-red-100 text-red-700">
                        Inactive
                    </span>
                    @endif
                </td>

                {{-- Actions --}}
                <td class="p-4 text-right">
                    <div class="flex justify-end gap-2">

                        <a href="{{ route('admin.instructor.edit', $instructor->id) }}"
                            class="px-4 py-1.5 rounded-md border border-(--primary) text-black
                            hover:bg-(--primary) hover:text-white transition-all duration-200 text-sm font-medium">
                            Edit
                        </a>

                        <form action="{{ route('admin.instructor.destroy', $instructor->id) }}"
                            method="POST"
                            onsubmit="return confirm('Are you sure?')">
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