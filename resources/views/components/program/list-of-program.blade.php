@props([
    'programs' => [
        [   
            'border' => 'border-aditional-blue',
            'image' => 'assets/kids/program/list-program-card-1.webp',
            'title' => 'Full Online Group Learning',
            'description' => 'A structured online group learning program designed to support students through interactive virtual classes while maintaining academic quality and Islamic values.',
            'features' => ['Group-based online learning sessions', 'Interactive discussions and guided instruction'],
            'benefits' => [
                'Encourages collaboration and peer interaction in a virtual setting',
                'Structured curriculum with clear learning objectives',
                'Suitable for students needing flexibility without location limits',
            ],
            'prices' => [
                [
                    'label' => 'Online',
                    'color' => '#00D4AF',
                    'text' => 'By Request',
                ],
                [
                    'label' => 'Offline',
                    'color' => '#FFBF92',
                    'text' => 'By Request',
                ],
            ],
            'message' => 'Halo Tim Alhazen School, saya ingin menanyakan informasi lebih lanjut mengenai program Full Online Group Learning (sistem pembelajaran online, jadwal kelas, biaya, dan pendaftaran). Terima kasih.'
        ],
        [
            'border' => 'border-aditional-orange',
            'image' => 'assets/kids/program/list-program-card-2.webp',
            'title' => 'Hybrid Group Learning',
            'description' => 'A balanced learning program that combines face-to-face sessions and online classes to support academic growth, social interaction, and learning flexibility.',
            'features' => [
                'Combination of offline and online learning method', 
                'Scheduled face-to-face classes with teachers'
            ],
            'benefits' => [
                'Builds social skills through in-person interaction',
                'Maintains flexibility with online learning days',
                'Ideal for students who need structure and adaptability',
            ],
            'prices' => [
                [
                    'label' => 'Online',
                    'color' => '#00D4AF',
                    'text' => 'By Request',
                ],
                [
                    'label' => 'Hybrid',
                    'color' => '#FFBF92',
                    'text' => 'By Request',
                ],
            ],
            'message' => 'Halo Tim Alhazen School, saya ingin menanyakan informasi lebih lanjut mengenai program Hybrid Group Learning (kombinasi kelas online & tatap muka, jadwal belajar, biaya, dan pendaftaran). Terima kasih.'
        ],
        [
            'border' => 'border-aditional-purple',
            'image' => 'assets/kids/program/list-program-card-3.webp',
            'title' => 'Guided Self Learning',
            'description' => 'An independent learning program supported by structured guidance, digital resources, and regular evaluations to build responsibility and learning confidence.',
            'features' => [
                'Parent-guided learning with structured syllabus', 
                'Access to learning modules and digital resources'
            ],
            'benefits' => [
                'Access to learning modules and digital resources',
                'Encourages independence and self-discipline',
                'Suitable for families who want active involvement at home',
            ],
            'prices' => [
                [
                    'label' => 'Online',
                    'color' => '#00D4AF',
                    'text' => 'By Request',
                ],
            ],
            'message' => 'Halo Tim Alhazen School, saya ingin menanyakan informasi lebih lanjut mengenai program Guided Self Learning (pembelajaran mandiri dengan pendampingan, sistem belajar, biaya, dan pendaftaran). Terima kasih.'
        ],
    ],

    'sales_phone' => '082110004351',

])

<section id="program-list-of-program" class="relative py-12 lg:py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="mb-5">
                <span
                    class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                    List of Program
                </span>
            </div>

            <h2 class="text-h2 font-bold italic leading-tight mb-5">
                Choose the Right Program for Your Child
            </h2>

            <p class="text-body-large">
                Explore our flexible learning programs designed to support students’ academic needs, character
                development, and learning preferences through hybrid education.
            </p>
        </div>

        <!-- Programs Cards -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
            @foreach ($programs as $program)
                <div class="text-text rounded-3xl shadow-xl p-6 pb-12 h-fit flex flex-col border {{ $program['border'] }}">

                    <img src="{{ asset($program['image']) }}" alt="{{ $program['title'] }}"
                        class="rounded-2xl mb-6 w-full h-[150px] object-cover brightness-70">

                    <h4 class="text-h4 font-bold mb-5">
                        {{ $program['title'] }}
                    </h4>

                    <p class="text-sm text-justify mb-5">
                        {{ $program['description'] }}
                    </p>

                    {{-- Features --}}
                    <ul class="space-y-2 text-small mb-5">
                        @foreach ($program['features'] as $feature)
                            <li class="flex gap-2">
                                <svg class="w-4 h-4 text-text mt-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <hr class="mb-5">

                    <h6 class="text-h6 font-bold mb-5">
                        Program Benefits
                    </h6>

                    {{-- Benefits --}}
                    <ul class="space-y-2 text-small mb-5">
                        @foreach ($program['benefits'] as $benefit)
                            <li class="flex gap-2">
                                <svg class="w-4 h-4 text-text mt-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>{{ $benefit }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <hr class="mb-5">

                    {{-- Prices --}}
                    @foreach ($program['prices'] as $price)
                        <div class="mb-2">
                            <span class="inline-flex items-center px-3 py-1 text-small font-bold rounded-full border"
                                style="background-color: {{ $price['color'] }}; border-color: {{ $price['color'] }};">
                                {{ $price['label'] }}
                            </span>
                        </div>

                        <h4 class="text-h4 font-bold mb-5">
                            {{ $price['text'] }}
                            <span class="text-small font-medium">/month</span>
                        </h4>
                    @endforeach

                    @php
                        $link_contact_us = 'https://wa.me/' . $sales_phone . '?text=' . urlencode($program['message']);
                    @endphp
                    <div class="mx-auto mt-10">
                        <a href="{{ $link_contact_us }}"
                            class="inline-flex items-center gap-3 rounded-full bg-primary px-6 py-3 text-background font-semibold shadow-lg transition-transform duration-200 hover:scale-105">
                            <span>Contact Us</span>

                            <span
                                class="flex items-center justify-center w-7 h-7 rounded-full bg-secondary text-background">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </span>
                        </a>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>
