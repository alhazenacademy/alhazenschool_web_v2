<x-layout
    wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen School."
    :sales-phone="$salesPhone">
    <x-navbar variant="kids" />

    @php
        $article = (object) [
            'title' => 'Membangun Karakter Anak di Era Digital',
            'preview' =>
                'Bagaimana pendidikan Islam dan teknologi dapat berjalan selaras untuk membentuk karakter anak.',
            'content' => '
                <h2>Pentingnya Pendidikan Karakter</h2>
                <p>Karakter adalah fondasi utama dalam membentuk generasi masa depan.</p>
                <blockquote>
                    Pendidikan tanpa adab akan kehilangan maknanya.
                </blockquote>
                <p>Dengan pendekatan yang tepat, anak dapat tumbuh menjadi pribadi yang berilmu dan berakhlak.</p>
            ',
            'cover_image_url' => asset('assets/kids/index-article/article.webp'),
            'published_at_formatted' => '12 Januari 2026',
            'reading_time' => 6,
            'author_info' => 'Educator & Curriculum Designer',
            'author' => (object) [
                'name' => 'Ust. Ahmad Fauzi',
                'avatar_url' => asset('assets/kids/profile.png'),
            ],
            'category' => (object) [
                'name' => 'Pendidikan Islam',
            ],
        ];
    @endphp

    <x-blog.show.post :article="$article" />

    @php
        $dummyRelatedPosts = [
            [
                'slug' => 'cara-belajar-efektif-anak',
                'title' => 'Cara Belajar Efektif untuk Anak Usia Dini',
                'desc' => 'Tips praktis agar anak lebih fokus dan senang belajar.',
                'image' => asset('assets/kids/index-article/article.webp'),
                'category' => 'Education',
                'author' => 'John Doe',
                'avatar' => asset('assets/kids/profile.png'),
                'date' => '12 Januari 2025',
            ],
            [
                'slug' => 'pentingnya-literasi-anak',
                'title' => 'Pentingnya Literasi Sejak Dini',
                'desc' => 'Literasi membantu anak membangun kemampuan berpikir.',
                'image' => asset('assets/kids/index-article/article.webp'),
                'category' => 'Parenting',
                'author' => 'Jane Smith',
                'avatar' => asset('assets/kids/profile.png'),
                'date' => '18 Januari 2025',
            ],
            [
                'slug' => 'lorem-ipsum-dolor',
                'title' => 'Lorem Ipsum Dolor',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image' => asset('assets/kids/index-article/article.webp'),
                'category' => 'Lorrem',
                'author' => 'Jhon Doe',
                'avatar' => asset('assets/kids/profile.png'),
                'date' => '18 Januari 2025',
            ],
            [
                'slug' => 'lorem-ipsum-dolor',
                'title' => 'Lorem Ipsum Dolor',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image' => asset('assets/kids/index-article/article.webp'),
                'category' => 'Lorrem',
                'author' => 'Jhon Doe',
                'avatar' => asset('assets/kids/profile.png'),
                'date' => '18 Januari 2025',
            ],
            [
                'slug' => 'lorem-ipsum-dolor',
                'title' => 'Lorem Ipsum Dolor',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image' => asset('assets/kids/index-article/article.webp'),
                'category' => 'Lorrem',
                'author' => 'Jhon Doe',
                'avatar' => asset('assets/kids/profile.png'),
                'date' => '18 Januari 2025',
            ],
            [
                'slug' => 'lorem-ipsum-dolor',
                'title' => 'Lorem Ipsum Dolor',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image' => asset('assets/kids/index-article/article.webp'),
                'category' => 'Lorrem',
                'author' => 'Jhon Doe',
                'avatar' => asset('assets/kids/profile.png'),
                'date' => '18 Januari 2025',
            ],
        ];
    @endphp

    <x-blog.show.related :posts="$dummyRelatedPosts" />

    <x-cta-trial-class />

    <x-faq />

    <x-footer />

</x-layout>
