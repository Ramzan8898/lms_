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


            <div class="flex flex-row w-full gap-4 mt-4">

                <div class="w-full">
                    <label class="label">Course Banner</label>
                    <input type="file" name="banner" class="input">
                </div>

                <div class="w-full">
                    <label class="label">Course Thumbnail</label>
                    <input type="file" name="thumbnail" class="input">
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
</script>


@endsection