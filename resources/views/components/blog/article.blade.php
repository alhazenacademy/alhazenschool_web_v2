@php
    $articles = [
        [
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'desc' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum.',
            'image' => asset('assets/kids/index-article/article.webp'),
            'category' => 'Theme',
            'author' => 'Jhon Doe',
            'date' => 'Jan 7, 2026',
            'avatar' => asset('assets/kids/profile.png'),
        ],
        [
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'desc' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum.',
            'image' => asset('assets/kids/index-article/article.webp'),
            'category' => 'Theme',
            'author' => 'Jhon Doe',
            'date' => 'Jan 7, 2026',
            'avatar' => asset('assets/kids/profile.png'),
        ],
        [
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'desc' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum.',
            'image' => asset('assets/kids/index-article/article.webp'),
            'category' => 'Theme',
            'author' => 'Jhon Doe',
            'date' => 'Jan 7, 2026',
            'avatar' => asset('assets/kids/profile.png'),
        ],
        [
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'desc' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum.',
            'image' => asset('assets/kids/index-article/article.webp'),
            'category' => 'Theme',
            'author' => 'Jhon Doe',
            'date' => 'Jan 7, 2026',
            'avatar' => asset('assets/kids/profile.png'),
        ],
    ];

    $bestArticles = [
        [
            'title' => 'Lorem Ipsum',
            'desc' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum.',
            'author' => 'Lorem Admin',
            'date' => '22 Dec 2025',
            'avatar' => asset('assets/kids/profile.png'),
        ],
        [
            'title' => 'Lorem Ipsum',
            'desc' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum.',
            'author' => 'Lorem Admin',
            'date' => '22 Dec 2025',
            'avatar' => asset('assets/kids/profile.png'),
        ],
        [
            'title' => 'Lorem Ipsum',
            'desc' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum.',
            'author' => 'Lorem Admin',
            'date' => '22 Dec 2025',
            'avatar' => asset('assets/kids/profile.png'),
        ],
        [
            'title' => 'Lorem Ipsum',
            'desc' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum.',
            'author' => 'Lorem Admin',
            'date' => '22 Dec 2025',
            'avatar' => asset('assets/kids/profile.png'),
        ],
        [
            'title' => 'Lorem Ipsum',
            'desc' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum.',
            'author' => 'Lorem Admin',
            'date' => '22 Dec 2025',
            'avatar' => asset('assets/kids/profile.png'),
        ],
        [
            'title' => 'Lorem Ipsum',
            'desc' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum.',
            'author' => 'Lorem Admin',
            'date' => '22 Dec 2025',
            'avatar' => asset('assets/kids/profile.png'),
        ],
        [
            'title' => 'Lorem Ipsum',
            'desc' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum.',
            'author' => 'Lorem Admin',
            'date' => '22 Dec 2025',
            'avatar' => asset('assets/kids/profile.png'),
        ],
        [
            'title' => 'Lorem Ipsum',
            'desc' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum.',
            'author' => 'Lorem Admin',
            'date' => '22 Dec 2025',
            'avatar' => asset('assets/kids/profile.png'),
        ],
        [
            'title' => 'Lorem Ipsum',
            'desc' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum.',
            'author' => 'Lorem Admin',
            'date' => '22 Dec 2025',
            'avatar' => asset('assets/kids/profile.png'),
        ],
        [
            'title' => 'Lorem Ipsum',
            'desc' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum.',
            'author' => 'Lorem Admin',
            'date' => '22 Dec 2025',
            'avatar' => asset('assets/kids/profile.png'),
        ],
    ];
@endphp

<section id="blog-article" class="py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-[2fr_1fr] gap-10 items-start">

            <!-- Left Featured Articles -->
            <div>
                <div id="featured-section" class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach ($articles as $article)
                        <a href="#"
                            class="relative block rounded-2xl overflow-hidden group transition-all duration-300">

                            <img src="{{ asset($article['image']) }}"
                                class="w-full h-[570px] object-cover transition-transform duration-500 group-hover:scale-105"
                                alt="{{ $article['title'] }}">

                            <!-- Overlay Card -->
                            <div
                                class="absolute bottom-4 left-4 right-4 bg-white rounded-2xl p-5 transition-all duration-300 group-hover:-translate-y-2 group-hover:shadow-xl">

                                <span
                                    class="inline-block mb-2 text-xs text-primary border border-primary px-3 py-1 rounded-full">
                                    {{ $article['category'] }}
                                </span>

                                <h3 class="font-bold text-h4 mb-2 group-hover:text-primary transition">
                                    {{ $article['title'] }}
                                </h3>

                                <p class="text-body text-gray-600 mb-4">
                                    {{ $article['desc'] }}
                                </p>

                                <div class="flex items-center gap-3 text-sm text-gray-500">
                                    <img src="{{ asset($article['avatar']) }}" class="w-7 h-7 rounded-full object-cover"
                                        alt="{{ $article['author'] }}">
                                    <span class="font-medium text-gray-800">
                                        {{ $article['author'] }}
                                    </span>
                                    <span>{{ $article['date'] }}</span>
                                </div>
                            </div>

                        </a>
                    @endforeach
                </div>
                <!-- Button -->
                <div class="text-center mt-14">
                    <a href="#"
                        class="text-primary underline underline-offset-4 transition-all duration-200 ease-out hover:scale-105 hover:font-semibold">
                        <span>All Article</span>
                    </a>
                </div>
            </div>

            <!-- Right Side Articles -->
            <div class="relative">
                <div id="article-sidebar" class="sticky top-24 h-[100vh] md:h-auto flex flex-col space-y-6">
                    <h3 class="text-h3 font-bold">
                        Best Article
                    </h3>
                    <hr>
                    <!-- SCROLLABLE AREA -->
                    <div class="flex-1 overflow-y-auto pr-2 space-y-4 scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-transparent">
                        @foreach ($bestArticles as $article)
                            <a href="#"
                                class="group block rounded-xl p-3 transition-all duration-200 hover:bg-white hover:shadow-sm">
                                <h3
                                    class="font-bold text-h4 mb-1 transition-colors duration-200 group-hover:text-primary">
                                    {{ $article['title'] }}
                                </h3>
                                <p class="text-body text-gray-600 mb-2">
                                    {{ $article['desc'] }}
                                </p>
                                <div class="flex items-center gap-2 text-sm text-gray-500">
                                    <img src="{{ asset($article['avatar']) }}" class="w-6 h-6 rounded-full object-cover" alt="{{ $article['author'] }}">
                                    <span class="font-medium text-gray-800">
                                        {{ $article['author'] }}
                                    </span>
                                    <span>{{ $article['date'] }}</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</section>
<script>
    function syncSidebarHeight() {
        const sidebar = document.getElementById('article-sidebar');
        const featured = document.getElementById('featured-section');

        if (!sidebar || !featured) return;

        // Mobile: pakai 100vh
        if (window.innerWidth < 768) {
            sidebar.style.height = '100vh';
        } else {
            // Desktop: samakan dengan tinggi section kiri
            sidebar.style.height = featured.offsetHeight + 'px';
        }
    }

    window.addEventListener('load', syncSidebarHeight);
    window.addEventListener('resize', syncSidebarHeight);
</script>

