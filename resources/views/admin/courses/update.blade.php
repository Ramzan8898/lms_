@extends('layouts.dashboard')

@section('content')

<h1 class="text-2xl font-bold mb-6 text-white">Edit Course</h1>

<form action="{{ route('admin.courses.update', $course->id) }}"
    method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')

    {{-- Title + Slug --}}
    <div class="flex gap-4">
        <div class="w-full">
            <label class="label">Title</label>
            <input type="text" name="title" id="title"
                value="{{ $course->title }}"
                class="input">
        </div>

        <div class="w-full">
            <label class="label">Slug</label>
            <input type="text" name="slug" id="slug"
                value="{{ $course->slug }}"
                class="input">
        </div>
    </div>

    {{-- Instructor --}}
    <div class="mt-4">
        <label class="label">Instructor</label>
        <select name="instructor_id" class="input">
            @foreach($instructors as $ins)
            <option value="{{ $ins->id }}"
                {{ $course->instructor_id == $ins->id ? 'selected' : '' }}>
                {{ $ins->user->name }}
            </option>
            @endforeach
        </select>
    </div>

    {{-- Images --}}
    <div class="flex gap-6 mt-6">

        <div>
            <label class="label">Current Banner</label><br>
            @if($course->banner)
            <img src="{{ asset('storage/'.$course->banner) }}"
                class="w-40 h-24 object-cover rounded border mb-2">
            @endif
            <input type="file" name="banner" class="input">
        </div>

        <div>
            <label class="label">Current Thumbnail</label><br>
            @if($course->thumbnail)
            <img src="{{ asset('storage/'.$course->thumbnail) }}"
                class="w-24 h-24 object-cover rounded border mb-2">
            @endif
            <input type="file" name="thumbnail" class="input">
        </div>

    </div>

    <button class="mt-6 px-6 py-3 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition">
        Update Course
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