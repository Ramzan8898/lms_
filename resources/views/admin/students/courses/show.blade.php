{{-- resources/views/students/courses/show.blade.php --}}
@extends('layouts.dashboard')

@section('title', $course->title)

@section('content')
<div class="space-y-8">

    <!-- Course Header -->
    <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl overflow-hidden">
        <!-- Course Banner -->
        <div class="relative h-64 md:h-80 overflow-hidden">
            <img src="{{ $course->banner ? asset('storage/'.$course->banner) : 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=1200&q=80' }}"
                class="w-full h-full object-cover"
                alt="{{ $course->title }}">

            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-[#1e1e1e] via-transparent to-transparent"></div>

            <!-- Course Info Overlay -->
            <div class="absolute bottom-0 left-0 right-0 p-8">
                <div class="flex items-center gap-3 mb-3">
                    <span class="px-3 py-1 bg-yellow-500/20 backdrop-blur-sm border border-yellow-500/30 rounded-full text-yellow-400 text-sm font-medium">
                        {{ $course->category->title ?? 'Development' }}
                    </span>
                    <span class="px-3 py-1 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full text-gray-300 text-sm">
                        {{ $course->lessons->count() }} Lessons
                    </span>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">{{ $course->title }}</h1>
                <div class="flex items-center gap-4 text-gray-300">
                    <div class="flex items-center gap-2">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($course->instructor->user->name ?? 'Instructor') }}&background=FFB347&color=fff&size=24"
                            class="w-6 h-6 rounded-full">
                        <span>{{ $course->instructor->user->name ?? 'Instructor' }}</span>
                    </div>
                    <span>•</span>
                    <span>{{ $course->duration ?? 'Self-paced' }}</span>
                </div>
            </div>
        </div>

        <!-- Course Progress Summary -->
        <!-- Course Progress Summary -->
        <div class="p-6 border-t border-yellow-500/10">
            <div class="flex items-center justify-between mb-3">
                <h3 class="text-white font-semibold">Your Progress</h3>
                <span class="text-yellow-400 text-sm">{{ $completedLessons ?? 0 }}/{{ $course->lessons->count() }} lessons ({{ $progress ?? 0 }}%)</span>
            </div>
            <div class="w-full h-2 bg-white/10 rounded-full overflow-hidden">
                <div class="h-full bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full transition-all duration-500"
                    style="width: {{ $progress ?? 0 }}%"></div>
            </div>
        </div>
    </div>

    <!-- Course Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Main Content - Lessons List -->
        <div class="lg:col-span-2">
            <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl overflow-hidden">
                <!-- Section Header -->
                <div class="px-6 py-4 border-b border-yellow-500/10">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-1 h-6 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></div>
                            <h2 class="text-lg font-semibold text-white">Course Lessons</h2>
                        </div>
                        <span class="text-sm text-gray-400">{{ $course->lessons->count() }} lessons</span>
                    </div>
                </div>

                <!-- Lessons List -->
                <div class="divide-y divide-yellow-500/10">
                    @forelse($course->lessons as $index => $lesson)
                    <div class="lesson-item group hover:bg-white/5 transition-colors">
                        <!-- Lesson Header -->
                        <div class="px-6 py-4 flex items-center justify-between cursor-pointer"
                            onclick="toggleLesson({{ $lesson->id }})">
                            <div class="flex items-center gap-4 flex-1">
                                <!-- Lesson Number with Status -->
                                <div class="relative">
                                    <div class="w-8 h-8 rounded-full bg-yellow-500/20 flex items-center justify-center group-hover:bg-yellow-500/30 transition-colors">
                                        <span class="text-yellow-400 text-sm font-medium">{{ $index + 1 }}</span>
                                    </div>
                                    <!-- In the lesson list, add completion indicator -->
                                    @if($lesson->is_completed ?? false)
                                    <div class="absolute -top-1 -right-1 w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    @endif
                                </div>

                                <!-- Lesson Info -->
                                <div class="flex-1">
                                    <h3 class="text-white font-medium group-hover:text-yellow-400 transition-colors">
                                        {{ $lesson->title }}
                                    </h3>
                                    <div class="flex items-center gap-3 mt-1">
                                        <span class="flex items-center gap-1 text-xs text-gray-500">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            {{ $lesson->duration ?? '10:30' }}
                                        </span>
                                        <span class="flex items-center gap-1 text-xs text-gray-500">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                            </svg>
                                            {{ ucfirst($lesson->type ?? 'video') }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Expand/Collapse Icon -->
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-300 lesson-chevron-{{ $lesson->id }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>

                        <!-- Lesson Content (Hidden by default) -->
                        <div id="lesson-content-{{ $lesson->id }}" class="hidden px-6 pb-6">
                            <div class="pl-12 pr-4">
                                <!-- Video Player for Video Lessons -->
                                @if($lesson->type === 'video' && $lesson->video_url)
                                <div class="mb-4 rounded-xl overflow-hidden bg-black aspect-video">
                                    <video controls class="w-full h-full" poster="{{ $lesson->thumbnail ?? '' }}">
                                        <source src="{{ $lesson->video_url }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                @endif

                                <!-- PDF Viewer for PDF Lessons -->
                                @if($lesson->type === 'pdf' && $lesson->file_url)
                                <div class="mb-4">
                                    <iframe src="{{ $lesson->file_url }}#toolbar=0"
                                        class="w-full h-[400px] rounded-xl border border-yellow-500/20 bg-black/50"
                                        frameborder="0">
                                    </iframe>
                                </div>
                                @endif

                                <!-- Lesson Description -->
                                <div class="prose prose-invert max-w-none mb-4">
                                    <p class="text-gray-400 text-sm">{{ $lesson->description ?? 'No description available.' }}</p>
                                </div>

                                <!-- Lesson Actions -->
                                <div class="flex items-center gap-3">
                                    @if($lesson->type === 'video' && $lesson->video_url)
                                    <a href="{{ $lesson->video_url }}" download
                                        class="px-4 py-2 bg-yellow-500/10 hover:bg-yellow-500/20 border border-yellow-500/30 rounded-lg text-yellow-400 text-sm transition-colors flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                        </svg>
                                        Download Video
                                    </a>
                                    @endif

                                    @if($lesson->type === 'pdf' && $lesson->file_url)
                                    <a href="{{ $lesson->file_url }}" target="_blank"
                                        class="px-4 py-2 bg-yellow-500/10 hover:bg-yellow-500/20 border border-yellow-500/30 rounded-lg text-yellow-400 text-sm transition-colors flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                        </svg>
                                        Open PDF
                                    </a>
                                    @endif

                                    <button onclick="markLessonComplete({{ $lesson->id }})"
                                        class="px-4 py-2 bg-green-500/10 hover:bg-green-500/20 border border-green-500/30 rounded-lg text-green-400 text-sm transition-colors flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Mark as Complete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="p-12 text-center">
                        <svg class="w-16 h-16 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                        <h3 class="text-lg font-semibold text-white mb-2">No lessons yet</h3>
                        <p class="text-gray-500">This course doesn't have any lessons at the moment.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Sidebar - Course Info -->
        <div class="lg:col-span-1 space-y-6">
            <!-- Course Info Card -->
            <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-6">
                <h3 class="text-white font-semibold mb-4 flex items-center gap-2">
                    <span class="w-1 h-5 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></span>
                    Course Information
                </h3>

                <div class="space-y-4">
                    <div class="flex justify-between items-center py-2 border-b border-yellow-500/10">
                        <span class="text-gray-400">Total Lessons</span>
                        <span class="text-white font-medium">{{ $course->lessons->count() }}</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b border-yellow-500/10">
                        <span class="text-gray-400">Duration</span>
                        <span class="text-white font-medium">{{ $course->duration ?? 'Self-paced' }}</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b border-yellow-500/10">
                        <span class="text-gray-400">Students Enrolled</span>
                        <span class="text-white font-medium">{{ $course->enrolled_count ?? 0 }}</span>
                    </div>
                    <div class="flex justify-between items-center py-2">
                        <span class="text-gray-400">Last Updated</span>
                        <span class="text-white font-medium">{{ $course->updated_at->format('M d, Y') }}</span>
                    </div>
                </div>
            </div>

            <!-- Instructor Card -->
            <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-6">
                <h3 class="text-white font-semibold mb-4 flex items-center gap-2">
                    <span class="w-1 h-5 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></span>
                    Your Instructor
                </h3>

                <div class="flex items-center gap-4">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($course->instructor->user->name ?? 'Instructor') }}&background=FFB347&color=fff&size=64"
                        class="w-16 h-16 rounded-full border-2 border-yellow-500/50">
                    <div>
                        <h4 class="text-white font-semibold">{{ $course->instructor->user->name ?? 'Instructor' }}</h4>
                        <p class="text-sm text-gray-400">{{ $course->instructor->qualification ?? 'Expert Instructor' }}</p>
                        <p class="text-xs text-gray-500 mt-1">{{ $course->instructor->bio ?? '' }}</p>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-6">
                <h3 class="text-white font-semibold mb-4 flex items-center gap-2">
                    <span class="w-1 h-5 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></span>
                    Quick Actions
                </h3>

                <div class="space-y-3">
                    <!-- Update the "Continue Learning" button -->
                    <a href="{{ $course->lessons->isNotEmpty() ? route('student.lessons.show', ['course' => $course->id, 'lesson' => $course->lessons->first()->id]) : '#' }}"
                        class="flex items-center gap-3 p-3 bg-yellow-500/10 hover:bg-yellow-500/20 border border-yellow-500/30 rounded-xl text-yellow-400 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="flex-1">Continue Learning</span>
                        <span>→</span>
                    </a>

                    <!-- Update the "Start Learning" button if you have one -->
                    <a href="{{ $course->lessons->isNotEmpty() ? route('student.lessons.show', ['course' => $course->id, 'lesson' => $course->lessons->first()->id]) : '#' }}"
                        class="flex items-center gap-3 p-3 bg-white/5 hover:bg-white/10 border border-white/10 rounded-xl text-gray-300 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <span class="flex-1">Start Learning</span>
                        <span>→</span>
                    </a>

                    <a href="{{ route('student.courses.show') }}"
                        class="flex items-center gap-3 p-3 bg-white/5 hover:bg-white/10 border border-white/10 rounded-xl text-gray-300 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M3 12l2-2 7-7 7 7 2 2M5 10v10h14V10"></path>
                        </svg>
                        <span class="flex-1">Back to Dashboard</span>
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleLesson(lessonId) {
        const content = document.getElementById('lesson-content-' + lessonId);
        const chevron = document.querySelector('.lesson-chevron-' + lessonId);

        if (content.classList.contains('hidden')) {
            // Close all other open lessons
            document.querySelectorAll('[id^="lesson-content-"]').forEach(el => {
                if (el.id !== 'lesson-content-' + lessonId) {
                    el.classList.add('hidden');
                    const otherChevron = document.querySelector('.lesson-chevron-' + el.id.replace('lesson-content-', ''));
                    if (otherChevron) {
                        otherChevron.classList.remove('rotate-180');
                    }
                }
            });

            content.classList.remove('hidden');
            chevron.classList.add('rotate-180');

            // Scroll to the opened lesson
            setTimeout(() => {
                content.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }, 100);
        } else {
            content.classList.add('hidden');
            chevron.classList.remove('rotate-180');
        }
    }

    function openFirstLesson() {
        const firstLesson = document.querySelector('[id^="lesson-content-"]');
        if (firstLesson) {
            const lessonId = firstLesson.id.replace('lesson-content-', '');
            toggleLesson(lessonId);
        }
    }

    function markLessonComplete(lessonId) {
        fetch(`/students/lessons/${lessonId}/complete`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    alert('Lesson marked as complete!');

                    // Update UI
                    location.reload(); // Simple refresh, you can update dynamically for better UX
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Failed to mark lesson as complete. Please try again.');
            });
    }

    // Auto-open first lesson if no lesson is open
    document.addEventListener('DOMContentLoaded', function() {
        const openLessons = document.querySelectorAll('[id^="lesson-content-"]:not(.hidden)');
        if (openLessons.length === 0) {
            // Uncomment to auto-open first lesson
            // openFirstLesson();
        }
    });
</script>

<style>
    .rotate-180 {
        transform: rotate(180deg);
    }

    .lesson-item {
        transition: all 0.3s ease;
    }

    video {
        aspect-ratio: 16/9;
        background: #000;
    }

    video::-webkit-media-controls-panel {
        background: linear-gradient(to right, rgba(234, 179, 8, 0.2), rgba(249, 115, 22, 0.2));
    }
</style>
@endsection