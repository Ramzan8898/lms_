@extends('layouts.dashboard')

@section('content')
<div class="space-y-8">

    <!-- Header Section -->
    <div class="bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-8">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-white mb-2 flex items-center gap-3">
                    <span class="w-2 h-8 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></span>
                    Support Queries
                </h1>
                <p class="text-gray-400">Manage and respond to user inquiries</p>
            </div>
            <div class="flex items-center gap-3">
                <span class="px-4 py-2 bg-yellow-500/10 border border-yellow-500/30 rounded-xl text-yellow-400 text-sm font-semibold">
                    Total: {{ $queries->count() }}
                </span>
                <span class="px-4 py-2 bg-green-500/10 border border-green-500/30 rounded-xl text-green-400 text-sm font-semibold">
                    {{ $queries->where('status', 'read')->count() ?? 0 }} Read
                </span>
            </div>
        </div>
    </div>

    <!-- Quick Stats Footer -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-yellow-500/20 flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-gray-400 text-sm">Total Queries</p>
                    <p class="text-2xl font-bold text-white">{{ $queries->count() }}</p>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-green-500/20 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-gray-400 text-sm">Read</p>
                    <p class="text-2xl font-bold text-white">{{ $queries->where('status', 'read')->count() ?? 0 }}</p>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl p-6">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-blue-500/20 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-gray-400 text-sm">Unread</p>
                    <p class="text-2xl font-bold text-white">{{ $queries->where('status', '!=', 'read')->count() ?? 0 }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Premium Queries List -->
    <div class="bg-gradient-to-br from-gray-900 to-black border border-yellow-600/20 rounded-2xl overflow-hidden">
        <!-- Header with filters -->
        <div class="px-8 py-6 border-b border-yellow-600/20">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-2 h-8 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full"></div>
                    <h3 class="text-white font-semibold text-xl">Recent Queries</h3>
                </div>
                <div class="flex items-center gap-4">
                    <!-- Search Bar -->
                    <div class="relative">
                        <input type="text"
                            id="searchInput"
                            placeholder="Search queries..."
                            class="w-64 px-5 py-3 bg-black/50 border border-yellow-600/20 rounded-xl text-white placeholder-gray-500 focus:border-yellow-500/50 focus:outline-none transition-all">
                        <svg class="w-5 h-5 absolute right-4 top-3.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <!-- Filter Button -->
                    <button id="filterBtn" class="px-5 py-3 bg-yellow-500/10 border border-yellow-500/30 rounded-xl text-yellow-400 hover:bg-yellow-500/20 transition-all flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                        </svg>
                        <span>Filter</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Queries List -->
        <div class="divide-y divide-yellow-600/10" id="queriesList">
            @forelse($queries as $query)
            <div class="group relative p-6 hover:bg-white/5 transition-all duration-300 cursor-pointer query-item"
                data-name="{{ strtolower($query->name) }}"
                data-email="{{ strtolower($query->email) }}"
                data-subject="{{ strtolower($query->subject) }}">

                <!-- Status Indicator based on read/unread -->
                <div class="absolute left-0 top-1/2 -translate-y-1/2 w-1 h-12 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-r-full opacity-0 group-hover:opacity-100 transition-opacity"></div>

                <div class="flex items-start gap-5">
                    <!-- Avatar with Initials and Status -->
                    <div class="relative">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-yellow-500 to-orange-500 p-0.5">
                            <div class="w-full h-full rounded-2xl bg-gray-900 flex items-center justify-center">
                                <span class="text-white font-bold text-lg">
                                    {{ strtoupper(substr($query->name, 0, 2)) }}
                                </span>
                            </div>
                        </div>
                        <!-- Status Dot (Green for new/unread, Gray for read) -->
                        <div class="absolute -bottom-1 -right-1 w-4 h-4 {{ $query->status === 'read' ? 'bg-gray-500' : 'bg-green-500' }} border-2 border-gray-900 rounded-full"></div>
                    </div>

                    <!-- Content -->
                    <div class="flex-1">
                        <div class="flex items-start justify-between mb-2">
                            <div>
                                <h4 class="text-white font-semibold text-lg group-hover:text-yellow-400 transition-colors">
                                    {{ $query->name }}
                                    @if($query->status !== 'read')
                                    <span class="ml-2 px-2 py-0.5 bg-yellow-500/20 text-yellow-400 text-xs rounded-full">New</span>
                                    @endif
                                </h4>
                                <div class="flex items-center gap-3 mt-1">
                                    <span class="flex items-center gap-1 text-gray-400 text-sm">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        {{ $query->email }}
                                    </span>
                                    <span class="w-1 h-1 bg-gray-600 rounded-full"></span>
                                    <span class="flex items-center gap-1 text-gray-400 text-sm">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-5-5A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                        </svg>
                                        {{ $query->subject ?? 'No Subject' }}
                                    </span>
                                </div>
                            </div>

                            <!-- Time with Icon -->
                            <div class="flex items-center gap-2 text-gray-500 text-sm">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>{{ $query->created_at->diffForHumans() }}</span>
                            </div>
                        </div>

                        <!-- Message Preview -->
                        <div class="relative mt-3">
                            <p class="text-gray-300 text-sm leading-relaxed line-clamp-2">
                                {{ $query->message }}
                            </p>
                            @if(strlen($query->message) > 100)
                            <button onclick="showFullMessage('{{ addslashes($query->message) }}')"
                                class="text-yellow-400 text-sm hover:text-yellow-300 transition-colors mt-1">
                                Read more →
                            </button>
                            @endif
                        </div>


                    </div>
                </div>
            </div>
            @empty
            <!-- Empty State with Premium Design -->
            <div class="text-center py-20 px-6">
                <div class="relative inline-block">
                    <div class="absolute -inset-3 bg-gradient-to-r from-yellow-500/20 to-orange-500/20 rounded-full blur-xl"></div>
                    <svg class="w-24 h-24 text-gray-600 relative" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mt-6 mb-2">No queries yet</h3>
                <p class="text-gray-500 mb-8 max-w-md mx-auto">
                    When users submit support queries, they'll appear here. Stay tuned for incoming messages!
                </p>
                <button onclick="window.location.reload()"
                    class="px-6 py-3 bg-gradient-to-r from-yellow-500 to-orange-500 text-black font-semibold rounded-xl hover:shadow-lg hover:shadow-yellow-500/25 transition-all">
                    Refresh
                </button>
            </div>
            @endforelse
        </div>

        <!-- View All Link -->
        @if($queries->count() >= 5)
        <div class="px-8 py-4 border-t border-yellow-600/20 text-center">
            <a href="{{ route('admin.queries.all') }}" class="text-yellow-400 hover:text-yellow-300 text-sm font-semibold transition-colors">
                View All Queries →
            </a>
        </div>
        @endif
    </div>


</div>





<!-- Add custom styles for line clamp if not already in your CSS -->
<style>
    .line-clamp-2 {
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
    }
</style>

<!-- JavaScript for functionality -->
<script>
    // Search functionality
    document.getElementById('searchInput').addEventListener('keyup', function() {
        let searchValue = this.value.toLowerCase();
        let queryItems = document.querySelectorAll('.query-item');

        queryItems.forEach(item => {
            let name = item.dataset.name;
            let email = item.dataset.email;
            let subject = item.dataset.subject;

            if (name.includes(searchValue) || email.includes(searchValue) || subject.includes(searchValue)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });

    // Filter button functionality
    document.getElementById('filterBtn').addEventListener('click', function() {
        let queryItems = document.querySelectorAll('.query-item');
        let unreadItems = [];
        let readItems = [];

        queryItems.forEach(item => {
            if (item.querySelector('.bg-green-500')) {
                unreadItems.push(item);
            } else {
                readItems.push(item);
            }
        });

        // Simple toggle - show unread first, then all
        if (this.classList.contains('filtering')) {
            // Show all
            queryItems.forEach(item => item.style.display = 'block');
            this.classList.remove('filtering');
            this.innerHTML = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg><span>Filter</span>';
        } else {
            // Show only unread
            queryItems.forEach(item => item.style.display = 'none');
            unreadItems.forEach(item => item.style.display = 'block');
            this.classList.add('filtering');
            this.innerHTML = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linecap="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg><span>Clear Filter</span>';
        }
    });

    // Modal functions
    function showFullMessage(message) {
        document.getElementById('fullMessage').textContent = message;
        document.getElementById('messageModal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('messageModal').style.display = 'none';
    }

    function replyToQuery(email, name) {
        document.getElementById('replyEmail').value = email;
        document.getElementById('replyToEmail').value = email;
        document.getElementById('replyToName').textContent = name;
        document.getElementById('replyModal').style.display = 'flex';
    }

    function closeReplyModal() {
        document.getElementById('replyModal').style.display = 'none';
    }

    // Mark as read function
    function markAsRead(queryId) {
        fetch(`/admin/queries/${queryId}/mark-read`, {
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
                    location.reload();
                }
            })
            .catch(error => console.error('Error:', error));
    }

    // Delete function
    function deleteQuery(queryId) {
        if (confirm('Are you sure you want to delete this query?')) {
            fetch(`/admin/queries/${queryId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
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
    }

    // Close modals when clicking outside
    window.onclick = function(event) {
        let messageModal = document.getElementById('messageModal');
        let replyModal = document.getElementById('replyModal');
        if (event.target === messageModal) {
            messageModal.style.display = 'none';
        }
        if (event.target === replyModal) {
            replyModal.style.display = 'none';
        }
    }
</script>

<!-- Close modals with Escape key -->
<script>
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeModal();
            closeReplyModal();
        }
    });
</script>
@endsection