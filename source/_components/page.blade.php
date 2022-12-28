@props([
    'image',
    'title',
])

<div>
    <x-cover>
        <div class="bg-cover bg-center" style="background-image: url('{{ $image }}')">
            <div class="bg-gradient-to-r from-violet-500/30 to-lime-200/20">
                <div class="bg-slate-900/50 text-white py-10 px-6 md:px-10">
                    <h1 class="text-3xl font-bold">{!! $title !!}</h1>
                </div>
            </div>
        </div>
    </x-cover>

    <div class="mt-10">
        {{ $slot }}
    </div>
</div>
