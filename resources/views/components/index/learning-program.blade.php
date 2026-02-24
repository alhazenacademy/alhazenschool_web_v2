@php
    $learningPrograms = [
        [
            'title' => 'Full Online Group Learning',
            'desc' =>
                'A structured online group learning program designed to support students through interactive virtual classes while maintaining academic quality and Islamic values.',
            'points' => [
                'Group-based online learning sessions',
                'Interactive discussions and guided instruction',
                'Access to digital learning materials and assignments',
            ],
            'image' => asset('assets/kids/index-program-learning/img-1.webp'),
            'bg' => 'additional-blue',
        ],
        [
            'title' => 'Hybrid Group Learning',
            'desc' =>
                'A balanced learning program that combines face-to-face sessions and online classes to support academic growth, social interaction, and learning flexibility.',
            'points' => [
                'Combination of offline and online learning method',
                'Scheduled face-to-face classes with teachers',
                'Supported by e-learning materials and assignments',
            ],
            'image' => asset('assets/kids/index-program-learning/img-2.webp'),
            'bg' => 'additional-orange',
        ],
        [
            'title' => 'Guided Self Learning',
            'desc' =>
                'An independent learning program supported by structured guidance, digital resources, and regular evaluations to build responsibility and learning confidence.',
            'points' => [
                'Parent-guided learning with structured syllabus',
                'Access to learning modules and digital resources',
                'Regular teacher monitoring and evaluation',
            ],
            'image' => asset('assets/kids/index-program-learning/img-3.webp'),
            'bg' => 'additional-purple',
        ],
    ];
@endphp

<section id="learning-system" class="relative py-12 lg:py-40">

    <!-- Container kiri -->
    <div class="relative mx-auto max-w-7xl px-6">
        <div class="flex items-center gap-16">

            <!-- Left Content -->
            <div class="max-w-[500px] xl:max-w-[600px] 2xl:max-w-[700px]">
                <div class="mb-5">
                    <span
                        class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                        Learning System
                    </span>
                </div>

                <h2 class="text-h2 font-bold italic leading-tight mb-5">
                    Our School Program
                </h2>

                <p class="text-body text-justify mb-5">
                    Alhazen School offers structured school programs designed to support students through a flexible
                    hybrid learning model while maintaining strong academic and Islamic foundations.
                </p>

                <p class="text-body text-justify">
                    Each program is developed to nurture character, build essential skills, and help students adapt
                    confidently in an increasingly digital world.
                </p>
            </div>

        </div>
    </div>

    <!-- Swiper kanan (keluar container) -->
    <div
        class="relative mt-12 lg:absolute lg:top-1/2 lg:-translate-y-1/2 lg:right-0 lg:w-[500px] xl:w-[680px] 2xl:w-[768px] lg:mt-0 flex items-start">

        <div class="w-full overflow-hidden pl-6 lg:pl-12">
            <div class="swiper learningProgramSwiper cursor-grab">
                <div class="swiper-wrapper">

                    @foreach ($learningPrograms as $program)
                        <div class="swiper-slide w-[500px] shrink-0">
                            <div
                                class="rounded-3xl p-6 pb-12 text-white {{ $program['bg'] }}
                                flex flex-col min-h-[500px] lg:min-h-[580px] 2xl:min-h-[550px]">

                                <img src="{{ asset($program['image']) }}"
                                    class="w-full h-40 sm:h-44 lg:h-48 object-cover rounded-2xl mb-5 brightness-70"
                                    alt="{{ $program['title'] }}">

                                <h3 class="text-h4 font-bold mb-3 text-justify">
                                    {{ $program['title'] }}
                                </h3>

                                <p class="text-body mb-5 text-white/90 text-justify">
                                    {{ $program['desc'] }}
                                </p>

                                <ul class="text-small space-y-2 mt-auto">
                                    @foreach ($program['points'] as $point)
                                        <li class="flex items-start gap-2">
                                            <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-white"></span>
                                            <span class="leading-snug">{{ $point }}</span>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

</section>
