<x-layout wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy." :sales-phone="$salesPhone">
    <x-navbar variant="kids" />

    <x-index.hero
        heroTitle="Build the <span class='text-secondary' style='font-family: inherit'>Future</span>, One Code at a Time!"
        heroSubtitle="Temukan dunia seru penuh imajinasi lewat Coding, AI, dan Robotika! Belajar teknologi kini bisa semenyenangkan bermain."
        heroCtaText="Daftar Kelas Gratis" heroCtaHref="{{ route('trial') }}" :heroImages="[asset('assets/kids/index-hero/banner.webp')]"
        googleIcon="{{ asset('assets/kids/index-hero/google-rate.png') }}" />

    <x-index.about-section id="about" title="Tentang Alhazen Academy"
        content="<strong>Alhazen Academy</strong> adalah lembaga kursus dan konsultan pendidikan teknologi yang berfokus menyiapkan generasi muda untuk era industri 4.0. Pendekatannya memadukan nilai <strong>Islamic Leadership</strong> dan kerangka <strong>STEM (Science, Technology, Engineering, Math)</strong> agar belajar teknologi tetap berkarakter dan relevan.  <br> <br> Layanan Alhazen meliputi program belajar yang menyenangkan dan terstruktur untuk anak—mulai dari <strong>coding, AI, hingga robotika</strong>. Mereka juga aktif menjangkau sekolah melalui program “Alhazen goes to School” untuk menghadirkan kurikulum dan ekskul coding langsung di lingkungan belajar siswa." />

    <x-index.why-alhazen title="Kenapa Belajar di Alhazen Academy?" :cards="[
        [
            'icon' => asset('assets/kids/index-why/icon-why1.png'),
            'title' => 'Tutor Profesional',
            'description' =>
                'Tutor berpengalaman di bidang <strong> IT dan pendidikan anak.</strong> Setiap sesi dirancang agar siswa paham, bukan sekadar hafalan.',
        ],
        [
            'icon' => asset('assets/kids/index-why/icon-why2.png'),
            'title' => 'Dapat Sertifikat Resmi',
            'description' =>
                'Setiap siswa akan menerima sertifikat kelulusan yang diakui oleh Alhazen Academy dan terintegrasi dengan <strong>STEM.org Certified Program</strong>.',
        ],
        [
            'icon' => asset('assets/kids/index-why/icon-why3.png'),
            'title' => 'Materi & Silabus Lengkap',
            'description' =>
                'Semua siswa mendapatkan <strong>materi pembelajaran digital</strong> dan silabus interaktif agar bisa belajar ulang kapan saja, di mana saja.',
        ],
        [
            'icon' => asset('assets/kids/index-why/icon-why4.png'),
            'title' => 'Ikut Event Hackathon',
            'description' =>
                'Kesempatan berpartisipasi dalam <strong>Hackathon dan Coding Challenge</strong> bersama ratusan peserta dari berbagai sekolah di Indonesia.',
        ],
        [
            'icon' => asset('assets/kids/index-why/icon-why5.png'),
            'title' => 'Dashboard Report',
            'description' =>
                'Orang tua dapat <strong>memantau progres belajar anak secara real-time</strong> melalui dashboard khusus yang menampilkan laporan mingguan.',
        ],
        [
            'icon' => asset('assets/kids/index-why/icon-why6.png'),
            'title' => 'Sesi 1-on-1 dengan Pengajar',
            'description' =>
                'Dapatkan <strong>bimbingan personal langsung</strong> dari tutor untuk memastikan setiap anak benar-benar memahami konsep yang dipelajari.',
        ],
    ]" />

    <x-index.program title="Program Belajar di Alhazen Academy"
        subtitle="Setiap program dirancang agar anak belajar sambil bermain, menumbuhkan rasa ingin tahu dan semangat berkreasi."
        view-all-href="" :cards="$programCards" />

    <x-index.alhazen-goes-to-school title="Alhazen Goes to School"
        content="<strong>Alhazen goes to School</strong> adalah program yang bekerjasama dengan beberapa sekolah maupun pesantren dalam bentuk ekstrakulikuler maupun tambahan kurikulum koding di sekolah/pesantren.<br><br>Bertujuan untuk melihat <strong>peluang, kesiapan kemajuan pendidikan, dan perkembangan teknologi</strong> masa kini dan masa yang akan datang sehingga dapat meluluskan SDM Muslim yang berkualitas dan dapat bersaing di era teknologi 4.0."
        image="{{ asset('assets/kids/index-alhazen-goes-to-school/coding-school.webp') }}" :cards="[
            [
                'no' => '1',
                'text-color' => 'text-[#FACC15]',
                'bg' => 'bg-[#FEF3C7]',
                'title' => 'Mengunjungi Ratusan Sekolah',
                'description' =>
                    'Sekolah menginspirasi lebih dari <strong> 2.000 siswa </strong> dari jenjang SD hingga SMA di <strong> seluruh Indonesia </strong> melalui kegiatan workshop dan demo teknologi.',
            ],
            [
                'no' => '2',
                'text-color' => 'text-primary',
                'bg' => 'bg-[#B3FFE6]',
                'title' => 'Terdapat Program After School',
                'description' =>
                    'Kolaborasi langsung dengan sekolah untuk menghadirkan kelas coding reguler bersama <strong>tutor profesional</strong> dari Alhazen.',
            ],
            [
                'no' => '3',
                'text-color' => 'text-[#3B82F6]',
                'bg' => 'bg-[#CADEFF]',
                'title' => 'Membangun Rasa Percaya Diri Anak',
                'description' =>
                    'Setiap sesi dirancang untuk membantu anak <strong> berani berkreasi, berpikir logis,</strong> dan menjadi <strong>pemimpin masa depan</strong> di era digital.',
            ],
        ]" />

    <x-index.program-kerjasama title="Program Kerjasama Alhazen"
        subtitle="Alhazen membuka program kerjasama untuk sekolah SD, SMP, SMA/K berupa Kurikulum Teknologi dan Ekskul Coding. Kami hadir untuk membentuk generasi muda yang siap menghadapi tantangan teknologi."
        :cards="[
            [
                'title' => 'Curriculum',
                'sub' => 'Technology curriculum',
                'bg' => 'bg-[#0EA5A0]',
                'text-color' => 'text-[#F9FAFB]',
                'icon' => asset('assets/kids/program-kerjasama/icon1.png'),
                'child' => asset('assets/kids/program-kerjasama/anak.webp'),
                'url' => 'https://wa.me/' . $salesPhone . '?text=' . urlencode('Halo, saya mau konsultasi program kerjasama kurikulum di Alhazen.'),
            ],
            [
                'title' => 'Textbook',
                'sub' => 'School material books',
                'bg' => 'bg-[#FACC15]',
                'text-color' => 'text-[#F9FAFB]',
                'icon' => asset('assets/kids/program-kerjasama/icon2.png'),
                'child' => asset('assets/kids/program-kerjasama/anak.webp'),
                'url' => 'https://wa.me/' . $salesPhone . '?text=' . urlencode('Halo, saya mau konsultasi program kerjasama buku pelajaran di Alhazen.'),
            ],
            [
                'title' => 'Coding Club',
                'sub' => 'Coding extracurricular',
                'bg' => 'bg-[#9333EA]',
                'text-color' => 'text-[#F9FAFB]',
                'icon' => asset('assets/kids/program-kerjasama/icon3.png'),
                'child' => asset('assets/kids/program-kerjasama/anak.webp'),
                'url' => 'https://wa.me/' . $salesPhone . '?text=' . urlencode('Halo, saya mau konsultasi program kerjasama coding extracurricular di Alhazen.'),
            ],
            [
                'title' => 'Other Collab',
                'sub' => 'Special cooperation',
                'bg' => 'bg-[#E5E7EB]',
                'text-color' => 'text-[#0F172A]',
                'icon' => asset('assets/kids/program-kerjasama/icon4.png'),
                'child' => asset('assets/kids/program-kerjasama/anak.webp'),
                'url' => 'https://wa.me/' . $salesPhone . '?text=' . urlencode('Halo, saya mau konsultasi program kerjasama di Alhazen.'),
            ],
        ]" />

    <x-index.student-work title="Hasil Karya Murid Alhazen Academy"
        description="Siswa anak nya imajinasi bisa luar biasa. Di Alhazzen kami membantunya mengembangkan imajinasi nya dengan cara digital yang nyata - dari game, aplikasi, hingga robot pintar!"
        :cards="[
            [
                'image' => asset('assets/kids/student-work/student-work-1.avif'),
                'alt' => 'Hasil karya siswa belajar coding berupa game edukasi Learning Tumbuhan',
                'title' => 'Learning tumbuhan',
                'description' => 'Dibuat oleh Ghazan Akhyar (Kelas 2 SD) menggunakan Scratch',
                'category' => 'Game & Animation',
                'bg-text' => 'bg-[#EB5353]',
            ],
            [
                'image' => asset('assets/kids/student-work/student-work-2.avif'),
                'alt' => 'Hasil karya siswa belajar coding berupa game interaktif Ping-Pong',
                'title' => 'Ping-Pong Game',
                'description' => 'Dibuat oleh Tsaqif Luqmana (Kelas 5 SD) menggunakan Scratch',
                'category' => 'Game & Animation',
                'bg-text' => 'bg-[#EB5353]',
            ],
            [
                'image' => asset('assets/kids/student-work/student-work-3.avif'),
                'alt' => 'Hasil karya siswa belajar coding berupa game balap mobil sederhana',
                'title' => 'Car Race Game',
                'description' => 'Dibuat oleh Muhammad Karim (Kelas 3 SD) menggunakan Scratch',
                'category' => 'Game & Animation',
                'bg-text' => 'bg-[#EB5353]',
            ],
            [
                'image' => asset('assets/kids/student-work/student-work-4.webp'),
                'alt' => 'Hasil karya siswa belajar coding berupa aplikasi Dzikir sederhana',
                'title' => 'Dzikir App',
                'description' => 'Dibuat oleh Shofiyya Edi (Kelas 5 SD) menggunakan Thunkable',
                'category' => 'Application',
                'bg-text' => 'bg-[#faa52d]',
            ],
            [
                'image' => asset('assets/kids/student-work/student-work-5.webp'),
                'alt' => 'Hasil karya siswa belajar coding berupa aplikasi Camping and Glamping',
                'title' => 'Camping and Glamping',
                'description' => 'Dibuat oleh Karenita (Kelas 4 SD) menggunakan Thunkable',
                'category' => 'Application',
                'bg-text' => 'bg-[#faa52d]',
            ],
        ]"
        />

    <x-index.student-review title="Review Murid Alhazen"
        description="Cerita inspiratif dari murid-murid Alhazen yang membuat perubahan. Mereka bukan hanya belajar coding — mereka berkarya, berinovasi, dan berbagi inspirasi."
        :cards="[
            [
                'image' => asset('assets/kids/index-student-review/thumbnail/thumbnail-review-2.webp'),
                'name' => 'Malfy',
                'quote' =>
                    'Seru, belajarnya santai dan kakak tutornya baik. Jelasinnya pelan² jadi gampang buat paham materinya, dan juga dapat tantangan baru belajar dunia coding',
                'school' => 'Siswa SMP',
                'mode' => 'Online',
                'rating' => 5,
                'video_type' => '', // atau 'mp4'
                'video_url' => ''
                // 'video_url' => asset('assets/kids/index-student-review/video/video-review-1.mp4'), // untuk youtube pakai /embed
            ],
            [
                'image' => asset('assets/kids/index-student-review/thumbnail/thumbnail-review-3.webp'),
                'name' => 'Rauf Deriel',
                'quote' => 'Menurutku kelas ini sangat menyenangkan, dan materi dapat dipahami dengan mudah.',
                'school' => 'Siswa SMP',
                'mode' => 'Online',
                'rating' => 5,
                'video_type' => '', // atau 'mp4'
                'video_url' => ''
            ],
            [
                'image' => asset('assets/kids/index-student-review/thumbnail/thumbnail-review-1.webp'),
                'name' => 'Faiz',
                'quote' =>
                    'Menyenangkan, asik, cara mengajarnya pun oke, gampang dicerna otak',
                'school' => 'Mahasiswa IT BINUS',
                'mode' => 'Online',
                'rating' => 5,
                'video_type' => '',
                'video_url' => ''
                // 'video_type' => 'youtube', // atau 'mp4'
                // 'video_url' => 'https://www.youtube.com/embed/TD_mEqbTlcM', // untuk youtube pakai /embed
            ],
        ]" />

    <x-cta-whatsapp title="Ambil kesempatan konsultasi sekarang juga dan raih diskon hingga jutaan rupiah!"
        placeholder="Masukkan Nomor Whatsapp" button="Konsultasi Sekarang"
        wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy." source="konsultasi_index_page" :sales-phone="$salesPhone" />

    <x-index.clients title="Partner  & Kolaborator Kami"
        description="Kami berkolaborasi dengan berbagai sekolah, lembaga, dan komunitas pendidikan untuk menghadirkan pembelajaran teknologi terbaik bagi anak Indonesia."
        :logos="[
            [
                'src' => asset('assets/kids/client/al-wafi-islamic-boarding-school.webp'),
                'alt' => 'Logo Al Wafi Islamic Boarding School',
            ],
            [
                'src' => asset('assets/kids/client/ibnu-taimiyah-islamic-boarding-school.webp'),
                'alt' => 'Logo Ibnu Taimiyah Islamic Boarding School',
            ],
            [
                'src' => asset('assets/kids/client/madrasah-aliyah-salafiyah-ulya.webp'),
                'alt' => 'Logo Madrasah Aliyah Salafiyah Ulya Islamic Centre Bin Baz',
            ],
            [
                'src' => asset('assets/kids/client/metropolitan-islamic-school.webp'),
                'alt' => 'Logo Sekolah Emiisc Jakart',
            ],
            [
                'src' => asset('assets/kids/client/pendidikan-integral-hidayatullah.webp'),
                'alt' => 'Logo Pendidikan Integral Hidayatullah',
            ],
            [
                'src' => asset('assets/kids/client/sekolah-bina-insan-mandiri.webp'),
                'alt' => 'Logo SD Bina Insan Mandiri Jakarta',
            ],
            [
                'src' => asset('assets/kids/client/sma-it-putri-al-hanif.webp'),
                'alt' => 'Logo SMAIT Putri Al-Hanif',
            ],
        ]" />



    <x-articles title="Artikel & Insight Terbaru"
        description="Bacaan seru dan inspiratif seputar teknologi, pendidikan, dan dunia digital untuk anak dan guru."
        allUrl="{{ route('artikel') }}" :featured="$featured" :posts="$latestArticle" />

    <x-tutors title="Tim Pengajar Alhazen"
        description="Setiap pengajar di Alhazen adalah praktisi teknologi, pendidik kreatif, dan sahabat belajar anak."
        :cards="$cards" />

    <x-faq :items="$faqs" title="Frequently Asked Questions" description="Masih bingung tentang kelas, usia peserta, atau jadwal belajar? Cek jawaban di bawah sebelum kamu daftar, ya!"/>

    <x-footer :address="$address" :socials="$socials" :contact="['phone' => $whatsapp, 'email' => $email, 'site' => $website]" :program-links="$programLinks" />
</x-layout>
