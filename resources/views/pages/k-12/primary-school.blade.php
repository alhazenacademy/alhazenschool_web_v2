<x-layout title="Title - K12 - Primary School" description="Description - K12 - Primary School" wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen School." :sales-phone="$salesPhone">
    <x-navbar variant="kids" />

    @php
        $badges = ['Islamic Manners', 'Independence', 'Creativity'];

        $title = "Alhazen Primary School";

        $subtitle = "Primary Program (Grade 1 – 6)";

        $description = "Welcome to Alhazen Primary School, a caring and inspiring learning environment for young learners. We help children grow academically, spiritually, and socially through a balanced curriculum that combines National and International standards with Islamic values. Our program encourages good character, curiosity, creativity, and independence, guided by the teachings of the Al-Qur'an and the Sunnah.";

        $floatingCardsText = 'Academic Year 2026/2027';
    @endphp
    <x-k-12.hero :badges="$badges" :title="$title" :subtitle="$subtitle" :description="$description" :floatingCardsText="$floatingCardsText" />

    <x-k-12.primary-school.core-principles />

    <x-k-12.primary-school.why-alhazen-school />

    @php
        $slides = [
            [
                'title' => 'Hybrid Learning System',
                'desc' =>
                    'A flexible hybrid learning model combining face-to-face learning at school and interactive online classes. Students attend school 3 days a week and learn online for 2 days.',
                'features' => [
                    [
                        'label' => 'Learning Schedule',
                        'value' => '3 Days On-site, 2 Days Online',
                        'type'  => 'icon',
                        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 7V3M16 7V3M3 11h18M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>',
                    ],
                    [
                        'label' => 'Online Platform',
                        'value' => 'Zoom',
                        'type'  => 'badge',
                        'icon'  => '
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14V10z"/>
                                <rect x="3" y="6" width="12" height="12" rx="2"/>
                            </svg>',
                    ],
                    [
                        'label' => 'School Campuses',
                        'value' => 'Kendari & Ciputat',
                        'type'  => 'icon',
                        'icon'  => '
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5s-3 1.343-3 3 1.343 3 3 3z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 22s8-4.5 8-10a8 8 0 10-16 0c0 5.5 8 10 8 10z"/>
                            </svg>',
                    ],
                ],
                'image' => asset('assets/kids/program/more/our-programs-img-1.webp'),
            ],

            [
                'title' => 'Private Class (1 on 1)',
                'desc' =>
                    'One teacher and one student for maximum focus and personalized learning. Ideal for students who need special attention or accelerated progress.',
                'features' => [
                    [
                        'label' => 'Class Ratio',
                        'value' => '1 Teacher : 1 Student',
                        'type'  => 'icon',
                        'icon'  => '
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 12a5 5 0 100-10 5 5 0 000 10z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 20a8 8 0 1116 0H4z"/>
                            </svg>',
                    ],
                    [
                        'label' => 'Learning Mode',
                        'value' => 'Online or Offline',
                        'type'  => 'icon',
                        'icon'  => '
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3"/>
                            </svg>',
                    ],
                    [
                        'label' => 'Learning Style',
                        'value' => 'Fully Personalized',
                        'type'  => 'icon',
                        'icon'  => '
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6l-2 4H6l3 3-1 4 4-2 4 2-1-4 3-3h-4l-2-4z"/>
                            </svg>',
                    ],
                ],
                'image' => asset('assets/kids/program/more/our-programs-img-2.webp'),
            ],

            [
                'title' => 'Group Class Program',
                'desc' =>
                    'Small group classes that promote teamwork, communication, and active learning in a supportive environment.',
                'features' => [
                    [
                        'label' => 'Class Size',
                        'value' => 'Maximum 10 Students',
                        'type'  => 'icon',
                        'icon'  => '
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 12a5 5 0 100-10 5 5 0 000 10z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 20a8 8 0 1116 0H4z"/>
                            </svg>',
                    ],
                    [
                        'label' => 'Class Type',
                        'value' => 'Offline / Online / Hybrid',
                        'type'  => 'icon',
                        'icon'  => '
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="6" width="18" height="12" rx="2"/>
                                <path d="M8 18h8"/>
                            </svg>',
                    ],
                    [
                        'label' => 'Learning Focus',
                        'value' => 'Interactive & Collaborative',
                        'type'  => 'icon',
                        'icon'  => '
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 8h10M7 12h6M21 12c0 4.418-4.03 8-9 8a9.77 9.77 0 01-4-.8L3 20l1.8-3A7.72 7.72 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>',
                    ],
                ],
                'image' => asset('assets/kids/program/more/our-programs-img-3.webp'),
            ],

            [
                'title' => 'Guided Self-Learning (Online)',
                'desc' =>
                    'A structured self-learning program with parent involvement. Students receive modules, learning kits, and guidance supported by teachers.',
                'features' => [
                    [
                        'label' => 'Learning Support',
                        'value' => 'Parents & Teachers',
                        'type'  => 'icon',
                        'icon'  => '
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 12a5 5 0 100-10 5 5 0 000 10z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 20a8 8 0 1116 0H4z"/>
                            </svg>',
                    ],
                    [
                        'label' => 'Learning Materials',
                        'value' => 'Syllabus, Modules & Learning Kit',
                        'type'  => 'icon',
                        'icon'  => '
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v12M6 12h12"/>
                            </svg>',
                    ],
                    [
                        'label' => 'Progress Report',
                        'value' => 'Monthly Evaluation',
                        'type'  => 'icon',
                        'icon'  => '
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 17v-2h6v2M9 13h6M9 9h6"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z"/>
                            </svg>',
                    ],
                ],
                'image' => asset('assets/kids/program/more/our-programs-img-1.webp'),
            ],
        ];
    @endphp
    <x-k-12.learning-system title="A Structured Learning System" description="A structured and interactive online learning system that supports academic growth, Islamic values, and joyful learning for young children." :slides="$slides" />

    <x-integrated-curriculum />

    <x-k-12.learning-method />

    @php
        $subjectCards = [
            [
                'number' => 1,
                'title' => 'National (Merdeka)',
                'description' => 'Core subjects based on the Merdeka Curriculum to support strong foundational knowledge and character development.',
                'list' => [
                    'Bahasa Indonesia',
                    'Matematika',
                    'IPAS',
                    'PJOK',
                    'Seni dan Budaya',
                    'Pendidikan Pancasila',
                ],
                'bg' => 'bg-aditional-blue',
                'color' => 'text-aditional-blue',
            ],
            [
                'number' => 2,
                'title' => 'National Plus',
                'description' => 'Enhanced subjects delivered in English to strengthen global insight and communication skills.',
                'list' => [
                    'Math',
                    'Science',
                    'English',
                ],
                'bg' => 'bg-aditional-orange',
                'color' => 'text-aditional-orange',
            ],
            [
                'number' => 3,
                'title' => 'Keislaman (Islamic Studies)',
                'description' => 'Islamic subjects designed to nurture faith, character, and daily Islamic practices.',
                'list' => [
                    'Aqidah & Akhlak',
                    'Fiqh',
                    'Sirah Nabawi',
                    'Al-Qur’an',
                    'Bahasa Arab',
                ],
                'bg' => 'bg-aditional-purple',
                'color' => 'text-aditional-purple',
            ],
            [
                'number' => 4,
                'title' => 'Technology',
                'description' => 'Technology-based subjects to equip students with essential digital and problem-solving skills.',
                'list' => [
                    'Microsoft Office',
                    'Coding Program',
                ],
                'bg' => 'bg-aditional-red',
                'color' => 'text-aditional-red',
            ],
            [
                'number' => 5,
                'title' => 'Enrichment Programs',
                'description' => 'Additional programs that support spiritual growth, language skills, and personal development.',
                'list' => [
                    'Morning Activities (Asmaul Husna)',
                    '3-Language Program',
                ],
                'bg' => 'bg-accent',
                'color' => 'text-accent',
            ],
            [
                'number' => 6,
                'title' => 'Consultation Services',
                'description' => 'Ongoing consultation services to support students’ learning progress and development.',
                'list' => [
                    'Consultation services with teachers and staff',
                ],
                'bg' => 'bg-secondary',
                'color' => 'text-secondary',
            ],
        ];
    @endphp
    <x-k-12.subjects-offered :subjectCards="$subjectCards" />

    <x-k-12.primary-school.weekly-lesson-allocation />

    <x-k-12.primary-school.student-achievement-target />

    <x-k-12.primary-school.activities-extracurriculars />

    <x-k-12.primary-school.official-status-certification />

    <x-k-12.school-gallery title="Primary School" />

    <x-k-12.parent-testimoni />

    <x-cta-trial-class />

    <x-faq />

    <x-footer />
</x-layout>
