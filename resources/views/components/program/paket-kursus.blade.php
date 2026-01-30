@props([
    'title' => '',
    'description' => '',
    'cards' => [],
])
<section id="paket" class="relative py-16 sm:py-20">
    <div class="mx-auto max-w-8xl">
        <div id="paket-stack" class="relative overflow-visible">

            <img src="{{ asset('assets/kids/program/maskot-paket.webp') }}" alt="Maskot Alhazen Academy"
                class="hidden lg:block pointer-events-none select-none absolute z-0 w-40 lg:w-40 drop-shadow-xl ml-45 -mt-10"
                loading="lazy" />

            <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10">
                <h2 class="text-h2 font-bold text-primary mb-4">{!! $title !!}</h2>
                <p class="text-body max-w-2xl mx-auto text-neutral-content">{!! $description !!}</p>
            </div>

            <div class="ml-auto w-full max-w-[85%]">
                <div class="swiper swiper-paket relative z-10 overflow-visible">
                    <div class="swiper-wrapper">
                        @foreach ($cards as $card)
                            <div class="swiper-slide pb-10">
                                <article
                                    class="relative rounded-2xl ring-1 ring-[var(--color-neutral)]/70 bg-white shadow-[0_10px_24px_rgba(0,0,0,.06)] px-5 py-6 sm:px-6 sm:py-7 flex flex-col h-full">

                                    {{-- Title --}}
                                    <header class="mb-3">
                                        <h3
                                            class="text-[18px] sm:text-[20px] font-extrabold text-[var(--color-text)] leading-tight">
                                            {{ $card['title'] }}
                                        </h3>
                                        <p class="text-[13px] text-[var(--color-text)]/70 -mt-0.5">
                                            {{ $card['subtitle'] }}
                                        </p>
                                    </header>

                                    {{-- Stats --}}
                                    <ul class="mt-3 space-y-2 text-[14px] text-[var(--color-text)]/90">
                                        <li class="flex items-center gap-2">
                                            {{-- modules --}}
                                            <svg viewBox="0 0 24 24" class="w-5 h-5 shrink-0" fill="none"
                                                stroke="currentColor" stroke-width="2">
                                                <rect x="3" y="3" width="7" height="7" rx="1.5" />
                                                <rect x="14" y="3" width="7" height="7" rx="1.5" />
                                                <rect x="3" y="14" width="7" height="7" rx="1.5" />
                                                <rect x="14" y="14" width="7" height="7" rx="1.5" />
                                            </svg>
                                            <span>{{ $card['modules'] }} Modul</span>
                                        </li>

                                        @if (!empty($card['islamic']))
                                            <li class="flex items-center gap-2">
                                                {{-- islamic --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-moon-stars" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278M4.858 1.311A7.27 7.27 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.32 7.32 0 0 0 5.205-2.162q-.506.063-1.029.063c-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286" />
                                                    <path
                                                        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.73 1.73 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.73 1.73 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.73 1.73 0 0 0 1.097-1.097zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z" />
                                                </svg>
                                                <span>{{ $card['islamic'] }} Islamic Leadership Bonus</span>
                                            </li>
                                        @endif

                                        <li class="flex items-center gap-2">
                                            {{-- duration --}}
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                                            </svg>
                                            <span>{{ $card['duration'] }}</span>
                                        </li>
                                    </ul>

                                    <hr class="my-4 border-[var(--color-neutral)]/70">

                                    {{-- Description --}}
                                    <p class="text-[14px] leading-6 text-[var(--color-text)]/90 line-clamp-4">
                                        {{ $card['desc'] }}
                                    </p>

                                    {{-- Tools --}}
                                    @if (!empty($card['tools']))
                                        <div class="mt-3 overflow-x-auto no-scrollbar">
                                            <div class="flex gap-2 w-max pr-2">
                                                @foreach ($card['tools'] as $tool)
                                                    <span
                                                        class="inline-flex shrink-0 items-center px-2.5 py-1 rounded-full text-[12px] font-medium bg-[color-mix(in_oklab,var(--color-primary)_12%,#fff)] text-[var(--color-primary)] ring-1 ring-[var(--color-primary)]/20">
                                                        {{ $tool }}
                                                    </span>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif

                                    {{-- Price --}}
                                    <div class="mt-5">
                                        <div class="text-[11px] tracking-wider font-bold text-[var(--color-text)]/60">
                                            TOTAL VALUE
                                        </div>
                                        <div class="text-[20px] font-extrabold text-[var(--color-text)] line-through">
                                            {{ $card['price'] }}
                                        </div>
                                        <div class="text-[20px] font-extrabold text-[#EF4444]">
                                            GRATIS KELAS PERTAMA
                                        </div>
                                    </div>

                                    {{-- CTA --}}
                                    <div class="mt-auto pt-4">
                                        <a href="{{ $card['ctaHref'] }}"
                                            class="inline-flex w-full justify-center rounded-xl px-6 py-3 text-button bg-accent text-white hover:scale-105 transition-all duration-200 ease-in-out">
                                            Daftar Kelas Gratis
                                        </a>
                                    </div>
                                </article>

                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6">
            <nav class="mx-auto flex items-center justify-center gap-4">
                <button
                    class="paket-prev w-9 h-9 rounded-full border border-[var(--color-neutral)] flex items-center justify-center hover:bg-[var(--color-neutral)]/30 transition">
                    <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M15 18l-6-6 6-6" />
                    </svg>
                </button>

                <div class="paket-pagination swiper-pagination"></div>

                <button
                    class="paket-next w-9 h-9 rounded-full border border-[var(--color-neutral)] flex items-center justify-center hover:bg-[var(--color-neutral)]/30 transition">
                    <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 18l6-6-6-6" />
                    </svg>
                </button>
            </nav>
        </div>
    </div>
</section>
