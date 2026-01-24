@props([
    'bgDecor' => asset('assets/kids/image-footer/bg-footer.webp'),
    'socials' => [],
    'logo' => asset('assets/kids/image-footer/Alhazen-Logo-white.webp'),
    'logoAlt' => 'Alhazen Academy',
    'about' =>
        'PT. Alhazen Global Teknologi adalah Lembaga Kursus dan Konsultan Pendidikan, terutama di bidang pendidikan teknologi kreatif, solutif, inovatif, dan adaptif. ',

    // terima dari controller
    'programLinks' => [],

    // bisa di-override dari luar, tapi kalau kosong kita isi default di bawah
    'columns' => null,

    'contact' => [],
    'addressTitle' => 'Kantor Pusat',
    'address' => '',
])

@php
    // kalau $columns tidak dikirim, kita pakai default yang include $programLinks dari controller
    $columns = $columns ?? [
        [
            'title' => 'Program',
            'links' => $programLinks,
        ],
        [
            'title' => 'Lainnya',
            'links' => [
                ['label' => 'Program', 'href' => 'program'],
                ['label' => 'Event', 'href' => 'event'],
                ['label' => 'Artikel', 'href' => 'artikel'],
                ['label' => 'Tentang Kami', 'href' => 'about'],
            ],
        ],
    ];
    
    $programCol = $columns[0] ?? ['title' => 'Program', 'links' => []];
    $otherCol = $columns[1] ?? ['title' => 'Lainnya', 'links' => []];
@endphp

<footer class="overflow-hidden relative rounded-t-[56px] inset-0 bg-gradient-to-b from-[#10B981] to-[#065F46]">
    <!-- Decorative icons background -->
    <img src="{{ $bgDecor }}" alt=""
        class="absolute bottom-0 left-0 w-full object-cover object-bottom opacity-95 pointer-events-none select-none"
        loading="lazy" decoding="async" />

    <!-- Footer content -->
    <div class="relative mx-auto max-w-7xl px-5 sm:px-8 py-12 sm:py-16 text-white">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-y-10 md:gap-y-12 md:gap-x-12 xl:gap-x-16">

            <!-- Logo & About -->
            <div class="md:col-span-3 space-y-3 md:space-y-6">
                <img src="{{ $logo }}" alt="{{ $logoAlt }}" class="h-10 w-auto" loading="lazy"
                    decoding="async">
                <div class="flex items-center gap-3">
                    @foreach ($socials as $s)
                        <a href="{{ $s['href'] }}" target="_blank" rel="noopener"
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                            aria-label="{{ ucfirst($s['label']) }}">
                            <img src="{{ asset($s['icon_path'] ?? 'assets/kids/index-footer/Alhazen-Logo-white.png') }}" alt="{{ ucfirst($s['label']) }} icon"
                                class="w-8 h-auto object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                                loading="lazy" decoding="async" />
                        </a>
                    @endforeach
                </div>
                <p class="text-white/90 text-sm max-w-sm leading-relaxed text-justify">{{ $about }}</p>
            </div>

            <!-- Program -->
            <div class="md:col-span-3 md:pl-6 space-y-4">
                <h4 style="font-family: Poppins" class="text-xl font-medium">{{ $programCol['title'] }}</h4>
                <ul class="space-y-2">
                    @foreach ($programCol['links'] as $ln)
                        <li>
                            <a href="{{ route($ln['url'], ['tab' => $ln['key']], false) . '#program' }}"
                                class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">
                                {{ $ln['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="mt-6">
                    <h4 style="font-family: Poppins" class="text-xl font-medium mb-4">Hubungi Kami</h4>
                    <ul class="space-y-2 text-white/90 text-sm">
                        <li><a href="tel:{{ preg_replace('/\s+/', '', $contact['phone']) }}"
                                class="hover:underline hover:text-white">{{ $contact['phone'] }}</a></li>
                        <li><a href="mailto:{{ $contact['email'] }}"
                                class="hover:underline hover:text-white">{{ $contact['email'] }}</a></li>
                        <li><a href="https://{{ $contact['site'] }}" target="_blank" rel="noopener"
                                class="hover:underline hover:text-white">{{ $contact['site'] }}</a></li>
                    </ul>
                </div>
                
            </div>

            <!-- Lainnya -->
            <div class="md:col-span-3 md:pl-6 space-y-4">
                <h4 style="font-family: Poppins" class="text-xl font-medium">{{ $otherCol['title'] }}</h4>
                <ul class="space-y-2">
                    @foreach ($otherCol['links'] as $ln)
                        <li>
                            <a href="{{ route($ln['href']) }}"
                                class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">
                                {{ $ln['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="pt-4">
                    <h4 style="font-family: Poppins" class="text-xl font-medium mb-4">Tersertifikasi</h4>
                    <div
                        class="group relative w-35 rounded-2xl bg-white p-3 shadow-lg shadow-black/10 overflow-hidden transition hover:ring-2 hover:ring-primary/20 ">
                        <a href="https://blockchain.stem.org/9faa3d1f-7825-4b4c-8967-525fa6eb08f0#gs.c2374s" target="_blank"
                            rel="noopener noreferrer" class="flex items-center justify-center">
                            <img alt="Badge Sertifikasi STEM.org" class="ct-image block" width="400"
                                height="400" loading="lazy" decoding="async"
                                src="https://api.accredible.com/v1/frontend/credential_website_embed_image/badge/108574909"
                                data-fallback="{{ asset('assets/stem_badge.png') }}"
                                onerror="this.onerror=null; this.src=this.dataset.fallback;">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Alamat -->
            <div class="md:col-span-3 md:pl-6 space-y-2">
                <h4 style="font-family: Poppins" class="text-xl font-medium mb-4">{{ $addressTitle }}</h4>
                <a href="https://maps.google.com/?q={{ urlencode($address) }}" target="_blank" rel="noopener"
                    class="text-sm text-white/90 leading-relaxed underline">{{ $address }}</a>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="relative border-t border-white/20 mt-10">
            <div
                class="mx-auto max-w-7xl px-5 sm:px-8 py-4 text-center text-xs sm:text-sm text-white/80">
                © {{ date('Y') }} <strong>PT. Alhazen Global Teknologi</strong>. All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
