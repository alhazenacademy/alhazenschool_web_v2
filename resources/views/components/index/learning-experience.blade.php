@php
    $slides = [
        [
            'title' => 'Integrated Curriculum',
            'desc' =>
                'Alhazen School implements an integrated curriculum consisting of four main curricula: national, national plus, Islamic, and technology. The four combinations of these curricula combine smoothly to produce the finest possible future generations.',
            'image' => asset('assets/kids/index-learning/integrated-curriculum.webp'),
        ],
    ];
@endphp
<section id="learning-experience" class="relative py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Orange Wrapper -->
        <div class="relative rounded-[48px] bg-primary px-6 py-16 lg:px-20">

            <!-- Header -->
            <<div class="text-center text-white max-w-3xl mx-auto mb-14 px-2 sm:px-4">

                <span class="inline-block mb-4 text-primary rounded-full bg-white px-4 py-1 text-sm">
                    Our Learning Experience
                </span>

                <h2 class="font-bold italic leading-tight mb-4 whitespace-nowrap text-h2 sm:text-h3 lg:text-h2">
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
                        <div class="swiper-slide h-auto">
                            <div
                                class="bg-white rounded-[32px] p-8 lg:p-12 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center shadow-xl">
                                <!-- Text -->
                                <div>
                                    <h3 class="text-h3 font-bold italic mb-4 text-gray-900">
                                        {{ $slide['title'] }}
                                    </h3>
                                    <p class="text-body text-gray-600 mb-6 text-justify">
                                        {{ $slide['desc'] }}
                                    </p>

                                    <a href="#"
                                        class="inline-flex items-center gap-2 rounded-full bg-primary px-4 py-1.5 text-white text-sm font-semibold shadow-md transition-transform duration-200 hover:scale-105">
                                        <span>Learn More</span>

                                        <!-- Arrow Icon -->
                                        <span
                                            class="flex items-center justify-center w-6 h-6 rounded-full bg-orange-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>

                                <!-- Image -->
                                <div class="flex justify-center">
                                    <img src="{{ asset($slide['image']) }}" alt="{{ $slide['title'] }}"
                                        class="w-full max-w-sm h-[360px] rounded-2xl object-cover" loading="lazy">
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <!-- Navigation -->
            <button
                class="learning-prev absolute left-[-20px] top-1/2 -translate-y-1/2 z-10 h-10 w-10 rounded-full bg-secondary text-white shadow-lg flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button
                class="learning-next absolute right-[-20px] top-1/2 -translate-y-1/2 z-10 h-10 w-10 rounded-full bg-secondary text-white shadow-lg flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>
</section>
