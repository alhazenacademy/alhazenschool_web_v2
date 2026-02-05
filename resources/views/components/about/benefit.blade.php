@props([
    'items' => [
        [
            'title' => 'Time Saving',
            'content' => 'Optimized learning schedules reduce unnecessary travel and waiting time,
                allowing students and parents to focus more on meaningful activities.',
            'open' => true,
        ],
        [
            'title' => 'Effective Learning',
            'content' => 'Structured lessons and guided instruction ensure students understand
                concepts clearly and learn with purpose.',
            'open' => false,
        ],
        [
            'title' => 'Flexibility Study Time',
            'content' => 'Flexible schedules allow students to learn at their own pace,
                accommodating family routines and individual learning styles.',
            'open' => false,
        ],
        [
            'title' => 'Developing Children’s Talent',
            'content' => 'Personalized programs help identify and nurture each child’s unique talents,
                supporting both academic and non-academic growth.',
            'open' => false,
        ],
        [
            'title' => 'Cost Effective',
            'content' => 'Efficient learning models reduce unnecessary expenses while maintaining
                high-quality education and facilities.',
            'open' => false,
        ],
    ],
])

<section id="about-benefit" class="relative py-12 lg:py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

            <!-- LEFT CONTENT -->
            <div>
                <div class="mb-5">
                    <span
                        class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                        Key Benefit
                    </span>
                </div>

                <h2 class="text-h2 font-bold italic leading-tight mb-5">
                    Why Families Choose Alhazen School
                </h2>

                <p class="text-body-large mb-10">
                    Meaningful advantages that support effective learning, flexibility, and holistic student development
                    in a hybrid Islamic education environment.
                </p>

                <!-- Accordion -->
                <div class="space-y-4">
                    @foreach ($items as $item)
                        <details @if ($item['open']) open @endif
                            class="group rounded-xl border border-gray-200 p-5 transition-all duration-300 open:bg-neutral/30">
                            <summary class="flex justify-between items-center cursor-pointer font-semibold text-text">
                                <h6 class="text-h6 font-semibold flex-1">
                                    {{ $item['title'] }}
                                </h6>
                                <span class="text-xl group-open:rotate-45 transition">+</span>
                            </summary>

                            <p class="mt-4 text-body text-text leading-relaxed">
                                {{ $item['content'] }}
                            </p>
                        </details>
                    @endforeach
                </div>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="grid grid-cols-1 gap-4">
                <img src="{{ asset('assets/kids/about/benefit-img-1.webp') }}" alt="Family Learning"
                    class="rounded-3xl w-full object-cover brightness-70">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <img src="{{ asset('assets/kids/about/benefit-img-2.webp') }}" alt="Parent Support"
                        class="rounded-3xl w-full h-full object-cover brightness-70">

                    <!-- Highlight Card -->
                    <div class="bg-primary text-white rounded-3xl p-8 flex flex-col justify-between">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full bg-secondary mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>

                        <div>
                            <h3 class="text-h3 font-bold mb-2">95%</h3>
                            <h4 class="text-h4 font-bold mb-3">Confidence Growth</h4>
                            <p class="text-sm text-justify">
                                Students gain confidence after joining classes with us,
                                developing stronger communication skills, independence,
                                and readiness to face academic and real-world challenges.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
