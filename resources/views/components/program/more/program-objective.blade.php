@props([
    'title' => 'This is Title',
    'description' => 'This is description',
    'objectives' => [],
])

<section id="program-more-program-objective" class="relative overflow-hidden py-12 lg:py-40">
    <div class="relative mx-auto max-w-7xl px-6">
        <div class="max-w-lg">
            <!-- Badge -->
            <div class="mb-5">
                <span
                    class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                    Program Objectives
                </span>
            </div>

            <!-- Title -->
            <h2 class="text-h2 font-bold italic leading-tight mb-5">
                {{ $title }}
            </h2>

            <!-- Description -->
            <p class="text-body text-justify mb-5">
                {{ $description }}
            </p>
        </div>
    </div>

    <!-- RIGHT SLIDER -->
    <div class="relative lg:absolute lg:top-10 xl:top-10 2xl:top-10 lg:right-0 lg:w-[500px] xl:w-[700px] 2xl:w-[1000px]">
        <div class="pl-6 lg:pl-12 overflow-visible">
            <div class="swiper program-more-program-objective-swiper cursor-grab">
                <div class="swiper-wrapper">
                    @foreach ($objectives as $item)
                        <div class="swiper-slide w-[500px] shrink-0">
                            <div
                                class="{{ $item['bg'] ?? 'additional-blue' }} text-white rounded-3xl shadow-xl p-6 pb-12 flex flex-col min-h-[500px] lg:min-h-[550px] 2xl:min-h-[520px]">

                                <div class="h-[200px] rounded-2xl overflow-hidden mb-6 shrink-0">
                                    <img src="{{ $item['image'] ?? asset('assets/kids/program/more/program-objective-img.webp') }}"
                                        alt="{{ $item['title'] }}"
                                        class="w-full h-full object-cover object-top brightness-75">
                                </div>

                                <div class="flex flex-col flex-1">
                                    <div>
                                        <h4 class="text-h4 font-bold mb-2">
                                            {!! $item['title'] !!}
                                        </h4>
        
                                        <p class="text-sm opacity-90 mb-4">
                                            {{ $item['subtitle'] }}
                                        </p>
                                    </div>
                                    <div class="flex-auto">
                                        <p class="text-body leading-relaxed text-justify">
                                            {{ $item['description'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
