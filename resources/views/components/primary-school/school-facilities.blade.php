@props([
    'items' => [
        [
            'title' => 'Student Dashboard',
            'content' => 'A personalized dashboard where students can track their progress,
                access learning materials, and stay organized with assignments and schedules.',
            'open' => true,
        ],
        [
            'title' => 'Learning Kit',
            'content' => 'To support interactive and practical learning, Alhazen School provides various learning kits, including workbooks, e-modules, and study books.',
            'open' => false,
        ],
        [
            'title' => 'School Uniform',
            'content' => 'Students are required to wear a school uniform that reflects the values of modesty, discipline, and unity.',
            'open' => false,
        ],
        [
            'title' => 'Zoom & Exclusive Group',
            'content' => 'Students participate in exclusive group sessions via Zoom, allowing for personalized attention and interactive learning experiences.',
            'open' => false,
        ],
        [
            'title' => 'Learning Schedule',
            'content' => 'Our structured learning schedule ensures consistent and effective learning sessions, helping students stay on track with their academic goals.',
            'open' => false,
        ],
        [
            'title' => 'Consultation Sessions',
            'content' => 'Students receive personalized consultation sessions with teachers to address academic concerns, clarify doubts, and receive guidance for improvement.',
            'open' => false,
        ],
    ],
])

<section id="primary-school-school-facilities" class="relative py-12 lg:py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- LEFT CONTENT -->
            <div>
                <div class="mb-5">
                    <span
                        class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                        School Facilities
                    </span>
                </div>

                <h2 class="text-h2 font-bold italic leading-tight mb-5">
                    Supportive Learning Environment
                </h2>

                <p class="text-body-large mb-10">
                    Our school facilities are thoughtfully designed to create a safe, comfortable, and supportive environment where students can learn, interact, and develop both academically and personally.
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
                <img src="{{ asset('assets/kids/primary-school/school-facilities-img-1.webp') }}" alt="Family Learning" class="rounded-3xl w-full h-70 object-cover brightness-70">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <img src="{{ asset('assets/kids/primary-school/school-facilities-img-2.webp') }}" alt="Parent Support" class="rounded-3xl w-full h-full object-cover brightness-70">

                    <!-- Highlight Card -->
                    <div class="bg-accent text-white rounded-3xl p-8 flex flex-col justify-between">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full bg-accent brightness-75 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>

                        <div>
                            <h3 class="text-h3 font-bold mb-2">96%</h3>
                            <h4 class="text-h4 font-bold mb-3">Learning Comfort</h4>
                            <p class="text-sm text-justify">
                                Students feel more comfortable and engaged in a well-designed learning environment that supports focus, interaction, and confidence during school activities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
