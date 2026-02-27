@extends('layouts.dashboard')
@section('content')
    <div>
        <h1 class="text-2xl font-bold text-white">Create Instructor</h1>
        <x-dashboard.breadcrumbs :items="[['label' => 'Instructors', 'url' => route('admin.instructors')], ['label' => 'Create']]" />
    </div>

    <form action="{{ route('admin.instructor.store') }}" method="POST" enctype="multipart/form-data"
        class="flex flex-row gap-5 items-start">
        @csrf
        <div class="w-2/3 bg-linear-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl shadow-xl p-6">
            <div class="flex flex-row gap-5">
                <div class="w-full">
                    <label class="label">Full Name <span class="text-red-500">*</span></label>
                    <input type="text" name="name" class="input" placeholder="e.g: John Doe" required>
                </div>
                <div class="w-full">
                    <label class="label">Phone Number <span class="text-red-500">*</span></label>
                    <input type="text" name="phone" class="input" placeholder="e.g: +92 300 1234567" required>
                </div>
            </div>
            <div class="flex flex-row gap-5 mt-4">
                <div class="w-full">
                    <label class="label">Email <span class="text-red-500">*</span></label>
                    <input type="email" name="email" class="input" placeholder="e.g:johndoe@gmail.com" required>
                </div>

                <div class="w-full">
                    <label class="label">Password <span class="text-red-500">*</span></label>
                    <input type="password" name="password" class="input" placeholder="Enter password" required>
                </div>
            </div>
            <div class="flex flex-row gap-5 mt-4">
                <div class="w-full">
                    <label class="label">Expertise / Subject</label>
                    <input type="text" name="expertise" placeholder="e.g:Web Development, Android, Math..."
                        class="input">
                </div>

                <div class="w-full">
                    <label class="label">Experience (Years)</label>
                    <input type="text" name="experience" class="input" placeholder="5+ Years">
                </div>
            </div>
            <div class="flex flex-col gap-4 mt-4">
                <div>
                    <label class="label">Qualification</label>
                    <input type="text" name="qualification" class="input"
                        placeholder="e.g: Masters in Computer Science">
                </div>

                <div>
                    <label class="label">Status</label>
                    <select name="status" class="input">
                        <option value="active" disabled selected>Select Status</option>
                        <option value="active" class="bg-gray-900">Active</option>
                        <option value="inactive" class="bg-gray-900">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="mt-6 flex justify-end gap-5">
                <button type="submit"
                    class="py-4 px-8 cursor-pointer bg-linear-to-r from-yellow-500 to-orange-500 text-black font-semibold
                               rounded-xl transition-all hover:scale-[1.02] hover:shadow-lg hover:shadow-yellow-500/30">
                    Create Instructor
                </button>
                <button type="reset"
                    class="px-8 py-3 border border-yellow-500 text-yellow-600 rounded-lg hover:bg-yellow-600 hover:text-white transition cursor-pointer">
                    Cancel
                </button>
            </div>
        </div>
        <div class="w-1/3 bg-linear-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl shadow-xl p-6">
            <div class="flex flex-col w-full gap-6">

                <!-- Avatar Preview & Upload Box -->
                <div class="w-full">
                    <label class="label">
                        Instructor Avatar
                    </label>

                    <!-- Hidden File Input -->
                    <input type="file" name="avatar" id="bannerInput" accept="image/*" class="hidden">

                    <!-- Upload / Preview Box -->
                    <div id="bannerPreview"
                        class="relative w-full h-36 rounded-2xl border-2 border-dashed border-gray-600 bg-linear-to-br from-gray-900 to-gray-800 flex items-center justify-center text-gray-400 text-center overflow-hidden cursor-pointer transition-all duration-300hover:border-yellow-500 hover:shadow-lg hover:shadow-yellow-500/10 mt-2">

                        <!-- Image Preview -->
                        <img id="previewImage"
                            class="absolute inset-0 w-full h-full object-cover hidden transition-opacity duration-300 rounded-2xl">

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

            </div>
            <div class="mt-4">
                <label class="label">Bio</label>
                <textarea name="bio" rows="5" class="input" placeholder="Enter Short Bio About Instructor !"></textarea>
            </div>
        </div>
    </form>
    <script>
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
