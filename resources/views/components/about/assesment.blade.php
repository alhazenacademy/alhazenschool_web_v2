@props([
    'assesments' => [
        [
            'bg' => 'additional-blue',
            'image' => 'assets/kids/about/integrated-curriculum-img.webp',
            'title' => 'Cognitive Domain',
            'title_plain' => 'Cognitive Domain',
            'subtitle' => 'Knowledge Mastery',
            'description' => 'This assessment measures students’ understanding of concepts, reasoning ability, and knowledge application. It focuses on comprehension, judgment, imagination, and the ability to interpret and apply learning materials effectively.',
        ],
        [
            'bg' => 'additional-orange',
            'image' => 'assets/kids/about/integrated-curriculum-img.webp',
            'title' => 'Affective Domain',
            'title_plain' => 'Affective Domain',
            'subtitle' => 'Character & Attitude',
            'description' => 'This assessment evaluates students’ attitudes, values, and emotional development. It aims to build positive behavior, strong character, and Akhlakul Karimah alongside academic learning activities.',
        ],
        [
            'bg' => 'additional-purple',
            'image' => 'assets/kids/about/integrated-curriculum-img.webp',
            'title' => 'Psychomotor Domain',
            'title_plain' => 'Psychomotor Domain',
            'subtitle' => 'Skills & Practice',
            'description' => 'This assessment measures students’ practical skills and performance through observation and supervision. It focuses on how students demonstrate learning through actions, activities, and hands-on practice.',
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
                    Assesment
                </span>
            </div>

            <h2 class="text-h2 font-bold italic leading-tight mb-5">
                Measuring Student Progress Holistically
            </h2>

            <p class="text-body-large">
                Student learning at Alhazen School is assessed through three key aspects to ensure balanced academic achievement, character development, and overall growth.
            </p>
        </div>

        <!-- Curriculum Cards -->
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-4">
            @foreach ($assesments as $item)
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
