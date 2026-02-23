@extends('layouts.dashboard')
@section('title', 'My Wishlist')

@section('content')
<section class="relative py-25  overflow-hidden min-h-screen">

    <div class="absolute inset-0">
        <div class="absolute top-40 right-0 w-150 h-150 bg-linear-to-r from-yellow-500/5 via-orange-500/5 to-transparent rounded-full blur-[120px] animate-pulse-slow"></div>
        <div class="absolute bottom-40 left-0 w-150 h-150 bg-linear-to-l from-yellow-500/5 via-orange-500/5 to-transparent rounded-full blur-[120px] animate-pulse-slow animation-delay-2000"></div>
    </div>

    <div class="relative container mx-auto px-4">

        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <span class="bg-linear-to-r from-yellow-400 via-orange-500 to-yellow-600 bg-clip-text text-transparent">
                    My Wishlist
                </span>
            </h1>
            <p class="text-gray-400 text-lg">Courses you've saved for later</p>
        </div>

        <!-- Wishlist Grid -->
        @if($wishlistCourses->isNotEmpty())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($wishlistCourses as $course)
            <a href="{{ route('website.pages.show', $course->slug) }}">
                <div class="group relative bg-linear-to-b from-white/10 to-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden hover:border-yellow-500/30 transition-all duration-500">

                    <!-- Image -->
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ $course->banner ? asset('storage/'.$course->banner) : 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=800&q=80' }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            alt="{{ $course->title }}">

                        <!-- Remove from wishlist button -->
                        <button onclick="removeFromWishlist({{ $course->id }})"
                            class="absolute top-4 right-4 w-10 h-10 bg-red-500/20 backdrop-blur-xl border border-red-500/30 rounded-full flex items-center justify-center hover:bg-red-500/30 transition-colors">
                            <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                        <script>
                            function removeFromWishlist(courseId) {
                                if (!confirm('Remove this course from your wishlist?')) return;

                                fetch(`/wishlist/toggle/${courseId}`, {
                                        method: 'POST',
                                        headers: {
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                            'Content-Type': 'application/json',
                                        }
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.success) {
                                            location.reload();
                                        }
                                    })
                                    .catch(error => console.error('Error:', error));
                            }
                        </script>
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2">
                            <a href="#"
                                class="hover:text-yellow-400 transition-colors">
                                {{ $course->title }}
                            </a>
                        </h3>

                        <div class="flex items-center gap-2 mb-4">
                            <img src="{{ $course->instructor->avatar ? asset('storage/'.$course->instructor->avatar) : 'https://ui-avatars.com/api/?name='.urlencode($course->instructor->user->name) }}"
                                class="w-6 h-6 rounded-full border border-yellow-500/50">
                            <span class="text-sm text-gray-400">{{ $course->instructor->user->name ?? 'Instructor' }}</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                                ${{ number_format($course->price, 2) }}
                            </span>

                            <a href="{{ route('payment.checkout', $course->id) }}"
                                class="px-5 py-2 bg-linear-to-r from-yellow-500 to-orange-500 text-black font-semibold rounded-xl hover:shadow-lg transition-all">
                                Enroll Now
                            </a>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>


        @else
        <!-- Empty State -->
        <div class="text-center py-16">
            <svg class="w-24 h-24 text-gray-600 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linecap="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
            <h3 class="text-2xl font-bold text-white mb-3">Your wishlist is empty</h3>
            <p class="text-gray-400 mb-8">Save courses you're interested in and they'll appear here.</p>
            <a href="{{ route('web.courses') }}"
                class="inline-flex items-center gap-3 px-8 py-4 bg-linear-to-r from-yellow-500 to-orange-500 text-black font-bold rounded-xl hover:shadow-lg transition-all">
                Browse Courses
                <span class="text-xl">→</span>
            </a>
        </div>
        @endif
    </div>
</section>

@push('scripts')
<script>

</script>
@endpush
@endsection