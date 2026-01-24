<section class="relative overflow-hidden">
    <div class="absolute inset-0 bg-[var(--color-background)] -z-10"></div>

    <div class="relative mx-auto px-4 pt-24 pb-6">
        <div class="flex flex-col md:flex-row items-center md:items-start justify-between gap-10">
            <!-- Kolom Kiri (gambar) -->
            <div class="relative hidden md:block md:w-1/5 md:h-[300px] lg:h-[400px]">
                <!-- LEFT TOP -->
                <figure
                    class="absolute left-[10%] top-[150px] rotate-[17deg] w-[120px] sm:w-[160px] lg:w-[200px] aspect-[4/5] rounded-[26px] overflow-hidden shadow-2xl">
                    <img src="{{ $imgLB }}" alt="Foto kegiatan Alhazen Hackathon" class="w-full h-full object-cover" loading="lazy"
                        decoding="async">
                </figure>

                <!-- LEFT BOTTOM -->
                <figure
                    class="absolute left-[6%] top-[-10px] rotate-[-15deg] w-[120px] sm:w-[160px] lg:w-[200px] aspect-[4/5] rounded-[26px] overflow-hidden shadow-2xl">
                    <img src="{{ $imgLT }}" alt="Foto kegiatan Alhazen open booth di Jakarta" class="w-full h-full object-cover" loading="lazy"
                        decoding="async">
                </figure>
            </div>

            <!-- Kolom Tengah (konten) -->
            <div class="md:w-3/5 text-center md:pt-6">
                <h1 class="text-h2 font-bold text-primary leading-tight text-center">{{ $title }}</h1>
                <p class="mt-3 text-body text-text max-w-3xl mx-auto">{{ $subtitle }}</p>

                <a href="{{ $ctaHref }}" aria-label="{{ $ctaText }} - Mulai belajar sekarang"
                    class="mt-3 mb-5 inline-flex items-center gap-2 rounded-xl px-8 py-3 bg-transparent border-1 border-primary text-primary font-semibold shadow-xl hover:scale-105 transition-all duration-300 drop-shadow-2xl">
                    {{ $ctaText }}
                </a>

                {{-- LCP image: jangan lazy --}}
                <img src="{{ $mascot }}" alt="Maskot Alhazen Academy page Tentang Kami"
                    class="mx-auto w-[360px] md:w-[200px] lg:w-[300px] -mt-5 md:-mt-6" fetchpriority="high"
                    decoding="async">
            </div>

            <!-- Kolom Kanan (gambar) -->
            <div class="relative hidden md:block md:w-1/5 md:h-[300px] lg:h-[400px]">
                <!-- RIGHT TOP -->
                <figure
                    class="absolute right-[6%] top-[40px] rotate-[12deg] w-[120px] sm:w-[160px] lg:w-[200px] aspect-[4/5] rounded-[26px] overflow-hidden shadow-2xl">
                    <img src="{{ $imgRT }}" alt="Foto kegiatan lomba coding Alhazen Academy" class="w-full h-full object-cover" loading="lazy"
                        decoding="async">
                </figure>

                <!-- RIGHT BOTTOM (lebih besar) -->
                <figure
                    class="absolute right-[9%] top-[250px] rotate-[-12deg] w-[130px] sm:w-[210px] lg:w-[250px] aspect-[16/11] rounded-[26px] overflow-hidden shadow-2xl">
                    <img src="{{ $imgRB }}" alt="Foto kegiatan Alhazen goes to school" class="w-full h-full object-cover" loading="lazy"
                        decoding="async">
                </figure>
            </div>
        </div>
    </div>
</section>
