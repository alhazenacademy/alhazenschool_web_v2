<x-layout
    title="403 — Akses Ditolak | Alhazen Academy"
    description="Kamu tidak memiliki hak akses ke halaman ini."
    wa-message="Halo, saya mendapatkan error 403 di Alhazen."
    :sales-phone="$salesPhone ?? null"
>
    <x-error.error-page
        code="403"
        title="Akses ditolak."
        subtitle="Akunmu tidak memiliki izin untuk membuka halaman ini."
        buttonText="Kembali ke Home"
        :buttonHref="route('home', absolute: false)"
        :image="asset('assets/kids/error/img-403.webp')"
        imageAlt="403 Forbidden"
        note="Jika kamu merasa seharusnya punya akses, hubungi admin Alhazen."
    />
</x-layout>
