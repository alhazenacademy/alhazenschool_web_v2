<section class="py-16 md:py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center relative ">
            <div class="px-4 sm:px-8 md:px-12 mb-15">
                <div class="mx-auto max-w-4xl flex flex-col md:flex-row items-start justify-center gap-5">

                    {{-- Icon kiri (muncul mulai md) --}}
                    {{-- <img src="{{ asset('assets/kids/index-program/icon1.png') }}" alt="Grad cap icon"
                        class="hidden md:block w-15 h-15 md:me-2 -rotate-45" loading="lazy" aria-hidden="true"> --}}

                    {{-- Judul + subjudul --}}
                    <div class="text-center pt-5">
                        <h2 class="text-h2 font-bold text-primary leading-tight text-center mb-4">
                            {{ $title }}
                        </h2>
                        <p class="text-body text-text max-w-xl md:max-w-2xl mx-auto md:mx-0">
                            {{ $subtitle }}
                        </p>
                    </div>

                    {{-- Icon kanan (muncul mulai md) --}}
                    {{-- <img src="{{ asset('assets/kids/index-program/icon2.png') }}" alt="Laptop icon"
                        class="hidden md:block w-15 h-15 md:ms-2 rotate-45" loading="lazy" aria-hidden="true"> --}}

                </div>
            </div>
        </div>

        <div class="relative">
            <!-- Gambar background di pojok kiri atas -->
            <img src="{{ asset('assets/kids/index-program/maskot-hi.webp') }}" alt="Maskot Alhazen Academy melambaikan tangan menyapa"
                class="hidden lg:block absolute left-20 bottom-75 -rotate-20 w-auto h-60 translate-y-2 md:-translate-y-4 opacity-90 object-contain z-0 pointer-events-none drop-shadow-xl"
                loading="lazy">

            <!-- Grid card -->
            <div
                class="relative grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3 sm:gap-4 lg:gap-7 max-w-4xl mx-auto justify-items-center lg:justify-items-stretch">
                @foreach ($cards as $card)
                    <div class="w-full max-w-[280px]">
                        @php
                            $isViewAll = isset($card['title']) && strcasecmp($card['title'], 'View All') === 0;
                        @endphp
                        <div class="group mx-auto rounded-xl relative overflow-hidden {{ $card['bg'] }} hover:shadow-xl transition-all duration-300 h-28 sm:h-36 lg:h-44 will-change-transform hover:cursor-pointer"
                            onclick="location.href='{{ $isViewAll
                                ? route($card['url'], absolute: false)
                                : route($card['url'], ['tab' => $card['key'] ?? Str::slug($card['title'])], false) . '#program' }}'">

                            @php
                                $fallback = asset('assets/kids/program-detail/anak.webp');

                                $photo = $card['child'] ?? null;
                            @endphp
                            <img src="{{ $photo ?: $fallback }}"
                                onerror="this.onerror=null;this.src='{{ $fallback }}';"
                                alt="{{ $card['title'] }} child"
                                class="absolute right-2 top-5 w-1/2 h-full object-cover z-20 pointer-events-none select-none"
                                loading="lazy" />

                            <div
                                class="absolute bottom-4 left-6 w-17 h-17 flex items-center justify-center transition-transform duration-300 ease-out will-change-transform origin-bottom-left group-hover:-rotate-12 group-hover:-translate-y-1 group-hover:translate-x-1">
                                <img src="{{ $card['icon'] }}" alt="{{ $card['title'] }} icon"
                                    class="w-auto h-full pointer-events-none select-none" loading="lazy">
                            </div>

                            <div
                                class="absolute top-3 left-6 {{ $card['text-color'] }} transition-all duration-300 ease-out group-hover:z-50 group-hover:scale-[1.03] group-hover:drop-shadow-[0_2px_10px_rgba(0,0,0,0.2)]">
                                <h3 class="relative text-h3 sm:text-sm font-bold leading-tight mb-0.5">
                                    {{ $card['title'] }}
                                </h3>
                                <p class="text-small sm:text-xs leading-tight opacity-90">{{ $card['sub'] }}</p>
                            </div>

                            <span
                                class="pointer-events-none absolute inset-0 bg-black/0 transition-colors duration-300 group-hover:bg-black/5"></span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </div>
</section>
