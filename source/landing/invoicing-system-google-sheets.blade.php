@php
    $title       = 'Free course: Automate your invoices in Google Sheets';
    $description = 'This is not just a boring one-page Google Sheets template for manually generating invoices. This is a much improved version of such a template.';

    $benefits = [
        [
            'text'     => 'Generate invoices<br>flexibly',
            'iconPath' => 'M16.382,15.015h0.455h0.457V4.985h-0.457h-0.455V15.015z M16.837,4.985c1.008,0,1.824-0.816,1.824-1.822c0-1.008-0.816-1.824-1.824-1.824c-1.006,0-1.822,0.816-1.822,1.824C15.015,4.169,15.831,4.985,16.837,4.985z M16.837,2.25c0.504,0,0.913,0.409,0.913,0.913c0,0.502-0.409,0.911-0.913,0.911c-0.502,0-0.911-0.409-0.911-0.911C15.926,2.659,16.335,2.25,16.837,2.25z M15.015,3.618V3.163V2.706H4.986v0.457v0.455H15.015z M3.162,15.01c-1.007,0-1.823,0.816-1.823,1.822c0,1.008,0.816,1.824,1.823,1.824s1.824-0.816,1.824-1.824C4.986,15.831,4.169,15.015,3.162,15.015z M3.162,17.75c-0.503,0-0.911-0.409-0.911-0.913c0-0.502,0.408-0.911,0.911-0.911c0.504,0,0.912,0.409,0.912,0.911C4.074,17.341,3.666,17.75,3.162,17.75z M4.986,16.382v0.455v0.457h10.029v-0.457v-0.455H4.986zM16.837,15.015c-1.006,0-1.822,0.816-1.822,1.822c0,1.008,0.816,1.824,1.822,1.824c1.008,0,1.824-0.816,1.824-1.824C18.661,15.831,17.845,15.015,16.837,15.015z M16.837,17.75c-0.502,0-0.911-0.409-0.911-0.913c0-0.502,0.409-0.911,0.911-0.911c0.504,0,0.913,0.409,0.913,0.911C17.75,17.341,17.341,17.75,16.837,17.75z M3.618,4.985H3.162H2.707v10.029h0.456h0.456V4.985zM4.986,3.163c0-1.008-0.817-1.824-1.824-1.824S1.339,2.155,1.339,3.163c0,1.006,0.816,1.822,1.823,1.822S4.986,4.169,4.986,3.163zM3.162,4.074c-0.503,0-0.911-0.409-0.911-0.911c0-0.504,0.408-0.913,0.911-0.913c0.504,0,0.912,0.409,0.912,0.913C4.074,3.665,3.666,4.074,3.162,4.074z',
        ],
        [
            'text'     => 'Save invoice files<br>as PDF',
            'iconPath' => 'M15.608,6.262h-2.338v0.935h2.338c0.516,0,0.934,0.418,0.934,0.935v8.879c0,0.517-0.418,0.935-0.934,0.935H4.392c-0.516,0-0.935-0.418-0.935-0.935V8.131c0-0.516,0.419-0.935,0.935-0.935h2.336V6.262H4.392c-1.032,0-1.869,0.837-1.869,1.869v8.879c0,1.031,0.837,1.869,1.869,1.869h11.216c1.031,0,1.869-0.838,1.869-1.869V8.131C17.478,7.099,16.64,6.262,15.608,6.262z M9.513,11.973c0.017,0.082,0.047,0.162,0.109,0.226c0.104,0.106,0.243,0.143,0.378,0.126c0.135,0.017,0.274-0.02,0.377-0.126c0.064-0.065,0.097-0.147,0.115-0.231l1.708-1.751c0.178-0.183,0.178-0.479,0-0.662c-0.178-0.182-0.467-0.182-0.645,0l-1.101,1.129V1.588c0-0.258-0.204-0.467-0.456-0.467c-0.252,0-0.456,0.209-0.456,0.467v9.094L8.443,9.553c-0.178-0.182-0.467-0.182-0.645,0c-0.178,0.184-0.178,0.479,0,0.662L9.513,11.973z',
        ],
        [
            'text'     => 'Save invoice history<br>information',
            'iconPath' => 'M11.088,2.542c0.063-0.146,0.103-0.306,0.103-0.476c0-0.657-0.534-1.19-1.19-1.19c-0.657,0-1.19,0.533-1.19,1.19c0,0.17,0.038,0.33,0.102,0.476c-4.085,0.535-7.243,4.021-7.243,8.252c0,4.601,3.73,8.332,8.332,8.332c4.601,0,8.331-3.73,8.331-8.332C18.331,6.562,15.173,3.076,11.088,2.542z M10,1.669c0.219,0,0.396,0.177,0.396,0.396S10.219,2.462,10,2.462c-0.22,0-0.397-0.177-0.397-0.396S9.78,1.669,10,1.669z M10,18.332c-4.163,0-7.538-3.375-7.538-7.539c0-4.163,3.375-7.538,7.538-7.538c4.162,0,7.538,3.375,7.538,7.538C17.538,14.957,14.162,18.332,10,18.332z M10.386,9.26c0.002-0.018,0.011-0.034,0.011-0.053V5.24c0-0.219-0.177-0.396-0.396-0.396c-0.22,0-0.397,0.177-0.397,0.396v3.967c0,0.019,0.008,0.035,0.011,0.053c-0.689,0.173-1.201,0.792-1.201,1.534c0,0.324,0.098,0.625,0.264,0.875c-0.079,0.014-0.155,0.043-0.216,0.104l-2.244,2.244c-0.155,0.154-0.155,0.406,0,0.561s0.406,0.154,0.561,0l2.244-2.242c0.061-0.062,0.091-0.139,0.104-0.217c0.251,0.166,0.551,0.264,0.875,0.264c0.876,0,1.587-0.711,1.587-1.587C11.587,10.052,11.075,9.433,10.386,9.26z M10,11.586c-0.438,0-0.793-0.354-0.793-0.792c0-0.438,0.355-0.792,0.793-0.792c0.438,0,0.793,0.355,0.793,0.792C10.793,11.232,10.438,11.586,10,11.586z',
        ],
        [
            'text'     => 'Save customer<br>information',
            'iconPath' => 'M2.25,12.584c-0.713,0-1.292,0.578-1.292,1.291s0.579,1.291,1.292,1.291c0.713,0,1.292-0.578,1.292-1.291S2.963,12.584,2.25,12.584z M2.25,14.307c-0.238,0-0.43-0.193-0.43-0.432s0.192-0.432,0.43-0.432c0.238,0,0.431,0.193,0.431,0.432S2.488,14.307,2.25,14.307z M5.694,6.555H18.61c0.237,0,0.431-0.191,0.431-0.43s-0.193-0.431-0.431-0.431H5.694c-0.238,0-0.43,0.192-0.43,0.431S5.457,6.555,5.694,6.555z M2.25,8.708c-0.713,0-1.292,0.578-1.292,1.291c0,0.715,0.579,1.292,1.292,1.292c0.713,0,1.292-0.577,1.292-1.292C3.542,9.287,2.963,8.708,2.25,8.708z M2.25,10.43c-0.238,0-0.43-0.192-0.43-0.431c0-0.237,0.192-0.43,0.43-0.43c0.238,0,0.431,0.192,0.431,0.43C2.681,10.238,2.488,10.43,2.25,10.43z M18.61,9.57H5.694c-0.238,0-0.43,0.192-0.43,0.43c0,0.238,0.192,0.431,0.43,0.431H18.61c0.237,0,0.431-0.192,0.431-0.431C19.041,9.762,18.848,9.57,18.61,9.57z M18.61,13.443H5.694c-0.238,0-0.43,0.193-0.43,0.432s0.192,0.432,0.43,0.432H18.61c0.237,0,0.431-0.193,0.431-0.432S18.848,13.443,18.61,13.443z M2.25,4.833c-0.713,0-1.292,0.578-1.292,1.292c0,0.713,0.579,1.291,1.292,1.291c0.713,0,1.292-0.578,1.292-1.291C3.542,5.412,2.963,4.833,2.25,4.833z M2.25,6.555c-0.238,0-0.43-0.191-0.43-0.43s0.192-0.431,0.43-0.431c0.238,0,0.431,0.192,0.431,0.431S2.488,6.555,2.25,6.555z',
        ],
        [
            'text'     => 'Save product and service names',
            'iconPath' => 'M16.803,18.615h-4.535c-1,0-1.814-0.812-1.814-1.812v-4.535c0-1.002,0.814-1.814,1.814-1.814h4.535c1.001,0,1.813,0.812,1.813,1.814v4.535C18.616,17.803,17.804,18.615,16.803,18.615zM17.71,12.268c0-0.502-0.405-0.906-0.907-0.906h-4.535c-0.501,0-0.906,0.404-0.906,0.906v4.535c0,0.502,0.405,0.906,0.906,0.906h4.535c0.502,0,0.907-0.404,0.907-0.906V12.268z M16.803,9.546h-4.535c-1,0-1.814-0.812-1.814-1.814V3.198c0-1.002,0.814-1.814,1.814-1.814h4.535c1.001,0,1.813,0.812,1.813,1.814v4.534C18.616,8.734,17.804,9.546,16.803,9.546zM17.71,3.198c0-0.501-0.405-0.907-0.907-0.907h-4.535c-0.501,0-0.906,0.406-0.906,0.907v4.534c0,0.501,0.405,0.908,0.906,0.908h4.535c0.502,0,0.907-0.406,0.907-0.908V3.198z M7.733,18.615H3.198c-1.002,0-1.814-0.812-1.814-1.812v-4.535c0-1.002,0.812-1.814,1.814-1.814h4.535c1.002,0,1.814,0.812,1.814,1.814v4.535C9.547,17.803,8.735,18.615,7.733,18.615zM8.64,12.268c0-0.502-0.406-0.906-0.907-0.906H3.198c-0.501,0-0.907,0.404-0.907,0.906v4.535c0,0.502,0.406,0.906,0.907,0.906h4.535c0.501,0,0.907-0.404,0.907-0.906V12.268z M7.733,9.546H3.198c-1.002,0-1.814-0.812-1.814-1.814V3.198c0-1.002,0.812-1.814,1.814-1.814h4.535c1.002,0,1.814,0.812,1.814,1.814v4.534C9.547,8.734,8.735,9.546,7.733,9.546z M8.64,3.198c0-0.501-0.406-0.907-0.907-0.907H3.198c-0.501,0-0.907,0.406-0.907,0.907v4.534c0,0.501,0.406,0.908,0.907,0.908h4.535c0.501,0,0.907-0.406,0.907-0.908V3.198z',
        ],
        [
            'text'     => 'Send invoices email right from the document',
            'iconPath' => 'M17.051,3.302H2.949c-0.866,0-1.567,0.702-1.567,1.567v10.184c0,0.865,0.701,1.568,1.567,1.568h14.102c0.865,0,1.566-0.703,1.566-1.568V4.869C18.617,4.003,17.916,3.302,17.051,3.302z M17.834,15.053c0,0.434-0.35,0.783-0.783,0.783H2.949c-0.433,0-0.784-0.35-0.784-0.783V4.869c0-0.433,0.351-0.784,0.784-0.784h14.102c0.434,0,0.783,0.351,0.783,0.784V15.053zM15.877,5.362L10,9.179L4.123,5.362C3.941,5.245,3.699,5.296,3.581,5.477C3.463,5.659,3.515,5.901,3.696,6.019L9.61,9.86C9.732,9.939,9.879,9.935,10,9.874c0.121,0.062,0.268,0.065,0.39-0.014l5.915-3.841c0.18-0.118,0.232-0.36,0.115-0.542C16.301,5.296,16.059,5.245,15.877,5.362z',
        ],
    ];

    $videos = [
        [
            'text' => 'Introduction',
            'url'   => 'https://youtu.be/jDYClRItWE0',
        ],
        [
            'text' => 'Part 1',
            'url'   => 'https://youtu.be/h7x9xLazwl0',
        ],
        [
            'text' => 'Part 2',
            'url'   => 'https://youtu.be/7iID1wFL06E',
        ],
        [
            'text' => 'Part 3',
            'url'   => 'https://youtu.be/u2-Qxiup1sw',
        ],
        [
            'text' => 'Part 4',
            'url'   => 'https://youtu.be/eLplzjggDeg',
        ],
    ];
@endphp

@extends('_layouts.main')

@section('body')
<x-page
    :image="'/assets/images/landing/invoice-pc.png'"
    :title="'<span class=\'block drop-shadow-lg md:py-8\'>'.$title.'</span>'"
>
    <div class="[&>p]:mb-4 pb-10">
        <p>This is not just a boring one-page Google Sheets template for manually generating invoices. This is a much improved version of such a template.</p>
        <div class="flex justify-center mt-10 md:mx-auto -mx-6">
            <div class="inline-block md:w-[560px] w-full">
                <iframe width="100%" height="240" src="https://www.youtube.com/embed/jDYClRItWE0" title="Create Your invoices in Google Sheets" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <h2 class="text-center text-2xl font-bold uppercase mt-20">It allows you to:</h2>
        <div class="mx-auto w-20 border-t-4 border-indigo-300 mt-6"></div>
        <div class="grid gap-4 mt-4 grid-cols-2 md:grid-cols-3">
            @foreach ($benefits as $benefit)    
                <div class="flex flex-col mt-6">
                    <div class="text-center">
                        <div class="bg-gradient-to-r from-violet-500 to-fuchsia-500 rounded-full inline-block p-4">
                            <svg class="svg-icon w-8 h-8" viewBox="0 0 20 20">
                                <path fill="white" d="{{ $benefit['iconPath'] }}"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="text-center mt-1 max-w-[210px] mx-auto">{!! $benefit['text'] !!}</div>
                </div>
            @endforeach
        </div>

        <h2 class="text-center text-2xl font-bold uppercase mt-20">Cource videos</h2>
        <div class="mx-auto w-20 border-t-4 border-indigo-300 mt-6"></div>
        <ul class="mt-8">
            @foreach ($videos as $video)
                <li class="mt-3">&bull; {{ $video['text'] }}: <a href="{{ $video['url'] }}" target="_blank" class="text-indigo-500 underline hover:text-indigo-600 hover:no-underline">{{ $video['url'] }}</a></li>
            @endforeach
            <li class="mt-3 text-zinc-500">&bull; Part 5 is comming soon...</li>
        </ul>
    </div>
</x-page>
@endsection
