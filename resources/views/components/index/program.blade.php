@php
    $programs = [
        [
            'title' => 'Primary School <br> Program',
            'grade' => 'Grade 1 – 6',
            'desc' =>
                'Designed for elementary learners, this program focuses on foundational literacy, numeracy, Islamic values, and early exposure to technology through guided hybrid learning.',
            'image' => asset('assets/kids/index-program/primary.webp'),
            'status' => 'active',
            'link' => route('full-online-group-learning'),
        ],
        [
            'title' => 'Junior High School <br>Program',
            'grade' => 'Grade 7 – 9',
            'desc' =>
                'A structured program that strengthens academic competence, critical thinking, and digital skills while nurturing Islamic character and responsible independence.',
            'image' => asset('assets/kids/index-program/jhs.webp'),
            'status' => 'coming',
            'link' => '#',
        ],
        [
            'title' => 'Senior High School <br>Program',
            'grade' => 'Grade 10 – 12',
            'desc' =>
                'Prepares students for higher education and real-world challenges through advanced academic subjects, project-based learning, and technology integration.',
            'image' => asset('assets/kids/index-program/shs.webp'),
            'status' => 'coming',
            'link' => '#',
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

            {{-- Program Cards --}}
            <div class="grid grid-cols-1 px-4 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($programs as $program)
                    <div class="bg-white text-text rounded-3xl shadow-xl p-6 flex flex-col">

                        <img src="{{ asset($program['image']) }}" alt="{{ $program['title'] }}"
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

                                <!-- Arrow Icon -->
                                <span
                                    class="flex items-center justify-center w-7 h-7 rounded-full bg-secondary text-background">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                            </a>
                        @else
                            <a href="#"
                                class="inline-flex items-center gap-3 rounded-full bg-gray-200 px-6 py-3 text-gray-500 font-semibold shadow-lg cursor-not-allowed w-fit mx-auto">
                                <span>Coming Soon</span>

                                <!-- Arrow Icon -->
                                <span
                                    class="flex items-center justify-center w-7 h-7 rounded-full bg-gray-300 text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                            </a>
                        @endif
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
