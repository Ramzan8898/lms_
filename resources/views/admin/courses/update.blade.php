@extends('layouts.dashboard')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-white">Edit Course</h1>
    </div>

    <div class=" w-full">

        <form action="{{ route('admin.courses.update', $course->id) }}" class="flex flex-row gap-5" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div
                class="w-2/3 bg-linear-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl shadow-xl p-6">
                <div class="flex flex-row w-full gap-4">
                    <div class="w-full">
                        <label class="label">Course Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $course->title) }}"
                            class="input">

                        @error('title')
                            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full">
                        <label class="label">Slug</label>
                        <input type="text" name="slug" id="slug" value="{{ old('slug', $course->slug) }}"
                            class="input bg-gray-800">
                    </div>
                </div>
                <div class="flex flex-row w-full gap-4 mt-4 ">
                    <div class="w-full ">
                        <label class="label">Price</label>
                        <input type="number" name="price" id="price" value="{{ old('price', $course->price) }}"
                            class="input" placeholder="Enter Course Price">
                    </div>

                    <div class="w-full">
                        <label class="label">Duration</label>
                        <input type="text" name="duration" value="{{ old('duration', $course->duration) }}"
                            class="input" placeholder="Enter Course Duration">
                    </div>
                </div>
                <div class="w-full mt-4">
                    <label class="label">Instructor</label>
                    <select name="instructor_id" class="input">
                        @foreach ($instructors as $ins)
                            <option value="{{ $ins->id }}" {{ $course->instructor_id == $ins->id ? 'selected' : '' }}>
                                {{ $ins->user->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full mt-4">
                    <label class="label">Category</label>
                    <select name="category_id" class="input">
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}" {{ $course->category_id == $cat->id ? 'selected' : '' }}>
                                {{ $cat->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-6 flex justify-end gap-5">
                    <button type="submit"
                        class="py-4 px-8 cursor-pointer bg-linear-to-r from-yellow-500 to-orange-500 text-black font-semibold
                               rounded-xl transition-all hover:scale-[1.02] hover:shadow-lg hover:shadow-yellow-500/30">
                        Update Course
                    </button>
                    <button type="reset"
                        class="px-8 py-3 border border-yellow-500 text-yellow-600 rounded-lg hover:bg-yellow-600 hover:text-white transition cursor-pointer">
                        Cancel
                    </button>
                </div>
            </div>
            <div
                class="w-1/3 bg-linear-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl shadow-xl p-6">
                <div class="flex flex-col w-full">

                    <div class="w-full">
                        <label class="block mb-2 text-sm font-semibold text-gray-300">
                            Course Banner <span class="text-red-500">*</span>
                        </label>

                        <!-- Hidden File Input -->
                        <input type="file" name="banner" id="bannerInput" accept="image/*" class="hidden" required>

                        <!-- Upload / Preview Box -->
                        <div id="bannerPreview"
                            class="relative w-full h-48 rounded-2xl border-2 border-dashed border-gray-600 bg-linear-to-br from-gray-900 to-gray-800 flex items-center justify-center text-gray-400 text-center overflow-hidden cursor-pointer transition-all duration-300hover:border-yellow-500 hover:shadow-lg hover:shadow-yellow-500/10">

                            <!-- Image Preview -->
                            <img id="previewImage" src="{{ $course->banner ? asset($course->banner) : '' }}"
                                class="absolute inset-0 w-full h-full object-cover  transition-opacity duration-300 rounded-2xl">

                            <!-- Overlay -->
                            <div id="overlay"
                                class="absolute inset-0 bg-black/40 opacity-0 hover:opacity-100 transition duration-300 hidden flex items-center justify-center text-white text-sm font-medium">
                                Change Image
                            </div>

                            <!-- Default Text -->
                            <div id="previewText" class="flex flex-col items-center gap-2">
                                <svg class="w-10 h-10 text-gray-500" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 16.5V8.25A2.25 2.25 0 015.25 6h13.5A2.25 2.25 0 0121 8.25v8.25M3 16.5l3.75-3.75a2.25 2.25 0 013.182 0L12 15m0 0l2.068-2.068a2.25 2.25 0 013.182 0L21 16.5M12 15v6" />
                                </svg>
                                <p>
                                    <span class="text-yellow-400 font-semibold">Click to upload</span>
                                    or drag & drop
                                </p>
                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="label mt-6">Description</label>
                        <textarea name="description" class="input h-40">{{ old('description', $course->description) }}</textarea>
                    </div>

                </div>
            </div>
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

        const bannerInput = document.getElementById('bannerInput');
        const bannerPreview = document.getElementById('bannerPreview');
        const previewImage = document.getElementById('previewImage');
        const previewText = document.getElementById('previewText');
        const overlay = document.getElementById('overlay');

        // Click anywhere inside box
        bannerPreview.addEventListener('click', () => {
            bannerInput.click();
        });

        // Image Preview
        bannerInput.addEventListener('change', function(e) {
            const file = e.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(event) {
                    previewImage.src = event.target.result;
                    previewImage.classList.remove('hidden');
                    previewText.classList.add('hidden');
                    overlay.classList.remove('hidden');
                };

                reader.readAsDataURL(file);
            }
        });

        // Drag Over Effect
        bannerPreview.addEventListener('dragover', (e) => {
            e.preventDefault();
            bannerPreview.classList.add('border-yellow-500');
        });

        bannerPreview.addEventListener('dragleave', () => {
            bannerPreview.classList.remove('border-yellow-500');
        });

        bannerPreview.addEventListener('drop', (e) => {
            e.preventDefault();
            bannerInput.files = e.dataTransfer.files;
            bannerInput.dispatchEvent(new Event('change'));
            bannerPreview.classList.remove('border-yellow-500');
        });
    </script>
@endsection
