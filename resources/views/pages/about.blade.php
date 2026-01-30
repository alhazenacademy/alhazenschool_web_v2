<x-layout title="Tentang Kami - Alhazen Academy" 
    description="Alhazen Academy adalah lembaga kursus anak dan dewasa yang fokus pada edukasi teknologi dan skill masa depan. Dengan metode belajar yang fun dan interkatif" 
    wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy." :sales-phone="$salesPhone">
    <x-navbar variant="kids" />
    <x-about.hero title="Tentang Alhazen Academy"
        subtitle="Menginspirasi generasi digital dengan cara belajar yang menyenangkan dan bermakna."
        ctaText="Pelajari Program Kami" ctaHref="{{ route('program') }}" imgLT="assets/kids/about/hero-1.webp"
        imgLB="assets/kids/about/hero-2.webp" imgRT="assets/kids/about/hero-3.webp" imgRB="assets/kids/about/hero-4.webp"
        mascot="/assets/kids/about/mascot-about.webp" />
    <x-about.who logo="/assets/kids/about/logo-about.webp" titleWho="Siapa Kami ?" :paragraphsWho="[
        'Alhazen Academy merupakan lembaga kursus dan konsultan Pendidikan khususnya dalam bidang pendidikan teknologi, mendukung pengembangan teknologi industri 4.0 dengan Islamic Leadership dan STEM (Science, Technology, Engineering, Math).',
        'Berdiri pada tahun 2022 dengan nama <strong>PT. Alhazen Global Teknologi</strong>, Alhazen Academy dengan lebih dari 2000 alumni murid yang telah kami edukasi, merupakan destinasi utama bagi siapa saja yang mencari pendidikan coding berkualitas.',
        'Dengan kolaborasi yang telah kami bangun dengan lebih dari 10 sekolah terkemuka dan program inovatif <strong>Alhazen goes to School</strong> yang telah menjangkau lebih dari 100 sekolah di seluruh Indonesia, kami menawarkan pengalaman belajar yang menyenangkan. ',
        'Ditunjang oleh puluhan trainer profesional kami, Alhazen Academy bukan hanya tentang belajar coding, tapi tentang membentuk inovator masa depan yang siap menghadapi tantangan teknologi.',
    ]"
        imgVision="/assets/kids/about/img-vision.webp" imgVisionAlt="Kerjasama Alhazen dan Sekolah Al-Azhar" titleVision="Visi Kami"
        :paragraphsVision="[
            'Alhazen Academy berkomitmen untuk menjadi pelopor dalam pendidikan teknologi untuk anak-anak di Indonesia.',
            'Dengan visi mempersiapkan generasi muda yang kreatif, inovatif, dan siap menghadapi tantangan era digital, Alhazen Academy menawarkan pendekatan pembelajaran coding yang tidak hanya menyenangkan tetapi juga mendalam.',
        ]"
        imgMision="/assets/kids/about/img-mision.webp" imgMisionAlt="Profil Alhazen Academy" titleMision="Misi Kami"
        :paragraphsMision="[
            'Alhazen Academy memiliki misi untuk membangun fondasi kuat dalam pemrograman bagi anak-anak, dengan mengajarkan mereka mulai dari konsep dasar hingga lanjutan melalui cara yang interaktif dan menarik.',
            'Kami bertujuan menginspirasi siswa agar berinovasi dan berkreasi dengan teknologi, mendorong mereka untuk menerapkan pengetahuan dalam proyek nyata yang memecahkan masalah sehari-hari.',
            'Selain itu, kami berupaya membuka peluang baru bagi siswa dalam mengeksplorasi dunia teknologi, mempersiapkan mereka menjadi generasi yang cerdas secara teknologi dan siap untuk menjadi pencipta solusi inovatif di masa depan.',
        ]"
        imgLeader="/assets/kids/about/img-leader.webp" imgLeaderAlt="Misi Alhazen Academy"
        leaderName="Ramadhoni Chandra Utama S.A.B" leaderInfo="Ketua Yayasan Alhazen Bintang Utama" leaderSosmed="#"
        :paragraphsLeader="[
            '&quot;Sebagai Ketua Yayasan, saya merasa terhormat dan gembira dapat menyambut Anda ke dalam komunitas belajar kami yang dinamis dan penuh inspirasi.',
            'Di Alhazen Academy, kami berkomitmen untuk membuka pintu menuju masa depan digital bagi setiap siswa, dengan menyediakan pendidikan coding yang berkualitas dan inovatif.',
            'Kami percaya bahwa pendidikan adalah kunci untuk membuka potensi tak terbatas setiap individu. ',
            'Oleh karena itu, kami dengan bangga menawarkan program-program yang dirancang untuk mempersiapkan siswa kami tidak hanya menjadi programmer yang handal, tetapi juga pemikir kreatif dan inovator masa depan.&quot;',
        ]" />
    <x-about.contact title="Hubungi Kami"
        desc="Kami hadir di berbagai kota untuk mendukung pendidikan teknologi anak Indonesia. Hubungi tim kami untuk konsultasi program atau kerja sama sekolah."
        :address="$address" :phone="$whatsapp" :email="$email" :website="$website" :mapEmbed="$mapembed"
        bgPattern="/assets/kids/about/bg-contact.webp" icon4="/assets/kids/about/icon4.png" />

    <x-faq :items="$faqs" title="Frequently Asked Questions" description="Masih bingung tentang kelas, usia peserta, atau jadwal belajar? Cek jawaban di bawah sebelum kamu daftar, ya!"/>

    <x-footer :address="$address" :socials="$socials" :contact="['phone' => $whatsapp, 'email' => $email, 'site' => $website]" :program-links="$programLinks"/>

</x-layout>
