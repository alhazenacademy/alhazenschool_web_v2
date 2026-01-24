<x-layout
    title="404 — Halaman Tidak Ditemukan | Alhazen Academy"
    description="Halaman yang kamu cari tidak ditemukan."
    wa-message="Halo, saya menemukan halaman 404 di Alhazen."
    :sales-phone="$salesPhone ?? null"
>
    <x-error.error-page
        code="404"
        title="Ups! Halaman tidak ditemukan."
        subtitle="Tautan yang kamu buka tidak tersedia atau sudah dipindahkan."
        buttonText="Kembali ke Home"
        :buttonHref="route('home', absolute: false)"
        :image="asset('assets/kids/error/img-404.webp')"
        imageAlt="404 Not Found"
        note="Periksa kembali URL untuk memastikan tidak ada kesalahan pengetikan."
    />
</x-layout>
