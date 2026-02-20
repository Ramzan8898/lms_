@extends('layouts.dashboard')

@section('content')

{{-- Header + Breadcrumbs --}}
<div class="flex items-center justify-between ">
    <div>
        <h1 class="text-2xl font-bold text-white">Create Course</h1>

        <x-dashboard.breadcrumbs :items="[
            ['label' => 'Course', 'url' => route('admin.courses.create')],
            ['label' => 'Create']
        ]" />
    </div>
</div>

<div class="">

    <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>

            <div class="flex flex-row w-full gap-4 text-white">
                <div class="w-full text-white">
                    <label class="label text-white">Course Title</label>
                    <input type="text"
                        name="title"
                        id="title"
                        class="input"
                        placeholder="Enter Course Title">
                </div>

                <div class="w-full">
                    <label class="label">Slug</label>
                    <input type="text"
                        name="slug"
                        id="slug"
                        class="input"
                        placeholder="Auto generated slug">
                </div>
            </div>

            <div class="mt-4">
                <label class="label">Select Instructor</label>
                <select name="instructor_id" class="input" required>
                    <option value="">Choose Instructor</option>
                    @foreach($instructors as $ins)
                    <option value="{{ $ins->id }}">
                        {{ $ins->user->name }}
                    </option>
                    @endforeach
                </select>
            </div>


            <div class="mt-4">
                <label class="label">Select Category</label>
                <select name="category_id" class="input" required>
                    <option value="">Choose Category</option>
                    @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">
                        {{ $cat->title }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <label class="label">Course Description</label>
                <textarea name="description" rows="4" class="input"></textarea>
            </div>

            <div class="flex flex-row w-full gap-4 mt-4">
                <div class="w-full">
                    <label class="label">Price</label>
                    <input type="number" name="price" id="price" class="input" placeholder="Enter Course Price" step="0.01">
                </div>

                <div class="w-full">
                    <label class="label">Duration</label>
                    <input type="text" name="duration" id="duration" class="input" placeholder="Enter Course Duration">
                </div>
            </div>



            <div class="flex flex-col w-full gap-4 mt-4">
                <div class="w-full">
                    <label class="label">Banner Preview</label>

                    <div id="bannerPreview"
                        class="w-full h-40 bg-gray-800 rounded-xl border border-gray-700 
                   flex items-center justify-center text-gray-400 
                   overflow-hidden transition-all duration-300">

                        <img id="previewImage"
                            class="w-full h-full object-cover hidden">

                        <span id="previewText">No image selected</span>
                    </div>
                </div>
                <div class="w-full">
                    <label class="label">Course Banner</label>

                    <input type="file"
                        name="banner"
                        id="bannerInput"
                        accept="image/*"
                        class="input cursor-pointer">
                </div>

            </div>
        </div>


        <div class="mt-6">
            <button type="submit"
                class="px-6 py-3 border border-blue-600 cursor-pointer text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition">
                Create Course
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


    document.getElementById('bannerInput').addEventListener('change', function(e) {

        const file = e.target.files[0];
        const previewImage = document.getElementById('previewImage');
        const previewText = document.getElementById('previewText');

        if (file) {
            const reader = new FileReader();

            reader.onload = function(event) {
                previewImage.src = event.target.result;
                previewImage.classList.remove('hidden');
                previewText.classList.add('hidden');
            }

            reader.readAsDataURL(file);
        } else {
            previewImage.classList.add('hidden');
            previewText.classList.remove('hidden');
        }

    });
</script>


@endsection