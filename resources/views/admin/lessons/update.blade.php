@extends('layouts.dashboard')

@section('content')

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold">Edit Lesson</h1>
        <x-dashboard.breadcrumbs :items="[
            ['label' => 'Lessons', 'url' => route('admin.lessons')],
            ['label' => 'Edit']
        ]" />
    </div>
</div>

<form action="{{ route('admin.lessons.update', $lesson->id) }}"
    method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')

    {{-- Title + Slug --}}
    <div class="flex gap-4">
        <div class="w-full">
            <label class="label">Lesson Title</label>
            <input type="text" name="title" id="title"
                value="{{ $lesson->title }}"
                class="input">
        </div>

        <div class="w-full">
            <label class="label">Slug</label>
            <input type="text" name="slug" id="slug"
                value="{{ $lesson->slug }}"
                class="input">
        </div>
    </div>

    {{-- Course --}}
    <div class="mt-4">
        <label class="label">Select Course</label>
        <select name="course_id" class="input">
            @foreach($courses as $course)
            <option value="{{ $course->id }}"
                {{ $lesson->course_id == $course->id ? 'selected' : '' }}>
                {{ $course->title }}
            </option>
            @endforeach
        </select>
    </div>

    {{-- Type --}}
    <div class="mt-4">
        <label class="label">Lesson Type</label>
        <select name="type" class="input">
            <option value="pdf" {{ $lesson->type=='pdf'?'selected':'' }}>PDF</option>
            <option value="video" {{ $lesson->type=='video'?'selected':'' }}>Video</option>
        </select>
    </div>

    {{-- Current File --}}
    <div class="mt-4">
        <label class="label">Current File</label><br>
        <a href="{{ asset('storage/'.$lesson->file) }}"
            target="_blank"
            class="text-blue-600 underline">
            View Existing File
        </a>
        <input type="file" name="file" class="input mt-2">
    </div>

    {{-- Description --}}
    <div class="mt-4">
        <label class="label">Description</label>
        <textarea name="description" rows="4" class="input">{{ $lesson->description }}</textarea>
    </div>

    <button class="mt-6 px-6 py-3 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition">
        Update Lesson
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