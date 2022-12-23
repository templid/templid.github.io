@props([
    'image',
    'title',
])

<div>
    <div class="-mx-10">
        <div class="bg-[url('{{ $image }}')] bg-cover bg-center text-white p-10">
            <h1 class="text-3xl font-bold">{{ $title }}</h1>
        </div>
    </div>

    <div class="mt-10">
        {{ $slot }}
    </div>
</div>