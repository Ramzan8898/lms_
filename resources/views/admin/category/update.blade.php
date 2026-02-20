@extends('layouts.dashboard')

@section('content')

<div class="flex items-center justify-between ">
    <div>
        <h1 class="text-2xl font-bold text-white">Edit Category</h1>

        <x-dashboard.breadcrumbs :items="[
            ['label' => 'category', 'url' => route('admin.categories')],
            ['label' => 'Edit']
        ]" />
    </div>
</div>
<form action="{{ route('admin.categories.update', $category) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label class="label">Category Name</label>
        <input type="text" name="title" value="{{ $category->title }}" class="input">
    </div>

    <div class="mb-4">
        <label class="label">Slug</label>
        <input type="text" name="slug" value="{{ $category->slug }}" class="input">
    </div>

    <div class="mb-4">
        <label class="label">Description</label>
        <textarea name="description" class="input">{{ $category->description }}</textarea>
    </div>

    <button
        class="px-6 py-2 border border-green-500 text-green-500 rounded hover:bg-green-500 hover:text-white transition">
        Update Category
    </button>

</form>

<script>
    document.getElementById('title').addEventListener('input', function() {
        let slug = this.value
            .toLowerCase()
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/(^-|-$)/g, '');

        document.getElementById('slug').value = slug;
    });
</script>

@endsection