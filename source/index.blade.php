@extends('_layouts.main')

@section('body')
<x-homepage>
    <div class="-mx-6">
        <div class="relative overflow-hidden">
            <div class="absolute w-full h-full bg-[url('/assets/images/main-bg.jpeg')] bg-cover bg-center opacity-80 -z-20"></div>
            <div class="absolute w-[2000px] h-[2000px] -top-80 -left-80 -z-10 bg-[url('/assets/images/square-w.png')] bg-[length:16px_16px] rotate-45 opacity-60"></div>
            <div class="bg-gradient-to-r from-indigo-500/50 to-purple-400/60">
                <div class="px-6 py-10 bg-black/60 text-white">
                    <h1 class="text-3xl font-bold tracking-wide">Templid blog</h1>
                    <p>Business measurement and automation articles</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        @foreach ($posts as $post)
            {{ $post->subject }} ({{ $post->date }})
        @endforeach
    </div>
</x-homepage>
@endsection
