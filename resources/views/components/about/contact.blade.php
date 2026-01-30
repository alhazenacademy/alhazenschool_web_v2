<section class="relative py-12 lg:py-20">
    {{-- BG pattern: jadikan <img> agar bisa lazy --}}
    <img src="{{ $bgPattern }}" alt="" class="absolute inset-0 w-full h-full object-cover -z-10" loading="lazy"
        decoding="async" fetchpriority="low" aria-hidden="true" />

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- KARTU PUTIH --}}
        <div
            class="rounded-[32px] bg-white/98 backdrop-blur border border-[var(--color-neutral)]/60 shadow-[0_20px_40px_rgba(0,0,0,.12)] p-4 sm:p-6 lg:p-8">
            <div class="grid lg:grid-cols-2 gap-6 lg:gap-10 items-start">

                {{-- LEFT: MAP --}}
                <div>
                    @if ($mapEmbed)
                        <div class="rounded-[22px] overflow-hidden border border-[var(--color-neutral)]/70">
                            <iframe src="{!! $mapEmbed !!}" class="w-full h-[320px] md:h-[380px] lg:h-[420px]"
                                style="border:0;" allowfullscreen loading="lazy" decoding="async"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    @endif
                </div>

                {{-- RIGHT: COPY + LIST --}}
                <div class="pt-2">
                    {{-- Heading + spark --}}
                    <div class="text-center place-items-center relative">
                        <img src="{{ $icon4 }}" alt=""
                            class="absolute left-1/2 top-1 -translate-x-1/2 -translate-y-1/2 -z-10 w-85 pointer-events-none select-none"
                            loading="lazy" decoding="async" fetchpriority="low" aria-hidden="true">
                        <h2 class="text-h3 lg:text-h2 font-bold text-[var(--color-primary)]">
                            {{ $title }}
                        </h2>
                    </div>

                    <p class="mt-3 text-body text-text text-justify">
                        {{ $desc }}
                    </p>

                    <ul class="mt-5 grid gap-3 text-body">
                        {{-- ADDRESS --}}
                        <li class="grid grid-cols-[2.25rem_1fr] items-center gap-3">
                            <span class="grid place-items-center size-9 rounded-full bg-[var(--color-text)]">
                                {{-- inline SVG tidak perlu lazy --}}
                                <svg class="size-5 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" aria-hidden="true">
                                    <path d="M12 21s7-4.35 7-10a7 7 0 1 0-14 0c0 5.65 7 10 7 10z" />
                                    <circle cx="12" cy="11" r="3" />
                                </svg>
                            </span>
                            <a href="https://maps.google.com/?q={{ urlencode($address) }}" target="_blank"
                                rel="noopener"
                                class="text-small underline underline-offset-2 decoration-[var(--color-neutral)] hover:decoration-[var(--color-primary)] leading-tight">
                                {{ $address }}
                            </a>
                        </li>

                        {{-- PHONE --}}
                        <li class="grid grid-cols-[2.25rem_1fr] items-center gap-3">
                            <span class="grid place-items-center size-9 rounded-full bg-[var(--color-text)]">
                                <svg class="size-5 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" aria-hidden="true">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.78 19.78 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.78 19.78 0 0 1 2.1 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.62 2.63a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.45-1.19a2 2 0 0 1 2.11-.45c.85.29 1.73.5 2.63.62A2 2 0 0 1 22 16.92z" />
                                </svg>
                            </span>
                            <a href="https://wa.me/{{ preg_replace('/\D/', '', $phone) }}"
                                class="text-small hover:text-[var(--color-primary)] leading-tight">
                                {{ $phone }}
                            </a>
                        </li>

                        {{-- EMAIL --}}
                        <li class="grid grid-cols-[2.25rem_1fr] items-center gap-3">
                            <span class="grid place-items-center size-9 rounded-full bg-[var(--color-text)]">
                                <svg class="size-5 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" aria-hidden="true">
                                    <path d="M4 4h16v16H4z" />
                                    <path d="m22 6-10 7L2 6" />
                                </svg>
                            </span>
                            <a href="mailto:{{ $email }}"
                                class="text-small hover:text-[var(--color-primary)] leading-tight">
                                {{ $email }}
                            </a>
                        </li>

                        {{-- WEBSITE --}}
                        <li class="grid grid-cols-[2.25rem_1fr] items-center gap-3">
                            <span class="grid place-items-center size-9 rounded-full bg-[var(--color-text)]">
                                <svg class="size-5 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" aria-hidden="true">
                                    <circle cx="12" cy="12" r="10" />
                                    <path
                                        d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                                </svg>
                            </span>
                            <a href="https://{{ str_replace(['http://', 'https://'], '', $website) }}" target="_blank"
                                rel="noopener" class="text-small hover:text-[var(--color-primary)] leading-tight">
                                {{ $website }}
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
