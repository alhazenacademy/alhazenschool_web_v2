<x-layout title="Kursus Coding Anak Terbaik (SD - SMA) - Alhazen Academy"
    description="Kursus coding anak terbaik dengan metode pembelajaran online dan offline. Latih pengetahuan logika anak usia 5 -17 tahun (SD Hingga SMA)."
    wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy." :sales-phone="$salesPhone">
    <x-navbar variant="kids" />

    <x-program.hero title="Saatnya Anak Belajar Coding dengan Cara yang Menyenangkan !"
        subtitle="Program interaktif yang membangun logika dan kreativitas lewat pembuatan game, animasi, dan aplikasi."
        ctaText="Daftar Kelas Gratis" ctaHref="{{ route('trial') }}" imgHero="assets/kids/program/scratch-hero.webp" />

    @php
        $whatIsItems = [
            [
                'title' => 'Block Coding',
                'icon' => 'assets/kids/program/block-coding-icon.png',
                'iconBg' => 'bg-primary/10',
                'content' => [
                    '<strong>Block Coding</strong> adalah metode belajar coding dengan cara menyusun blok-blok visual seperti puzzle.',
                    'Anak tidak perlu mengetik kode yang rumit, cukup menyusun blok perintah untuk membuat animasi, game, atau aplikasi sederhana.',
                    'Metode ini membantu anak memahami logika, urutan, dan sebab–akibat dengan cara yang menyenangkan dan mudah dipahami.',
                ],
            ],
            [
                'title' => 'Scratch & Thunkable',
                'icon' => 'assets/kids/program/scratch-thunkable-icon.png',
                'iconBg' => 'bg-neutral/50',
                'content' => [
                    '<strong>Scratch</strong> adalah platform block coding populer untuk membuat animasi dan game interaktif.',
                    '<strong>Thunkable</strong> memungkinkan anak membuat aplikasi Android & iOS dengan cara drag-and-drop tanpa coding rumit.',
                    'Melalui Scratch dan Thunkable, anak belajar membuat karya digital nyata dari ide mereka sendiri.',
                ],
            ],
        ];

        $formats = [
            [
                '1',
                'Level Pemula (Beginner)',
                'Dirancang khusus untuk anak tanpa pengalaman coding atau programming sebelumnya.',
            ],
            [
                '2',
                'Tutor 1 on 1 Privat',
                'Pelajari pemrograman sesuai kecepatan anak dengan guru yang fokus pada 1 anak.',
            ],
            ['3', 'Sesi Pendampingan Tutor', 'Interaksi dan umpan balik secara langsung dengan tutor yang ditunjuk.'],
            ['4', '60 Menit Setiap Sesi', 'Pelajari topik secara mendalam dengan sesi terfokus selama 60 menit.'],
        ];

        $learns = [
            'Dasar-dasar logika & computational thinking',
            'Membuat game sederhana (drag & drop)',
            'Membuat animasi interaktif',
            'Berpikir terstruktur & menyelesaikan masalah',
            'Mini Project tiap bab',
            'Final Project: Publish game pertama mereka!',
        ];

        $targets = [
            ['Anak yang terlalu sering main game', 'Mengubah waktu bermain jadi waktu berkarya.'],
            ['Anak yang sulit fokus saat belajar', 'Meningkatkan fokus melalui aktivitas interaktif.'],
            ['Anak yang belum tahu minat & bakatnya', 'Mengenalkan teknologi dengan cara yang seru dan mudah.'],
            ['Anak yang sering merasa tidak percaya diri', 'Percaya diri karena melihat hasil karyanya sendiri.'],
        ];
    @endphp

    <x-program.tentang-kursus whatIsTitle="Apa itu Coding untuk Anak?"
        whatIsSubtitle="Belajar berpikir logis, kreatif, dan problem solving melalui coding yang menyenangkan"
        :whatIsItems="$whatIsItems" :formats="$formats" :learns="$learns" :targets="$targets" />

    @php
        $card_paket = [
            [
                'title' => 'ELEMENTARY',
                'subtitle' => 'Digital Coding Starter',
                'modules' => '30+',
                'islamic' => 2,
                'duration' => '± 3 bulan',
                'desc' =>
                    'Pengenalan logika coding melalui pembuatan aplikasi sederhana, animasi interaktif, dan game visual yang menyenangkan untuk anak.',
                'tools' => ['Basic Programming', 'Mobile App', 'Animation', 'Game'],
                'price' => 'Rp. 6.105.000',
                'ctaHref' => route('trial'),
            ],
            [
                'title' => 'BEGINNER',
                'subtitle' => 'Creative Coding Maker',
                'modules' => '45+',
                'islamic' => 2,
                'duration' => '± 6 bulan',
                'desc' =>
                    'Mengembangkan kreativitas digital lewat animasi, game interaktif, dan aplikasi sederhana, ditambah pengenalan IoT untuk proyek nyata.',
                'tools' => ['Basic Programming', 'Mobile App', 'Animation', 'Game', 'IoT'],
                'price' => 'Rp. 8.547.000',
                'ctaHref' => route('trial'),
            ],
            [
                'title' => 'INTERMEDIATE',
                'subtitle' => 'Advanced Creative Technologist',
                'modules' => '60+',
                'islamic' => 2,
                'duration' => '± 8 bulan',
                'desc' =>
                    'Fokus pada pengembangan proyek digital yang lebih kompleks, termasuk IoT, AR/VR, dan 3D modelling untuk melatih problem solving.',
                'tools' => ['Basic Programming', 'Mobile App', 'Animation', 'Game', 'IoT', 'AR / VR', '3D Modelling'],
                'price' => 'Rp. 11.932.000',
                'ctaHref' => route('trial'),
            ],
            [
                'title' => 'ADVANCED',
                'subtitle' => 'Professional Digital Creator',
                'modules' => '90+',
                'islamic' => 2,
                'duration' => '± 12 bulan',
                'desc' =>
                    'Program tingkat lanjut untuk membangun website, aplikasi, dan karya digital profesional dengan front-end development dan Python.',
                'tools' => [
                    'Basic Programming',
                    'Mobile App',
                    'Animation',
                    'Game',
                    'IoT',
                    'AR / VR',
                    '3D Modelling',
                    'Front-End',
                    'Python',
                ],
                'price' => 'Rp. 13.486.000',
                'ctaHref' => route('trial'),
            ],
        ];
    @endphp

    <x-program.paket-kursus title="Program Belajar Kami"
        description="Program kami menghadirkan pengalaman belajar coding yang seru dan aplikatif melalui proyek game, animasi, dan aplikasi yang dibuat langsung oleh anak."
        :cards="$card_paket" />

    @php
        $requirementsCodingAnak = [
            'Anak sudah mampu <strong>membaca dan memahami instruksi sederhana</strong> untuk mengikuti arahan tutor.',
            'Memiliki <strong>laptop atau PC pribadi</strong> (disarankan) dengan koneksi internet yang stabil.',
            'Mampu menggunakan <strong>mouse dan keyboard</strong> secara dasar.',
            'Familiar atau bersedia belajar menggunakan aplikasi <strong>Zoom</strong> atau <strong>Google Meet</strong>.',
            'Pendampingan orang tua dianjurkan, terutama untuk anak usia <strong>7–9 tahun</strong>.',
        ];
    @endphp

    <x-program.panduan-ortu :umur="7" :requirements="$requirementsCodingAnak" />

    @php
        $image_preview = [
            'assets/kids/program/preview/class1.webp',
            'assets/kids/program/preview/class2.webp',
            'assets/kids/program/preview/class3.webp',
            'assets/kids/program/preview/class4.webp',
            'assets/kids/program/preview/class5.webp',
            'assets/kids/program/preview/class6.webp',
        ];
    @endphp

    <x-program.class-preview :images="$image_preview" />

    <x-tutors title="Tim Pengajar Alhazen"
        description="Setiap pengajar di Alhazen adalah praktisi teknologi, pendidik kreatif, dan sahabat belajar anak."
        :cards="$cards" />

    <x-cta-whatsapp title="Ambil kesempatan konsultasi sekarang juga dan raih diskon hingga jutaan rupiah!"
        placeholder="Masukkan Nomor Whatsapp" button="Konsultasi Sekarang"
        wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy." source="konsultasi_program_page"
        :sales-phone="$salesPhone" />

    <x-faq :items="$faqs" title="Frequently Asked Questions"
        description="Masih bingung tentang kelas, usia peserta, atau jadwal belajar? Cek jawaban di bawah sebelum kamu daftar, ya!" />

    <x-footer :address="$address" :socials="$socials" :contact="['phone' => $whatsapp, 'email' => $email, 'site' => $website]" :program-links="$programLinks" />
</x-layout>
