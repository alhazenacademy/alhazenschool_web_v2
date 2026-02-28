@props([
    'subjectCards' => [
        [
            'number' => '1',
            'title' => 'Clubs & Activities',
            'description' => 'A variety of clubs designed to nurture students’ spiritual growth, academic curiosity, creativity, and communication skills.',
            'bg' => 'bg-aditional-red',
            'color' => 'text-aditional-red',
            'list' => [
                "STEM-Q Project",
                'Entrepreneurship Syariah',
                'Arabic Language Club',
                'English Language Club',
            ],
        ],
        [
            'number' => '2',
            'title' => 'Parent & Support Programs',
            'description' => 'Programs that strengthen collaboration between school and families, supporting student development through guidance and engagement.',
            'bg' => 'bg-accent',
            'color' => 'text-accent',
            'list' => [
                'Islamic Study Groups / Webinars',
                'Parenting Sessions',
                'Parent-Teacher Meetings',
                'Socialization Events',
            ],
        ],
        [
            'number' => '3',
            'title' => 'After School Programs<sup>*</sup> ',
            'description' => 'Optional after-school enrichment programs that enhance academic skills, religious understanding, and practical competencies.',
            'bg' => 'bg-secondary',
            'color' => 'text-secondary',
            'list' => [
                'Coding & Game Development',
                'Robotics',
                'Fikih Ibadah',
                'Animation',
                'Islamic Public Speaking',
                'Financial Literacy Sharia for Junior',
                'Foreign Language (English & Arabic)<br><br>*Additional fees may apply.',
            ],
        ],
    ]
])

<section id="k-12-junior-subjects-offered" class="relative overflow-hidden py-12 lg:py-20">
    <div class="relative mx-auto max-w-7xl px-6">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="mb-5">
                <span
                    class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                    Activities & Extracurriculars
                </span>
            </div>

            <h2 class="text-h2 font-bold italic leading-tight mb-5">
                A Vibrant Range of Activities
            </h2>

            <p class="text-body-large">
                We offer a vibrant range of curricular and extracurricular activities designed to nurture students’ spiritual growth, academic excellence, creativity, and life skills—while strengthening collaboration between school and families.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($subjectCards as $item)
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
                                {!! $item['title'] !!}
                            </h5>
                            <p class="text-sm text-justify">
                                {{ $item['description'] }}
                            </p>
                            <hr class="my-3">
                            <ul class="list-disc pl-5 space-y-2 text-sm mb-5">
                                @foreach ($item['list'] as $listItem)
                                    <li>{!! $listItem !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
