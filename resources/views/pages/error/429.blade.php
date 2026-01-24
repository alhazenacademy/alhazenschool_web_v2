<x-layout
    title="429 — Terlalu Banyak Percobaan | Alhazen Academy"
    description="Terlalu banyak permintaan dalam waktu singkat."
    wa-message="Halo, saya mendapatkan error 429 di Alhazen."
    :sales-phone="$salesPhone ?? null"
>
    <x-error.error-page
        code="429"
        title="Terlalu banyak percobaan."
        subtitle="Silakan tunggu beberapa saat sebelum mencoba kembali."
        buttonText="Kembali ke Home"
        :buttonHref="route('home', absolute: false)"
        :image="asset('assets/kids/error/img-429.webp')"
        imageAlt="429 Too Many Requests"
        note="Pembatasan ini membantu melindungi akunmu dari penyalahgunaan."
    />
</x-layout>
