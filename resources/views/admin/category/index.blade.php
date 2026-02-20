@extends('layouts.dashboard')

@section('content')
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-white">Category</h1>
        <x-dashboard.breadcrumbs :items="[
    ['label' => 'Category']]" />
    </div>

    <a href="{{ route('admin.categories.create') }}"
        class="px-5 py-2 rounded-lg border-2 border-(--primary) text-(--primary)
              hover:bg-(--primary) hover:text-white transition">
        + Create Category
    </a>
</div>


<table class="w-full mt-6 text-white">
    <thead>
        <tr class="border-b border-gray-700">
            <th class="py-2 text-left">Title</th>
            <th class="py-2 text-left">Slug</th>
            <th class="py-2 text-left">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr class="border-b border-gray-800">
            <td class="py-4 w-1/3">
                {{ $category->title }}
            </td>

            <td class="w-1/3">
                {{ $category->slug }}
            </td>

            <td class="w-1/3">
                <div class="flex gap-2">
                    <a href="{{ route('admin.categories.edit', $category) }}"
                        class="px-3 py-1 border border-yellow-500 text-yellow-500 rounded-lg hover:bg-yellow-500 hover:text-black transition-all duration-300">
                        Edit
                    </a>

                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button
                            class="px-3 py-1 border border-red-500 text-red-500 rounded-lg hover:bg-red-500 hover:text-white transition-all duration-300">
                            Delete
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $categories->links() }}

@endsection