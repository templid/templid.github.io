@extends('_layouts.main')

@section('body')
<x-homepage>
    <div>
        <h1 class="text-3xl font-bold">Hello!</h1>
    
        @foreach ($posts as $post)
            {{ $post->subject }} ({{ $post->date }})
        @endforeach
    </div>
</x-homepage>
@endsection
