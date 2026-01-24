@props([
    // contoh struktur props (kirim dari parent):
    'slogan' => '',
    'title' => '',
    'subtitle' => '',
    'tabs' => [],
    'contents' => [],
    'active' => request('program') ?? (request('tab') ?? null), // ← ambil dari ?program= atau ?tab=
])

<section class="relative py-16 sm:py-20">
    <div class="mx-auto max-w-7xl">
        <div class="relative overflow-visible">
            <img src="{{ asset('assets/kids/program-detail/maskot-toa-program.png') }}" alt="Maskot Alhazen Academy"
                class="hidden lg:block pointer-events-none select-none absolute -top-12 right-20 z-0 w-40 lg:w-70 drop-shadow-xl"
                loading="lazy" />

            <div class="max-w-3xl ml-10 md:ml-20 mb-8 sm:mb-10">
                <p class="text-h4 font-semibold text-[var(--color-accent)] max-w-xl md:max-w-2xl">
                    {{ $slogan }}
                </p>
                <h2 class="text-h2 font-bold text-primary leading-tight mb-4">
                    {{ $title }}
                </h2>
                <p class="text-body text-text max-w-xl md:max-w-2xl">
                    {{ $subtitle }}
                </p>
            </div>
        </div>

        {{-- KOTAK MENU + KONTEN (rapi & responsif) --}}
        <div id="program" x-data="tabsComponent({ tabs: @js($tabs), contents: @js($contents), active: @js($active), })" x-init="init()" @imgloaded.window="measure()"
            class="relative mx-auto max-w-6xl">
            <div
                class="rounded-2xl border border-[var(--color-neutral)]/60 bg-white/95 backdrop-blur px-4 py-5 sm:px-6 sm:py-6 lg:px-8 lg:py-8 shadow-[0_10px_30px_rgba(0,0,0,.06)]">
                <div class="grid lg:grid-cols-[240px_1fr] gap-5 lg:gap-8 items-start">

                    {{-- MENU kiri --}}
                    <aside class="min-w-0" x-cloak>
                        {{-- Mobile pills (rapi + snap + no-scrollbar) --}}
                        <div class="lg:hidden mx-2 mb-4">
                            <nav class="flex gap-2 px-2 overflow-x-auto scroll-smooth snap-x snap-mandatory whitespace-nowrap [-ms-overflow-style:none] [scrollbar-width:none]"
                                role="tablist" aria-label="Program tabs"
                                x-on:wheel.passive="$event.target.scrollBy({left:$event.deltaY,behavior:'smooth'})"
                                x-init="$el.querySelectorAll('button[aria-current=true]')[0]?.scrollIntoView({ behavior: 'smooth', inline: 'center' })">
                                <template x-for="t in tabs" :key="t.key">
                                    <button type="button" @click="pick(t.key)"
                                        :aria-current="is(t.key) ? 'true' : null"
                                        :aria-selected="is(t.key) ? 'true' : 'false'" role="tab"
                                        class="shrink-0 snap-start inline-flex items-center gap-2 rounded-full border px-4 py-2 text-sm transition-transform focus:outline-none focus-visible:ring-2 focus-visible:ring-[var(--color-accent)] active:scale-[.98]"
                                        :class="is(t.key) ?
                                            'bg-[var(--color-primary)] text-white border-[var(--color-primary)] shadow-sm' :
                                            'bg-white text-[var(--color-text)] border-[var(--color-neutral)]/70 hover:border-[var(--color-primary)] hover:text-[var(--color-primary)]'">
                                        {{-- Ikon: pakai <img> jika URL, atau emoji/teks kalau bukan --}}
                                        <template x-if="typeof t.icon === 'string' && /^(\/|https?:)/.test(t.icon)">
                                            <img :src="t.icon" alt=""
                                                class="w-4 h-4 rounded-[4px] object-contain" loading="lazy"
                                                decoding="async">
                                        </template>
                                        <template x-if="!(typeof t.icon === 'string' && /^(\/|https?:)/.test(t.icon))">
                                            <span class="text-base leading-none" x-text="t.icon ?? ''"></span>
                                        </template>

                                        <span class="font-medium" x-text="t.label"></span>
                                    </button>
                                </template>
                            </nav>
                        </div>


                        {{-- Desktop cards (grid 1) --}}
                        <div class="hidden lg:grid grid-cols-1 gap-3">
                            <template x-for="t in tabs" :key="t.key">
                                <div class="w-full">
                                    <button type="button" @click="pick(t.key)"
                                        class="group relative w-full overflow-hidden rounded-xl text-left transition-all duration-300 will-change-transform hover:cursor-pointer ring-1 ring-[var(--color-neutral)]/60 hover:shadow-[0_10px_24px_rgba(0,0,0,.08)] h-28 xl:h-32"
                                        :class="[
                                            (t.bg ?? 'bg-white'),
                                            is(t.key) ? 'scale-[1.1]' : ''
                                        ]"
                                        :aria-current="is(t.key) ? 'page' : null">

                                        <!-- Anak/figure kanan (opsional) -->
                                        <img :src="t.child || (contents[t.key] && contents[t.key].img) ||
                                            @js(asset('assets/kids/program-detail/anak.webp'))"
                                            alt=""
                                            class="absolute right-2 top-3 w-1/2 h-[110%] object-contain z-20 pointer-events-none select-none"
                                            loading="lazy" decoding="async" />

                                        <!-- Ikon kiri -->
                                        <div
                                            class="absolute bottom-3 left-5 w-10 h-10 flex items-center justify-center transition-transform duration-300 origin-bottom-left group-hover:-rotate-6 group-hover:-translate-y-0.5 group-hover:translate-x-0.5">
                                            <img :src="t.icon ?? ''" alt="" x-show="t.icon"
                                                class="w-auto h-full pointer-events-none select-none" loading="lazy"
                                                decoding="async">
                                        </div>

                                        <!-- Teks -->
                                        <div class="absolute top-3 left-5 transition-all duration-300 ease-out group-hover:z-50 group-hover:scale-[1.02]"
                                            :class="[
                                                (t.textColor ?? 'text-[var(--color-text)]'),
                                                is(t.key) ? 'group-hover:z-50 group-hover:scale-[1.02]' : ''
                                            ]">
                                            <h3 class="relative text-h4 font-bold leading-tight mb-0.5"
                                                x-text="contents[t.key]?.title ?? t.label"></h3>
                                            <p class="text-small leading-tight opacity-90"
                                                x-text="contents[t.key]?.subtitle ?? (t.sub ?? '')"></p>
                                        </div>

                                        <!-- Overlay hover -->
                                        <span
                                            class="pointer-events-none absolute inset-0 bg-black/0 transition-colors duration-300 group-hover:bg-black/5"></span>
                                    </button>
                                </div>
                            </template>
                        </div>

                    </aside>

                    {{-- Konten kanan: satu pane dinamis --}}
                    <main x-ref="stage" class="min-w-0 relative overflow-hidden" :style="`min-height:${paneH}px`">
                        <section x-ref="pane" :key="active" x-transition.opacity.duration.160ms
                            class="rounded-2xl ring-1 ring-[var(--color-neutral)]/70 bg-white/95 mx-5 mt-2 mb-8 px-5 sm:px-6 py-7 sm:py-8 shadow-[0_10px_24px_rgba(0,0,0,.06)]">

                            {{-- Judul + subjudul --}}
                            <header class="mb-3">
                                <h3 class="text-h3 font-extrabold text-[var(--color-text)] leading-tight"
                                    x-text="curr.title || 'Title'"></h3>
                                <p class="text-small text-[color-mix(in_oklab,var(--color-text)_72%,#0000)] -mt-0.5"
                                    x-text="curr.subtitle || 'Subtitle'"></p>
                            </header>

                            {{-- Stats --}}
                            <ul class="mt-3 space-y-2 text-[15px] text-[var(--color-text)]/90">
                                <li class="flex items-center gap-2">
                                    {{-- icon modules --}}
                                    <svg viewBox="0 0 24 24" class="w-5 h-5 shrink-0" fill="none"
                                        stroke="currentColor" stroke-width="2">
                                        <rect x="3" y="3" width="7" height="7" rx="1.5" />
                                        <rect x="14" y="3" width="7" height="7" rx="1.5" />
                                        <rect x="3" y="14" width="7" height="7" rx="1.5" />
                                        <rect x="14" y="14" width="7" height="7" rx="1.5" />
                                    </svg>
                                    <span x-text="(curr.modules ?? '0') + ' module'"></span>
                                </li>
                                <li class="flex items-center gap-2">
                                    {{-- icon students --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        class="bi bi-person w-5 h-5" viewBox="0 0 16 16">
                                        <path
                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                    </svg>
                                    <span x-text="(curr.students ?? '0') + ' siswa'"></span>
                                </li>
                            </ul>

                            <hr class="my-4 border-[var(--color-neutral)]/70">

                            {{-- Deskripsi --}}
                            <p class="text-body text-[var(--color-text)]/90 text-justify"
                                x-text="curr.desc || 'Description tentang program ini. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'">
                            </p>

                            {{-- Badge tools --}}
                            <template x-if="(curr.tools ?? ['Tools', 'Other']).length">
                                <div class="mt-3 flex flex-wrap gap-2">
                                    <template x-for="t in (curr.tools ?? ['Tools', 'Other'])" :key="t">
                                        <span
                                            class="inline-flex items-center px-2.5 py-1 rounded-full text-[12px] font-medium bg-[color-mix(in_oklab,var(--color-primary)_12%,#fff)] text-[var(--color-primary)] ring-1 ring-[var(--color-primary)]/20">
                                            <span x-text="t"></span>
                                        </span>
                                    </template>
                                </div>
                            </template>

                            {{-- Value & promo --}}
                            <div class="mt-5">
                                <div class="text-[12px] tracking-wider font-bold text-[var(--color-text)]/70">
                                    TOTAL VALUE SEBESAR
                                </div>
                                <div class="text-[22px] sm:text-[24px] font-extrabold text-[var(--color-text)]">
                                    <span class="line-through" x-text="curr.price ?? 'Rp. 0'"></span>
                                </div>
                                <div class="text-[22px] sm:text-[24px] font-extrabold text-[#EF4444]">
                                    GRATIS KELAS PERTAMA!
                                </div>
                            </div>

                            {{-- CTA --}}
                            <div class="mt-4">
                                <a :href="curr.ctaHref ?? '{{ route('trial') }}'"
                                    class="inline-flex justify-center rounded-xl px-6 py-3 text-button bg-accent text-white hover:scale-105 transition-all duration-200 ease-in-out">
                                    Daftar Kelas Gratis
                                </a>
                            </div>
                        </section>
                    </main>

                </div>
            </div>
        </div>

    </div>
</section>
