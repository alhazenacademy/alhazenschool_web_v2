<section id="student-work" class="py-8 sm:py-12 lg:py-16 bg-background relative overflow-visible">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div
            class="mb-8 lg:mb-12 flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 lg:gap-8 relative z-10">
            <div class="text-center mx-auto">
                <h2 class="text-h2 font-bold text-primary leading-tight text-center mb-4">{!! $title !!}</h2>
                <p class="text-body text-text max-w-xl md:max-w-2xl mx-auto md:mx-0">{!! $description !!}</p>
            </div>
        </div>

        <div class="relative overflow-visible pt-4">
            <div class="swiper student-works-swiper relative z-20">
                <div class="swiper-wrapper mb-8">
                    @foreach ($cards as $card)
                        <div class="swiper-slide h-auto">
                            <article
                                class="group bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 flex flex-col h-[26rem] sm:h-[27rem] lg:h-[28rem] py-5">
                                <div class="mb-4 flex-shrink-0 rounded-x">
                                    <div
                                        class="w-full h-48 sm:h-56 lg:h-60 flex items-center justify-center overflow-hidden rounded-xl">
                                        <img src="{{ $card['image'] }}" alt="{{ $card['alt'] }}" loading="lazy" class="max-w-full max-h-full object-contain" />
                                    </div>
                                </div>

                                <div class="flex-1 px-6">
                                    <h3 class="text-h5 font-medium mb-2 line-clamp-2">{{ $card['title'] }}</h3>
                                    <p class="text-small text-neutral-content mb-4 line-clamp-3">
                                        {{ $card['description'] }}
                                    </p>
                                </div>

                                <div class="px-6 pb-6 mt-auto">
                                    <span
                                        class="student-work-category {{ $card['bg-text'] }} text-white text-sm font-medium whitespace-nowrap px-3 py-1 rounded-full">
                                        {{ $card['category'] }}
                                    </span>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="hidden lg:block absolute top-0 right-3 z-10 pointer-events-none select-none translate-y-[calc(-100%+1rem)]"> 
                <img src="{{ asset('assets/kids/index-student-work/maskot-mendali.webp') }}" class="w-32 sm:w-40 lg:w-52 object-contain drop-shadow-xl" alt="Maskot Alhazen Academy Student Work" loading="lazy" decoding="async">
            </div>
        </div>
    </div>
</section>
