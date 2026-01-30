@props([
    // WHAT IS ITEMS
    'whatIsTitle' => '',
    'whatIsSubtitle' => '',
    'whatIsItems' => [],

    // Titles
    'titleFormat' => 'Level & Format Pembelajaran',
    'titleLearn' => 'Apa yang Akan Anak Pelajari ?',
    'titleWho' => 'Siapa yang Tepat Mengikuti Kursus Ini ?',

    // Images
    'img1' => asset('assets/kids/program/head1.webp'),
    'img2' => asset('assets/kids/program/head2.webp'),
    'img3' => asset('assets/kids/program/head3.webp'),

    // Data
    'formats' => [],

    'learns' => [],

    'targets' => [],
])

<section class="py-30">
    {{-- WHAT IS --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-30">

        {{-- Heading --}}
        <div class="max-w-3xl mx-auto text-center mb-10 sm:mb-14">
            <h2 class="text-h2 font-bold text-primary leading-tight">
                {{ $whatIsTitle }}
            </h2>
            <p class="mt-3 text-sm sm:text-base text-text/70">
                {{ $whatIsSubtitle }}
            </p>
        </div>

        {{-- Content --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8">

            @foreach ($whatIsItems as $item)
                <article class="rounded-[28px] bg-white shadow-soft p-6 sm:p-8 flex flex-col gap-4">

                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-2xl {{ $item['iconBg'] }} flex items-center justify-center">
                            <img src="{{ asset($item['icon']) }}" alt="{{ $item['title'] }}" class="w-6 h-6">
                        </div>
                        <h3 class="text-lg sm:text-xl font-semibold text-text">
                            {{ $item['title'] }}
                        </h3>
                    </div>

                    @foreach ($item['content'] as $paragraph)
                        <p class="text-sm sm:text-base text-text/80 leading-relaxed">
                            {!! $paragraph !!}
                        </p>
                    @endforeach

                </article>
            @endforeach

        </div>
    </div>

    {{-- DETAILS --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">

        {{-- LEVEL & FORMAT --}}
        <div class="grid grid-cols-1 lg:grid-cols-10 items-center">
            <div class="lg:col-span-6 flex justify-center">
                <div class="w-full max-w-xl">
                    <h3 class="text-h3 font-extrabold text-primary mb-8">
                        {{ $titleFormat }}
                    </h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        @foreach ($formats as [$no, $title, $desc])
                            <div class="flex gap-4">
                                <div
                                    class="w-9 h-9 flex items-center justify-center rounded-full bg-yellow-300 text-white font-bold shrink-0">
                                    {{ $no }}
                                </div>
                                <div>
                                    <h5 class="font-semibold text-h5 text-text mb-2">{{ $title }}</h5>
                                    <p class="text-slate-600 text-small text-justify">{{ $desc }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4 flex justify-center">
                <img src="{{ $img1 }}" alt=""
                    class="hidden lg:block w-[260px] h-auto select-none pointer-events-none" loading="lazy">
            </div>
        </div>

        {{-- APA YANG DIPELAJARI --}}
        <div class="grid grid-cols-1 lg:grid-cols-10 items-center">
            <div class="lg:col-span-5 flex justify-center order-2 lg:order-1">
                <img src="{{ $img2 }}" alt=""
                    class="hidden lg:block w-[260px] h-auto select-none pointer-events-none" loading="lazy">
            </div>

            <div class="lg:col-span-5 order-1 lg:order-2 flex justify-center">
                <div class="w-full max-w-xl">
                    <h3 class="text-h3 font-extrabold text-primary mb-6">
                        {{ $titleLearn }}
                    </h3>

                    <ul class="space-y-3 max-w-xl">
                        @foreach ($learns as $item)
                            <li class="flex items-start gap-3">
                                <span
                                    class="w-5 h-5 mt-1 rounded-full bg-emerald-500 flex items-center justify-center text-white text-xs">
                                    ✓
                                </span>
                                <span class="text-slate-700">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        {{-- SIAPA YANG COCOK (FIX CENTER) --}}
        <div class="grid grid-cols-1 lg:grid-cols-10 items-center">
            <div class="lg:col-span-6 flex justify-center">
                <div class="w-full max-w-xl">
                    <h3 class="text-h3 font-extrabold text-primary mb-8">
                        {{ $titleWho }}
                    </h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        @foreach ($targets as [$title, $desc])
                            <div class="flex gap-4">
                                <div
                                    class="w-9 h-9 flex items-center justify-center rounded-full bg-accent text-white font-bold shrink-0">
                                    ?
                                </div>
                                <div>
                                    <h5 class="font-semibold text-h5 text-text mb-2">{{ $title }}</h5>
                                    <p class="text-slate-600 text-small text-justify">{{ $desc }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4 flex justify-center">
                <img src="{{ $img3 }}" alt=""
                    class="hidden lg:block w-[260px] h-auto select-none pointer-events-none" loading="lazy">
            </div>
        </div>

    </div>
</section>
