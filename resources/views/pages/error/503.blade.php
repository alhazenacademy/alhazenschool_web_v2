<x-layout
    title="503 — Sedang Perawatan | Alhazen Academy"
    description="Sistem sedang dalam perbaikan."
    wa-message="Halo, saya melihat pesan maintenance (503) di Alhazen."
    :sales-phone="$salesPhone ?? null"
>
    <x-error.error-page
        code="503"
        title="Alhazen sedang dalam perbaikan."
        subtitle="Kami sedang melakukan pemeliharaan sistem. Silakan coba lagi nanti."
        :image="asset('assets/kids/error/img-503.webp')"
        imageAlt="Maintenance"
        note="Terima kasih sudah menunggu. Silakan coba reload halaman dalam beberapa menit."
    />
</x-layout>
