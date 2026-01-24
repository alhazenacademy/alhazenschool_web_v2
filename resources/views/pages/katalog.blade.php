<x-layout wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy." :sales-phone="$salesPhone">
    <x-navbar variant="kids" />

    <x-katalog.hero />

    @php
    $books = [
        ['title' => 'Math', 'image' => asset('assets/kids/katalog-book/1.webp')],
        ['title' => 'Science', 'image' => asset('assets/kids/katalog-book/2.webp')],
        ['title' => 'English', 'image' => asset('assets/kids/katalog-book/3.webp')],
        ['title' => 'Bahasa Indonesia', 'image' => asset('assets/kids/katalog-book/4.webp')],
        ['title' => 'Mathematics', 'image' => asset('assets/kids/katalog-book/5.webp')],
        ['title' => 'Civic Education', 'image' => asset('assets/kids/katalog-book/6.webp')],
        ['title' => 'Physical Education', 'image' => asset('assets/kids/katalog-book/7.webp')],
        ['title' => 'Arts', 'image' => asset('assets/kids/katalog-book/8.webp')],
        ['title' => 'Natural and Social Sciences', 'image' => asset('assets/kids/katalog-book/9.webp')],
        ['title' => 'Aqidah and Islamic Manner', 'image' => asset('assets/kids/katalog-book/10.webp')],
        ['title' => 'Fiqh', 'image' => asset('assets/kids/katalog-book/11.webp')],
        ['title' => 'Sirah Nabawiyah', 'image' => asset('assets/kids/katalog-book/12.webp')],
        ["title" => "Al - Qur'an", "image" => asset('assets/kids/katalog-book/13.webp')],
        ['title' => 'Arabic', 'image' => asset('assets/kids/katalog-book/14.webp')],
        ['title' => 'Coding', 'image' => asset('assets/kids/katalog-book/15.webp')],
        ['title' => 'Microsoft Office', 'image' => asset('assets/kids/katalog-book/16.webp')],
    ]
    @endphp

    <x-katalog.book-section :books="$books" />

    <x-katalog.cta-book :sales-phone="$salesPhone" wa-message="Halo Admin Alhazen, saya ingin pesan buku / minta rekomendasi." />
    
    <x-faq :items="$faqs" title="Frequently Asked Questions" description="Masih bingung tentang kelas, usia peserta, atau jadwal belajar? Cek jawaban di bawah sebelum kamu daftar, ya!"/>

    <x-footer :address="$address" :socials="$socials" :contact="['phone' => $whatsapp, 'email' => $email, 'site' => $website]" :program-links="$programLinks" />
</x-layout>