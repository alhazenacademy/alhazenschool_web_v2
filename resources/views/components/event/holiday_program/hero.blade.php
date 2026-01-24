@props([
    'title' => 'Holiday Coding Program Bersama Alhazen Academy !',
    'subtitle' => 'Program liburan edukatif untuk anak agar tetap produktif, kreatif, dan percaya diri melalui belajar teknologi.',
    'banner' => asset('assets/kids/holiday/banner-default.webp'),
    'ctaText' => 'Lihat Paket',
    'ctaUrl' => '#paket',
])

<section class="relative py-16 sm:py-20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-center">

            {{-- LEFT : CONTENT --}}
            <div class="relative z-10">

                {{-- Title --}}
                <h1
                    class="text-h2 font-bold text-primary leading-tight mb-4">
                    {{ $title }}
                </h1>

                {{-- Subtitle --}}
                <p class="text-body text-text/80 max-w-3xl mb-6">
                    {{ $subtitle }}
                </p>

                {{-- Highlight Points --}}
                <ul class="space-y-3 mb-8 text-sm sm:text-base text-text/80">
                    <li class="flex items-start gap-3">
                        <span class="mt-1 w-2.5 h-2.5 rounded-full bg-primary"></span>
                        Belajar coding, game, dan teknologi dengan cara menyenangkan
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1 w-2.5 h-2.5 rounded-full bg-primary"></span>
                        Dibimbing tutor berpengalaman & ramah anak
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1 w-2.5 h-2.5 rounded-full bg-primary"></span>
                        Cocok untuk anak SD hingga SMP
                    </li>
                </ul>

                {{-- CTA --}}
                <div class="flex flex-wrap gap-4">
                    <a href="{{ $ctaUrl }}" class="inline-flex justify-center rounded-xl px-6 py-3 text-button bg-accent text-white hover:scale-105 transition-all duration-200 ease-in-out">
                        {{ $ctaText }}
                    </a>

                    <a href="#panduan-ortu" class="inline-flex items-center justify-center rounded-xl px-6 py-3 text-button bg-white text-accent ring-1 ring-accent hover:bg-accent/5 transition">
                        Panduan Orang Tua
                    </a>
                </div>
            </div>

            {{-- RIGHT : IMAGE --}}
            <div class="relative">

                {{-- Decorative background --}}
                <div
                    class="absolute -inset-6 rounded-[32px] bg-primary/10 blur-2xl">
                </div>

                {{-- Image card --}}
                <div class="relative rounded-[28px] overflow-hidden shadow-[0_25px_60px_rgba(0,0,0,.18)] ring-1 ring-black/10">

                    <img
                        src="{{ $banner }}"
                        alt="Event tentang {{ $title }}"
                        class="w-full h-auto object-cover"
                        loading="eager"
                    >
                </div>
            </div>

        </div>
    </div>
</section>
