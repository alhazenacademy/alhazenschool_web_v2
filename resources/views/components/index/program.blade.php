@php
    $programs = [
        [
            'title' => 'Kindergarten <br> Program',
            'grade' => 'K1 – K2',
            'desc' =>
                'A nurturing early childhood program that focuses on character building, basic literacy and numeracy, Islamic values, and creative learning through play-based and guided activities.',
            'image' => asset('assets/kids/index-program/kdgt.webp'),
            'status' => 'active',
            'link' => route('k-12-kindergarten'),
        ],
        [
            'title' => 'Primary School <br> Program',
            'grade' => 'Grade 1 – 6',
            'desc' =>
                'Designed for elementary learners, this program focuses on foundational literacy, numeracy, Islamic values, and early exposure to technology through guided hybrid learning.',
            'image' => asset('assets/kids/index-program/primary.webp'),
            'status' => 'active',
            'link' => route('k-12-primary-school'),
        ],
        [
            'title' => 'Junior High School <br> Program',
            'grade' => 'Grade 7 – 9',
            'desc' =>
                'A structured program that strengthens academic competence, critical thinking, and digital skills while nurturing Islamic character and responsible independence.',
            'image' => asset('assets/kids/index-program/jhs.webp'),
            'status' => 'active',
            'link' => route('k-12-junior-high-school'),
        ],
        [
            'title' => 'Senior High School <br> Program',
            'grade' => 'Grade 10 – 12',
            'desc' =>
                'Prepares students for higher education and real-world challenges through advanced academic subjects, project-based learning, and technology integration.',
            'image' => asset('assets/kids/index-program/shs.webp'),
            'status' => 'coming',
            'link' => route('k-12-high-school'),
        ],
    ];
@endphp

<section id="index-program" class="relative py-12 lg:py-20">
    <div class="max-w-7xl mx-auto px-6">
        {{-- Card Wrapper --}}
        <div class="relative rounded-[40px] px-4 sm:px-8 lg:px-20 py-12 lg:py-16 bg-no-repeat bg-center bg-cover bg-accent shadow-lg"
            style="background-image: url('{{ asset('assets/kids/index-program/bg.webp') }}');">

            {{-- Header --}}
            <div class="text-center text-white max-w-3xl mx-auto mb-10 lg:mb-14">
                <div class="mb-5">
                    <span
                        class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-accent text-accent bg-background">
                        Our Education Pathway
                    </span>
                </div>

                <h2 class="text-h2 font-bold italic leading-tight mb-5">
                    Study with Alhazen School
                </h2>

                <p class="text-body">
                    Alhazen School offers structured school programs designed to support students at different learning
                    stages through an integrated Islamic, academic, and technology-based hybrid education model.
                </p>
            </div>

            {{-- Swiper --}}
            <div class="swiper index-program-swiper px-4">
                <div class="swiper-wrapper items-stretch">

                    @foreach ($programs as $program)
                        <div class="swiper-slide h-full flex">
                            <div class="bg-white text-text rounded-3xl shadow-xl p-6 flex flex-col h-full min-h-[520px] lg:min-h-[600px] xl:min-h-[530px]">

                                <img src="{{ $program['image'] }}" alt="{{ strip_tags($program['title']) }}"
                                    class="rounded-2xl mb-6 w-full h-[150px] object-cover brightness-70">

                                <h4 class="text-h4 font-bold mb-1">
                                    {!! $program['title'] !!}
                                </h4>

                                <p class="text-sm opacity-90 mb-4">
                                    {{ $program['grade'] }}
                                </p>

                                <p class="text-body leading-relaxed text-justify flex-grow mb-6">
                                    {{ $program['desc'] }}
                                </p>

                                {{-- Button --}}
                                @if ($program['status'] === 'active')
                                    <a href="{{ $program['link'] }}"
                                        class="inline-flex items-center gap-3 rounded-full bg-primary px-6 py-3 text-background font-semibold shadow-lg transition-transform duration-200 hover:scale-105 w-fit mx-auto">
                                        <span>Learn More</span>
                                        <span
                                            class="flex items-center justify-center w-7 h-7 rounded-full bg-secondary text-background">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </span>
                                    </a>
                                @else
                                    <span
                                        class="inline-flex items-center gap-3 rounded-full bg-gray-200 px-6 py-3 text-gray-500 font-semibold shadow-lg cursor-not-allowed w-fit mx-auto">
                                        Coming Soon
                                    </span>
                                @endif
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
            <!-- Navigation -->
            <button
                class="index-program-prev absolute left-2 lg:left-[60px] top-2/3 -translate-y-2/3 z-20 h-9 w-9 lg:h-10 lg:w-10 rounded-full bg-accent text-white shadow-lg flex items-center justify-center">
                <!-- overlay gelap -->
                <span class="absolute inset-0 rounded-full bg-black/25"></span>

                <!-- icon -->
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="relative w-5 h-5 lg:w-6 lg:h-6 text-white"
                    fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button
                class="index-program-next absolute right-2 lg:right-[60px] top-2/3 -translate-y-2/3 z-20 h-9 w-9 lg:h-10 lg:w-10 rounded-full bg-accent text-white shadow-lg flex items-center justify-center">
                <span class="absolute inset-0 rounded-full bg-black/25"></span>

                <!-- icon -->
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="relative w-5 h-5 lg:w-6 lg:h-6 text-white"
                    fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>
</section>
