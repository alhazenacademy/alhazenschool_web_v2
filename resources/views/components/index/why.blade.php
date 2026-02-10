@php
    $whyCards = [
        [
            'title' => 'Character & Islamic Values',
            'desc' =>
                'Character development inspired by Islamic boarding school values, integrated with daily Islamic practices to build discipline, responsibility, and strong moral character alongside academic growth.',
            'color' => '#1F509A',
        ],
        [
            'title' => 'Adaptive Technology Learning',
            'desc' =>
                'A learning environment that adapts to student needs by using modern educational technology and ICT-based tools to support interactive and effective learning.',
            'color' => '#FF9F00',
        ],
        [
            'title' => 'Integrated Curriculum',
            'desc' =>
                'An integrated curriculum combining Merdeka Curriculum, National Plus standards, Islamic studies, and technology to prepare students for academic and future challenges.',
            'color' => '#4D2B8C',
        ],
        [
            'title' => 'Flexible Learning',
            'desc' =>
                'Flexible learning that allows students to study anytime and anywhere through an adaptive approach that supports different learning styles and paces.',
            'color' => '#D73535',
        ],
        [
            'title' => 'Affordable Tuition',
            'desc' =>
                'Affordable and transparent tuition fees with no additional building or development costs, ensuring quality education remains accessible.',
            'color' => '#206A5D',
        ],
        [
            'title' => 'Blended & Hybrid Learning',
            'desc' =>
                'Blended and hybrid learning that combines online and face-to-face classes to create an engaging and effective learning experience.',
            'color' => '#EA580C',
        ],
    ];
@endphp
<section id="index-why" class="relative py-12 lg:py-20">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Top Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mb-16">
            <div>
                <div class="mb-5">
                    <span
                        class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                        Important thing
                    </span>
                </div>

                <h2 class="text-h2 font-bold italic leading-tight mb-5">
                    Why Alhazen School?
                </h2>

                <p class="text-body mb-5 text-justify">
                    Alhazen School is a Global Islamic Technology Hybrid School that delivers a balanced education combining Islamic values, academic excellence, and modern technology. Our learning model is designed to support students character, skills, and flexibility in a rapidly changing world.
                </p>
            </div>

            <div class="flex justify-center md:justify-end">
                <img src="{{ asset('assets/kids/index-why/why.webp') }}" alt="Student studying at Alhazen School"
                    class="max-w-lg w-full h-auto" loading="lazy">
            </div>
        </div>
        <!-- Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($whyCards as $index => $card)
                <div class="rounded-2xl p-6 text-white shadow-lg" style="background-color: {{ $card['color'] }};">
                    <div class="flex items-start gap-3 mb-3">
                        <span class="flex h-7 w-7 items-center justify-center rounded-full bg-white font-bold text-sm"
                            style="color: {{ $card['color'] }};">
                            {{ $index + 1 }}
                        </span>

                        <h3 class="font-semibold text-h5">
                            {{ $card['title'] }}
                        </h3>
                    </div>

                    <p class="text-small text-justify leading-relaxed">
                        {{ $card['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>

    </div>
</section>