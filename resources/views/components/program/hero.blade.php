<section class="relative overflow-hidden">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-20 lg:pt-24 pb-10">
        {{-- Teks lebih lebar: 1.35fr vs 1fr --}}
        <div class="grid lg:grid-cols-[1fr_1.25fr] items-center gap-10 lg:gap-16">

            {{-- LEFT (gambar) — sembunyikan di HP, dan hindari download di layar kecil --}}
            <div class="relative hidden lg:block">
                <picture>
                    {{-- Hanya load gambar mulai lg+ --}}
                    <source media="(min-width:1024px)" srcset="{{ asset($imgHero) }}">
                    {{-- Placeholder 1×1 agar tidak request gambar saat < lg --}}
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="
                        alt="Hero Image" class="block w-[90%] lg:w-full" loading="lazy" decoding="async"
                        fetchpriority="low">
                </picture>
            </div>

            {{-- RIGHT (teks) --}}
            <div>
                <h1 class="text-h2 font-bold text-primary leading-tight">{{ $title }}</h1>
                <p class="mt-3 text-body text-text/80 max-w-3xl">{{ $subtitle }}</p>

                <div class="mt-6">
                    <a href="{{ $ctaHref }}"
                        class="inline-flex justify-center rounded-xl px-6 py-3 text-button bg-accent text-white hover:scale-105 transition-all duration-200 ease-in-out">
                        {{ $ctaText }}
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
