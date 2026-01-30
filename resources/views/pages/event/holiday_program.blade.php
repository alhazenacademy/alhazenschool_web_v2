<x-layout title="Alhazen Holiday Program, Aktivitas Liburan Seru Anak"
    description=" Isi kegiatan anak dengan kelas yang seru dan bermanfaat. Asah logika dan kreativitas di Alhazen Holiday Program."
    wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy." :sales-phone="$salesPhone">
    <x-navbar variant="kids" />

    <x-event.holiday_program.hero banner="{{ asset('assets/kids/holiday-program/hero.webp') }}" />

    @php
        $whatIsItems = [
            [
                'title' => 'Holiday Program Alhazen',
                'icon' => 'assets/kids/holiday-program/holiday-icon.png',
                'iconBg' => 'bg-yellow-100',
                'content' => [
                    '<strong>Holiday Program Alhazen</strong> adalah program belajar singkat selama <strong>3 hari</strong> yang dirancang khusus untuk mengisi liburan anak dengan aktivitas edukatif dan menyenangkan.',
                    'Selama program berlangsung, anak diajak belajar teknologi, logika, dan kreativitas melalui praktik langsung, bukan hanya teori.',
                    'Program ini cocok untuk mengisi waktu liburan agar anak tetap produktif, percaya diri, dan mendapatkan pengalaman belajar baru yang berkesan.',
                ],
            ],
            [
                'title' => 'Belajar Singkat, Hasil Nyata',
                'icon' => 'assets/kids/holiday-program/short-program-icon.png',
                'iconBg' => 'bg-pink-100',
                'content' => [
                    'Meski berlangsung singkat, Holiday Program dirancang dengan kurikulum padat dan terarah agar anak tetap mendapatkan hasil belajar yang nyata.',
                    'Setiap hari anak akan mengikuti sesi praktik, dibimbing langsung oleh tutor berpengalaman.',
                    'Di akhir program, anak memiliki karya atau project sederhana yang bisa dibanggakan sebagai hasil belajar selama liburan.',
                ],
            ],
        ];

        $formats = [
            [
                '1',
                'Program Intensif 3 Hari',
                'Program liburan singkat dengan materi terfokus yang diselesaikan dalam 3 hari berturut-turut.',
            ],
            [
                '2',
                'Grup Kecil 1:4',
                'Setiap anak mendapatkan perhatian penuh dari tutor agar proses belajar lebih optimal.',
            ],
            ['3', 'Pendampingan Langsung', 'Tutor mendampingi anak secara aktif selama sesi belajar dan praktik.'],
            [
                '4',
                '60-90 Menit per Sesi',
                'Durasi ideal agar anak tetap fokus, tidak lelah, dan menikmati proses belajar.',
            ],
        ];

        $learns = [
            'Pengenalan konsep dasar teknologi & logika',
            'Belajar melalui aktivitas interaktif dan visual',
            'Membuat project sederhana sesuai tema program',
            'Melatih fokus, kreativitas, dan problem solving',
            'Belajar bekerja mandiri dengan arahan tutor',
            'Hasil karya yang bisa ditunjukkan ke orang tua',
        ];

        $targets = [
            ['Anak yang libur sekolah terlalu lama', 'Mengisi waktu liburan dengan kegiatan yang lebih bermanfaat.'],
            [
                'Anak yang cepat bosan saat liburan',
                'Liburan tetap seru dengan aktivitas belajar yang fun & interaktif.',
            ],
            ['Anak yang tertarik teknologi & game', 'Mengenalkan dunia digital dengan cara yang positif dan terarah.'],
            [
                'Orang tua yang ingin liburan anak tetap produktif',
                'Program singkat tanpa mengganggu waktu liburan keluarga.',
            ],
        ];
    @endphp

    <x-program.tentang-kursus whatIsTitle="Apa itu Holiday Program?"
        whatIsSubtitle="Program belajar singkat untuk mengisi liburan anak dengan aktivitas edukatif, kreatif, dan menyenangkan"
        :whatIsItems="$whatIsItems" :formats="$formats" :learns="$learns" :targets="$targets" />

    @php
        $card_paket = [
            [
                'title' => 'Holiday Coding Class',
                'subtitle' => 'For Kids 5-11 Years Old',
                'modules' => 'Scratch',
                'duration' => '3 Hari (90 Menit/Sesi)',
                'desc' =>
                    'Kelas pengenalan coding visual untuk anak-anak lewat animasi, storytelling, dan mini game seru menggunakan Scratch.',
                'class_type' => 'Online',
                'schedules' => [
                    [
                        'batch' => 'Batch 1',
                        'date' => '3 – 5 Des 2025',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 2',
                        'date' => '10 – 12 Des 2025',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 3',
                        'date' => '17 – 19 Des 2025',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 4',
                        'date' => '22 – 24 Des 2025',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 5',
                        'date' => '29 – 31 Des 2025',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 6',
                        'date' => '5 – 7 Jan 2026',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 7',
                        'date' => '12 – 14 Jan 2026',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                ],
                'price-before' => 'Rp 699.000',
                'price-after' => 'Rp 150.000',
                'ctaHref' => 'https://goakal.com/alhazenacademy/holiday-programme-2025',
            ],
            [
                'title' => 'App Developer Hero with Thunkable ',
                'subtitle' => 'For Kids 12-17 Years Old',
                'modules' => 'Thunkable',
                'duration' => '3 Hari (90 Menit/Sesi)',
                'desc' =>
                    'Kelas pembuatan aplikasi mobile interaktif menggunakan Thunkable, cocok untuk anak remaja yang ingin belajar coding lebih serius.',
                'class_type' => 'Online',
                'schedules' => [
                    [
                        'batch' => 'Batch 1',
                        'date' => '3 – 5 Des 2025',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 2',
                        'date' => '10 – 12 Des 2025',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 3',
                        'date' => '17 – 19 Des 2025',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 4',
                        'date' => '22 – 24 Des 2025',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 5',
                        'date' => '29 – 31 Des 2025',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 6',
                        'date' => '5 – 7 Jan 2026',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 7',
                        'date' => '12 – 14 Jan 2026',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                ],
                'price-before' => 'Rp 699.000',
                'price-after' => 'Rp 150.000',
                'ctaHref' => 'https://goakal.com/alhazenacademy/holiday-programme-2025',
            ],
            [
                'title' => 'Roblox Architect Hero with Roblox Studio',
                'subtitle' => 'For Kids 10-15 Years Old',
                'modules' => 'Roblox Studio',
                'duration' => '3 Hari (90 Menit/Sesi)',
                'desc' =>
                    'Kelas pembuatan game dan dunia virtual menggunakan Roblox Studio, ideal untuk anak yang tertarik dengan desain game.',
                'class_type' => 'Online',
                'schedules' => [
                    [
                        'batch' => 'Batch 1',
                        'date' => '3 – 5 Des 2025',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 2',
                        'date' => '10 – 12 Des 2025',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 3',
                        'date' => '17 – 19 Des 2025',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 4',
                        'date' => '22 – 24 Des 2025',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 5',
                        'date' => '29 – 31 Des 2025',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 6',
                        'date' => '5 – 7 Jan 2026',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                    [
                        'batch' => 'Batch 7',
                        'date' => '12 – 14 Jan 2026',
                        'times' => ['10.00 WIB', '16.00 WIB'],
                    ],
                ],

                'price-before' => 'Rp 699.000',
                'price-after' => 'Rp 150.000',
                'ctaHref' => 'https://goakal.com/alhazenacademy/holiday-programme-2025',
            ],
        ];
    @endphp

    <x-event.holiday_program.paket-program title="Pilihan Paket Holiday Program"
        description="Holiday Program Alhazen dirancang sebagai program belajar singkat selama 3 hari untuk mengisi liburan anak dengan aktivitas edukatif, kreatif, dan menyenangkan."
        :cards="$card_paket" />

    @php
        $requirementsHolidayProgram = [
            'Program dirancang untuk anak usia <strong>7 tahun ke atas</strong> yang siap mengikuti kelas intensif selama 3 hari.',
            'Anak mampu <strong>membaca dan mengikuti instruksi sederhana</strong> dari tutor selama sesi berlangsung.',
            'Memiliki <strong>laptop atau PC pribadi</strong> dengan koneksi internet yang stabil untuk mengikuti kelas online.',
            'Mampu menggunakan <strong>mouse dan keyboard</strong> secara dasar.',
            'Familiar atau bersedia belajar menggunakan aplikasi <strong>Zoom</strong> atau <strong>Google Meet</strong>.',
            'Pendampingan orang tua <strong>sangat dianjurkan</strong>, terutama di hari pertama atau untuk anak usia <strong>7–9 tahun</strong>.',
        ];
    @endphp

    <x-program.panduan-ortu :umur="7" :requirements="$requirementsHolidayProgram" />

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
