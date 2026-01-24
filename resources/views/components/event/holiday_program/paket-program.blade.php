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
                                    class="h-full flex flex-col rounded-2xl bg-white ring-1 ring-neutral/70 shadow-[0_10px_24px_rgba(0,0,0,.06)] px-5 py-6 sm:px-6 sm:py-7">

                                    {{-- Header --}}
                                    <header class="mb-3">
                                        <h3 class="text-[18px] sm:text-[20px] font-extrabold text-text leading-tight">
                                            {{ $card['title'] }}
                                        </h3>
                                        <p class="text-[13px] text-text/70 -mt-0.5">
                                            {{ $card['subtitle'] }}
                                        </p>
                                    </header>

                                    {{-- Info --}}
                                    <ul class="mt-3 space-y-2 text-[14px] text-text/90">
                                        <li class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-easel2" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M8 0a.5.5 0 0 1 .447.276L8.81 1h4.69A1.5 1.5 0 0 1 15 2.5V11h.5a.5.5 0 0 1 0 1h-2.86l.845 3.379a.5.5 0 0 1-.97.242L12.11 14H3.89l-.405 1.621a.5.5 0 0 1-.97-.242L3.36 12H.5a.5.5 0 0 1 0-1H1V2.5A1.5 1.5 0 0 1 2.5 1h4.691l.362-.724A.5.5 0 0 1 8 0M2 11h12V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5zm9.61 1H4.39l-.25 1h7.72z" />
                                            </svg>
                                            <span>{{ $card['modules'] }} Modul</span>
                                        </li>

                                        <li class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-calendar4-week" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z" />
                                                <path
                                                    d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                            </svg>
                                            <span>{{ $card['duration'] }}</span>
                                        </li>

                                        <li class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-mortarboard font-bold"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                                                <path
                                                    d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                                            </svg>
                                            <span>{{ $card['class_type'] }} Class</span>
                                        </li>
                                    </ul>

                                    <hr class="my-4 border-neutral/70">

                                    {{-- Description --}}
                                    <p class="text-[14px] leading-6 text-text/90 mb-4">
                                        {{ $card['desc'] }}
                                    </p>

                                    {{-- Schedules --}}
                                    <div x-data="{ showAll: false }" class="space-y-3 text-[14px]">
                                        @foreach ($card['schedules'] as $index => $schedule)
                                            <template x-if="showAll || {{ $index }} < 3">
                                                <div class="flex gap-3">
                                                    <span
                                                        class="mt-2 w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>

                                                    <div>
                                                        <div class="font-semibold text-text">
                                                            {{ $schedule['batch'] }}
                                                            <span class="font-normal text-text/60">
                                                                ({{ $schedule['date'] }})
                                                            </span>
                                                        </div>

                                                        <div class="text-[13px] text-text/70 mt-0.5">
                                                            @foreach ($schedule['times'] as $time)
                                                                <span
                                                                    class="inline-block mr-2 mb-1 px-2 py-0.5 rounded-md bg-neutral/40">
                                                                    {{ $time }}
                                                                </span>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </template>
                                        @endforeach

                                        {{-- Toggle --}}
                                        @if (count($card['schedules']) > 3)
                                            <button @click="showAll = !showAll"
                                                class="text-[13px] font-semibold text-primary hover:underline hover:cursor-pointer mt-1">
                                                <span x-show="!showAll">+ Lihat semua batch</span>
                                                <span x-show="showAll">− Sembunyikan batch</span>
                                            </button>
                                        @endif
                                    </div>

                                    {{-- Price --}}
                                    <div class="mt-5">
                                        <div class="text-[11px] font-bold tracking-wider text-text/60">
                                            BIAYA PROGRAM
                                        </div>
                                        <div class="text-[18px] font-extrabold text-text line-through">
                                            {{ $card['price-before'] }}
                                        </div>
                                        <div class="text-[20px] font-extrabold text-red-500">
                                            {{ $card['price-after'] }}
                                        </div>
                                    </div>

                                    {{-- CTA --}}
                                    <div class="mt-auto pt-5">
                                        <a href="{{ $card['ctaHref'] }}"
                                            class="inline-flex w-full justify-center rounded-xl px-6 py-3 text-button bg-accent text-white hover:scale-105 transition">
                                            Daftar Sekarang
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
