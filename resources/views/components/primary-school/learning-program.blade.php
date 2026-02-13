@props([
    'whyCards' => [
        [
            'number' => 1,
            'title' => 'National',
            'description' => 'Aligned with the national curriculum for structured academic growth.',
            'list' => [
                'Indonesia Language',
                'Mathematics',
                'Science and Social Studies',
                'Physical Education, Sports, and Health',
                'Arts and Culture',
                'Pancasila and Civic Education',
            ],
            'bg' => 'bg-aditional-blue',
            'color' => 'text-aditional-blue',
        ],
        [
            'number' => 2,
            'title' => 'National Plus',
            'description' => 'Enhanced national curriculum with global learning perspectives.',
            'list' => ['Mathematics', 'Science', 'English Language'],
            'bg' => 'bg-aditional-orange',
            'color' => 'text-aditional-orange',
        ],
        [
            'number' => 3,
            'title' => 'Islamic',
            'description' => 'Balanced education integrating academics with Islamic values.',
            'list' => [
                'Islamic Creed and Character Education',
                'Islamic Jurisprudence',
                'Shirah Nabawi',
                'Qur’anic Studies',
                'Arabic Language',
            ],
            'bg' => 'bg-aditional-purple',
            'color' => 'text-aditional-purple',
        ],
        [
            'number' => 4,
            'title' => 'Technology',
            'description' => 'Future-ready skills through coding, AI, and digital innovation.',
            'list' => ['Microsoft Office Skills', 'Coding and Programming'],
            'bg' => 'bg-aditional-red',
            'color' => 'text-aditional-red',
        ],
        [
            'number' => 5,
            'title' => 'Additional Activities',
            'description' => 'Enriching programs that support creativity and personal development.',
            'list' => ['Morning Dhikr', 'Personal Financial Planning', 'Trilingual Program'],
            'bg' => 'bg-accent',
            'color' => 'text-accent',
        ],
        [
            'number' => 6,
            'title' => 'Consulting Service',
            'description' => 'Expert guidance to support educational planning and growth.',
            'list' => ['Consultations with Educational Staff and Teachers'],
            'bg' => 'bg-secondary',
            'color' => 'text-secondary',
        ],
    ],
])

<section id="primary-school-learning-program" class="relative overflow-hidden py-12 lg:py-20">
    <div class="relative mx-auto max-w-7xl px-6 lg:mt-30">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="mb-5">
                <span
                    class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                    Learning Program
                </span>
            </div>

            <h2 class="text-h2 font-bold italic leading-tight mb-5">
                Programs Designed for Meaningful Learning
            </h2>

            <p class="text-body-large">
                Our learning programs are thoughtfully developed to support students’ academic progress, character
                building, and personal growth through structured guidance and flexible learning approaches.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($whyCards as $item)
                <div class="{{ $item['bg'] }} text-background shadow-xl rounded-3xl py-5 pl-4 pr-6 min-h-[300px]">
                    <div class="flex gap-3">
                        <div>
                            <span
                                class="flex items-center justify-center w-6 h-6 mb-3 rounded-full bg-background {{ $item['color'] }}">
                                <h5 class="text-h5 font-bold">
                                    {{ $item['number'] }}
                                </h5>
                            </span>
                        </div>
                        <div class="flex-1">
                            <h5 class="text-h5 font-bold mb-3">
                                {{ $item['title'] }}
                            </h5>
                            <p class="text-sm text-justify">
                                {{ $item['description'] }}
                            </p>
                            <hr class="my-3">
                            <ul class="list-disc pl-5 space-y-2 text-sm mb-5">
                                @foreach ($item['list'] as $listItem)
                                    <li>{{ $listItem }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
