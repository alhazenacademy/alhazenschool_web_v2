<section {{ $attributes->merge(['id' => $id, 'class' => 'py-20']) }} aria-labelledby="about-title">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1 relative">
                <div
                    class="absolute -top-1 -left-4 sm:-top-1 sm:left-6 w-64 h-64 sm:w-80 sm:h-80 md:w-96 md:h-96 lg:w-96 lg:h-96 bg-[#10B981] rounded-full opacity-12 z-0">
                </div>

                <img src="{{ asset('assets/kids/index-about/maskot-laptop.webp') }}" alt="Maskot Alhazen Academy"
                    class="w-3/4 md:w-4/5 h-auto object-cover relative z-10 mx-auto" loading="lazy">
            </div>

            <div class="order-1 md:order-2 text-center md:text-left space-y-6 px-8">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('assets/kids/index-about/icon1.png') }}" alt="Icon About"
                        class="w-15 h-15 object-cover" loading="lazy" decoding="async">
                </div>
                <h2 id="about-title" class="text-h2 font-bold text-primary leading-tight text-center">
                    {!! $title !!}
                </h2>
                <p class="text-body text-text text-justify">
                    {!! $content !!}
                </p>
            </div>
        </div>
    </div>
</section>
