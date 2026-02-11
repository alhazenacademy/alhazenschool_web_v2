<x-layout wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy." :sales-phone="$salesPhone">
    <x-navbar variant="kids" />

    <x-index.hero
        heroTitle="Build the <span class='text-secondary' style='font-family: inherit'>Future</span>, One Code at a Time!"
        heroSubtitle="Temukan dunia seru penuh imajinasi lewat Coding, AI, dan Robotika! Belajar teknologi kini bisa semenyenangkan bermain."
        heroCtaText="Daftar Kelas Gratis" heroCtaHref="{{ route('trial') }}" :heroImages="[asset('assets/kids/index-hero/banner.webp')]"
        googleIcon="{{ asset('assets/kids/index-hero/google-rate.png') }}" />

    <x-index.executive />

    <x-index.why />

    <x-index.learning-experience />

    <x-index.program />

    <x-index.learning-program />

    <x-articles />

    <x-cta-trial-class />

    <x-faq />

    <x-footer />

</x-layout>
