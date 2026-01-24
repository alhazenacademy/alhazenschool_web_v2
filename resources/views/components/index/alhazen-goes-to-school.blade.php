<section class="py-8 sm:py-12 lg:py-16 bg-background">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-24 items-center mb-6 lg:mb-16">
            <div class="text-left order-2 lg:order-1">
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('assets/kids/index-alhazen-goes-to-school/icon1.png') }}" alt="Icon Alhazen Goes to School" class="w-15 h-15">
                </div>
                <h2 class="text-h2 font-bold text-primary leading-tight text-center mb-4">
                    {{ $title }}
                </h2>
                <p class="text-body text-text text-justify">
                    {!! $content !!}
                </p>
            </div>

            <div class="relative flex justify-center lg:justify-end order-1 lg:order-2 mb-6 lg:mb-0">
                <div class="hidden lg:block absolute -bottom-6 -right-2 sm:-bottom-8 sm:-right-4 sm:w-64 sm:h-64 md:w-80 md:h-80 lg:w-80 lg:h-80 bg-[#10B981] rounded-full opacity-12 z-0">
                </div>

                <img src="{{ $image }}" alt="Siswa belajar coding di sekolah melalui program Alhazen Goes to School"
                    class="hidden lg:block relative rounded-2xl shadow-lg max-w-sm sm:max-w-md lg:max-w-lg w-full rotate-[4deg] transform-gpu mr-4 sm:mr-8 mb-4 sm:mb-8 z-10" loading="lazy" decoding="async">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-12 mt-6 lg:mt-16">
            @foreach ($cards as $card)
                <div class="text-left flex flex-col h-full p-4 md:p-0">
                    <div class="flex justify-start mb-4">
                        <div
                            class="w-10 h-10 md:w-12 md:h-12 {{ $card['bg'] }} rounded-full flex items-center justify-center flex-shrink-0">
                            <span
                                class="text-xl md:text-2xl font-bold {{ $card['text-color'] }}">{{ $card['no'] }}</span>
                        </div>
                    </div>
                    <h3
                        class="text-h4 font-bold text-text mb-5 flex items-start leading-tight text-base md:text-h4">
                        {!! $card['title'] !!}
                    </h3>
                    <p class="text-small leading-relaxed flex-1 text-justify text-sm md:text-small">
                        {!! $card['description'] !!}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
