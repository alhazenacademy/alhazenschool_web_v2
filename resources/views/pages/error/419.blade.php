<x-layout
    title="419 — Sesi Berakhir | Alhazen Academy"
    description="Sesi halaman sudah kedaluwarsa."
    wa-message="Halo, saya mendapatkan error 419 di Alhazen."
    :sales-phone="$salesPhone ?? null"
>
    <x-error.error-page
        code="419"
        title="Sesi kamu sudah berakhir."
        subtitle="Silakan muat ulang halaman dan coba lagi."
        buttonText="Muat Ulang Halaman"
        :buttonHref="url()->previous() ?? route('home', absolute: false)"
        :image="asset('assets/kids/error/img-419.webp')"
        imageAlt="Session expired"
        note="Untuk keamanan, sesi berakhir jika halaman terbuka terlalu lama."
    />
</x-layout>
