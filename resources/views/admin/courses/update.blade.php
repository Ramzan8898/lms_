@extends('layouts.dashboard')

@section('content')

<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold text-white">Edit Course</h1>
</div>

<div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] 
            border border-yellow-500/20 rounded-2xl shadow-xl p-8">

    <form action="{{ route('admin.courses.update', $course->id) }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Title + Slug --}}
        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <label class="label">Course Title</label>
                <input type="text"
                    name="title"
                    id="title"
                    value="{{ old('title', $course->title) }}"
                    class="input">

                @error('title')
                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="label">Slug</label>
                <input type="text"
                    name="slug"
                    id="slug"
                    value="{{ old('slug', $course->slug) }}"
                    class="input bg-gray-800">
            </div>
        </div>

        <div>
            <label class="label mt-6">Description</label>
            <textarea name="description" class="input h-32">{{ old('description', $course->description) }}</textarea>
        </div>

        <div>
            <div class="flex flex-row w-full gap-4 text-white mt-4">
                <div class="w-full text-white">
                    <label class="label text-white">Price</label>
                    <input type="number"
                        name="price"
                        id="price"
                        value="{{ old('price', $course->price) }}"
                        class="input"
                        placeholder="Enter Course Price">
                </div>

                <div class="w-full">
                    <label class="label">Duration</label>
                    <input type="text"
                        name="duration"
                        value="{{ old('duration', $course->duration) }}"
                        class="input"
                        placeholder="Enter Course Duration">
                </div>
            </div>
        </div>

        {{-- Instructor --}}
        <div class="mt-6">
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

        {{-- Category --}}
        <div class="mt-6">
            <label class="label">Category</label>
            <select name="category_id" class="input">
                @foreach($categories as $cat)
                <option value="{{ $cat->id }}"
                    {{ $course->category_id == $cat->id ? 'selected' : '' }}>
                    {{ $cat->title }}
                </option>
                @endforeach
            </select>
        </div>

        {{-- Image Section --}}
        <div class="grid md:grid-cols-2 gap-8 mt-8">

            {{-- Banner --}}
            <div>
                <label class="label">Banner</label>

                <div class="w-full h-40 bg-gray-800 border border-gray-700 
                        rounded-xl overflow-hidden flex items-center justify-center mb-3">

                    <img id="bannerPreview"
                        src="{{ $course->banner ? asset('storage/'.$course->banner) : '' }}"
                        class="w-full h-full object-cover {{ $course->banner ? '' : 'hidden' }}">

                    @if(!$course->banner)
                    <span id="bannerText" class="text-gray-400">No banner</span>
                    @endif
                </div>

                <input type="file"
                    name="banner"
                    id="bannerInput"
                    accept="image/*"
                    class="input cursor-pointer">
            </div>



        </div>

        {{-- Submit --}}
        <button type="submit"
            class="mt-8 px-8 py-3 border border-blue-600 
               text-blue-600 rounded-lg 
               hover:bg-blue-600 hover:text-white 
               transition-all duration-300">
            Update Course
        </button>

    </form>

</div>

{{-- Scripts --}}
<script>
    document.getElementById('title').addEventListener('input', function() {
        let slug = this.value
            .toLowerCase()
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/(^-|-$)/g, '');

        document.getElementById('slug').value = slug;
    });

    // Banner preview
    document.getElementById('bannerInput').addEventListener('change', function(e) {
        const file = e.target.files[0];
        const preview = document.getElementById('bannerPreview');

        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                preview.src = event.target.result;
                preview.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        }
    });

    // Thumbnail preview
    document.getElementById('thumbInput').addEventListener('change', function(e) {
        const file = e.target.files[0];
        const preview = document.getElementById('thumbPreview');

        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                preview.src = event.target.result;
                preview.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        }
    });
</script>

@endsection