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

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="w-full text-sm text-left">
        <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
            <tr>
                <th class="p-4">#</th>
                <th class="p-4">Student</th>
                <th class="p-4">Email</th>
                <th class="p-4">Phone</th>
                <th class="p-4">Status</th>
                <th class="p-4 text-right">Actions</th>
            </tr>
        </thead>

        <tbody class="divide-y">
            @foreach($students as $index => $student)
            <tr>
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
                        class="px-4 py-1.5 border border-(--primary) rounded-md">Edit</a>

                    <form action="{{ route('admin.students.destroy',$student->id) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="px-4 py-1.5 border border-red-600 text-red-600 rounded-md">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection