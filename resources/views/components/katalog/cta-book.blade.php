@props([
    // BG pattern
    'bgPattern' => asset('assets/kids/katalog-cta/book-shop-bg.webp'),

    // Heading area
    'title' => 'Ingin pesan buku atau butuh rekomendasi yang paling cocok untuk anak?',
    'subtitle' => 'Tim kami siap membantu! Klik tombol di bawah untuk menghubungi kami via WhatsApp.',

    // CTA (teks & aria label)
    'ctaText' => 'Pesan Sekarang !',
    'ctaAria' => 'Hubungi via WhatsApp',

    // Phone image tunggal
    'phone' => asset('assets/kids/katalog-cta/phone.webp'),

    // >>> Baru: sumber nomor & pesan WA
    'salesPhone' => null, // contoh: 0812xxxx / +62812xxxx / 62812xxxx
    'waMessage' => 'Halo Admin Alhazen, saya ingin pesan buku / minta rekomendasi.',
])

@php
    // Normalisasi nomor: ambil digit saja
    $digits = preg_replace('/\D+/', '', (string) $salesPhone);

    // Jika diawali 0 => ubah ke 62 (Indonesia)
    if (strlen($digits) > 0 && $digits[0] === '0') {
        $digits = '62' . substr($digits, 1);
    }

    // Buat href WA bila nomor valid
    $waHref = $digits ? 'https://wa.me/' . $digits . '?text=' . urlencode($waMessage) : '#';
@endphp

<section class="relative py-20 lg:py-0 overflow-hidden">
    {{-- BG pattern --}}
    <img src="{{ $bgPattern }}" alt="" class="absolute inset-0 w-full h-full object-cover -z-10"
        loading="lazy" decoding="async" fetchpriority="low" aria-hidden="true" />

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 items-center gap-10">
            {{-- LEFT: single device image --}}
            <div class="lg:col-span-5 order-1 lg:order-1 hidden lg:block">
                <div class="w-full flex justify-center lg:justify-end">
                    <img src="{{ $phone }}" alt="Chat WhatsApp"
                        class="w-[75%] h-auto object-contain select-none pointer-events-none" loading="lazy"
                        decoding="async">
                </div>
            </div>

            {{-- RIGHT: copy + CTA --}}
            <div class="lg:col-span-7 order-2 lg:order-2">
                <div class="max-w-3xl">
                    <h2 class="text-h2 leading-tight font-bold text-white mb-4">{!! nl2br(e($title)) !!}</h2>
                    <p class="text-body text-white mb-6">{{ $subtitle }}</p>

                    <div>
                        <a href="{{ $waHref }}" target="_blank" rel="noopener" aria-label="{{ $ctaAria }}"
                            class="inline-flex items-center justify-center rounded-2xl px-6 py-3 text-button bg-[var(--color-accent)] text-white hover:opacity-95 hover:scale-[1.02] transition shadow-[0_10px_24px_rgba(0,0,0,.15)]">
                            {{ $ctaText }}
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
