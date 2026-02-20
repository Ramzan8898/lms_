@extends('layouts.dashboard')

@section('content')


{{-- Header + Breadcrumbs --}}
<div class="flex items-center justify-between ">
    <div>
        <h1 class="text-2xl font-bold text-white">Create Category</h1>

        <x-dashboard.breadcrumbs :items="[
            ['label' => 'category', 'url' => route('admin.categories')],
            ['label' => 'Create']
        ]" />
    </div>
</div>

<div class="">

    <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Title + Slug --}}
        <div class="flex gap-4">
            <div class="w-full">
                <label class="label">Category Name</label>
                <input type="text" name="title" id="title" class="input" placeholder="Enter Category Name">
            </div>

            <div class="w-full">
                <label class="label">Slug</label>
                <input type="text" id="slugPreview" class="input" placeholder="Auto generated slug" disabled>

                <!-- Hidden real input -->
                <input type="hidden" name="slug" id="slug">
            </div>
        </div>

        {{-- Description --}}
        <div class="mt-4">
            <label class="label">Description</label>
            <textarea name="description" rows="4" class="input"></textarea>
        </div>

        <div class="mt-6">
            <button type="submit"
                class="px-6 py-3 border border-blue-600 cursor-pointer text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition">
                Create Category
            </button>
        </div>
    </form>


</div>

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