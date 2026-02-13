<x-layout title="Title - Primary School - Full Online Group Learning" description="Description - Primary School - Full Online Group Learning" wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy." :sales-phone="$salesPhone">
    <x-navbar variant="kids" />

    <x-primary-school.hero badge="Full Online Learning" title='Structured Islamic Online Group <br class="hidden md:block">Learning' description="Our full online group learning program delivers structured virtual classes that combine academic excellence, Islamic values, and collaborative learning—designed to keep students engaged, focused, and connected from anywhere." image="{{ asset('assets/kids/primary-school/full-online-group-learning/hero-img.webp') }}" imageAlt="Full Online Learning Image" floatingCardsText="A safe, interactive, and structured online learning environment." />

    <x-primary-school.why-program badge="Why Online School?" title="Learning Without Location Limits" descriptionOne="Many families need quality education that is not restricted by distance, daily travel, or fixed school hours. Traditional schooling often requires strict attendance and commuting, while unstructured online learning can feel isolating and inconsistent for students." descriptionTwo="Alhazen School’s Full Online Group program offers a structured virtual classroom where students learn together under teacher guidance. This approach ensures consistent learning routines, meaningful interaction, and strong academic direction—while allowing families to learn from anywhere with confidence." imageAlt="Why Online School Image" />
    
    @php
        $objectives = [
            [
                'image' => asset('assets/kids/primary-school/program-objective-img.webp'),
                'bg' => 'additional-blue',
                'title' => 'Families in Remote <br> Areas',
                'subtitle' => 'Accessible Education',
                'description' =>
                    'Designed for families who want access to quality Islamic education without being limited by geographical location or transportation challenges.',
            ],
            [
                'image' => asset('assets/kids/primary-school/program-objective-img.webp'),
                'bg' => 'additional-orange',
                'title' => 'Students Who Learn Better in Groups',
                'subtitle' => 'Collaborative Learning',
                'description' =>
                    'Designed for students who thrive through peer interaction, group discussions, and guided collaboration in a structured online classroom setting.',
            ],
            [
                'image' => asset('assets/kids/primary-school/program-objective-img.webp'),
                'bg' => 'additional-purple',
                'title' => 'Parents Seeking Best Online Schooling',
                'subtitle' => 'Guided Learning',
                'description' =>
                    'Designed for parents who want a clear curriculum, scheduled classes, and consistent teacher guidance within an online learning environment.',
            ],
            [
                'image' => asset('assets/kids/primary-school/program-objective-img.webp'),
                'bg' => 'additional-red',
                'title' => 'Families Needing Flexible Schedules',
                'subtitle' => 'Time Flexibility',
                'description' =>
                    'Designed for families who need adaptable study schedules while maintaining learning quality, discipline, and routine through guided online sessions.',
            ],
        ];
    @endphp

    <x-primary-school.program-objective title="Designed for Students and Families Who Need Flexibility" description="This program is ideal for families seeking accessible, structured education that supports academic progress, Islamic character development, and collaborative learning—without being limited by location or mobility." :objectives="$objectives"  />

    <x-why-alhazen-school mt="2xl:mt-20" />

    <x-primary-school.school-facilities />

    <x-integrated-curriculum />

    <x-primary-school.our-program />

    <x-primary-school.learning-method />

    {{-- <x-primary-school.school-gallery /> --}}

    <x-primary-school.educators />

    <x-primary-school.learning-program />

    <x-primary-school.parent-testimoni />

    <x-cta-trial-class />

    <x-faq />
    
    <x-footer />
</x-layout>
