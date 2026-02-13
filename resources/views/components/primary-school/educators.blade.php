@props([
    'educators' => [
        [
            'bg' => 'additional-blue',
            'image' => null,
            'name' => 'MS. Cholilah',
            'position' => 'English Teacher',
        ],
        [
            'bg' => 'additional-orange',
            'image' => null,
            'name' => 'MS. Kalila',
            'position' => 'Islamic Teacher',
        ],
        [
            'bg' => 'additional-purple',
            'image' => null,
            'name' => 'MS. Yuli',
            'position' => 'National & National Plus Teacher',
        ],
    ],
])

<section id="primary-school-educators" class="relative overflow-hidden py-12 lg:py-40">
    <div class="relative mx-auto max-w-7xl px-6">
        <div class="max-w-lg">
            <!-- Badge -->
            <div class="mb-5">
                <span
                    class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                    Educators
                </span>
            </div>

            <!-- Title -->
            <h2 class="text-h2 font-bold italic leading-tight mb-5">
                Meet Our Brilliant Teacher
            </h2>

            <!-- Description -->
            <p class="text-body text-justify mb-5">
                Get to know our dedicated and passionate teachers who guide and inspire students in every stage of their
                learning journey. Our educators are committed to creating a supportive, engaging, and structured
                learning environment. Through personalized guidance and continuous encouragement, they help students
                grow academically, build strong character, and gain confidence.
            </p>
        </div>
    </div>

    <!-- RIGHT SLIDER -->
    <div class="relative lg:absolute lg:top-20 xl:top-20 2xl:top-15 lg:right-0 lg:w-[500px] xl:w-[700px] 2xl:w-[1000px]">
        <div class="pl-6 lg:pl-12 overflow-visible">
            <div class="swiper primary-educators-swiper cursor-grab">
                <div class="swiper-wrapper">
                    @foreach ($educators as $item)
                        <div class="swiper-slide w-[500px] shrink-0">
                            <div
                                class="{{ $item['bg'] ?? 'additional-blue' }} text-white rounded-3xl shadow-xl p-6 pb-12 flex flex-col min-h-[500px] lg:min-h-[430px] 2xl:min-h-[480px]">

                                <div class="rounded-2xl overflow-hidden mb-6 shrink-0 flex-1 h-full">
                                    <img src="{{ $item['image'] ?? asset('assets/kids/primary-school/educators-img.png') }}"
                                        alt="{{ $item['name'] }}" class="w-full h-full object-cover object-top">
                                </div>

                                <div class="flex flex-col">
                                    <div class="pl-5">
                                        <h4 class="text-h4 font-bold mb-2">
                                            {{ $item['name'] }}
                                        </h4>

                                        <p class="text-sm opacity-90">
                                            {{ $item['position'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
