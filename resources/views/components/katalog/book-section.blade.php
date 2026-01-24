@props([
    // Heading area
    'slogan' => 'Eksplorasi & Rasa Ingin Tahu',
    'title' => 'Bangun Literasi Teknologi Sejak Dini',
    'subtitle' =>
        'Buku-buku Alhazen menggabungkan cerita seru dengan konsep digital, membantu anak memahami logika, imajinasi, dan inovasi di setiap halaman.',

    // Grid items
    // each: ['title' => 'Math', 'image' => asset('…')]
    'books' => [],
])

<section class="relative py-20">
    <div class="mx-auto max-w-7xl">
        <div class="relative overflow-visible">
            <img src="{{ asset('assets/kids/katalog-book/maskot-mendali-full.png') }}" alt="Maskot Alhazen Academy"
                class="hidden lg:block pointer-events-none select-none absolute -top-25 right-40 z-[-1] w-20 lg:w-50 drop-shadow-xl"
                loading="lazy" />

            <div class="max-w-3xl ml-10 md:ml-20 mb-8 sm:mb-10">
                <p class="text-h4 font-semibold text-[var(--color-accent)] max-w-xl md:max-w-2xl">
                    {{ $slogan }}
                </p>
                <h2 class="text-h2 font-bold text-primary leading-tight mb-4">
                    {{ $title }}
                </h2>
                <p class="text-body text-text max-w-xl md:max-w-2xl">
                    {{ $subtitle }}
                </p>
            </div>
        </div>

        {{-- Sparkles (opsional) --}}
        <img src="{{ asset('assets/kids/katalog-book/star.png') }}" alt=""
            class="hidden xl:block absolute left-6 top-1/3 w-10 h-10 z-[-1] select-none pointer-events-none"
            loading="lazy">
        <img src="{{ asset('assets/kids/katalog-book/star.png') }}" alt=""
            class="hidden xl:block absolute right-6 bottom-1/3 w-10 h-10 z-[-1] select-none pointer-events-none"
            loading="lazy">

        @php
            $bookPages = collect($books)->chunk(8);
        @endphp

        <div class="mt-8 sm:mt-10 max-w-6xl mx-auto">
            <div class="swiper books-swiper">
                <div class="swiper-wrapper">
                    @foreach ($bookPages as $page)
                        <div class="swiper-slide">
                            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-5">
                                @foreach ($page as $b)
                                    @php
                                        $hasImage = !empty($b['image']);
                                    @endphp

                                    <article class="group">
                                        <div
                                            class="w-[70%] mx-auto rounded-2xl overflow-hidden bg-white ring-1 ring-[var(--color-neutral)]/60 shadow-[0_10px_30px_rgba(0,0,0,.06)] transition-transform duration-300 will-change-transform group-hover:-translate-y-1">
                                            @if ($hasImage)
                                                <img src="{{ $b['image'] }}" alt="Buku {{ $b['title'] ?? '' }}"
                                                    class="w-full h-auto object-cover select-none aspect-[3/5]" loading="lazy"
                                                    decoding="async">
                                            @else
                                                {{-- Placeholder putih jika tidak ada gambar --}}
                                                <div class="w-full aspect-[3/5] bg-white flex items-center justify-center px-4 border border-dashed border-[var(--color-neutral)] rounded-2xl">
                                                    <p class="text-center text-sm text-[var(--color-neutral)]">
                                                        Gambar buku tidak tersedia
                                                    </p>
                                                </div>
                                            @endif
                                        </div>

                                        @if (!empty($b['title']))
                                            <h3
                                                class="mt-3 text-[15px] font-semibold text-[var(--color-text)]/90 text-center">
                                                {{ $b['title'] }}
                                            </h3>
                                        @endif
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="mt-6">
            <nav class="mx-auto flex items-center justify-center gap-4">
                <button
                    class="books-prev w-9 h-9 rounded-full border border-[var(--color-neutral)] flex items-center justify-center hover:bg-[var(--color-neutral)]/30 transition">
                    <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M15 18l-6-6 6-6" />
                    </svg>
                </button>

                <div class="books-pagination swiper-pagination flex items-center"></div>

                <button
                    class="books-next w-9 h-9 rounded-full border border-[var(--color-neutral)] flex items-center justify-center hover:bg-[var(--color-neutral)]/30 transition">
                    <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 18l6-6-6-6" />
                    </svg>
                </button>
            </nav>
        </div>

    </div>
</section>
