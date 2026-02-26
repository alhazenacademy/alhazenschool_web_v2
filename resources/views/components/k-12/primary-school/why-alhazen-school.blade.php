@props([
    'mt' => '',
])

<section id="why-alhazen-school" class="relative overflow-hidden py-12 lg:py-20">
    <div class="relative mx-auto max-w-7xl px-6 {{ $mt }}">
        <div class="flex flex-col lg:flex-row items-center gap-20 mb-20">
            <div>
                <!-- Badge -->
                <div class="mb-5">
                    <span
                        class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                        Why Alhazen School?
                    </span>
                </div>

                <!-- Title -->
                <h2 class="text-h2 font-bold italic leading-tight mb-5">
                    The STEM-Q Education System
                </h2>

                <!-- Description -->
                <p class="text-body text-justify">
                    Our unique approach integrates Science, Technology, Engineering, and Mathematics with the Qur'an (STEM-Q) , fostering a deep understanding of both the natural world and spiritual values.
                </p>
            </div>

            <div class="flex-shrink-0 hidden md:block">
                <div class="relative">
                    <img src="{{ asset('assets/kids/why-alhazen-school/img.webp') }}"
                        alt="Why Alhazen School Image" class="w-140 h-90 object-cover rounded-[32px] brightness-70">
                </div>
            </div>
        </div>
    </div>
</section>
