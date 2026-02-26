<x-layout title="Title - K12 - Kindergarten" description="Description - K12 - Kindergarten"
    wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen School."
    :sales-phone="$salesPhone">
    <x-navbar variant="kids" />

    @php
        $badges = [ 'Islamic Manners', 'Independence', 'Creativity'];

        $title = "Alhazen Kindergarten";

        $subtitle = "K1 & K2 Programs";

        $description = "Alhazen Kindergarten is an early childhood education institution focused on building Islamic character, foundational learning skills, and life skills through active, enjoyable, and developmentally appropriate activities.<br> <br>
        With the implementation of three core curricula (Diniyyah, Literacy, Numeracy & Life Skills), Alhazen Kindergarten prepares children aged 4–6 years to become righteous, creative, and independent individuals for the Academic Year 2026/2027.";

        $floatingCardsText = 'Academic Year 2026/2027';
    @endphp
    <x-k-12.hero :badges="$badges" :title="$title" :subtitle="$subtitle" :description="$description" :floatingCardsText="$floatingCardsText" />

    <x-k-12.kindergarten.our-curriculum />

    <x-k-12.kindergarten.subjects-offered />

    <x-k-12.kindergarten.daily-activity-structure />

    @php
        $slides = [
            [
                'title' => 'Online Group Classes',
                'desc' =>
                    'All classes are conducted online with live interaction between teachers and children.',
                'features' => [
                    [
                        'label' => 'Platform',
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
                        'label' => 'Class Size',
                        'value' => 'Maximum 10 children per class',
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
                        'label' => 'Duration',
                        'value' => '1 Academic Year',
                        'type'  => 'icon',
                        'icon'  => '
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 7V3M16 7V3M3 11h18M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>',
                    ],
                ],
                'image' => asset('assets/kids/program/more/our-programs-img-1.webp'),
            ],
        ];
    @endphp
    <x-k-12.learning-system title="A Structured Learning System" description="A structured and interactive online learning system that supports academic growth, Islamic values, and joyful learning for young children." :slides="$slides" />

    <x-k-12.kindergarten.whats-included />

    <x-k-12.school-gallery title="Kindergarten" />

    <x-k-12.parent-testimoni />

    <x-cta-trial-class />

    <x-faq />

    <x-footer />
</x-layout>
