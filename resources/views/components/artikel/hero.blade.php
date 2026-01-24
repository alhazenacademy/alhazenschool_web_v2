<section class="relative pt-16 md:pt-20 pb-12 md:pb-16 overflow-hidden">
    <div class="mx-auto max-w-5xl px-4 sm:px-6 text-center">
        <h1 class="text-h2 font-bold text-primary leading-tight">{{ $title }}</h1>
        <p class="mt-3 text-body text-text/80">{{ $subtitle }}</p>

        {{-- Dekor tanda kutip --}}
        <div class="mt-10 flex justify-center">
            <img src="{{ $icon1 }}" alt="" class="w-20 h-20 opacity-80" loading="lazy" decoding="async"
                fetchpriority="low">
        </div>
    </div>
</section>
