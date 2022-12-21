@php
    $title = 'Article 1';

    $page->subject          = $title;
    $page->date             = '2020-01-01';
    $page->coverImg         = 'someImg.jpg';
    $page->shortDescription = 'This is short description in the list of articles';
@endphp

@extends('_layouts.main')

@section('body')
<x-post>
    <div class="p-8">
        <h1 class="text-3xl font-bold">Hello boss!</h1>
    </div>
</x-post>
@endsection