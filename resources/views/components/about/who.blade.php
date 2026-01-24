<section class="relative py-12 lg:py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- content-1 --}}
        <div class="flex flex-col lg:flex-row lg:items-center gap-10 lg:min-h-[480px] mb-10">
            {{-- LEFT: logo --}}
            <div class="relative lg:basis-[54%] lg:shrink-0 min-w-0 flex items-center justify-center p-4">
                <img src="{{ $logo }}" alt="Logo Alhazen Academy"
                    class="w-full max-w-[620px] max-h-full object-contain rounded-[20px]" loading="lazy" decoding="async"
                    fetchpriority="low">
            </div>

            {{-- RIGHT: card teks --}}
            <div class="space-y-6 lg:basis-[46%] min-w-0 w-full">
                <article class="relative rounded-2xl px-6 sm:px-8 py-7">
                    <div class="flex justify-center mb-3">
                        <img src="{{ asset('/assets/kids/about/icon1.png') }}" alt="" class="w-15 h-15 "
                            loading="lazy" decoding="async" fetchpriority="low">
                    </div>

                    <h3 class="text-h3 font-bold text-primary text-center mb-4">
                        {{ $titleWho }}
                    </h3>

                    <div class="space-y-4 text-body text-text text-justify">
                        @foreach ($paragraphsWho as $p)
                            <p>{!! $p !!}</p>
                        @endforeach
                    </div>
                </article>
            </div>
        </div>

        {{-- content-2 --}}
        <div class="flex flex-col lg:flex-row lg:items-center gap-10 lg:min-h-[480px] mb-20">
            {{-- LEFT: card teks --}}
            <div class="space-y-6 lg:basis-[46%] min-w-0 w-full">
                <article class="relative rounded-2xl px-6 sm:px-8 py-7">
                    <div class="flex justify-center mb-3">
                        <img src="{{ asset('/assets/kids/about/icon2.png') }}" alt="" class="w-15 h-15 "
                            loading="lazy" decoding="async" fetchpriority="low">
                    </div>

                    <h3 class="text-h3 font-bold text-primary text-center mb-4">
                        {{ $titleVision }}
                    </h3>
                    <div class="space-y-4 text-body text-text text-justify">
                        @foreach ($paragraphsVision as $p)
                            <p>{!! $p !!}</p>
                        @endforeach
                    </div>
                </article>
            </div>

            {{-- RIGHT: img --}}
            <div class="relative inline-block w-full mx-auto max-w-[620px]">
                <div class="absolute left-[30px] top-[30px] -z-10 w-full h-full rounded-[20px] bg-[#E5E7EB]"></div>
                <div class="w-full rounded-[20px] overflow-hidden">
                    <img src="{{ $imgVision }}" alt="{{ $imgVisionAlt }}"
                        class="block w-full aspect-[5/3] object-cover" loading="lazy" decoding="async"
                        fetchpriority="low">
                </div>
            </div>
        </div>

        {{-- content-3 --}}
        <div class="flex flex-col lg:flex-row lg:items-center gap-10 lg:min-h-[480px] mb-20">
            {{-- LEFT: img --}}
            <div class="relative inline-block w-full mx-auto max-w-[620px] order-2 lg:order-1">
                <div class="absolute right-[30px] top-[30px] -z-10 w-full h-full rounded-[20px] bg-[#E5E7EB]"></div>
                <div class="w-full rounded-[20px] overflow-hidden">
                    <img src="{{ $imgMision }}" alt="{{ $imgMisionAlt }}"
                        class="block w-full aspect-[5/3] object-cover" loading="lazy" decoding="async"
                        fetchpriority="low">
                </div>
            </div>

            {{-- RIGHT: card teks --}}
            <div class="space-y-6 lg:basis-[46%] min-w-0 w-full order-1 lg:order-2">
                <article class="relative rounded-2xl px-6 sm:px-8 py-7">
                    <div class="flex justify-center mb-3">
                        <img src="{{ asset('/assets/kids/about/icon3.png') }}" alt="" class="w-15 h-15"
                            loading="lazy" decoding="async" fetchpriority="low">
                    </div>

                    <h3 class="text-h3 font-semibold text-primary text-center mb-4">
                        {{ $titleMision }}
                    </h3>
                    <div class="space-y-4 text-body text-text text-justify">
                        @foreach ($paragraphsMision as $p)
                            <p>{!! $p !!}</p>
                        @endforeach
                    </div>
                </article>
            </div>
        </div>


        <!--
        {{-- content-4 --}}
        <div class="flex flex-col lg:flex-row lg:items-center gap-10 lg:min-h-[480px] mb-20">
            {{-- LEFT: card teks --}}
            <div class="space-y-6 lg:basis-[46%] min-w-0 w-full">
                <article class="relative rounded-2xl px-6 sm:px-8 py-7">
                    <div class="space-y-4 text-body text-text text-justify">
                        @foreach ($paragraphsLeader as $p)
                            <p>{!! $p !!}</p>
                        @endforeach

                        <h5 class="text-h4 font-medium text-right mt-10">{{ $leaderName }}</h5>
                        <p class="text-small text-right text-text/70">{{ $leaderInfo }}</p>

                        <div class="flex justify-end">
                            <a href="{{ $leaderSosmed }}" target="_blank" rel="noopener"
                                class="inline-flex items-center leading-none text-slate-400 hover:text-slate-600
                        focus:outline-none focus-visible:ring-2 focus-visible:ring-slate-400/50"
                                aria-label="Instagram">
                                <span
                                    class="inline-flex w-8 h-8 rounded-full bg-slate-500 items-center justify-center hover:bg-slate-500 transition-colors">
                                    <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" aria-hidden="true">
                                        <rect x="3" y="3" width="18" height="18" rx="5" ry="5"
                                            fill="none" stroke="currentColor" stroke-width="2" />
                                        <circle cx="12" cy="12" r="4.2" fill="none"
                                            stroke="currentColor" stroke-width="2" />
                                        <circle cx="17.5" cy="6.5" r="1.25" fill="currentColor"
                                            stroke="none" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            {{-- RIGHT: img --}}
            <div class="relative inline-block w-full mx-auto max-w-[620px]">
                <img src="{{ $imgLeader }}" alt="{{ $imgLeaderAlt }}" class="block w-[90%]" loading="lazy"
                    decoding="async" fetchpriority="low">
            </div>
        </div>
        -->

    </div>
</section>
