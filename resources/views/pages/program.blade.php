<x-layout title="Pilihan Beragam Program Kelas Terbaik - Alhazen Academy" description="Berbagai pilihan kelas coding dan teknologi Alhazen Academy untuk anak dan dewasa. Metode belajar fun & interaktif dengan materi paling update di era AI." wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy." :sales-phone="$salesPhone">
    <x-navbar variant="kids" />

    <x-program.hero title="Bangun Kreativitas Anak Lewat Teknologi !"
        subtitle="Alhazen Academy membantu anak memahami teknologi lewat program coding, animasi, robotika, dan desain interaktif."
        ctaText="Daftar Kelas Gratis" ctaHref="{{ route('trial') }}" imgHero="assets/kids/program/lainnya-hero.webp" />

    <x-program.detail-program slogan="Sesuaikan Program, Maksimalkan Potensi Anak"
        title="Semua kurikulum telah terakreditasi STEM.org."
        subtitle="Pendekatan personal sesuai gaya belajar tiap anak—dari bikin game & animasi sampai aplikasi yang bisa dipublikasikan."
        :tabs="$tabs" :contents="$content" />

    <x-tutors title="Tim Pengajar Alhazen"
        description="Setiap pengajar di Alhazen adalah praktisi teknologi, pendidik kreatif, dan sahabat belajar anak."
        :cards="$cards" />

    <x-cta-whatsapp title="Ambil kesempatan konsultasi sekarang juga dan raih diskon hingga jutaan rupiah!"
        placeholder="Masukkan Nomor Whatsapp" button="Konsultasi Sekarang"
        wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy." source="konsultasi_program_page"
        :sales-phone="$salesPhone" />

    <x-faq :items="$faqs" title="Frequently Asked Questions" description="Masih bingung tentang kelas, usia peserta, atau jadwal belajar? Cek jawaban di bawah sebelum kamu daftar, ya!"/>

    <x-footer :address="$address" :socials="$socials" :contact="['phone' => $whatsapp, 'email' => $email, 'site' => $website]" :program-links="$programLinks" />
</x-layout>
