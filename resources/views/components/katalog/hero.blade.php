@props([
    'title' => 'Jelajahi Dunia Belajar yang Seru Bersama Buku Alhazen!',
    'subtitle' =>
        'Temukan koleksi buku pelajaran anak yang menginspirasi imajinasi, logika, dan kreativitas. Mulai dari Coding, Sains, hingga Desain — semuanya untuk menumbuhkan generasi kreator masa depan!',
    'buttonText' => 'Pelajari Program Kami',
    'buttonHref' => route('program'),

    // Gambar buku (dari depan ke belakang)
    'coverFront' => 'assets/kids/katalog/1.webp',
    'coverMid' => 'assets/kids/katalog/2.webp',
    'coverBack' => 'assets/kids/katalog/3.webp',
])

<section class="relative py-10 md:py-14 lg:py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-6 items-center">

            {{-- LEFT: copy --}}
            <div class="order-2 lg:order-1 pl-8">
                <h1 class="text-h2 font-bold text-primary leading-tight mb-3">
                    {!! nl2br(e($title)) !!}
                </h1>

                <p class="text-body text-text/80 max-w-3xl text-justify mb-6">
                    {{ $subtitle }}
                </p>

                <div class="flex gap-3">
                    <a href="{{ $buttonHref }}"
                        class="inline-flex items-center justify-center rounded-2xl px-6 py-3 text-button
                            bg-[var(--color-accent)] text-white hover:opacity-95 hover:scale-[1.02] transition">
                        {{ $buttonText }}
                    </a>
                </div>
            </div>

            {{-- RIGHT: stacked book cards --}}
            <div class="order-1 lg:order-2 hidden lg:block">
                <div class="relative w-full">
                    {{-- container rasio agar tidak loncat saat load --}}
                    <div class="relative mx-auto w-[260px] sm:w-[320px] md:w-[360px] lg:w-[420px] aspect-[3/4]">

                        {{-- BACK --}}
                        <img src="{{ asset($coverBack) }}" alt="Book cover 1"
                            class="absolute left-0 top-1/2 -translate-y-1/2 w-[70%] sm:w-[50%] md:w-[55%] lg:w-[60%] h-auto object-cover rounded-2xl shadow-[0_14px_40px_rgba(0,0,0,.15)] translate-x-[85%] select-none pointer-events-none"
                            loading="lazy" decoding="async" />

                        {{-- MID --}}
                        <img src="{{ asset($coverMid) }}" alt="Book cover 2"
                            class="absolute left-0 top-1/2 -translate-y-1/2 w-[78%] sm:w-[60%] md:w-[65%] lg:w-[70%] h-auto object-cover rounded-2xl shadow-[0_16px_44px_rgba(0,0,0,.14)] translate-x-[40%] select-none pointer-events-none"
                            loading="lazy" decoding="async" />

                        {{-- FRONT --}}
                        <img src="{{ asset($coverFront) }}" alt="Book cover 3"
                            class="absolute left-0 top-1/2 -translate-y-1/2 sm:w-[70%] md:w-[75%] lg:w-[80%] h-auto object-cover rounded-2xl shadow-[0_18px_50px_rgba(0,0,0,.14)] translate-x-0 select-none pointer-events-none"
                            loading="lazy" decoding="async" />

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
