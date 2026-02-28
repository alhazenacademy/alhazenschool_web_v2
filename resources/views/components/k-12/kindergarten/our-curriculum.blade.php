@props([
    'title' => 'A Balanced Curriculum for Holistic Growth',
    'description' => 'Alhazen Kindergarten curriculum is designed to holistically nurture children’s spiritual, cognitive, and practical development through structured yet enjoyable learning experiences.',
    'objectives' => [
        [
            'title' => 'Diniyyah',
            'subtitle' => 'Islamic Foundation',
            'description' => "Qur'an reading, daily prayers, hadith learning, Islamic manners, and foundational aqidah to build strong spiritual character from an early age.",
            'bg' => 'additional-blue',
        ],
        [
            'title' => 'Early Literacy & Numeracy',
            'subtitle' => 'Academic Readiness',
            'description' => 'Introduction to reading, writing, and arithmetic through fun, engaging, and play-based activities that support early cognitive development.',
            'bg' => 'additional-orange',
        ],
        [
            'title' => 'Life Skill Development',
            'subtitle' => 'Independence & Social Skills',
            'description' => 'Development of independence in daily routines, self-care skills, and positive cooperation with peers to prepare children for real-life situations.',
            'bg' => 'additional-purple',
        ],
    ],
])

<section id="k-12-kindergarten-our-curriculum" class="relative overflow-hidden py-12 lg:py-40">
    <div class="relative mx-auto max-w-7xl px-6">
        <div class="grid lg:grid-cols-2 gap-10 items-start">
            <div class="w-full">
                <!-- Badge -->
                <div class="mb-5">
                    <span
                        class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                        Our Curriculum
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
    </div>

    <!-- RIGHT SLIDER -->
    <div class=" relative mt-12 lg:absolute lg:top-0 lg:right-0 lg:w-[500px] xl:w-[680px] 2xl:w-[768px] lg:mt-0 lg:pt-10 px-5 lg:px-0 flex items-start">
        <div class="w-full overflow-hidden lg:pl-10">
            <div class="swiper program-more-program-objective-swiper cursor-grab">
                <div class="swiper-wrapper flex">
                    @foreach ($objectives as $item)
                        <div class="swiper-slide shrink-0 h-auto !flex">
                            <div class="{{ $item['bg'] ?? 'additional-blue' }} 
                                text-white rounded-3xl shadow-xl p-6 pb-12 
                                flex flex-col">

                                <!-- IMAGE -->
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
