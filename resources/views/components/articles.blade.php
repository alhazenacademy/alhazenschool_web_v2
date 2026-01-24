<section class="relative py-14 sm:py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10">
            <h2 class="text-h2 font-bold text-primary mb-4">{!! $title !!}</h2>
            <p class="text-body max-w-2xl mx-auto text-neutral-content">{!! $description !!}</p>
        </div>
        @if ($featured)
            <a href="{{ $featured['url'] ?? '#' }}" class="block group">
                <figure
                    class="relative rounded-[28px] overflow-hidden shadow-[0_24px_60px_rgba(0,0,0,.15)] transition-shadow duration-300 group-hover:shadow-[0_28px_70px_rgba(0,0,0,.18)]">

                    <img src="{{ $featured->cover_image_url }}" alt="Cover artikel tentang {{ $featured->title }}"
                        class="w-full h-[240px] sm:h-[320px] md:h-[480px] object-cover
                transition-transform duration-500 ease-out will-change-transform
                group-hover:scale-[1.06]" />

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/45 via-black/10 to-transparent
                transition-opacity duration-300 group-hover:opacity-90">
                    </div>

                    <div class="absolute left-5 top-5">
                        <span
                            class="inline-block px-3 py-1 rounded-full text-[13px] font-semibold bg-white text-slate-800 shadow">Artikel
                            Unggulan</span>
                    </div>

                    <figcaption class="absolute left-5 right-5 bottom-5 flex items-end gap-3">
                        <div class="bg-white rounded-2xl px-5 py-4 shadow-[0_12px_30px_rgba(0,0,0,.15)] max-w-[720px]">
                            <div class="text-[12px] font-semibold text-slate-500 mb-1">
                                {{ $featured->published_at_formatted }}
                            </div>
                            <h3
                                class="text-h4 sm:text-body md:text-h5 font-medium leading-snug text-slate-900 transition-colors duration-300 group-hover:text-[var(--color-primary)]">
                                {{ $featured->title }}
                            </h3>
                        </div>

                        <span class="ml-auto hidden sm:inline-flex">
                            <span
                                class="inline-flex items-center gap-2 px-4 py-3 rounded-xl bg-[#F59E0B] text-white font-semibold shadow hover:brightness-105">
                                Baca Artikel
                                <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path d="M5 12h14M13 5l7 7-7 7" />
                                </svg>
                            </span>
                        </span>
                    </figcaption>
                </figure>
            </a>
        @endif

        @if (count($posts))
            <div class="mt-8 sm:mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($posts as $p)
                    <a href="{{ $p->url ?? '#' }}" class="group block rounded-[20px] p-3 ">
                        <div class="relative rounded-[16px] overflow-hidden">
                            <img src="{{ $p->cover_image_url }}" alt="Cover artikel tentang {{ $p->title }}"
                                class="w-full h-[160px] object-cover transition-transform duration-500 ease-out will-change-transform group-hover:scale-[1.06]" />
                            <div class="absolute right-0 bottom-0">
                                <span class="date-notch text-[12px] font-semibold">{{ $p->published_at_formatted }}</span>
                            </div>
                        </div>

                        <h4
                            class="text-body mt-3 font-medium text-slate-900 transition-colors group-hover:text-[var(--color-primary)]">
                            {{ $p->title }}
                        </h4>
                    </a>
                @endforeach
            </div>
        @endif

        <div class="text-center mt-8 sm:mt-10">
            <a href="{{ $allUrl }}"
                class="mt-3 mb-5 inline-flex items-center gap-2 rounded-xl px-8 py-3 bg-transparent border-1 border-primary text-primary font-semibold shadow-xl hover:scale-105 transition-all duration-300 drop-shadow-2xl">
                Lihat Semua Artikel
            </a>
        </div>

    </div>
</section>
