@props([
    'title' => 'Student Achievement Targets',
    'description' => 'Our achievement targets are designed to nurture students’ spiritual growth, creativity, critical thinking, and technological skills across grade levels, ensuring holistic development aligned with Islamic values and future-ready competencies.',
    'objectives' => [
        [
            'title' => 'All Students',
            'subtitle' => 'Spiritual Foundation',
            'description' => 'Students are expected to complete the memorization of Juz 30 (the last chapter of the Qur’an) as a foundation for strong Islamic character and spiritual growth.',
            'bg' => 'additional-blue',
            'image' => asset('assets/kids/k-12/primary-school/student-achievement-1.webp'),
        ],
        [
            'title' => 'Grades 1–3',
            'subtitle' => 'Creative & Critical Thinking',
            'description' => 'Students develop essential thinking and communication skills by creating mind maps, delivering presentations, and designing STEM-Q based projects.',
            'bg' => 'additional-orange',
            'image' => asset('assets/kids/k-12/primary-school/student-achievement-2.webp'),
        ],
        [
            'title' => 'Grades 3–6',
            'subtitle' => 'Game & Application Development',
            'description' => 'Students learn to design and build interactive games and applications, strengthening logic, problem-solving, and digital creativity.',
            'bg' => 'additional-purple',
            'image' => asset('assets/kids/k-12/primary-school/student-achievement-3.webp'),
        ],
        [
            'title' => 'Grades 3–6',
            'subtitle' => 'Real-World Product',
            'description' => 'Students develop a fully functional application that can be published on the Play Store, encouraging innovation, ownership, and real-world impact.',
            'bg' => 'additional-red',
            'image' => asset('assets/kids/k-12/primary-school/student-achievement-4.webp'),
        ],
    ],
])

<section id="k-12-student-achievement-target" class="relative overflow-hidden py-12 lg:py-40">
    <div class="relative mx-auto max-w-7xl px-6">
        <div class="max-w-lg">
            <!-- Badge -->
            <div class="mb-5">
                <span
                    class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                    Student Learning Outcomes
                </span>
            </div>

            <!-- Title -->
            <h2 class="text-h2 font-bold italic leading-tight mb-5">
                {{ $title }}
            </h2>

            <!-- Description -->
            <p class="text-body text-justify mb-5">
                {{ $description }}
            </p>
        </div>
    </div>

    <!-- RIGHT SLIDER -->
    <div class="relative lg:absolute lg:top-10 xl:top-10 2xl:top-10 lg:right-0 lg:w-[500px] xl:w-[700px] 2xl:w-[1000px]">
        <div class="pl-6 lg:pl-12 overflow-visible">
            <div class="swiper program-more-program-objective-swiper cursor-grab">
                <div class="swiper-wrapper">
                    @foreach ($objectives as $item)
                        <div class="swiper-slide w-[500px] shrink-0">
                            <div
                                class="{{ $item['bg'] ?? 'additional-blue' }} text-white rounded-3xl shadow-xl p-6 pb-12 flex flex-col min-h-[500px] lg:min-h-[520px] 2xl:min-h-[480px]">

                                <div class="h-[200px] rounded-2xl overflow-hidden mb-6 shrink-0">
                                    <img src="{{ $item['image'] ?? asset('assets/kids/program/more/program-objective-img.webp') }}"
                                        alt="{{ $item['title'] }}"
                                        class="w-full h-full object-cover object-top brightness-75">
                                </div>

                                <div class="flex flex-col flex-1">
                                    <div>
                                        <h4 class="text-h4 font-bold mb-2">
                                            {!! $item['title'] !!}
                                        </h4>

                                        <p class="text-sm opacity-90 mb-4">
                                            {{ $item['subtitle'] }}
                                        </p>
                                    </div>
                                    <div class="flex-auto">
                                        <p class="text-body leading-relaxed text-justify">
                                            {{ $item['description'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
