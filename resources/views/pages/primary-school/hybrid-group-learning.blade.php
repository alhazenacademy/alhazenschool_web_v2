<x-layout title="Title - Primary School - Hybrid Group Learning" description="Description - Primary School - Hybrid Group Learning" wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen School." :sales-phone="$salesPhone">
    <x-navbar variant="kids" />

    <x-primary-school.hero badge="Hybrid Learning" title='Balanced Islamic Hybrid Group <br class="hidden md:block">Education' description="Our hybrid group program combines online learning with face-to-face sessions, offering a balanced educational experience that supports academic growth, social development, and Islamic character building." image="{{ asset('assets/kids/primary-school/hybrid-group-learning/hero-img.webp') }}" imageAlt="Hybrid Group Learning Image" floatingCardsText="Combining flexibility and structure for meaningful learning." />

    <x-primary-school.why-program badge="Why Hybrid School?" title="The Best of Both Learning Worlds" descriptionOne="Parents often face a difficult choice between fully offline schooling that lacks flexibility and fully online programs that limit social interaction. Both options can leave gaps in a child’s academic, emotional, and social development." descriptionTwo="Alhazen School’s Hybrid Group program bridges this gap by blending structured in-person classes with guided online learning. Students benefit from direct teacher interaction, peer engagement, and flexible study time—creating a well-rounded and supportive learning experience." imageAlt="Why Hybrid School Image" />

    @php
        $objectives = [
            [
                'image' => asset('assets/kids/primary-school/program-objective-img.webp'),
                'bg' => 'additional-blue',
                'title' => 'Families Seeking Balanced Learning',
                'subtitle' => 'Hybrid Structure',
                'description' =>
                    'Created for families looking for a blend of in-person and online learning, without compromising academic quality, with flexible schedules, supportive teachers, modern technology.',
            ],
            [
                'image' => asset('assets/kids/primary-school/program-objective-img.webp'),
                'bg' => 'additional-orange',
                'title' => 'Students Needing Social Interaction',
                'subtitle' => 'In-Person Learning',
                'description' =>
                    'Designed for students who benefit from direct teacher support, peer collaboration, and structured classroom experiences, while maintaining flexibility, confidence, independence, and academic progress.',
            ],
            [
                'image' => asset('assets/kids/primary-school/program-objective-img.webp'),
                'bg' => 'additional-purple',
                'title' => 'Parents with Flexible Routines',
                'subtitle' => 'Adaptive Scheduling',
                'description' =>
                    'Designed for families who need learning schedules that adapt to daily routines while maintaining clear academic guidance, supported by consistent communication and personalized instructional planning.',
            ],
            [
                'image' => asset('assets/kids/primary-school/program-objective-img.webp'),
                'bg' => 'additional-red',
                'title' => 'Students Building <br> Discipline ',
                'subtitle' => 'Guided Growth',
                'description' =>
                    'Designed for students who need structured guidance while gradually developing responsibility, confidence, and independent learning habits, through mentoring and reflective practice.',
            ],
        ];
    @endphp

    <x-primary-school.program-objective title="Designed for Students and Families Who Need Balance" description="This program is ideal for families who want structured education with flexibility, allowing students to benefit from classroom interaction while maintaining adaptable learning routines." :objectives="$objectives"  />

    <x-why-alhazen-school mt="2xl:mt-20" />

    <x-primary-school.school-facilities />

    <x-integrated-curriculum />

    <x-primary-school.our-program />

    <x-primary-school.learning-method />

    <x-primary-school.school-gallery />

    <x-primary-school.educators />

    <x-primary-school.learning-program />

    <x-primary-school.parent-testimoni />

    <x-cta-trial-class />

    <x-faq />
    
    <x-footer />
</x-layout>
