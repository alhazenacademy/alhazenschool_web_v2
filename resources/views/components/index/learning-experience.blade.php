@php
    $slides = [
        [
            'title' => 'Integrated Curriculum',
            'desc' =>
                'Alhazen School implements an integrated curriculum that brings together national, national plus, Islamic, and technology-based learning. These four curricula are seamlessly combined to nurture well-rounded students with strong academic foundations, moral values, and future-ready skills.',
            'image' => asset('assets/kids/index-learning/integrated-curriculum.webp'),
            'link' => route('about') . '#about-integrated-curriculum',
        ],
        [
            'title' => 'A Structured and Flexible Way to Learn',
            'desc' =>
                'Learning at Alhazen School follows a well-structured yet flexible system that adapts to students’ developmental stages and learning needs. Through a balanced blend of guided instruction, independent exploration, and interactive activities, students are encouraged to grow confidently and responsibly.',
            'image' => asset('assets/kids/index-learning/flexible-way-to-learn.webp'),
            'link' => route('about') . '#about-learning-system',
        ],
        [
            'title' => 'Measuring Student Progress Holistically',
            'desc' =>
                'Student progress at Alhazen School is measured holistically, taking into account academic achievement, character development, spiritual growth, and social skills. This comprehensive assessment approach ensures that every child’s strengths, challenges, and potential are recognized and supported.',
            'image' => asset('assets/kids/index-learning/measuring-student-progres.webp'),
            'link' => route('about') . '#about-assesment',
        ],
    ];
@endphp
<section id="learning-experience" class="relative py-12 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- Orange Wrapper -->
        <div class="relative rounded-[40px] px-4 sm:px-8 lg:px-20 py-12 lg:py-16 bg-no-repeat bg-center bg-cover bg-primary shadow-lg"
            style="background-image: url('{{ asset('assets/kids/index-learning/bg.webp') }}');">

            <!-- Header -->
            <div class="text-center text-white max-w-3xl mx-auto mb-10 lg:mb-14">

                <span class="inline-block mb-4 text-primary rounded-full bg-white px-4 py-1 text-sm">
                    Our Learning Experience
                </span>

                <h2 class="font-bold italic leading-tight mb-4 text-2xl sm:text-3xl lg:text-h2">
                    What It’s Like to Learn at Alhazen School
                </h2>

                <p class="text-body text-white">
                    A holistic learning system that combines Islamic values, academic excellence,
                    and technology-driven education through a flexible hybrid approach.
                </p>
            </div>

            <!-- Slider Card -->
            <div class="relative max-w-5xl mx-auto">
                <div class="swiper learningSwiper">

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

                                        <p class="text-body text-text text-justify mb-5">
                                            {{ $slide['desc'] }}
                                        </p>

                                        <a href="{{ $slide['link'] }}"
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
                    class="learning-prev absolute left-2 lg:left-[-20px] top-1/2 -translate-y-1/2 z-10 h-9 w-9 lg:h-10 lg:w-10 rounded-full bg-secondary text-white shadow-lg flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 lg:w-6 lg:h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button
                    class="learning-next absolute right-2 lg:right-[-20px] top-1/2 -translate-y-1/2 z-10 h-9 w-9 lg:h-10 lg:w-10 rounded-full bg-secondary text-white shadow-lg flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 lg:w-6 lg:h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>
