@props([
    'title' => 'This is title',
    'description' => 'This is description',
    'slides' => [],
])
<section id="k-12-learning-system" class="relative py-12 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- Orange Wrapper -->
        <div class="relative rounded-[40px] px-4 sm:px-8 lg:px-20 py-12 lg:py-16 bg-no-repeat bg-center bg-cover bg-primary shadow-lg"
            style="background-image: url('{{ asset('assets/kids/program/more/our-programs-bg.webp') }}');">
            <!-- Header -->
            <div class="text-center text-white max-w-3xl mx-auto mb-10 lg:mb-14">
                <div class="mb-5">
                    <span
                        class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary bg-background">
                        Learning System
                    </span>
                </div>
                <h2 class="text-h2 font-bold italic leading-tight mb-5">
                    {{ $title }}
                </h2>
                <p class="text-body">
                    {{ $description }}
                </p>
            </div>

            <!-- Slider Card -->
            <div class="relative max-w-5xl mx-auto">
                <div class="swiper k-12-kindergarten-learning-system-swiper">

                    <div class="swiper-wrapper">
                        @foreach ($slides as $slide)
                        <div class="swiper-slide">
                            <div
                                class="bg-white rounded-[24px] lg:rounded-[32px] p-6 sm:p-8 lg:p-12 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10 items-center shadow-xl">

                                <!-- Image -->
                                <div class="flex justify-center order-1 lg:order-2">
                                    <img src="{{ asset($slide['image']) }}" alt="{{ $slide['title'] }}"
                                        class="w-full max-w-sm h-48 sm:h-64 lg:h-[360px] rounded-2xl object-cover brightness-70"
                                        loading="lazy">
                                </div>

                                <!-- Text -->
                                <div class="text-center lg:text-left order-2 lg:order-1">
                                    <h3 class="text-h3 font-bold italic mb-5 text">
                                        {{ $slide['title'] }}
                                    </h3>

                                    <p class="text-body text-text text-justify">
                                        {{ $slide['desc'] }}
                                    </p>

                                    <hr class="my-5">

                                    <ul class="space-y-3 text-small mb-5">
                                        @foreach ($slide['features'] as $feature)
                                            <li class="flex items-start gap-3">
                                                {{-- Icon --}}
                                                <span class="flex items-center justify-center w-7 h-7 rounded-full bg-primary/10 text-primary shrink-0">
                                                    {!! $feature['icon'] !!}
                                                </span>
                                                {{-- Text --}}
                                                <div class="flex flex-wrap items-center gap-2 mt-1">
                                                    <span class="font-semibold">{{ $feature['label'] }}</span>

                                                    @if ($feature['type'] === 'badge')
                                                        <span
                                                            class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700">
                                                            {{ $feature['value'] }}
                                                        </span>
                                                    @else
                                                        <span class="text-text">{{ $feature['value'] }}</span>
                                                    @endif
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Navigation -->
                <button
                    class="k-12-kindergarten-learning-system-prev absolute -left-4 lg:left-[-20px] top-1/2 -translate-y-1/2 z-10 h-9 w-9 lg:h-10 lg:w-10 rounded-full bg-secondary text-white shadow-lg flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 lg:w-6 lg:h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button
                    class="k-12-kindergarten-learning-system-next absolute -right-4 lg:right-[-20px] top-1/2 -translate-y-1/2 z-10 h-9 w-9 lg:h-10 lg:w-10 rounded-full bg-secondary text-white shadow-lg flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 lg:w-6 lg:h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>
