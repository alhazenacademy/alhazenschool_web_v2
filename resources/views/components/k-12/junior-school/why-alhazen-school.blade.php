@props([
    'mt' => '',
    'whyCards' => [
        [
            'number' => 1,
            'title' => 'Integrated & Balanced Curriculum',
            'description' => 'We combine the Merdeka Curriculum, Ahlus Sunnah Islamic values, National Plus standards, and 21st-century technology to create harmony between faith, knowledge, and character.',
            'bg' => 'bg-aditional-blue',
            'color' => 'text-aditional-blue',
        ],
        [
            'number' => 2,
            'title' => 'STEM-Q Pioneer Program',
            'description' => "Integrates Qur'anic values into science and technology, fostering a generation of Muslim thinkers who are both scientific and rooted in Tawhid.",
            'bg' => 'bg-aditional-orange',
            'color' => 'text-aditional-orange',
        ],
        [
            'number' => 3,
            'title' => 'Flexible Learning System (Hybrid & Full Online)',
            'description' => 'Perfect for modern families—students can learn at home or at school with equally effective quality.',
            'bg' => 'bg-aditional-purple',
            'color' => 'text-aditional-purple',
        ],
        [
            'number' => 4,
            'title' => 'Global Readiness with Strong Islamic Identity',
            'description' => 'Trilingual programs, digital literacy, and soft skills development are emphasized without compromising Islamic values.',
            'bg' => 'bg-aditional-red',
            'color' => 'text-aditional-red',
        ],
        [
            'number' => 5,
            'title' => 'Islamic Character Building (#RumahRasaPesantren)',
            'description' => 'Daily activities are built around Islamic manners, Qur\'anic tahsin and talaqqi, and the habituation of worship and noble character.',
            'bg' => 'bg-accent',
            'color' => 'text-accent',
        ],
        [
            'number' => 6,
            'title' => 'Independence & Critical Thinking Orientation',
            'description' => 'Students are encouraged to think logically, creatively, and solve problems independently with guidance from professional teachers.',
            'bg' => 'bg-secondary',
            'color' => 'text-secondary',
        ],
    ],
])
<section id="junior-school-why-alhazen-school" class="relative overflow-hidden py-12 lg:py-20">
    <div class="relative mx-auto max-w-7xl px-6 {{ $mt }}">
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
                <h2 class="text-h2 font-bold italic leading-tight mb-5">
                    Why Alhazen School?
                </h2>

                <!-- Description -->
                <p class="text-body text-justify">
                    Alhazen School is a Global Islamic Technology Hybrid School that delivers a balanced education combining Islamic values, academic excellence, and modern technology. Our learning model is designed to support students’ character, skills, and flexibility in a rapidly changing world.
                </p>
            </div>

            <div class="flex-shrink-0 hidden md:block">
                <div class="relative">
                    <img src="{{ asset('assets/kids/why-alhazen-school/img.webp') }}" alt="Why Alhazen School Image"
                        class="w-140 h-90 object-cover rounded-[32px] brightness-70">
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
