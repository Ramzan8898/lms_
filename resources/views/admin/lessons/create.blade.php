@extends('layouts.dashboard')

@section('content')


{{-- Header + Breadcrumbs --}}
<div class="flex items-center justify-between ">
    <div>
        <h1 class="text-2xl font-bold">Create Course</h1>

        <x-dashboard.breadcrumbs :items="[
            ['label' => 'lesson', 'url' => route('admin.lessons.create')],
            ['label' => 'Create']
        ]" />
    </div>
</div>

<div class="">

    <form action="{{ route('admin.lessons.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Title + Slug --}}
        <div class="flex gap-4">
            <div class="w-full">
                <label class="label">Lesson Title</label>
                <input type="text" name="title" id="title" class="input" placeholder="Enter Lesson Title">
            </div>

            <div class="w-full">
                <label class="label">Slug</label>
                <input type="text" name="slug" id="slug" class="input" placeholder="Auto generated slug">
            </div>
        </div>

        {{-- Course --}}
        <div class="mt-4">
            <label class="label">Select Course</label>
            <select name="course_id" class="input" required>
                <option value="">Choose Course</option>
                @foreach($courses as $course)
                <option value="{{ $course->id }}">{{ $course->title }}</option>
                @endforeach
            </select>
        </div>

        {{-- Lesson Type --}}
        <div class="mt-4">
            <label class="label">Lesson Type</label>
            <select name="type" class="input" required>
                <option value="pdf">PDF</option>
                <option value="video">Video</option>
            </select>
        </div>

        {{-- File Upload --}}
        <div class="mt-4">
            <label class="label">Upload File (PDF or Video)</label>
            <input type="file" name="file" class="input" required>
        </div>

        {{-- Description --}}
        <div class="mt-4">
            <label class="label">Description</label>
            <textarea name="description" rows="4" class="input"></textarea>
        </div>

        <div class="mt-6">
            <button type="submit"
                class="px-6 py-3 border border-blue-600 cursor-pointer text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition">
                Create Lesson
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