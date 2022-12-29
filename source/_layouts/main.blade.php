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
    <body class="text-gray-900 font-sans antialiased h-full bg-zinc-100">
        <main class="max-w-4xl mx-auto md:px-10 px-6 text-base min-h-full pb-10 bg-white">
            @include('_partials.header')
            @yield('body')
        </main>
        <footer class="bg-zinc-900">
            <div class="max-w-4xl mx-auto border-x border-neutral-800 px-10 py-6 text-sm text-white">
                <div class="flex gap-6">
                    <div class="basis-1/3">{{ date('Y') }} &copy; Templid</div>
                    <div class="basis-1/3">
                        <div class="font-bold mb-2 text-neutral-500">Information</div>
                        <ul>
                            <li class="mt-2">
                                <a href="/pages/about" class="underline underline-offset-4 hover:no-underline">
                                    About us
                                </a>
                            </li>
                            <li class="mt-2">
                                <a href="https://www.youtube.com/@templid-com" class="underline underline-offset-4 hover:no-underline" target="_blank">
                                    YouTube channel
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="basis-1/3">
                        <div class="font-bold mb-2 text-neutral-500">Products</div>
                        <ul>
                            <li class="mt-2">
                                <a href="/products/1-invoicing-system-in-google-sheets" class="underline underline-offset-4  hover:no-underline">
                                    Invoicing System in Google Sheets
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
