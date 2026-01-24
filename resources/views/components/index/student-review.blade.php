<section id="reviews" class="relative py-16 sm:py-20">
    <div class="mx-auto max-w-8xl">
        <div id="reviews-stack" class="relative overflow-visible">

            <img id="mascot-review" src="{{ asset('assets/kids/index-student-review/maskot-toa.webp') }}" alt="Maskot Alhazen Academy Review Student" class="hidden lg:block pointer-events-none select-none absolute z-0 w-40 sm:w-50 lg:w-70 drop-shadow-xl" loading="lazy" />

            <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10">
                <h2 class="text-h2 font-bold text-primary mb-4">{!! $title !!}</h2>
                <p class="text-body max-w-2xl mx-auto text-neutral-content">{!! $description !!}</p>
            </div>

            <div class="ml-auto w-full max-w-[85%]">
                <div class="swiper swiper-review relative z-10 overflow-visible">
                    <div class="swiper-wrapper">
                        @foreach ($cards as $card)
                            <div class="swiper-slide">
                                <article
                                    class="review-card bg-white rounded-[24px] p-6 md:p-8 ring-1 ring-[var(--color-neutral)]/60 flex flex-col md:flex-row items-center md:items-stretch gap-6 md:gap-10">

                                    <div x-data="reviewVideoModal('{{ $card['video_type'] ?? 'youtube' }}', '{{ $card['video_url'] ?? '' }}')" class="w-full md:w-[360px] shrink-0">

                                        <div @click="openModal()"
                                            class="relative rounded-[18px] overflow-hidden shadow-[0_8px_20px_rgba(0,0,0,.08)] cursor-pointer group">
                                            <div class="aspect-[16/16] w-full rounded-[18px] overflow-hidden">
                                                <img src="{{ $card['image'] }}" alt="Foto siswa {{ $card['name'] }} memberikan testimoni selama belajar coding di Alhazen Academy"
                                                    class="block w-full h-full object-cover" loading="lazy" />
                                            </div>

                                            <button type="button" aria-label="Putar video testimoni"
                                                class="absolute inset-0 m-auto w-14 h-14 rounded-full bg-black/35 group-hover:bg-black/45 backdrop-blur-sm grid place-items-center hover:cursor-pointer transition">
                                                <svg viewBox="0 0 24 24" class="w-7 h-7 text-white" fill="currentColor"
                                                    aria-hidden="true">
                                                    <path d="M8 5v14l11-7z" />
                                                </svg>
                                            </button>
                                        </div>

                                        <template x-teleport="body">
                                            <div x-show="open" x-transition.opacity
                                                @keydown.escape.window="closeModal()"
                                                class="fixed inset-0 z-[100] flex items-center justify-center"
                                                role="dialog" aria-modal="true" aria-label="Video testimoni">
                                                <div class="absolute inset-0 bg-black/60" @click="closeModal()"></div>

                                                <div x-show="open" x-transition
                                                    class="relative z-10 w-[92vw] max-w-4xl">
                                                    <div
                                                        class="aspect-[16/9] bg-black rounded-xl shadow-2xl overflow-hidden relative">
                                                        <iframe x-show="isYoutube" x-cloak :src="iframeSrc"
                                                            class="w-full h-full" title="Video testimoni"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            allowfullscreen></iframe>
                                                        <video x-show="isMp4" x-cloak x-ref="mp4"
                                                            class="w-full h-full" controls playsinline></video>
                                                    </div>

                                                    <button @click="closeModal()" aria-label="Tutup video"
                                                        class="absolute -top-3 -right-3 w-9 h-9 rounded-full bg-white text-slate-700 shadow-md grid place-items-center z-[9999] hover:cursor-pointer transition">
                                                        <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none"
                                                            stroke="currentColor" stroke-width="2" aria-hidden="true">
                                                            <path d="M6 6l12 12M6 18L18 6" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </template>
                                    </div>


                                    <div class="flex-1 flex flex-col">
                                        <p class="quote-watermark text-[15px] md:text-[16px] text-justify mb-3">
                                            {{ $card['quote'] }}
                                        </p>

                                        <div class="mt-auto">
                                            <h3
                                                class="text-[18px] md:text-[20px] font-extrabold text-[var(--color-text)] mb-1">
                                                {{ $card['name'] }}
                                            </h3>
                                            <div class="text-[13px] md:text-[14px] text-[var(--color-text)]/60">
                                                {{ $card['school'] }}
                                            </div>
                                            <div class="text-[13px] md:text-[14px] text-[var(--color-text)]/60 mb-3">
                                                {{ $card['mode'] }}
                                            </div>

                                            {{-- rating bintang --}}
                                            <div class="flex items-center gap-1.5">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <svg viewBox="0 0 24 24"
                                                        class="w-6 h-6 {{ $i <= ($card['rating'] ?? 5) ? 'text-yellow-400' : 'text-gray-300' }}"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="mt-6">
        <nav class="mx-auto flex items-center justify-center gap-4">
            <button
                class="review-prev w-9 h-9 rounded-full border border-[var(--color-neutral)] flex items-center justify-center hover:bg-[var(--color-neutral)]/30 transition">
                <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor"
                    stroke-width="2">
                    <path d="M15 18l-6-6 6-6" />
                </svg>
            </button>

            <div class="review-pagination swiper-pagination"></div>

            <button
                class="review-next w-9 h-9 rounded-full border border-[var(--color-neutral)] flex items-center justify-center hover:bg-[var(--color-neutral)]/30 transition">
                <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor"
                    stroke-width="2">
                    <path d="M9 18l6-6-6-6" />
                </svg>
            </button>
        </nav>
    </div>
</section>
