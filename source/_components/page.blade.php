@props([
    'image',
    'title',
])

<div>
    <x-cover>
        <div class="bg-cover bg-center text-white p-10" style="background-image: url('{{ $image }}')">
            <h1 class="text-3xl font-bold">{!! $title !!}</h1>
        </div>
    </x-cover>

    <div class="mt-10">
        {{ $slot }}
    </div>
</div>
