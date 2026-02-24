@extends('layouts.dashboard')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-white">Edit Lesson</h1>
            <x-dashboard.breadcrumbs :items="[['label' => 'Lessons', 'url' => route('admin.lessons')], ['label' => 'Edit']]" />
        </div>
    </div>
    <form action="{{ route('admin.lessons.update', $lesson->id) }}" method="POST" enctype="multipart/form-data"
        class="flex flex-row gap-5">
        @csrf
        @method('PUT')

        <div class="w-2/3 bg-linear-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl shadow-xl p-6">
            <div class="w-full">
                <label class="label">Lesson Title <span class="text-red-500">*</span></label>
                <input type="text" name="title" id="title" class="input" placeholder="Enter Lesson Title"
                    value="{{ $lesson->title }}" required>
            </div>
            <div class="mt-4">
                <label class="label">Select Course <span class="text-red-500">*</span></label>
                <select name="course_id" class="input" required>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}" {{ $lesson->course_id == $course->id ? 'selected' : '' }}
                            class="bg-gray-900">
                            {{ $course->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mt-4">
                <label class="label">Lesson Type <span class="text-red-500">*</span></label>
                <select name="type" class="input" required>
                    <option value="pdf" class="bg-gray-900" disabled selected>Select Lesson Type</option>
                    <option value="pdf" {{ $lesson->type == 'pdf' ? 'selected' : '' }} class="bg-gray-900">PDF</option>
                    <option value="video" {{ $lesson->type == 'video' ? 'selected' : '' }} class="bg-gray-900">Video
                    </option>
                </select>
            </div>
            <div class="mt-6 flex justify-end gap-5">
                <button type="submit"
                    class="py-4 px-8 cursor-pointer bg-linear-to-r from-yellow-500 to-orange-500 text-black font-semibold
                               rounded-xl transition-all hover:scale-[1.02] hover:shadow-lg hover:shadow-yellow-500/30">
                    Update Lesson
                </button>
                <button type="reset"
                    class="px-8 py-3 border border-yellow-500 text-yellow-600 rounded-lg hover:bg-yellow-600 hover:text-white transition cursor-pointer">
                    Cancel
                </button>
            </div>
        </div>

        <div
            class="w-1/3 bg-linear-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl shadow-xl p-6 flex flex-col gap-4">
            <div>
                <div class="flex justify-between">
                    <label class="label mb-2 block text-white">
                        Upload File (PDF or Video) <span class="text-red-500">*</span>
                    </label>

                    <a href="{{ asset('storage/' . $lesson->file) }}" target="_blank"
                        class="text-yellow-400 text-sm underline">
                        View Current File
                    </a>
                </div>

                <!-- Hidden File Input -->
                <input type="file" name="file" id="fileInput" accept=".pdf,.txt,.mp4,.mov,.avi,video/*" class="hidden"
                    required>

                <!-- Upload / Preview Box -->
                <div id="uploadBox"
                    class="relative w-full h-40 rounded-2xl border-2 border-dashed border-gray-600 bg-linear-to-br from-gray-900 to-gray-800 flex items-center justify-center text-gray-400 text-center overflow-hidden cursor-pointer transition-all duration-300 hover:border-yellow-500 hover:shadow-lg hover:shadow-yellow-500/10">

                    <!-- Preview Content -->
                    <div id="previewContent" class="flex flex-col items-center gap-2">

                        @if ($lesson->file)
                            <div class="flex flex-col items-center gap-1">
                                <span class="text-green-400 font-semibold">
                                    {{ basename($lesson->file) }}
                                </span>
                                <span class="text-xs text-gray-400">
                                    Click to change file
                                </span>
                            </div>
                        @else
                            <!-- Default State -->
                            <svg class="w-10 h-10 text-gray-500" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 16.5V8.25A2.25 2.25 0 015.25 6h13.5A2.25 2.25 0 0121 8.25v8.25M3 16.5l3.75-3.75a2.25 2.25 0 013.182 0L12 15m0 0l2.068-2.068a2.25 2.25 0 013.182 0L21 16.5M12 15v6" />
                            </svg>

                            <p>
                                <span class="text-yellow-400 font-semibold">
                                    Click to upload
                                </span>
                                or drag & drop
                            </p>

                            <p class="text-xs text-gray-500">
                                PDF, TXT, MP4
                            </p>
                        @endif

                    </div>
                </div>
            </div>

            <div>
                <label class="label">Description</label>
                <textarea name="description" rows="4" class="input">{{ $lesson->description }}</textarea>
            </div>
        </div>
    </form>
    <script>
        const fileInput = document.getElementById('fileInput');
        const uploadBox = document.getElementById('uploadBox');
        const previewContent = document.getElementById('previewContent');

        // Click to open file dialog
        uploadBox.addEventListener('click', () => {
            fileInput.click();
        });

        // Drag over
        uploadBox.addEventListener('dragover', (e) => {
            e.preventDefault();
            uploadBox.classList.add('border-yellow-500');
        });

        // Drag leave
        uploadBox.addEventListener('dragleave', () => {
            uploadBox.classList.remove('border-yellow-500');
        });

        // Drop file
        uploadBox.addEventListener('drop', (e) => {
            e.preventDefault();
            uploadBox.classList.remove('border-yellow-500');

            if (e.dataTransfer.files.length) {
                fileInput.files = e.dataTransfer.files;
                handleFile(e.dataTransfer.files[0]);
            }
        });

        // File select
        fileInput.addEventListener('change', function() {
            if (this.files.length) {
                handleFile(this.files[0]);
            }
        });

        // Handle preview
        function handleFile(file) {

            const size = (file.size / 1024 / 1024).toFixed(2);

            previewContent.innerHTML = `
        <div class="flex flex-col items-center gap-1">
            <span class="text-green-400 font-semibold">${file.name}</span>
            <span class="text-xs text-gray-400">${size} MB</span>
            <span class="text-xs text-yellow-500">New file selected</span>
        </div>
    `;
        }
    </script>
@endsection
