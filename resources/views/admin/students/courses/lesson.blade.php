{{-- resources/views/students/courses/lesson.blade.php --}}
@extends('layouts.dashboard')

@section('title', $lesson->title . ' - ' . $course->title)

@section('content')
<div class="space-y-6">
    <!-- Navigation -->
    <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl p-4">
        <div class="flex items-center justify-between">
            <a href="{{ route('student.courses.show', $course->id) }}"
                class="flex items-center gap-2 text-gray-400 hover:text-yellow-400 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span>Back to Course</span>
            </a>
            <span class="text-yellow-400">{{ $course->title }}</span>
        </div>
    </div>

    <!-- Lesson Content -->
    <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl overflow-hidden">
        <div class="p-6">
            <div class="flex items-center justify-between mb-4">
                <h1 class="text-2xl font-bold text-white">{{ $lesson->title }}</h1>

                <!-- Completion Status Badge -->
                @if($lesson->is_completed ?? false)
                <span class="px-3 py-1 bg-green-500/20 border border-green-500/30 rounded-full text-green-400 text-sm flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Completed
                </span>
                @endif
            </div>

            @if($lesson->description)
            <p class="text-gray-400 mb-6">{{ $lesson->description }}</p>
            @endif

            <!-- Video Player -->
            @if($lesson->type === 'video' && $lesson->file)
            @php
            $videoUrl = asset('storage/' . $lesson->file);
            $videoExtension = pathinfo($lesson->file, PATHINFO_EXTENSION);
            @endphp
            <div class="aspect-video bg-black rounded-xl overflow-hidden mb-6">
                <video controls class="w-full h-full" id="lesson-video-{{ $lesson->id }}">
                    <source src="{{ $videoUrl }}" type="video/{{ $videoExtension }}">
                    <source src="{{ $videoUrl }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <!-- Video Download Link -->
            <div class="flex items-center gap-3 mb-6">
                <a href="{{ $videoUrl }}" download
                    class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-500/10 hover:bg-yellow-500/20 border border-yellow-500/30 rounded-lg text-yellow-400 text-sm transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                    </svg>
                    Download Video
                </a>
            </div>
            @endif

            <!-- PDF Viewer -->
            @if($lesson->type === 'pdf' && $lesson->file)
            @php
            $fileUrl = asset('storage/' . $lesson->file);
            @endphp
            <div class="mb-6">
                <iframe src="{{ $fileUrl }}#toolbar=0"
                    class="w-full h-[600px] rounded-xl border border-yellow-500/20 bg-black/50"
                    frameborder="0">
                </iframe>
            </div>

            <!-- PDF Download Link -->
            <div class="flex items-center gap-3 mb-6">
                <a href="{{ $fileUrl }}" target="_blank"
                    class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-500/10 hover:bg-yellow-500/20 border border-yellow-500/30 rounded-lg text-yellow-400 text-sm transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                    </svg>
                    Open PDF
                </a>
            </div>
            @endif

            <!-- If no file is uploaded -->
            @if(!$lesson->file)
            <div class="bg-yellow-500/10 border border-yellow-500/30 rounded-xl p-8 text-center mb-6">
                <svg class="w-16 h-16 text-yellow-500/50 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                </svg>
                <h3 class="text-white font-semibold mb-2">No Content Available</h3>
                <p class="text-gray-400">This lesson doesn't have any content uploaded yet.</p>
            </div>
            @endif

            <!-- Mark as Complete Button -->
            <div class="flex items-center justify-end mb-6">
                @if($lesson->is_completed ?? false)
                <div class="px-6 py-2 bg-green-500/20 border border-green-500/30 rounded-lg text-green-400 font-medium flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Completed
                </div>
                @else
                <button onclick="markLessonComplete({{ $lesson->id }})"
                    class="px-6 py-2 bg-green-500/20 hover:bg-green-500/30 border border-green-500/30 rounded-lg text-green-400 font-medium transition-colors flex items-center gap-2"
                    id="complete-btn-{{ $lesson->id }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Mark as Complete
                </button>
                @endif
            </div>

            <!-- Lesson Navigation -->
            @php
            $lessons = $course->lessons;
            $currentIndex = $lessons->search(function($item) use ($lesson) {
            return $item->id == $lesson->id;
            });
            $prevLesson = $currentIndex > 0 ? $lessons[$currentIndex - 1] : null;
            $nextLesson = $currentIndex < $lessons->count() - 1 ? $lessons[$currentIndex + 1] : null;
                @endphp

                <div class="flex justify-between mt-8 pt-6 border-t border-yellow-500/10">
                    @if($prevLesson)
                    <a href="{{ route('student.lessons.show', ['course' => $course->id, 'lesson' => $prevLesson->id]) }}"
                        class="px-6 py-2 bg-white/5 hover:bg-white/10 border border-white/10 rounded-xl text-gray-300 transition-colors flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Previous Lesson
                    </a>
                    @else
                    <div></div>
                    @endif

                    @if($nextLesson)
                    <a href="{{ route('student.lessons.show', ['course' => $course->id, 'lesson' => $nextLesson->id]) }}"
                        class="px-6 py-2 bg-gradient-to-r from-yellow-500 to-orange-500 text-black font-semibold rounded-xl hover:shadow-lg transition-all flex items-center gap-2">
                        Next Lesson
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    @else
                    <div class="px-6 py-2 bg-green-500/20 border border-green-500/30 rounded-xl text-green-400">
                        🎉 Course Completed!
                    </div>
                    @endif
                </div>
        </div>
    </div>
</div>

<script>
    function markLessonComplete(lessonId) {
        const button = document.getElementById('complete-btn-' + lessonId);
        const originalText = button.innerHTML;

        // Disable button and show loading
        button.disabled = true;
        button.innerHTML = '<svg class="w-4 h-4 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg> Processing...';

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
                    // Replace button with completed badge
                    button.outerHTML = '<div class="px-6 py-2 bg-green-500/20 border border-green-500/30 rounded-lg text-green-400 font-medium flex items-center gap-2"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Completed</div>';

                    // Show success message
                    showNotification('Lesson marked as complete!', 'success');
                } else {
                    // Restore button
                    button.disabled = false;
                    button.innerHTML = originalText;
                    showNotification(data.message || 'Failed to mark lesson as complete', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                button.disabled = false;
                button.innerHTML = originalText;
                showNotification('Failed to mark lesson as complete. Please try again.', 'error');
            });
    }

    function showNotification(message, type) {
        // Create notification element
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 px-6 py-3 rounded-lg shadow-lg z-50 animate-slideIn ${
            type === 'success' ? 'bg-green-500/20 border border-green-500/30 text-green-400' : 'bg-red-500/20 border border-red-500/30 text-red-400'
        }`;
        notification.innerHTML = message;

        document.body.appendChild(notification);

        // Remove after 3 seconds
        setTimeout(() => {
            notification.remove();
        }, 3000);
    }
</script>

<style>
    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .animate-slideIn {
        animation: slideIn 0.3s ease-out;
    }

    .animate-spin {
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    video {
        aspect-ratio: 16/9;
        background: #000;
        width: 100%;
        height: 100%;
    }

    video::-webkit-media-controls-panel {
        background: linear-gradient(to right, rgba(234, 179, 8, 0.2), rgba(249, 115, 22, 0.2));
    }

    iframe {
        background: #1a1a1a;
    }
</style>
@endsection