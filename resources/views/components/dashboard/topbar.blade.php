<header class="h-20 bg-(--secondary-3) border-b border-(--border) flex items-center justify-between px-10">

    <h1 class="text-xl font-semibold tracking-wide text-(--primary)">
        Admin Dashboard
    </h1>

    <div class="flex items-center gap-4">
        <div class="text-sm text-(--muted)">
            Welcome,
        </div>
        <div class="px-4 py-2 bg-(--secondary-2) rounded-lg border border-(--border)">
            {{ auth()->user()->name ?? 'Admin' }}
        </div>
    </div>

</header>
