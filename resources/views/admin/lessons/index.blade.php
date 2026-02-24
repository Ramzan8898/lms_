@extends('layouts.dashboard')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-white">Lessons</h1>
            <x-dashboard.breadcrumbs :items="[['label' => 'lessons']]" />
        </div>

        <a href="{{ route('admin.lessons.create') }}"
            class="px-5 py-2 rounded-lg border-2 border-(--primary) text-(--primary)
              hover:bg-(--primary) hover:text-white transition">
            + Create Lessons
        </a>
    </div>

    <div
        class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl shadow-xl overflow-hidden">
        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="bg-black/30 text-white uppercase text-xs tracking-wider">
                    <tr>
                        <th class="p-4">#</th>
                        <th class="p-4">Lesson</th>
                        <th class="p-4">Course</th>
                        <th class="p-4">Type</th>
                        <th class="p-4">File</th>
                        <th class="p-4 text-right">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-yellow-500/10">
                    @foreach ($lessons as $index => $lesson)
                        <tr class="hover:bg-white/5 transition-colors text-white">

                            <td class="p-4">{{ $index + 1 }}</td>

                            {{-- Lesson Title --}}
                            <td class="p-4 font-medium">
                                {{ $lesson->title }}
                            </td>

                            {{-- Course --}}
                            <td class="p-4">
                                {{ $lesson->course->title }}
                            </td>

                            {{-- Type --}}
                            <td class="p-4 capitalize">
                                {{ $lesson->type }}
                            </td>

                            <td class="p-4">
                                @if ($lesson->type === 'video')
                                    <button onclick="openVideoModal('{{ $lesson->file }}')"
                                        class="text-green-500 cursor-pointer">
                                        Watch Video
                                    </button>
                                @elseif($lesson->type === 'pdf')
                                    <a href="{{ asset('storage/' . $lesson->file) }}" target="_blank"
                                        class="text-yellow-600 ">
                                        Download PDF
                                    </a>
                                @endif
                            </td>

                            {{-- Actions --}}
                            <td class="p-4 text-right">
                                <div class="flex justify-end gap-2">

                                    <a href="{{ route('admin.lessons.edit', $lesson->id) }}"
                                        class="p-2 bg-white/5 border border-yellow-500/20 rounded-lg text-gray-400 hover:text-yellow-400 transition-colors"
                                        title="Edit User">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                    </a>

                                    <form action="{{ route('admin.lessons.destroy', $lesson->id) }}" method="POST"
                                        onsubmit="return confirm('Delete this lesson?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this user? This action cannot be undone.')"
                                            class="p-2 bg-white/5 border border-yellow-500/20 rounded-lg text-gray-400 hover:text-red-400 transition-colors"
                                            title="Delete User">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                        </button>
                                    </form>

                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
        <!-- Video Modal -->
        <div id="videoModal" class="fixed inset-0 bg-black/80 hidden items-center justify-center z-50">

            <div class=" rounded-lg w-11/12 md:w-3/4 lg:w-1/2 relative">

                <!-- Close Button -->
                <button class=" text-white text-xl cursor-pointer" onclick="closeVideoModal()">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-5.0 -10.0 110.0 135.0"
                        class="w-10 fill-amber-50 absolute top-5 right-0 cursor-pointer">
                        <path
                            d="m50 8.4414c-22.98 0-41.668 18.688-41.668 41.664 2.2812 55.277 81.059 55.262 83.332 0 0-22.98-18.688-41.668-41.668-41.668zm0 74.668c-18.188 0-32.98-14.812-32.98-33 1.8086-43.754 64.156-43.738 65.957 0 0 18.188-14.793 33-32.98 33z" />
                        <path
                            d="m50 21.293c-15.895 0-28.812 12.918-28.812 28.812 1.5781 38.254 56.051 38.242 57.625 0 0-15.895-12.918-28.812-28.812-28.812zm13.98 39.855c1.9141 1.9375-1.0117 4.8359-2.957 2.9375l-11.02-11.02-11.02 11.02c-0.82422 0.80078-2.1328 0.80469-2.957 0-0.8125-0.8125-0.8125-2.125 0-2.9375l11.043-11.02-11.043-11.043c-0.8125-0.8125-0.8125-2.125 0-2.9375 0.8125-0.83203 2.1445-0.83203 2.957 0l11.02 11.02 11.02-11.02c1.9102-1.9414 4.8867 0.99609 2.957 2.9375l-11.02 11.043z" />
                    </svg>
                </button>

                <!-- Video Container -->
                <div id="videoContainer" class="p-4"></div>

            </div>
        </div>

        <script>
            function openVideoModal(file) {

                let container = document.getElementById('videoContainer');
                let modal = document.getElementById('videoModal');

                container.innerHTML = '';

                // If YouTube link
                if (file.includes('youtube.com') || file.includes('youtu.be')) {

                    container.innerHTML = `
            <iframe width="100%" height="400"
                src="${convertToEmbed(file)}"
                frameborder="0"
                allowfullscreen>
            </iframe>
        `;

                } else {

                    // Uploaded video
                    container.innerHTML = `
    <video controls
           controlsList="nodownload noremoteplayback"
           disablePictureInPicture
           autoplay
           class="w-full rounded">
        <source src="/storage/${file}" type="video/mp4">
    </video>
`;
                }

                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }

            function closeVideoModal() {
                let modal = document.getElementById('videoModal');
                let container = document.getElementById('videoContainer');

                modal.classList.add('hidden');
                modal.classList.remove('flex');

                container.innerHTML = '';
            }

            // Convert YouTube to embed
            function convertToEmbed(url) {
                if (url.includes('youtu.be')) {
                    let id = url.split('/').pop();
                    return `https://www.youtube.com/embed/${id}`;
                }
                if (url.includes('watch?v=')) {
                    let id = url.split('watch?v=')[1];
                    return `https://www.youtube.com/embed/${id}`;
                }
                return url;
            }
        </script>
    @endsection
