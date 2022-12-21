<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $description ?? $page->description }}">
        <title>{{ $page->productTitle($title ?? null) }}</title>
        <link rel="stylesheet" href="{{ mix('css/product.css', 'assets/build') }}">
        <script defer src="{{ mix('js/product.js', 'assets/build') }}"></script>
    </head>
    <body class="text-gray-900 font-sans antialiased">
        @yield('body')
    </body>
</html>