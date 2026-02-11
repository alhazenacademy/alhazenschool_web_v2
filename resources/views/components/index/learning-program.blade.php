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
            'image' => asset('assets/kids/about/benefit-img-2.webp'),
            'bg' => 'bg-[#1F509A]',
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
            'image' => asset('assets/kids/index-program-learning/hybrid-group-learning.webp'),
            'bg' => 'bg-[#FF9F00]',
        ],
    ];
@endphp

<section id="learning-system" class="relative py-16 lg:py-24">

    <!-- Container kiri -->
    <div class="relative mx-auto max-w-7xl px-6">
        <div class="flex items-center gap-16">

            <!-- Left Content -->
            <div class="max-w-[520px] space-y-6">
                <span class="inline-block text-primary rounded-full border border-primary px-4 py-1 text-sm">
                    Learning System
                </span>

                <h2 class="text-h2 font-bold italic">
                    Our School Program
                </h2>

                <p class="text-body text-justify">
                    Alhazen School offers structured school programs designed to support students through a flexible
                    hybrid learning model while maintaining strong academic and Islamic foundations.
                </p>

                <p class="text-body text-justify">
                    Each program is developed to nurture character, build essential skills, and help students adapt
                    confidently in an increasingly digital world.
                </p>
            </div>

            <!-- Spacer agar layout seperti hero -->
            <div class="flex-1"></div>
        </div>
    </div>

    <!-- Swiper kanan (keluar container) -->
    <div
        class="relative mt-12 lg:absolute lg:top-1/2 lg:-translate-y-1/2 lg:right-0 lg:w-[720px] xl:w-[820px] lg:mt-0 flex items-start">

        <div class="w-full lg:pl-12">
            <div class="swiper learningProgramSwiper cursor-grab">
                <div class="swiper-wrapper">

                    @foreach ($learningPrograms as $program)
                        <div class="swiper-slide w-[420px] shrink-0">
                            <div
                                class="rounded-3xl p-6 text-white {{ $program['bg'] }}
                                flex flex-col min-h-[420px]">

                                <img src="{{ asset($program['image']) }}"
                                    class="w-full h-40 sm:h-44 lg:h-48 object-cover rounded-2xl mb-5"
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

