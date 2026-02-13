@props([
    'whyCards' => [
        [
            'number' => 1,
            'title' => 'Character & Islamic Values',
            'description' =>
                'Character development inspired by Islamic boarding school values, integrated with daily Islamic practices to build discipline, responsibility, and strong moral character alongside academic growth.',
            'bg' => 'bg-aditional-blue',
            'color' => 'text-aditional-blue',
        ],
        [
            'number' => 2,
            'title' => 'Adaptive Technology Learning',
            'description' =>
                'A learning environment that adapts to student needs by using modern educational technology and ICT-based tools to support interactive and effective learning.',
            'bg' => 'bg-aditional-orange',
            'color' => 'text-aditional-orange',
        ],
        [
            'number' => 3,
            'title' => 'Integrated Curriculum',
            'description' =>
                'An integrated curriculum combining Merdeka Curriculum, National Plus standards, Islamic studies, and technology to prepare students for academic and future challenges.',
            'bg' => 'bg-aditional-purple',
            'color' => 'text-aditional-purple',
        ],
        [
            'number' => 4,
            'title' => 'Flexible Learning',
            'description' =>
                'Flexible learning that allows students to study anytime and anywhere through an adaptive approach that supports different learning styles and paces.',
            'bg' => 'bg-aditional-red',
            'color' => 'text-aditional-red',
        ],
        [
            'number' => 5,
            'title' => 'Affordable Tuition',
            'description' =>
                'Affordable and transparent tuition fees with no additional building or development costs, ensuring quality education remains accessible.',
            'bg' => 'bg-accent',
            'color' => 'text-accent',
        ],
        [
            'number' => 6,
            'title' => 'Blended & Hybrid Learning',
            'description' =>
                'Blended and hybrid learning that combines online and face-to-face classes to create an engaging and effective learning experience.',
            'bg' => 'bg-secondary',
            'color' => 'text-secondary',
        ],
    ],
])

<section id="primary-school-why-alhazen-school" class="relative overflow-hidden py-12 lg:py-20">
    <div class="relative mx-auto max-w-7xl px-6 lg:mt-30">
        <div class="flex flex-col lg:flex-row items-center gap-20 mb-20">
            <div>
                <!-- Badge -->
                <div class="mb-5">
                    <span
                        class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                        Important thing
                    </span>
                </div>

                <!-- Title -->
                <h3 class="text-h3 font-bold italic leading-tight mb-5">
                    Why Alhazen School?
                </h3>

                <!-- Description -->
                <p class="text-body text-justify">
                    Alhazen School is a Global Islamic Technology Hybrid School that delivers a balanced education
                    combining Islamic values, academic excellence, and modern technology. Our learning model is designed
                    to support students’ character, skills, and flexibility in a rapidly changing world.
                </p>
            </div>

            <div class="flex-shrink-0 hidden md:block">
                <div class="relative">
                    <img src="{{ asset('assets/kids/primary-school/why-alhazen-school-img.webp') }}"
                        alt="Why Alhazen School Image" class="w-140 h-90 object-cover rounded-[32px] brightness-70">
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($whyCards as $item)
                <div class="{{ $item['bg'] }} text-background shadow-xl rounded-3xl py-5 pl-4 pr-6">
                    <div class="flex gap-3">
                        <div>
                            <span
                                class="flex items-center justify-center w-6 h-6 mb-3 rounded-full bg-background {{ $item['color'] }}">
                                <h5 class="text-h5 font-bold">
                                    {{ $item['number'] }}
                                </h5>
                            </span>
                        </div>
                        <div class="flex-1">
                            <h5 class="text-h5 font-bold mb-3">
                                {{ $item['title'] }}
                            </h5>
                            <p class="text-sm text-justify">
                                {{ $item['description'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
