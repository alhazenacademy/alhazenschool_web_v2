@props([
    'assesments' => [
        [
            'bg' => 'additional-blue',
            'image' => 'assets/kids/program/more/learning-method-img.webp',
            'title' => 'Teaching Approaches',
            'title_plain' => 'Teaching Approaches',
            'subtitle' => 'How Students Learn',
            'description' => '
                <ul class="list-disc pl-5 space-y-2">
                    <li><b>Project-Based Learning:</b> Students create integrative projects using the STEM-Q approach</li>
                    <li><b>Talaqqi & Tahsin:</b> Direct Qur\'anic guidance with sanad-certified teachers</li>
                    <li><b>Gamified Learning:</b> Kahoot!, Quizizz, interactive booklets</li>
                </ul>
            ',
        ],
        [
            'bg' => 'additional-orange',
            'image' => 'assets/kids/program/more/learning-method-img.webp',
            'title' => 'Assessment Methods',
            'title_plain' => 'Assessment Methods',
            'subtitle' => 'Measuring Progress',
            'description' => '
                <ul class="list-disc pl-5 space-y-2">
                    <li>Portfolios</li>
                    <li>Presentations</li>
                    <li>Memorization</li>
                    <li>Observational assessment of adab (manners) and behavior</li>
                </ul>
            ',
        ],
        [
            'bg' => 'additional-purple',
            'image' => 'assets/kids/program/more/learning-method-img.webp',
            'title' => 'Media & Technology',
            'title_plain' => 'Media & Technology',
            'subtitle' => 'Learning Tools',
            'description' => '
                <ul class="list-disc pl-5 space-y-2">
                    <li><b>Online Classroom:</b> Zoom</li>
                    <li><b>Learning Platform:</b> Alhazen School Dashboard</li>
                    <li><b>Video Learning:</b> YouTube Private, Loom, Canva Video (coming soon)</li>
                    <li><b>Digital Worksheets:</b> Canva-based & interactive PDFs</li>
                    <li><b>Evaluation Tools:</b> Google Forms, Quizizz, digital portfolios</li>
                    <li><b>Reporting System:</b> E-rapor (digital report cards)</li>
                </ul>
            ',
        ],
    ],
])

<section id="program-more-junior-learning-method" class="relative py-12 lg:py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="mb-5">
                <span
                    class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                    Learning Method
                </span>
            </div>

            <h2 class="text-h2 font-bold italic leading-tight mb-5">
                A Thoughtful Approach to Learning
            </h2>

            <p class="text-body-large">
                Our learning methods combine structured guidance, interactive sessions, and independent practice to support academic growth, character development, and adaptable learning experiences.
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
                        {!! $item['description'] !!}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
