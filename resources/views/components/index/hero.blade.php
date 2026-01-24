<section id="home" class="relative overflow-hidden py-8" aria-labelledby="hero-title">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- Banner Swiper dengan Full Rounded Corners (tanpa container background) -->
        <div class="relative h-[500px] sm:h-[500px] md:h-[600px] lg:h-[70vh] rounded-3xl overflow-hidden mb-8">
            <!-- Swiper Background Gambar Anak -->
            <div class="swiper hero-img-swiper absolute inset-0 h-full w-full rounded-3xl">
                <div class="swiper-wrapper">
                    @foreach ($heroImages as $index => $image)
                        <div class="swiper-slide relative bg-cover bg-center bg-no-repeat h-full rounded-3xl"
                            style="background-image: url('{{ $image }}')" role="img"
                            aria-label="Hero image {{ $index + 1 }}">
                            <!-- Overlay Gelap Netral untuk Text Legible (gelap biasa, adaptif dark) -->
                            <div class="absolute inset-0 bg-black/50 dark:bg-white/10 rounded-3xl"></div>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination Dots di Bawah Banner -->
                <div
                    class="swiper-pagination hero-pagination absolute bottom-4 left-1/2 transform -translate-x-1/2 z-10">
                </div>
            </div>

            <!-- Text Overlay di Atas Background (Title, Subtitle, CTA) -->
            <div
                class="absolute inset-0 z-10 flex flex-col justify-center items-center p-8 lg:p-12 sm:p-12 text-background space-y-6 rounded-3xl">
                <!-- Title Besar -->
                <h1 id="hero-title" class="text-h1 font-bold leading-tight text-center drop-shadow-2xl">
                    {!! $heroTitle !!}
                </h1>

                <!-- Subtitle -->
                <p class="text-body font-light text-center drop-shadow-lg max-w-3xl">
                    {{ $heroSubtitle }}
                </p>

                <!-- CTA Button Accent Only -->
                <a href="{{ $heroCtaHref }}" aria-label="{{ $heroCtaText }} - Mulai belajar sekarang"
                    class="btn-shine shine-loop inline-flex items-center gap-2 rounded-xl px-8 py-3 bg-accent text-background shadow-xl hover:scale-105 transition-all duration-200 drop-shadow-2xl">
                    {{ $heroCtaText }}
                </a>
            </div>
        </div>

        <!-- Bawah: Certified Badges Centered (tanpa background putih, langsung di body dengan padding) -->
        <div class="px-8 pb-8 text-center"> {{-- Hapus pt-8 karena banner sudah mb-8 --}}
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6"> {{-- justify-center untuk tengah --}}
                <!-- Left: Text + STEM Logo -->
                <div class="flex flex-col sm:flex-row items-center gap-4">
                    <span class="text-small font-medium text-text">Bersertifikasi & Aman untuk Anak:</span>
                    <a href="https://blockchain.stem.org/9faa3d1f-7825-4b4c-8967-525fa6eb08f0#gs.c2374s" target="_blank"
                        rel="noopener noreferrer">
                        <img alt="Badge Sertifikasi STEM.org" class="ct-image h-20 w-auto block" width="400"
                            height="400" loading="lazy" decoding="async"
                            src="https://api.accredible.com/v1/frontend/credential_website_embed_image/badge/108574909"
                            data-fallback="{{ asset('assets/stem_badge.png') }}"
                            onerror="this.onerror=null; this.src=this.dataset.fallback;">
                    </a>
                </div>

                <!-- Right: Google Logo + Rating -->
                <div class="flex items-center gap-2"> {{-- Logo Google + stars + text --}}
                    {{-- <script defer async src='https://cdn.trustindex.io/loader.js?f62c52357a1b638fb516a849021'></script> --}}
                </div>
            </div>
        </div>
    </div>
</section>
