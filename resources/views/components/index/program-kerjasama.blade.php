@props([
    'title' => 'Program Kerjasama Alhazen',
    'subtitle' =>
        'Alhazen membuka program kerjasama untuk sekolah SD, SMP, SMA/KK berupa Kurikulum Teknologi dan Ekskul Coding. Kami hadir untuk membentuk generasi muda yang siap menghadapi tantangan teknologi.',
    // cards: bg, icon, child, title, sub, url, text-color
    'cards' => [],
    // opsional dekorasi maskot
    'mascot' => asset('assets/kids/index-program/maskot-hi.webp'),
])

<section class="relative py-10 md:py-14">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="text-center relative ">
            <div class="px-4 sm:px-8 md:px-12 mb-15">
                <div class="mx-auto max-w-4xl flex flex-col md:flex-row items-start justify-center gap-5">
                    {{-- Judul + subjudul --}}
                    <div class="text-center pt-5">
                        <h2 class="text-h2 font-bold text-primary leading-tight text-center mb-4">
                            {{ $title }}
                        </h2>
                        <p class="text-body text-text max-w-xl md:max-w-5xl mx-auto md:mx-0">
                            {{ $subtitle }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative mt-8 md:mt-10">
            {{-- ROW: 1 baris, horizontal scroll di mobile, center di desktop --}}
            <div class="relative z-10 overflow-x-auto overflow-y-hidden [-ms-overflow-style:none] [scrollbar-width:none] flex gap-3 sm:gap-4 lg:gap-7 py-2 scroll-snap-x mandatory"
                style="-webkit-overflow-scrolling: touch;">
                {{-- hide scrollbar --}}
                <style>
                    /* Chrome/Safari */
                    .overflow-x-auto::-webkit-scrollbar {
                        display: none;
                    }
                </style>

                @foreach ($cards as $card)
                    <div class="shrink-0 w-[260px] sm:w-[280px] scroll-snap-align-start mb-5">
                        <div class="group relative mx-auto rounded-xl overflow-hidden {{ $card['bg'] }} hover:shadow-xl transition-all duration-300 h-36 lg:h-44 will-change-transform hover:cursor-pointer"
                            onclick="location.href='{{ $card['url'] }}'">

                            {{-- child image (kanan) --}}
                            <img src="{{ $card['child'] }}" alt="{{ $card['title'] }} child"
                                class="absolute right-2 top-5 w-1/2 h-full object-cover z-20 pointer-events-none select-none"
                                loading="lazy">

                            {{-- icon (kiri bawah) --}}
                            <div
                                class="absolute bottom-4 left-6 w-17 h-17 flex items-center justify-center transition-transform duration-300 ease-out origin-bottom-left group-hover:-rotate-12 group-hover:-translate-y-1 group-hover:translate-x-1">
                                <img src="{{ $card['icon'] }}" alt="{{ $card['title'] }} icon"
                                    class="w-auto h-full pointer-events-none select-none" loading="lazy">
                            </div>

                            {{-- text --}}
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
