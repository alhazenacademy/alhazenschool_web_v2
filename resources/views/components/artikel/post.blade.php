@props([
    'authorAvatar' => $article->author->avatar_url ?? asset('assets/kids/artikel/icon-penulis.png'),
    'backHref' => route('artikel', absolute: false),
    'article' => $article,
])
@php
    $shareUrl   = urlencode(url()->current());
    $shareText  = urlencode(($article->title ?? 'Alhazen Academy') . ' - Alhazen Academy');
    $waMessage = "{$article->title}\n\n". "{$article->preview}\n\n". "Selengkapnya: ".url()->current();
    $waText = urlencode($waMessage);
@endphp


<section class="relative">
    {{-- Progress baca --}}
    <div class="fixed left-0 top-0 h-1.5 w-full bg-[var(--color-neutral)]/30 z-40">
        <div id="readProgressBar" class="h-full bg-[var(--color-primary)]"
            style="transform-origin:0 0; transform:scaleX(0)"></div>
    </div>

    <div class="mx-auto max-w-3xl px-4 sm:px-6">
        {{-- Back link --}}
        <div class="pt-8">
            <a href="{{ $backHref }}"
                class="text-small text-text/70 hover:text-[var(--color-primary)] underline underline-offset-2">
                ← Kembali ke Artikel
            </a>
        </div>

        {{-- Header --}}
        <header class="mt-6 mb-5">
            <h1 class="text-h2 md:text-h1 font-extrabold">{{ $article->title }}</h1>
            <div class="mt-4 flex flex-wrap items-center gap-3 text-small text-text/70">
                <img src="{{ $authorAvatar }}" alt="Profil penulis {{ $article->author->name }}" class="size-9 object-cover"
                    loading="lazy" decoding="async">
                <span class="font-medium text-text/90">{{ $article->author->name }}</span>
                @if ($article->published_at_formatted )
                    <span>• {{ $article->published_at_formatted }}</span>
                @endif
                @if ($article->reading_time)
                    <span>• {{ $article->reading_time }} menit baca</span>
                @endif
            </div>
        </header>

        {{-- Cover --}}
        @if ($article->cover_image_url)
            <figure class="my-6">
                <img src="{{ $article->cover_image_url }}" alt="Artikel tentang {{ $article->title }}" class="w-full h-auto rounded-2xl object-cover">
            </figure>
        @endif

        <div class="flex items-center gap-3">
                {{-- Twitter (X) --}}
                {{-- <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareText }}"
                target="_blank" rel="noopener"
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                aria-label="Twitter">
                    <img src="{{ asset('assets/kids/icon-twitter.png') }}" alt="Twitter icon"
                        class="w-8 h-auto object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                        loading="lazy" decoding="async" />
                </a> --}}

                {{-- Facebook --}}
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}"
                target="_blank" rel="noopener"
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                aria-label="Facebook">
                    <img src="{{ asset('assets/kids/index-footer/icon-fb.png') }}" alt="Facebook icon"
                        class="w-8 h-auto object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                        loading="lazy" decoding="async" />
                </a>

                {{-- LinkedIn --}}
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $shareUrl }}"
                target="_blank" rel="noopener"
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                aria-label="LinkedIn">
                    <img src="{{ asset('assets/kids/index-footer/icon-lkn.png') }}" alt="LinkedIn icon"
                        class="w-8 h-auto object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                        loading="lazy" decoding="async" />
                </a>

                {{-- WhatsApp --}}
                <a href="https://wa.me/?text={{ $waText }}"
                target="_blank" rel="noopener"
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                aria-label="Whatsapp">
                    <img src="{{ asset('assets/kids/icon-wa-green.png') }}" alt="Whatsapp icon"
                        class="w-8 h-auto object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                        loading="lazy" decoding="async" />
                </a>
            </div>

        {{-- Content --}}
        <article class="prose">
            {!! $article->content !!}
        </article>

        {{-- Tags + share --}}
        <div class="mt-8 flex flex-wrap items-center justify-between gap-4">
            <div class="flex flex-wrap gap-2">
                <span
                    class="px-3 py-1 rounded-full border border-[var(--color-neutral)]/70 bg-white text-small">{{ $article->category->name }}
                </span>
            </div>
            <div class="flex items-center gap-3">
                {{-- Twitter (X) --}}
                {{-- <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareText }}"
                target="_blank" rel="noopener"
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                aria-label="Twitter">
                    <img src="{{ asset('assets/kids/icon-twitter.png') }}" alt="Twitter icon"
                        class="w-8 h-auto object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                        loading="lazy" decoding="async" />
                </a> --}}

                {{-- Facebook --}}
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}"
                target="_blank" rel="noopener"
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                aria-label="Facebook">
                    <img src="{{ asset('assets/kids/index-footer/icon-fb.png') }}" alt="Facebook icon"
                        class="w-8 h-auto object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                        loading="lazy" decoding="async" />
                </a>

                {{-- LinkedIn --}}
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $shareUrl }}"
                target="_blank" rel="noopener"
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                aria-label="LinkedIn">
                    <img src="{{ asset('assets/kids/index-footer/icon-lkn.png') }}" alt="LinkedIn icon"
                        class="w-8 h-auto object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                        loading="lazy" decoding="async" />
                </a>

                {{-- WhatsApp --}}
                <a href="https://wa.me/?text={{ $waText }}"
                target="_blank" rel="noopener"
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                aria-label="Whatsapp">
                    <img src="{{ asset('assets/kids/icon-wa-green.png') }}" alt="Whatsapp icon"
                        class="w-8 h-auto object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                        loading="lazy" decoding="async" />
                </a>
            </div>
        </div>

        {{-- Author bio ringkas --}}
        <aside class="mt-10 p-5 rounded-2xl border border-[var(--color-neutral)]/70 bg-white/80">
            <div class="flex items-center gap-4">
                <img src="{{ $authorAvatar }}" alt="{{ $article->author->name }}" class="size-12 object-cover" loading="lazy" decoding="async">
                <div>
                    <div class="font-semibold">{{ $article->author->name }}</div>
                    <div class="text-small text-text/70">{{ $article->author_info }}</div>
                </div>
            </div>
        </aside>
    </div>
</section>

{{-- Progress bar script --}}
<script>
    (() => {
        const bar = document.getElementById('readProgressBar');
        if (!bar) return;
        const onScroll = () => {
            const el = document.documentElement;
            const body = document.body;
            const st = el.scrollTop || body.scrollTop;
            const h = (body.scrollHeight || el.scrollHeight) - el.clientHeight;
            const p = Math.max(0, Math.min(1, st / Math.max(1, h)));
            bar.style.transform = `scaleX(${p})`;
        };
        document.addEventListener('scroll', onScroll, {
            passive: true
        });
        onScroll();
    })();
</script>

{{-- Tipografi sederhana ala Medium (pakai token kamu) --}}
<style>
    .prose {
        color: var(--color-text)
    }

    .prose h1,
    .prose h2,
    .prose h3,
    .prose h4,
    .prose h5 {
        font-weight: 500;
        letter-spacing: -.01em
    }

    .prose h1 {
        font-size: var(--font-size-h2);
        line-height: 1.16;
        margin: 1.2em 0 .4em
    }

    .prose h2 {
        font-size: var(--font-size-h3);
        line-height: 1.2;
        margin: 1.2em 0 .35em
    }

    .prose h3 {
        font-size: var(--font-size-h4);
        line-height: 1.25;
        margin: 1em 0 .3em
    }

    .prose p {
        font-size: var(--font-size-body);
        line-height: 1.8;
        margin: .85em 0
    }

    .prose ul,
    .prose ol {
        padding-left: 1.25rem;
        margin: .75em 0
    }

    .prose li {
        margin: .35em 0
    }

    .prose a {
        color: var(--color-primary);
        text-decoration: underline;
        text-underline-offset: 3px
    }

    .prose blockquote {
        border-left: 4px solid var(--color-primary);
        padding-left: 1rem;
        margin: 1.25rem 0;
        color: color-mix(in oklab, var(--color-text) 85%, #000);
        font-style: italic;
        background: color-mix(in oklab, #fff 88%, var(--color-primary));
        border-radius: 8px
    }

    .prose img {
        border-radius: 16px
    }

    .prose pre {
        background: #0b1220;
        color: #e5e7eb;
        padding: 1rem;
        border-radius: 14px;
        overflow: auto
    }

    .prose code {
        font-family: ui-monospace, SFMono-Regular, Menlo, monospace
    }
</style>
