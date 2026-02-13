@props([
    'badge' => 'This is Badge',
    'title' => 'This is Title',
    'descriptionOne' => 'This is Description One',
    'descriptionTwo' => 'This is Description Two',
    'image' => null,
    'imageAlt' => 'Hero Image',
])

<section id="primary-school-why-program" class="relative overflow-hidden py-12 lg:py-20">
    <div class="relative mx-auto max-w-7xl px-6 lg:my-30">
        <div class="flex flex-col lg:flex-row items-center gap-20">
            <div class="flex-shrink-0">
                <div class="relative">
                    <img src="{{ $image ?? asset('assets/kids/primary-school/why-program-img.webp') }}"
                        alt="{{ $imageAlt }}"
                        class="w-140 h-100 object-cover rounded-[32px] brightness-70">
                </div>
            </div>

            <div class="relative">
                <!-- Badge -->
                <div class="mb-5">
                    <span
                        class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                        {{ $badge }}
                    </span>
                </div>

                <!-- Title -->
                <h2 class="text-h2 font-bold italic leading-tight mb-5">
                    {{ $title }}
                </h2>

                <!-- Description -->
                <p class="text-body text-justify mb-5">
                    {{ $descriptionOne }}
                </p>
                <p class="text-body text-justify">
                    {{ $descriptionTwo }}
                </p>
            </div>
        </div>
    </div>
</section>
