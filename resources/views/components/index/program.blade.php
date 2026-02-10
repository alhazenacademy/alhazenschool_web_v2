@php
    $programs = [
        [
            'title' => 'Primary School Program',
            'grade' => 'Grade 1 – 6',
            'desc' =>
                'Designed for elementary learners, this program focuses on foundational literacy, numeracy, Islamic values, and early exposure to technology through guided hybrid learning.',
            'image' => asset('assets/kids/index-program/primary.webp'),
            'status' => 'active',
            'link' => '#',
        ],
        [
            'title' => 'Junior High School Program',
            'grade' => 'Grade 7 – 9',
            'desc' =>
                'A structured program that strengthens academic competence, critical thinking, and digital skills while nurturing Islamic character and responsible independence.',
            'image' => asset('assets/kids/index-program/jhs.webp'),
            'status' => 'coming',
            'link' => '#',
        ],
        [
            'title' => 'Senior High School Program',
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
        <div class="relative rounded-[28px] px-6 sm:px-12 py-12 sm:py-16 text-background bg-accent shadow-[0_20px_50px_rgba(16,185,129,.25)]"
            style="background-image: url('{{ asset('assets/kids/about/about-vision-mission-bg.webp') }}'); background-size: contain; background-position: center; background-repeat: no-repeat;">

            {{-- Header --}}
            <div class="items-center text-center max-w-2xl mx-auto mb-12">
                <div class="mb-5">
                    <span
                        class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-accent text-accent bg-background">
                        Our Education Pathway
                    </span>
                </div>

                <h2 class="text-h2 font-bold italic leading-tight mb-5">
                    Study with Alhazen School
                </h2>

                <p class="text-body text-center">
                    Alhazen School offers structured school programs designed to support students at different learning
                    stages through an integrated Islamic, academic, and technology-based hybrid education model.
                </p>
            </div>

            {{-- Program Cards --}}
            <div class="grid grid-cols-1 px-4 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($programs as $program)
                    <div class="bg-white rounded-3xl p-5 shadow-md flex flex-col h-full text-gray-900">

                        <img src="{{ asset($program['image']) }}" class="w-full h-40 object-cover rounded-2xl mb-5"
                            alt="{{ $program['title'] }}">

                        <h3 class="text-h5 font-bold">
                            {{ $program['title'] }}
                        </h3>

                        <p class="text-sm text-gray-500 mb-3">
                            {{ $program['grade'] }}
                        </p>

                        <p class="text-gray-600 text-body mb-6 flex-grow">
                            {{ $program['desc'] }}
                        </p>

                        {{-- Button --}}
                        @if ($program['status'] === 'active')
                            <a href="{{ $program['link'] }}"
                                class="inline-flex items-center gap-2 rounded-full bg-secondary px-4 py-2 text-white text-sm font-semibold w-fit mx-auto">
                                Learn More
                                <span class="flex items-center justify-center w-6 h-6 rounded-full bg-white/20">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                            </a>
                        @else
                            <button
                                class="inline-flex items-center gap-2 rounded-full bg-gray-200 px-4 py-2 text-gray-500 text-sm font-semibold w-fit mx-auto cursor-not-allowed">
                                Coming Soon
                                <span class="flex items-center justify-center w-6 h-6 rounded-full bg-gray-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                            </button>
                        @endif
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
