@props(['items' => []])

<nav class="mb-6 text-sm">
    <ol class="flex items-center space-x-2 text-gray-600">

        {{-- Home --}}
        <li>
            <a href="{{ route('admin.dashboard') }}"
                class="hover:underline text-(--primary) font-medium">
                Dashboard
            </a>
        </li>

        @foreach ($items as $item)
        <li>/</li>
        <li>
            @if(isset($item['url']))
            <a href="{{ $item['url'] }}"
                class="hover:underline text-(--primary)">
                {{ $item['label'] }}
            </a>
            @else
            <span class="text-gray-500 font-semibold">
                {{ $item['label'] }}
            </span>
            @endif
        </li>
        @endforeach

    </ol>
</nav>