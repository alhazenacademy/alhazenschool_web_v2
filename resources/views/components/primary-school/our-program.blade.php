@php
    $slides = [
        [
            'title' => 'Full Online Group Learning',
            'desc' =>
                'A structured online group learning program designed to support students through interactive virtual classes while maintaining academic quality and Islamic values.',
            'list' => ['Group-based online learning sessions', 'Interactive discussions and guided instruction'],
            'image' => asset('assets/kids/primary-school/our-programs-img-1.webp'),
            'route' => route('full-online-group-learning'),
        ],
        [
            'title' => 'Hybrid Group Learning',
            'desc' =>
                'A balanced learning program that combines face-to-face sessions and online classes to support academic growth, social interaction, and learning flexibility.',
            'list' => ['Combination of offline and online learning method', 'Scheduled face-to-face classes with teachers'],
            'image' => asset('assets/kids/primary-school/our-programs-img-2.webp'),
            'route' => route('hybrid-group-learning'),
        ],
        [
            'title' => 'Guided Self Learning',
            'desc' =>
                'An independent learning program supported by structured guidance, digital resources, and regular evaluations to build responsibility and learning confidence.',
            'list' => ['Parent-guided learning with structured syllabus', 'Access to learning modules and digital resources'],
            'image' => asset('assets/kids/primary-school/our-programs-img-3.webp'),
            'route' => route('guided-self-learning'),
        ],
    ];
@endphp
<section id="primary-school-our-programs" class="relative py-12 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- Orange Wrapper -->
        <div class="relative rounded-[40px] px-4 sm:px-8 lg:px-20 py-12 lg:py-16 bg-no-repeat bg-center bg-cover bg-primary shadow-lg"
            style="background-image: url('{{ asset('assets/kids/primary-school/our-programs-bg.webp') }}');">
            <!-- Header -->
            <div class="text-center text-white max-w-3xl mx-auto mb-10 lg:mb-14">
                <div class="mb-5">
                    <span
                        class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary bg-background">
                        Our Programs
                    </span>
                </div>
                <h2 class="text-h2 font-bold italic leading-tight mb-5">
                    Choose Your Program
                </h2>
                <p class="text-body">
                    Explore our carefully designed learning programs that combine academic excellence, Islamic values, and flexible learning approaches to support each child’s unique potential and learning journey.
                </p>
            </div>

            <!-- Slider Card -->
            <div class="relative max-w-5xl mx-auto">
                <div class="swiper primary-our-programs-swiper">

                    <div class="swiper-wrapper">
                        @foreach ($slides as $slide)
                            <div class="swiper-slide">
                                <div
                                    class="bg-white rounded-[24px] lg:rounded-[32px] p-6 sm:p-8 lg:p-12 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10 items-center shadow-xl">

                                    <!-- Image -->
                                    <div class="flex justify-center order-1 lg:order-2">
                                        <img src="{{ asset($slide['image']) }}" alt="{{ $slide['title'] }}"
                                            class="w-full max-w-sm h-48 sm:h-64 lg:h-[360px] rounded-2xl object-cover brightness-70"
                                            loading="lazy">
                                    </div>

                                    <!-- Text -->
                                    <div class="text-center lg:text-left order-2 lg:order-1">
                                        <h3 class="text-h3 font-bold italic mb-5 text">
                                            {{ $slide['title'] }}
                                        </h3>

                                        <p class="text-body text-text text-justify">
                                            {{ $slide['desc'] }}
                                        </p>

                                        <hr class="my-5">

                                        <ul class="space-y-2 text-small mb-5">
                                            @foreach ($slide['list'] as $list)
                                                <li class="flex gap-2">
                                                    <svg class="w-4 h-4 text-text mt-1" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="3" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    <span>{{ $list }}</span>
                                                </li>
                                            @endforeach
                                        </ul>

                                        <a href="{{ $slide['route'] }}"
                                            class="inline-flex items-center gap-3 rounded-full bg-primary px-6 py-3 text-background font-semibold shadow-lg transition-transform duration-200 hover:scale-105">
                                            <span>Learn More</span>

                                            <!-- Arrow Icon -->
                                            <span
                                                class="flex items-center justify-center w-7 h-7 rounded-full bg-secondary text-background">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 5l7 7-7 7" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Navigation -->
                <button
                    class="primary-our-programs-prev absolute -left-4 lg:left-[-20px] top-1/2 -translate-y-1/2 z-10 h-9 w-9 lg:h-10 lg:w-10 rounded-full bg-secondary text-white shadow-lg flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 lg:w-6 lg:h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button
                    class="primary-our-programs-next absolute -right-4 lg:right-[-20px] top-1/2 -translate-y-1/2 z-10 h-9 w-9 lg:h-10 lg:w-10 rounded-full bg-secondary text-white shadow-lg flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 lg:w-6 lg:h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>
