@extends('_layouts.main')

@section('body')
<x-homepage>
    <x-cover>
        <div class="relative overflow-hidden bg-black">
            <div class="absolute w-full h-full bg-[url('/assets/images/main-bg.jpeg')] bg-cover bg-center opacity-60 z-20"></div>
            <div class="absolute w-[2000px] h-[2000px] -top-80 -left-80 bg-[url('/assets/images/square-w.png')] bg-[length:16px_16px] rotate-45 opacity-20 z-10"></div>
            <div class="bg-gradient-to-r from-indigo-500/20 to-purple-400/30">
                <div class="px-10 py-16 bg-zinc-900/20 text-white relative z-30">
                    <h1 class="text-3xl font-bold tracking-wide">Templid blog</h1>
                    <p>Business measurement and automation articles</p>
                </div>
            </div>
        </div>
    </x-cover>
    <div>
        <div class="py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <x-card
                    :image="'https://images.pexels.com/photos/176382/pexels-photo-176382.jpeg?auto=compress&cs=tinysrgb&w=540&dpr=1'"
                    :title="'About us'"
                >
                    <p class="mb-2">Welcome to our blog about business measurement and automation!</p>
                    <p class="mb-2">For us, the most engaging and rewarding aspect of business is finding ways to improve and streamline processes through the use of technology and data analysis. We are passionate about programming, spreadsheets, and working with numbers to find solutions for businesses.</p>
                    <p><a href="/pages/about" class="text-indigo-500 hover:text-indigo-600">Read more</a></p>
                </x-card>

                <x-card
                    :image="'https://images.pexels.com/photos/6693638/pexels-photo-6693638.jpeg?auto=compress&cs=tinysrgb&w=540'"
                    :title="'Invoicing System in Google Sheets'"
                    :label="'Product'"
                >
                    <p class="mb-2">Ready to use Google Sheets for automated invoicing. Bet sure that your invoices are generated quickly and accurately.</p>
                    <p><a href="/products/1-invoicing-system-in-google-sheets" class="text-indigo-500 hover:text-indigo-600">Read more</a></p>
                </x-card>
            </div>
        </div>
    </div>
</x-homepage>
@endsection
