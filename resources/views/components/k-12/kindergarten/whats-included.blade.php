@props([
    'items' => [
        [
            'title' => 'Capital Fee (Uang Pangkal)',
            'content' => 'Covers curriculum development, supporting facilities, and Zoom Pro subscription to ensure high-quality online learning experiences.',
            'open' => true,
        ],
        [
            'title' => 'Starter Kit',
            'content' => 'Includes essential learning materials such as books, printable worksheets, and a binder to support daily learning activities at home.',
            'open' => false,
        ],
        [
            'title' => 'School Uniform',
            'content' => 'Includes a T-shirt, Muslim outfit set, and sports outfit set. For female students, the uniform package also includes a hijab.',
            'open' => false,
        ],
    ],
])

<section id="k-12-kindergarten-whats-included" class="relative py-12 lg:py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- LEFT CONTENT -->
            <div>
                <div class="mb-5">
                    <span
                        class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                        What’s Included
                    </span>
                </div>

                <h2 class="text-h2 font-bold italic leading-tight mb-5">
                    Everything Your Child Needs
                </h2>

                <p class="text-body-large mb-10">
                    Our kindergarten program includes essential academic support, learning materials, and uniforms to ensure a
                    comfortable, well-prepared, and meaningful learning journey for every child.
                </p>

                <!-- Accordion -->
                <div class="space-y-4">
                    @foreach ($items as $item)
                        <details @if ($item['open']) open @endif
                            class="group rounded-xl border border-gray-200 p-5 transition-all duration-300 open:bg-neutral/30">
                            <summary class="flex justify-between items-center cursor-pointer font-semibold text-text">
                                <h6 class="text-h6 font-semibold flex-1">
                                    {{ $item['title'] }}
                                </h6>
                                <span class="text-xl group-open:rotate-45 transition">+</span>
                            </summary>

                            <p class="mt-4 text-body text-text leading-relaxed">
                                {{ $item['content'] }}
                            </p>
                        </details>
                    @endforeach
                </div>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="grid grid-cols-1 gap-4">
                <img src="{{ asset('assets/kids/program/more/school-facilities-img-1.webp') }}" alt="Family Learning" class="rounded-3xl w-full h-70 object-cover brightness-70">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <img src="{{ asset('assets/kids/program/more/school-facilities-img-2.webp') }}" alt="Parent Support" class="rounded-3xl w-full h-full object-cover brightness-70">

                    <!-- Highlight Card -->
                    <div class="bg-accent text-white rounded-3xl p-8 flex flex-col justify-between">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full bg-accent brightness-75 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>

                        <div>
                            <h3 class="text-h3 font-bold mb-2">100%</h3>
                            <h4 class="text-h4 font-bold mb-3">Ready to Learn Package</h4>
                            <p class="text-sm text-justify">
                                From learning materials and uniforms to live online classes, everything is prepared so children can focus on learning while parents feel confident and supported.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
