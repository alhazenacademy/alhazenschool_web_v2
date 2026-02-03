@props([
    'curriculums' => [
        [
            'bg' => 'additional-blue',
            'image' => 'assets/kids/about/integrated-curriculum-img.webp',
            'title' => 'Islamic<br>Curriculum',
            'title_plain' => 'Islamic Curriculum',
            'subtitle' => 'Faith-Based Education',
            'description' => 'The Islamic Curriculum integrates Islamic values with skills development
            and the national curriculum. It builds a strong foundation in aqeedah
            and character through both academic subjects and daily school activities.',
        ],
        [
            'bg' => 'additional-orange',
            'image' => 'assets/kids/about/integrated-curriculum-img.webp',
            'title' => 'National<br>Curriculum',
            'title_plain' => 'National Curriculum',
            'subtitle' => 'Holistic Learning',
            'description' => 'The National Curriculum emphasizes essential learning while giving
            students time to explore concepts deeply. It supports flexible,
            student-centered instruction adapted to individual needs and interests.',
        ],
        [
            'bg' => 'additional-purple',
            'image' => 'assets/kids/about/integrated-curriculum-img.webp',
            'title' => 'National Plus<br>Curriculum',
            'title_plain' => 'National Plus Curriculum',
            'subtitle' => 'Cambridge Adapted Curriculum',
            'description' => 'Adapted from Cambridge and Singapore curricula, this program focuses
            on English, Mathematics, and Science, with clear learning objectives
            and consistent assessment to support student progress.',
        ],
        [
            'bg' => 'additional-red',
            'image' => 'assets/kids/about/integrated-curriculum-img.webp',
            'title' => 'Technology<br>Curriculum',
            'title_plain' => 'Technology Curriculum',
            'subtitle' => 'Future Skills',
            'description' => 'The ICT Curriculum equips students with future-ready skills such as
            programming, data processing, graphic design, and internet literacy,
            designed for both online and offline learning environments.',
        ],
    ],
])

<section id="about-integrated-curriculum" class="relative py-12 lg:py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="mb-5">
                <span
                    class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                    Curriculum Approach
                </span>
            </div>

            <h2 class="text-h2 font-bold italic leading-tight mb-5">
                Integrated Curriculum
            </h2>

            <p class="text-body-large">
                A holistic learning framework that integrates Islamic values, academic excellence,
                character development, and technological literacy into a unified educational experience.
            </p>
        </div>

        <!-- Curriculum Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($curriculums as $item)
                <div class="{{ $item['bg'] }} text-white rounded-3xl shadow-xl p-6 pb-12 flex flex-col">
                    <img src="{{ asset($item['image']) }}" alt="{{ $item['title_plain'] }}"
                        class="rounded-2xl mb-6 w-full h-[150px] object-cover brightness-70">

                    <h4 class="text-h4 font-bold mb-1">
                        {!! $item['title'] !!}
                    </h4>

                    <p class="text-sm opacity-90 mb-4">
                        {{ $item['subtitle'] }}
                    </p>

                    <p class="text-body leading-relaxed text-justify">
                        {{ $item['description'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
