<x-layout
    title="500 — Terjadi Kesalahan | Alhazen Academy"
    description="Terjadi kesalahan di server Alhazen Academy."
    wa-message="Halo, sepertinya ada error 500 di Alhazen."
    :sales-phone="$salesPhone ?? null"
>
    <x-error.error-page
        code="500"
        title="Ups! Terjadi kesalahan di server."
        subtitle="Kami sedang mencoba memperbaikinya. Silakan coba lagi beberapa saat lagi."
        buttonText="Kembali ke Home"
        :buttonHref="route('home', absolute: false)"
        :image="asset('assets/kids/error/img-500.webp')"
        imageAlt="500 Server Error"
        note="Jika masalah terus berulang, hubungi tim Alhazen."
    />
</x-layout>
