@props([
    'badge' => 'This is Badge',
    'title' => 'This is Title',
    'description' => 'This is Description',
    'image' => null,
    'imageAlt' => 'Hero Image',
    'floatingCardsText' => 'This is Floating Cards Text',
])

<section id="program-more-hero" class="relative overflow-hidden py-12 lg:py-20">
    <div class="relative mx-auto max-w-7xl px-6">
        <div class="flex flex-col md:flex-row items-center gap-20">
            <div>
                <!-- Badge -->
                <div class="mb-5">
                    <span
                        class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                        {{ $badge }}
                    </span>
                </div>

                <!-- Title -->
                <h1 class="text-h1 font-bold italic leading-tight mb-5">
                    {!! $title !!}
                </h1>

                <!-- Description -->
                <p class="text-body text-justify mb-10">
                    {{ $description }}
                </p>

                <a href="#"
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
            </div>

            <div class="flex-shrink-0 hidden md:block">
                <div class="relative">
                    <img src="{{ $image ?? asset('assets/kids/program/more/full-online-group-learning/hero-img.webp') }}"
                        alt="{{ $imageAlt }}"
                        class="w-140 h-130 object-cover rounded-[32px] brightness-70">

                    <!-- Floating Cards Container -->
                    <div class="hidden md:flex absolute -left-10 top-80 flex-col gap-4">
                        <!-- Offline Learning -->
                        <div class="bg-neutral shadow-xl rounded-3xl py-5 px-6 w-[250px]">
                            <span class="flex items-center justify-center w-6 h-6 mb-3 rounded-full additional-blue">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                    class="w-4 h-4">
                                    <path d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                            <p class="text-sm text-text font-bold">
                                {{ $floatingCardsText }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
