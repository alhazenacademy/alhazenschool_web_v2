@props([
    'title' => 'Kursus Coding dan Animasi Terbaik #1 - Alhazen Academy',
    'description' =>
        'Belajar Coding dengan tutor berpengalaman dan professional di Alhazen Academy. Kami menyediakan program pelatihan online, offline, dan privat',
    'ogImage' => asset('assets/nav-logo.webp'),
    'theme' => 'kids', // 'kids' | 'pro'
    'canonical' => null,
])

@php
    $waHref = 'https://wa.me/' . $salesPhone . '?text=' . urlencode($waMessage);
@endphp

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Script Google Analytics --}}
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PHST97K2');
    </script>
    <!-- End Google Tag Manager -->

    {{-- DARK PRELOAD: class "dark" SEBELUM CSS --}}
    <script>
        // (function() {
        //     let useDark = false;
        //     try {
        //         const saved = localStorage.getItem('theme');
        //         if (saved === 'dark') useDark = true;
        //         else if (saved === 'light') useDark = false;
        //         else useDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        //     } catch (e) {
        //         useDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        //     }
        //     document.documentElement.classList.toggle('dark', useDark);
        // })();
    </script>

    {{-- Meta Title & Description --}}
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">

    <link rel="canonical" href="{{ $canonical ?? url()->current() }}">

    <x-og :title="$title" :description="$description" :image="$ogImage" />
    <link rel="icon" href="{{ asset('assets/logo.webp') }}" type="image/x-icon">

    {{-- Prevent indexing on staging --}}
    @if (request()->is(config('seo.noindex_paths')))
        <meta name="robots" content="noindex, nofollow">
    @endif

    @vite(['resources/css/landing.css', 'resources/js/landing.js'])
</head>

<body class="min-h-dvh bg-background text-text dark:bg-background dark:text-text antialiased">
    {{-- Script Google Analytics --}}
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHST97K2" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="{{ $theme === 'pro' ? 'theme-pro' : 'theme-kids' }}">
        {{ $slot }}
    </div>

    @if ($waHref)
        <a href="{{ $waHref }}" target="_blank" rel="noopener noreferrer" x-data="{ show: false }"
            x-init="window.addEventListener('scroll', () => { show = window.scrollY > 300 })" x-show="show"
            class="fixed z-40 bottom-18 right-5 sm:bottom-22 w-14 h-14 rounded-full shadow-lg shadow-black/20 bg-[#25D366] flex items-center justify-center hover:scale-[1.05] hover:shadow-xl active:scale-95 transition">
            <img src="{{ asset('assets/kids/icon-wa-white.png') }}" alt="WhatsApp icon" class="w-7 h-7">
        </a>
    @endif


    {{-- Back-to-top --}}
    <button x-data="{ show: false }" x-init="window.addEventListener('scroll', () => { show = window.scrollY > 300 })" x-show="show"
        @click="window.scrollTo({top:0,behavior:'smooth'})"
        class="fixed bottom-5 right-5 z-50 rounded-full p-4 shadow-lg bg-primary/80 text-white dark:bg-accent dark:text-background cursor-pointer"
        aria-label="Back to top">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
            stroke="currentColor" class="size-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
        </svg>

    </button>
</body>

</html>
