@props([
    'faqs' => [
        [
            'question' => 'What learning systems does Alhazen School use?',
            'answer' =>
                'Alhazen School uses a hybrid learning system that combines online instruction with optional offline activities to support academic growth and character development.',
            'open' => true,
        ],
        [
            'question' => 'Is this program suitable for full homeschooling?',
            'answer' =>
                'Yes. Our programs are designed to fully support homeschooling families with structured curriculum, guidance, and assessments.',
            'open' => false,
        ],
        [
            'question' => 'How are students evaluated?',
            'answer' =>
                'Students are evaluated through assignments, projects, assessments, and continuous progress monitoring based on their learning pathway.',
            'open' => false,
        ],
        [
            'question' => 'Can parents monitor learning progress?',
            'answer' =>
                'Absolutely. Parents receive regular reports and can communicate directly with teachers regarding their child’s progress.',
            'open' => false,
        ],
        [
            'question' => 'Are offline sessions mandatory?',
            'answer' => 'No. Offline sessions are optional and depend on the selected learning program.',
            'open' => false,
        ],
        [
            'question' => 'What age groups are supported?',
            'answer' => 'Our programs support students from early childhood through secondary education.',
            'open' => false,
        ],
    ],
])
<section id="program-faq" class="py-12 lg:py-24">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-14">
            <div class="mb-5">
                <span
                    class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                    Need More Information?
                </span>
            </div>

            <h2 class="text-h2 font-bold italic leading-tight mb-5">
                Frequently Asked Questions
            </h2>

            <p class="text-body-large">
                Find answers to common questions about our learning system, school programs,
                and how Alhazen School supports students in a hybrid learning environment.
            </p>
        </div>

        <!-- FAQ Grid -->
        <div class="columns-1 lg:columns-2 gap-6">
            @foreach ($faqs as $index => $faq)
                <div class="mb-4 break-inside-avoid">
                    <details @if ($faq['open']) open @endif
                        class="group rounded-2xl border border-gray-200 p-5 transition-all duration-300 open:bg-neutral/30">
                        <summary class="flex items-center justify-between cursor-pointer list-none">
                            <h6 class="text-h6 font-semibold flex-1">
                                {{ $faq['question'] }}
                            </h6>

                            <!-- Icon -->
                            <span
                                class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full border border-gray-300 text-gray-500 group-open:rotate-180 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </summary>

                        <div class="mt-4 text-body text-text leading-relaxed">
                            {{ $faq['answer'] }}
                        </div>
                    </details>
                </div>
            @endforeach
        </div>

    </div>
</section>
