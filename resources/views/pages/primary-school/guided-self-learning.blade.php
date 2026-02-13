<x-layout title="Title - Primary School - Guided Self Learning" description="Description - Primary School - Guided Self Learning" wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy." :sales-phone="$salesPhone">
    <x-navbar variant="kids" />

    <x-primary-school.hero badge="Independent Learning" title='Guided Islamic Self Learning <br class="hidden md:block">Program' description="Our self-learning program empowers students to learn independently through structured modules, guided supervision, and Islamic values—supported by teachers and active parental involvement." image="{{ asset('assets/kids/primary-school/guided-self-learning/hero-img.webp') }}" imageAlt="Guided Self Learning Image" floatingCardsText="Building independence with structured guidance and goals." />

    <x-primary-school.why-program badge="Why Self Learning?" title="Learning at Your Child’s Own Pace" descriptionOne="Some students learn best when given the space to explore knowledge independently, while still needing guidance, structure, and direction. Traditional classrooms may feel overwhelming, and rigid schedules can limit personal learning pace." descriptionTwo="Alhazen School’s Self Learning program offers a guided independent learning model where students follow structured modules, supported by teachers and parents. This approach builds responsibility, confidence, and self-discipline while maintaining academic clarity." imageAlt="Why Self Learning Image" />

    @php
        $objectives = [
            [
                'image' => asset('assets/kids/primary-school/program-objective-img.webp'),
                'bg' => 'additional-blue',
                'title' => 'Parents Who Want Active Involvement',
                'subtitle' => 'Parent Guided',
                'description' =>
                    'Designed for parents who wish to guide their child’s learning at home while receiving structured support from teachers, with clear guidance, resources, and ongoing communication.',
            ],
            [
                'image' => asset('assets/kids/primary-school/program-objective-img.webp'),
                'bg' => 'additional-orange',
                'title' => 'Independent <br> Learners',
                'subtitle' => 'Self Paced',
                'description' =>
                    'Designed for students who learn best at their own pace with clear learning objectives and structured learning modules, supported by progress tracking and regular academic feedback.',
            ],
            [
                'image' => asset('assets/kids/primary-school/program-objective-img.webp'),
                'bg' => 'additional-purple',
                'title' => 'Families Seeking Flexible Learning Time',
                'subtitle' => 'Time Freedom',
                'description' =>
                    'Designed for families who need complete flexibility in daily study schedules without losing academic direction, while maintaining consistency, accountability, and learning progress.',
            ],
            [
                'image' => asset('assets/kids/primary-school/program-objective-img.webp'),
                'bg' => 'additional-red',
                'title' => 'Students Building Responsibility',
                'subtitle' => 'Learning Discipline',
                'description' =>
                    'Designed for students who are developing self-discipline, confidence, and responsibility through guided independent learning, with mentoring, reflection, and gradual skill-building.',
            ],
        ];
    @endphp

    <x-primary-school.program-objective title="Designed for Students and Families Who Value Independence" description="This program is ideal for families who want flexible, independent learning supported by structured materials, teacher guidance, and direct, active parental involvement in the learning process." :objectives="$objectives"  />

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
