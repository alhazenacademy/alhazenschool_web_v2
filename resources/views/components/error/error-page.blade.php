@props([
    // Heading
    'code'        => null,   // bisa 404, 500, 403, dll
    'badge'       => null,   // kalau null, auto dari code
    'title'       => null,
    'subtitle'    => null,

    // Button (default null: kalau tidak diisi, tombol tidak muncul)
    'buttonText'  => null,
    'buttonHref'  => null,

    // Illustration
    'image'       => null,
    'imageAlt'    => null,

    // Catatan kecil di bawah (boleh null)
    'note'        => null,
])

@php
    // Fallback internal (tidak di props)
    $code = $code ?? '500';

    $badgeText = $badge ?? match ($code) {
        '404' => '404 Not Found',
        '500' => '500 Server Error',
        '403' => '403 Forbidden',
        '419' => '419 Page Expired',
        '503' => '503 Service Unavailable',
        default => $code . ' Error',
    };

    $title    = $title    ?? 'Ups! Terjadi kesalahan di server.';
    $subtitle = $subtitle ?? 'Kami sedang mencoba memperbaikinya. Silakan coba lagi beberapa saat lagi.';

    $image    = $image    ?? asset('assets/kids/error/img-500.webp');
    $imageAlt = $imageAlt ?? ($code . ' Error');

    // Note optional: kalau kamu mau default, boleh diisi; kalau nggak, biarin null
    $note = $note ?? 'Jika masalah terus berulang, hubungi tim Alhazen.';
@endphp

<section class="relative min-h-[70vh] flex flex-col items-center justify-center gap-8 text-center px-4 py-14">

    {{-- Headline --}}
    <div class="max-w-3xl">
        <span
            class="inline-block rounded-full px-3 py-1 text-[12px] font-semibold ring-1 ring-[var(--color-neutral)]/70 bg-[var(--color-background)]/80 mb-3">
            {{ $badgeText }}
        </span>

        <h1 class="text-h2 font-extrabold text-[var(--color-primary)] leading-tight mb-2">
            {{ $title }}
        </h1>

        <p class="text-body text-[var(--color-text)]/85">
            {{ $subtitle }}
        </p>
    </div>

    {{-- Illustration --}}
    <figure class="max-w-2xl w-full">
        <img src="{{ $image }}" alt="{{ $imageAlt }}"
            class="w-80 h-auto object-contain mx-auto select-none"
            loading="lazy" decoding="async">
    </figure>

    {{-- Actions: hanya muncul kalau ADA teks & href --}}
    @if ($buttonHref && $buttonText)
        <div class="flex flex-col sm:flex-row items-center gap-3 mt-2">
            <a href="{{ $buttonHref }}"
                class="inline-flex items-center gap-2 rounded-2xl px-6 py-3 text-button bg-[var(--color-accent)] text-white hover:opacity-95 hover:scale-[1.02] transition">
                {{ $buttonText }}
            </a>
        </div>
    @endif

    {{-- Small note (optional) --}}
    @if ($note)
        <p class="text-small text-[var(--color-text)]/55">
            {{ $note }}
        </p>
    @endif
</section>
