<div class="py-8">
    <div class="flex items-center justify-between">
        <div>
            <a href="/"><img src="/assets/images/logo.png" alt="Templid logo" class="h-8"></a>
        </div>
        <div>
            @php
                $menuItems = [
                    '/pages/about' => 'About',
                ];
            @endphp
            <ul class="flex gap-3">
                @foreach ($menuItems as $url => $text)
                    <li>
                        <a
                            href="{{ $url }}"
                            class="font-semibold text-zinc-500 hover:text-sky-400 transition-colors duration-150"
                        >{{ $text }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>