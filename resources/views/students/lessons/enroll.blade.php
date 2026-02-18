@extends('layouts.dashboard')

@section('title', $course->title)
@section('page-header', $course->title)
@section('page-description', $course->description ?? 'Course details and lessons')

@section('content')
<div class="space-y-8">

    <!-- Success/Error Messages -->
    @if(session('success'))
    <div class="bg-gradient-to-r from-green-500/20 to-emerald-500/20 border border-green-500/30 rounded-2xl p-5">
        <div class="flex items-center gap-4">
            <div class="w-10 h-10 rounded-full bg-green-500/20 flex items-center justify-center">
                <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <div>
                <h3 class="text-white font-semibold">Success!</h3>
                <p class="text-green-400 text-sm">{{ session('success') }}</p>
            </div>
        </div>
    </div>
    @endif

    <!-- Breadcrumb -->
    <x-dashboard.breadcrumbs :items="[
        ['label' => 'Courses', 'url' => route('student.courses.index'), 'icon' => '<svg class=\" w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
        <path stroke-linecap=\"round\" stroke-linecap=\"round\" stroke-width=\"2\" d=\"M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253\" /></svg>'],
        ['label' => $course->title]
        ]" />

        <!-- Course Header -->
        <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl overflow-hidden">
            <!-- Course Cover Image -->
            <div class="relative h-64 md:h-80 overflow-hidden">
                @if($course->thumbnail)
                <img src="{{ asset('storage/'.$course->thumbnail) }}"
                    alt="{{ $course->title }}"
                    class="w-full h-full object-cover">
                @else
                <div class="w-full h-full bg-gradient-to-br from-yellow-500/30 to-orange-500/30 flex items-center justify-center">
                    <svg class="w-24 h-24 text-yellow-500/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                @endif

                <!-- Overlay Gradient -->
                <div class="absolute inset-0 bg-gradient-to-t from-[#1e1e1e] via-transparent to-transparent"></div>

                <!-- Course Category -->
                <div class="absolute top-6 left-6">
                    <span class="px-4 py-2 bg-black/60 backdrop-blur-sm border border-yellow-500/30 rounded-full text-yellow-400 text-sm font-medium">
                        {{ $course->category->name ?? 'Development' }}
                    </span>
                </div>


            </div>

            <!-- Course Info -->
            <div class="p-8">
                <div class="flex flex-wrap items-start justify-between gap-6">
                    <!-- Left Column -->
                    <div class="flex-1">
                        <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">{{ $course->title }}</h1>

                        <!-- Instructor Info -->
                        <div class="flex items-center gap-4 mb-6">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($course->instructor->user->name ?? 'Instructor') }}&background=FFB347&color=fff&size=48"
                                    class="w-12 h-12 rounded-full border-2 border-yellow-500/50">
                                <div>
                                    <p class="text-sm text-gray-400">Instructor</p>
                                    <p class="text-white font-semibold">{{ $course->instructor->user->name ?? 'John Doe' }}</p>
                                </div>
                            </div>

                            <div class="w-px h-10 bg-yellow-500/20"></div>

                            <!-- Rating -->
                            <div class="flex items-center gap-2">
                                <div class="flex gap-1">
                                    @for($i = 1; $i <= 5; $i++)
                                        <svg class="w-5 h-5 {{ $i <= ($course->rating ?? 4) ? 'text-yellow-400' : 'text-gray-600' }}" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        @endfor
                                </div>
                                <span class="text-sm text-gray-400">({{ $course->reviews_count ?? 124 }} reviews)</span>
                            </div>
                        </div>

                        <!-- Course Stats -->
                        <div class="flex flex-wrap items-center gap-6 mb-6">
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                <span class="text-gray-300">{{ $course->students_count ?? 234 }} Students</span>
                            </div>

                            <div class="w-px h-5 bg-yellow-500/20"></div>

                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-gray-300">{{ $course->duration ?? '12 weeks' }}</span>
                            </div>

                            <div class="w-px h-5 bg-yellow-500/20"></div>

                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                <span class="text-gray-300">{{ $course->lessons_count ?? 24 }} Lessons</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Price & Enrollment -->
                    <div class="bg-black/30 border border-yellow-500/20 rounded-2xl p-6 min-w-[250px]">
                        <div class="text-center mb-4">
                            <span class="text-4xl font-bold bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                                ${{ $course->price ?? 49 }}
                            </span>
                            @if($course->original_price ?? false)
                            <span class="text-sm text-gray-500 line-through block">${{ $course->original_price }}</span>
                            @endif
                        </div>

                        <p class="text-xs text-gray-500 text-center mt-4">30-day money-back guarantee</p>
                    </div>
                </div>

                <!-- Course Description -->
                <div class="mt-8">
                    <h2 class="text-lg font-semibold text-white mb-3 flex items-center gap-2">
                        <span class="w-1 h-5 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></span>
                        About this course
                    </h2>
                    <p class="text-gray-400 leading-relaxed">
                        {{ $course->description ?? 'Learn the fundamentals and advanced concepts with hands-on projects and expert guidance. This comprehensive course is designed to take you from beginner to professional.' }}
                    </p>
                </div>

                <!-- What you'll learn -->
                @if($course->learning_objectives ?? false)
                <div class="mt-8">
                    <h2 class="text-lg font-semibold text-white mb-3 flex items-center gap-2">
                        <span class="w-1 h-5 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></span>
                        What you'll learn
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        @foreach($course->learning_objectives as $objective)
                        <div class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-300 text-sm">{{ $objective }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>

        <!-- Lessons Section -->
        <div class="bg-gradient-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl overflow-hidden">
            <!-- Section Header -->
            <div class="px-8 py-6 border-b border-yellow-500/10">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-1 h-6 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></div>
                        <h2 class="text-lg font-semibold text-white">Course Lessons</h2>
                    </div>
                    <span class="text-sm text-gray-500">Total {{ $course->lessons->count() }} lessons</span>
                </div>
            </div>

            <!-- Lessons List -->
            <div class="p-6">
                @if($course->lessons && $course->lessons->count() > 0)
                <div class="space-y-3">
                    @foreach($course->lessons as $index => $lesson)
                    <div class="group/lesson bg-black/30 border border-yellow-500/10 rounded-xl overflow-hidden hover:border-yellow-500/30 transition-colors">
                        <!-- Lesson Header -->
                        <div class="flex items-center justify-between p-4 cursor-pointer" onclick="toggleLesson({{ $lesson->id }})">
                            <div class="flex items-center gap-4">
                                <span class="flex items-center justify-center w-7 h-7 rounded-full bg-yellow-500/20 text-yellow-400 text-sm font-medium">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </span>
                                <div>
                                    <h3 class="text-white font-medium group-hover/lesson:text-yellow-400 transition-colors">
                                        {{ $lesson->title }}
                                    </h3>
                                    <div class="flex items-center gap-3 mt-1">
                                        <span class="flex items-center gap-1 text-xs text-gray-500">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            {{ $lesson->duration ?? '10:30' }}
                                        </span>
                                        @if($lesson->is_preview ?? false)
                                        <span class="px-2 py-0.5 bg-yellow-500/10 text-yellow-400 text-xs rounded-full">Preview</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-3">
                                @if($lesson->is_completed ?? false)
                                <span class="text-green-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </span>
                                @endif
                                <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-300" id="chevron-{{ $lesson->id }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Lesson Content (Hidden by default) -->
                        <div id="lesson-{{ $lesson->id }}" class="hidden p-4 pt-0 border-t border-yellow-500/10 bg-black/20">
                            <div class="pl-11">
                                <!-- Video/Audio Player (if enrolled or preview) -->
                              

                                <!-- Lesson Description -->
                                <div class="prose prose-invert max-w-none">
                                    <p class="text-gray-400 text-sm mb-3">{{ $lesson->description }}</p>
                                </div>

                                <!-- Lesson Materials -->
                                @if($lesson->attachments && $lesson->attachments->count() > 0)
                                <div class="mt-4">
                                    <h4 class="text-sm font-semibold text-white mb-2">Materials</h4>
                                    <div class="flex flex-wrap gap-2">
                                        @foreach($lesson->attachments as $attachment)
                                        <a href="{{ asset('storage/'.$attachment->file) }}"
                                            target="_blank"
                                            class="px-3 py-1.5 bg-white/5 border border-yellow-500/20 rounded-lg text-xs text-gray-300 hover:text-yellow-400 transition-colors flex items-center gap-1">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                            </svg>
                                            {{ $attachment->name }}
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                                @endif

                                <!-- Mark as Complete (if enrolled) -->
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <!-- No Lessons -->
                <div class="text-center py-12">
                    <svg class="w-16 h-16 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                    <h3 class="text-lg font-semibold text-white mb-2">No lessons yet</h3>
                    <p class="text-gray-500">This course doesn't have any lessons at the moment.</p>
                </div>
                @endif
            </div>
        </div>
</div>

<script>
    function toggleLesson(lessonId) {
        const content = document.getElementById('lesson-' + lessonId);
        const chevron = document.getElementById('chevron-' + lessonId);

        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            chevron.classList.add('rotate-180');
        } else {
            content.classList.add('hidden');
            chevron.classList.remove('rotate-180');
        }
    }
</script>
@endsection