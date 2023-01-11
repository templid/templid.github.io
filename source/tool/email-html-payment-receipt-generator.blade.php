@php
    $title = 'Email HTML Payment Receipt Generator';
@endphp

@extends('_layouts.main')

@section('body')
<div>
    <h1 class="text-3xl font-bold mb-4">{{ $title }}</h1>
    <p class="mb-4">This tool generates HTML code for a payment receipt that you can send to your customers via email.</p>

    <div>
        <button
            class="block px-5 py-2 tracking-wide text-white transition-color duration-200 drop-shadow transform rounded-md bg-rose-500 hover:bg-rose-600 focus:outline-none focus:ring focus:ring-pink-300 focus:ring-opacity-50"
            onclick="generate()"
        >
            Generate
        </button>
    </div>
</div>

<script>
    function generate() {
        console.log('Generate button clicked');
    }
</script>
@endsection