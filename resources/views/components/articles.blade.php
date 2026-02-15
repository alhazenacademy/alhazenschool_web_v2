@php
    $featuredArticles = [
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

    $sideArticles = [
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

<section id="articles" class="py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-14">
            <div class="mb-5">
                <span
                    class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                    Latest Updates
                </span>
            </div>

            <h2 class="text-h2 font-bold italic leading-tight mb-5">
                Insights & Articles
            </h2>

            <p class="text-body-large">
                Explore articles and insights on education, Islamic values, technology, and learning approaches that
                support student growth in a modern world.
            </p>
        </div>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-[2fr_1fr] gap-10">

            <!-- Left Featured Articles -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach ($featuredArticles as $article)
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

            <!-- Right Side Articles -->
            <div class="space-y-8">
                @foreach ($sideArticles as $article)
                    <a href="#"
                        class="group block rounded-xl p-3 transition-all duration-200 hover:bg-white hover:shadow-sm">

                        <h3 class="font-bold text-h4 mb-1 transition-colors duration-200 group-hover:text-primary">
                            {{ $article['title'] }}
                        </h3>

                        <p class="text-body text-gray-600 mb-2">
                            {{ $article['desc'] }}
                        </p>

                        <div class="flex items-center gap-2 text-sm text-gray-500">
                            <img src="{{ asset($article['avatar']) }}" class="w-6 h-6 rounded-full object-cover"
                                alt="{{ $article['author'] }}">
                            <span class="font-medium text-gray-800">
                                {{ $article['author'] }}
                            </span>
                            <span>{{ $article['date'] }}</span>
                        </div>

                    </a>
                @endforeach

            </div>

        </div>

        <!-- Button -->
        <div class="text-center mt-14">
            <a href="#"
                class="inline-flex items-center gap-3 rounded-full bg-primary px-6 py-3 text-white font-semibold shadow-lg transition-transform duration-200 hover:scale-105">
                <span>Other Article</span>

                <!-- Arrow Icon -->
                <span class="flex items-center justify-center w-7 h-7 rounded-full bg-orange-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
            </a>

        </div>

    </div>
</section>
