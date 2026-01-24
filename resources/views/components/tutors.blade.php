<section id="tutors" class="relative py-16 sm:py-20">
    <div class="mx-auto max-w-8xl">
        <div id="tutors-stack" class="relative overflow-visible">

            <img src="{{ asset('assets/kids/index-tutor/maskot-laptop.webp') }}" alt="Maskot Alhazen Academy Tutor"
                class="hidden lg:block pointer-events-none select-none absolute z-0 w-40 lg:w-70 drop-shadow-xl ml-20"
                loading="lazy" />

            <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10">
                <h2 class="text-h2 font-bold text-primary mb-4">{!! $title !!}</h2>
                <p class="text-body max-w-2xl mx-auto text-neutral-content">{!! $description !!}</p>
            </div>

            <div class="ml-auto w-full max-w-[85%]">
                <div class="swiper swiper-tutors relative z-10 overflow-visible">
                    <div class="swiper-wrapper">
                        @foreach ($cards as $card)
                            <div class="swiper-slide pb-10">
                                <article
                                    class="tutor-card-minh bg-white rounded-[18px] p-4 ring-1 ring-[var(--color-neutral)]/60 shadow-[0_8px_18px_rgba(0,0,0,.06)] grid grid-cols-1 md:grid-cols-[minmax(160px,220px)_1fr] gap-4 items-stretch">

                                    <!-- FOTO -->
                                    @php
                                        $fallback =
                                            ($card['gender'] ?? 'male') === 'female'
                                                ? asset('assets/kids/index-tutor/female-pic.webp')
                                                : asset('assets/kids/index-tutor/male-pic.webp');

                                        $photo = $card['photo'] ?? null;
                                    @endphp
                                    <div
                                        class="relative rounded-[12px] overflow-hidden ring-1 ring-black/5 shadow-[0_4px_12px_rgba(0,0,0,.06)] h-50 bg-[{{ $card['bg-photo'] ?? '#FEE2E2' }}]">
                                        <div class="absolute inset-0 -z-10 rounded-[12px] [background:var(--photo-bg)]"></div>
                                        <img src="{{ $photo ?: $fallback }}"
                                            onerror="this.onerror=null;this.src='{{ $fallback }}';"
                                            alt="{{ $card['name'] ?? '' }} Tutor Alhazen Academy"
                                            class="absolute inset-0 w-full h-full object-cover "
                                            loading="lazy">
                                    </div>

                                    <!-- TEKS -->
                                    <div class="min-w-0 flex flex-col py-2">
                                        <h3 class="text-[16px] md:text-[17px] font-extrabold text-[#0F172A] mb-1.5">
                                            {{ $card['name'] }}
                                        </h3>

                                        <ul class="text-[13px] text-[#0F172A]/70 space-y-1.5 mb-2">
                                            <li class="flex items-center gap-2">
                                                <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none"
                                                    stroke="currentColor" stroke-width="2">
                                                    <path
                                                        d="M10 6h4m-8 4h12M7 6a2 2 0 012-2h6a2 2 0 012 2v2M4 10h16v8a2 2 0 01-2 2H6a2 2 0 01-2-2v-8z" />
                                                </svg>
                                                <span>Experience:</span>
                                                <span class="font-bold text-[#0F172A] ml-1">{{ $card['years'] }}
                                                    years</span>
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none"
                                                    stroke="currentColor" stroke-width="2">
                                                    <path d="M12 3l9 4.5-9 4.5L3 7.5 12 3z" />
                                                    <path d="M21 12l-9 4.5L3 12" />
                                                    <path d="M21 16.5l-9 4.5-9-4.5" />
                                                </svg>
                                                <span class="truncate">{{ $card['skills'] }}</span>
                                            </li>
                                        </ul>

                                        <p class="text-[13px] leading-6 text-[#0F172A]/75 line-clamp-3">
                                            {{ $card['bio'] }}
                                        </p>
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
                    class="tutors-prev w-9 h-9 rounded-full border border-[var(--color-neutral)] flex items-center justify-center hover:bg-[var(--color-neutral)]/30 transition">
                    <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M15 18l-6-6 6-6" />
                    </svg>
                </button>

                <div class="tutors-pagination swiper-pagination"></div>

                <button
                    class="tutors-next w-9 h-9 rounded-full border border-[var(--color-neutral)] flex items-center justify-center hover:bg-[var(--color-neutral)]/30 transition">
                    <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 18l6-6-6-6" />
                    </svg>
                </button>
            </nav>
        </div>
    </div>
</section>
