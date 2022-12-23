<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->pageTitle($title ?? null) }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="text-gray-900 font-sans antialiased h-full">
        <main class="max-w-4xl mx-auto border-x border-zinc-100 px-10 text-base min-h-full">
            @include('_partials.header')
            @yield('body')
        </main>
    </body>
</html>
