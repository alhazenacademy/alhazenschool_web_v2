@props([
    // Heading
    'code' => null, // bisa 404, 500, 403, dll
    'badge' => null, // kalau null, auto dari code
    'title' => null,
    'subtitle' => null,

    // Button (default null: kalau tidak diisi, tombol tidak muncul)
    'buttonText' => null,
    'buttonHref' => null,

    // Illustration
    'image' => null,
    'imageAlt' => null,

    // Catatan kecil di bawah (boleh null)
    'note' => null,
])

@php
    // Fallback internal (tidak di props)
    $code = $code ?? '500';

    $badgeText =
        $badge ??
        match ($code) {
            '404' => '404 Not Found',
            '500' => '500 Server Error',
            '403' => '403 Forbidden',
            '419' => '419 Page Expired',
            '503' => '503 Service Unavailable',
            default => $code . ' Error',
        };

    $title = $title ?? 'Ups! Terjadi kesalahan di server.';
    $subtitle = $subtitle ?? 'Kami sedang mencoba memperbaikinya. Silakan coba lagi beberapa saat lagi.';

    $image = $image ?? asset('assets/kids/error/img-500.webp');
    $imageAlt = $imageAlt ?? $code . ' Error';

    // Note optional: kalau kamu mau default, boleh diisi; kalau nggak, biarin null
    $note = $note ?? 'Jika masalah terus berulang, hubungi tim Alhazen.';
@endphp

<section class="relative min-h-[70vh] flex flex-col items-center justify-center gap-8 text-center px-4 py-14">

    {{-- Headline --}}
    <div class="max-w-7xl">
        <div class="mb-5">
            <span
                class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-text text-text">
                {{ $badgeText }}
            </span>
        </div>

        <h1 class="text-h1 font-bold text-[var(--color-primary)] italic leading-tight mb-2">
            {{ $title }}
        </h1>

        <p class="text-body text-text">
            {{ $subtitle }}
        </p>
    </div>

    {{-- Illustration --}}
    <figure class="max-w-2xl w-full">
        <img src="{{ $image }}" alt="{{ $imageAlt }}" class="w-80 h-auto object-contain mx-auto select-none"
            loading="lazy" decoding="async">
    </figure>

    {{-- Actions: hanya muncul kalau ADA teks & href --}}
    @if ($buttonHref && $buttonText)
        <div class="flex flex-col sm:flex-row items-center gap-3 mt-2">
            <a href="{{ $buttonHref }}"
                class="inline-flex items-center gap-3 rounded-full bg-accent px-6 py-3 text-background font-semibold shadow-lg transition-transform duration-200 hover:scale-105">
                <span>{{ $buttonText }}</span>

                <!-- Arrow Icon -->
                <span class="flex items-center justify-center w-7 h-7 rounded-full bg-[#15433B] text-background">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
            </a>
        </div>
    @endif

    {{-- Small note (optional) --}}
    @if ($note)
        <p class="text-small text-text">
            {{ $note }}
        </p>
    @endif
</section>
