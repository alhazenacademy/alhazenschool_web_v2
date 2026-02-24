@php
    $learningMethods = [
        [
            'title' => 'Play-Based Learning',
            'title_plain' => 'Play-Based Learning',
            'subtitle' => 'Learning Through Play',
            'description' =>
                'Children learn naturally through guided play activities that stimulate creativity, problem-solving skills, and social interaction.',
            'bg' => 'additional-blue',
            'image' => 'assets/kids/program/more/learning-method-img.webp',
        ],
        [
            'title' => 'Project-Based Exploration',
            'title_plain' => 'Project-Based Exploration',
            'subtitle' => 'Hands-on Discovery',
            'description' =>
                'Hands-on projects encourage curiosity and exploration, allowing children to actively discover concepts through meaningful experiences.',
            'bg' => 'additional-orange',
            'image' => 'assets/kids/program/more/learning-method-img.webp',
        ],
        [
            'title' => 'Story-Based Learning',
            'title_plain' => 'Story-Based Learning',
            'subtitle' => 'Building Character & Values',
            'description' =>
                'Islamic stories and moral tales are used to nurture character development, values, and emotional understanding.',
            'bg' => 'additional-purple',
            'image' => 'assets/kids/program/more/learning-method-img.webp',
        ],
    ];
@endphp

<section id="k-12-kindergarten-daily-activity-structure" class="relative py-12 lg:py-24">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Header --}}
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="mb-5">
                <span
                    class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                    Daily Activity Structure
                </span>
            </div>

            <h2 class="text-h2 font-bold italic leading-tight mb-4">
                A Balanced Daily Learning Rhythm
            </h2>

            <p class="text-body text-justify">
                Our daily schedule is thoughtfully designed to create a balanced rhythm of learning, play, and reflection,
                helping children stay focused, engaged, and emotionally comfortable throughout the day.
            </p>
        </div>

        {{-- Daily Schedule --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20">
            {{-- Morning Session --}}
            <div class="bg-aditional-red text-background shadow-xl rounded-3xl py-5 pl-4 pr-6">
                <div class="flex gap-3">
                    <div>
                        <span
                            class="flex items-center justify-center w-6 h-6 mb-3 rounded-full bg-background text-aditional-red">
                            <h5 class="text-h5 font-bold">1</h5>
                        </span>
                    </div>
                    <div class="flex-1">
                        <h5 class="text-h5 font-bold mb-3">
                            Morning Session
                        </h5>
                        <p class="text-sm text-justify mb-3">
                            The morning session focuses on building positive learning habits, communication skills,
                            and early literacy through interactive and engaging activities.
                        </p>
                        <ul class="list-disc pl-5 space-y-2 text-sm mb-5">
                            <li>Circle Time</li>
                            <li>Literacy Time</li>
                            <li>Snack & Tidy-Up</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Afternoon Session --}}
            <div class="bg-accent text-background shadow-xl rounded-3xl py-5 pl-4 pr-6">
                <div class="flex gap-3">
                    <div>
                        <span
                            class="flex items-center justify-center w-6 h-6 mb-3 rounded-full bg-background text-accent">
                            <h5 class="text-h5 font-bold">2</h5>
                        </span>
                    </div>
                    <div class="flex-1">
                        <h5 class="text-h5 font-bold mb-3">
                            Afternoon Session
                        </h5>
                        <p class="text-sm text-justify mb-3">
                            The afternoon session encourages reflection, emotional awareness,
                            and calm transitions to help children process what they have learned.
                        </p>
                        <ul class="list-disc pl-5 space-y-2 text-sm mb-5">
                            <li>Reflection Time</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Learning Methods --}}
        <div class="mb-8">
            <h3 class="text-h3 font-bold italic mb-3 text-center">
                Learning Methods
            </h3>

            <p class="text-body text-center max-w-3xl mx-auto mb-8">
                Our learning methods are designed to actively engage children through meaningful experiences,
                encouraging curiosity, creativity, and character development in a fun and supportive environment.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-4">
                @foreach ($learningMethods as $item)
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

    </div>
</section>