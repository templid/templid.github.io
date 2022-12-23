@props([
    'image' => null,
    'title' => null,
    'label' => null,
])

<div class="border border-zinc-200 rounded overflow-hidden">
    <div class="h-32 overflow-hidden flex flex-col justify-center">
        @if ($image)
            <img class="w-full h-auto" src="{{ $image }}" alt="{{ $title }}">
        @endif
    </div>
    <div class="p-6">
        <div class="flex mb-2 gap-2">
            <h2 class="text-xl">{{ $title }}</h2>
            @if ($label)
            <div>
                <div class="text-xs text-zinc-700 bg-pink-200 rounded-full px-3 py-1 mt-1">
                    {{ $label }}
                </div>
            </div>
            @endif
        </div>
        <div class="text-zinc-600 text-sm">
            {{ $slot }}
        </div>
    </div>
</div>