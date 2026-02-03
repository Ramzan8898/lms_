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
                <th class="p-4">Courses</th>
                <th class="p-4">Status</th>
                <th class="p-4 text-right">Actions</th>
            </tr>
        </thead>

        <tbody class="divide-y">

            <tr class="hover:bg-gray-50">
                <td class="p-4">1</td>
                <td class="p-4 font-medium">John Doe</td>
                <td class="p-4">john@example.com</td>
                <td class="p-4">5</td>
                <td class="p-4">
                    <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">
                        Active
                    </span>
                </td>
                <td class="p-4 text-right">
                    <div class="flex justify-end gap-2">

                        <button
                            class="px-4 py-1.5 rounded-md border border-(--primary) text-black
                   hover:bg-(--primary) hover:text-white transition-all duration-200 text-sm font-medium">
                            Edit
                        </button>

                        <button
                            class="px-4 py-1.5 rounded-md border border-red-600 text-red-600
                   hover:bg-red-600 hover:text-white transition-all duration-200 text-sm font-medium">
                            Delete
                        </button>

                    </div>
                </td>

            </tr>

        </tbody>
    </table>

</div>

@endsection