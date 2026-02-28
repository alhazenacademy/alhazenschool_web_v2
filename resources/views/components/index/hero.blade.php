@php
    $link_trial = 'https://apps.alhazenschool.sch.id/#/trial';

    $heroCards = [
        [
            'title' => 'For Students & Parents',
            'desc' =>
                'Alhazen School is a Global Islamic Technology Hybrid School that integrates Islamic values, academic excellence, and digital skills.',
            'image' => asset('assets/kids/index-hero/hero1.webp'),
            'bg' => 'additional-blue',
            // 'link' => '#',
        ],
        [
            'title' => 'For Educators & Partners',
            'desc' =>
                'We collaborate with educators and institutions to build technology-driven and Islamic-based learning systems.',
            'image' => asset('assets/kids/index-hero/hero2.webp'),
            'bg' => 'additional-orange',
            // 'link' => '#',
        ],
        [
            'title' => 'For Learning Programs',
            'desc' =>
                'Alhazen School offers structured learning programs that combine Islamic character building with technology and innovation.',
            'image' => asset('assets/kids/index-hero/hero3.webp'),
            'bg' => 'additional-purple',
            // 'link' => '#',
        ],
    ];
@endphp

<section id="home" class="relative overflow-hidden py-20">

    <div class="relative mx-auto max-w-7xl px-6">
        <div class="grid lg:grid-cols-2 gap-10 items-start">
            <div class="w-full max-w-[600px] space-y-8">
                {{-- Badges --}}
                <div class="flex gap-2">
                    <span
                        class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                        Hybrid Learning
                    </span>
                    <span
                        class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                        Islamic Values
                    </span>
                    <span
                        class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                        Global Curriculum
                    </span>
                </div>

                {{-- TITLE --}}
                <h1 class="text-h1 font-bold italic leading-tight mb-5">
                    The 1st Global Islamic Technology Hybrid School in Indonesia
                </h1>

                <p class="text-body text-justify">
                    A future Islamic school integrating STEM, technology, and the Q system, guided by Islamic teachings.
                    We deliver holistic education led by world-class tutors, rooted in the Qur’an and Sunnah of the
                    Salaf.
                </p>

                <a href="{{ $link_trial }}"
                    class="inline-flex items-center gap-3 rounded-full bg-primary px-6 py-3 text-white font-semibold shadow-lg transition-transform duration-200 hover:scale-105">
                    <span>Try a Free Class</span>

                    <!-- Arrow Icon -->
                    <span class="flex items-center justify-center w-7 h-7 rounded-full bg-orange-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>

                <!-- Powered By -->
                <div class="flex items-center gap-4 pt-4">
                    <img src="{{ asset('assets/stem-q.webp') }}" alt="STEM-Q Excellence" class="h-20 w-auto">
                    <p class="text-small">
                        Powered by STEM-Q Education Framework</span>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class=" relative mt-12 lg:absolute lg:top-0 lg:right-0 lg:w-[500px] xl:w-[680px] 2xl:w-[768px] lg:mt-0 lg:pt-20 px-5 lg:px-0 flex items-start">
        <div class="w-full overflow-hidden lg:pl-10">
            <div class="swiper heroCardSwiper cursor-grab">
                <div class="swiper-wrapper flex">
                    @foreach ($heroCards as $card)
                        <div class="swiper-slide h-auto !flex">
                            <div
                                class="w-full {{ $card['bg'] }} text-white rounded-3xl shadow-xl p-6 pb-12 flex flex-col">
                                <div class="h-[300px] rounded-2xl overflow-hidden mb-6 shrink-0">
                                    <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}"
                                        class="w-full h-full object-cover brightness-70">
                                </div>

                                <div class="flex flex-col flex-grow text-center px-3">
                                    <div class="flex-grow space-y-3">
                                        <h4 class="font-bold text-h4">
                                            {{ $card['title'] }}
                                        </h4>
                                        <p class="text-sm opacity-90 leading-relaxed">
                                            {{ $card['desc'] }}
                                        </p>
                                    </div>
                                    {{-- <div class="pt-4">
                                        <a href="{{ $card['link'] }}"
                                            class="inline-block px-6 py-2 rounded-full bg-[#0F172A] text-white text-sm font-medium hover:bg-[#020617] transition">
                                            Learn More
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
