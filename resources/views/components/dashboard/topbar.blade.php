<header class="bg-white shadow px-6 py-4 flex justify-between items-center">

    <h1 class="text-xl font-semibold">
        Admin Dashboard
    </h1>

    <div class="flex items-center gap-4">
        <span class="text-gray-600">
            {{ auth()->user()->name ?? 'Admin' }}
        </span>
    </div>

</header>