@props([
    'title' => 'Artikel Terkait',
    'posts' => [], // array biasa ATAU LengthAwarePaginator
])

@php
    /* ================= CONFIG ================= */
    $perPage = 4;

    /* ================= DETECT PAGINATOR ================= */
    $isPaginator = $posts instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator;

    /* ================= NORMALISASI DATA ================= */
    if ($isPaginator) {
        $pageItems = $posts;
        $totalPages = $posts->lastPage();
        $currentPage = $posts->currentPage();
    } else {
        $allPosts = is_array($posts) ? $posts : (array) $posts;
        $totalItems = count($allPosts);

        $currentPage = max(1, (int) request()->query('page', 1));
        $offset = ($currentPage - 1) * $perPage;

        $pageItems = array_slice($allPosts, $offset, $perPage);
        $totalPages = (int) ceil(max(1, $totalItems) / $perPage);
    }

    /* ================= PAGINATION URL ================= */
    $pageUrl = fn($page) => request()->fullUrlWithQuery(['page' => $page]) . '#related';
@endphp

<section id="related" class="py-10 md:py-12">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">

        {{-- Title --}}
        <div class="mb-6">
            <h3 class="text-h3 font-bold text-[var(--color-primary)] scroll-mt-24">
                {{ $title }}
            </h3>
        </div>

        {{-- GRID --}}
        <div class="grid sm:grid-cols-2 gap-6 md:gap-8">
            @forelse ($pageItems as $post)
                <a href="{{ route('blogShow', $post['slug']) }}"
                    class="relative block rounded-2xl overflow-hidden group transition-all duration-300">

                    {{-- Image --}}
                    <img src="{{ $post['image'] }}"
                        class="w-full h-[570px] object-cover transition-transform duration-500 group-hover:scale-105"
                        alt="{{ $post['title'] }}" loading="lazy">

                    {{-- Overlay Card --}}
                    <div
                        class="absolute bottom-4 left-4 right-4 bg-white rounded-2xl p-5 transition-all duration-300 group-hover:-translate-y-2 group-hover:shadow-xl">

                        {{-- Category --}}
                        @if (!empty($post['category']))
                            <span class="inline-block mb-2 text-xs text-primary border border-primary px-3 py-1 rounded-full">
                                {{ $post['category'] }}
                            </span>
                        @endif

                        {{-- Title --}}
                        <h3 class="font-bold text-h4 mb-2 transition group-hover:text-primary">
                            {{ $post['title'] }}
                        </h3>

                        {{-- Description --}}
                        <p class="text-body text-gray-600 mb-4 line-clamp-2">
                            {{ $post['desc'] }}
                        </p>

                        {{-- Author --}}
                        <div class="flex items-center gap-3 text-sm text-gray-500">
                            <img src="{{ $post['avatar'] }}" class="w-7 h-7 rounded-full object-cover"
                                alt="{{ $post['author'] }}">
                            <span class="font-medium text-gray-800">
                                {{ $post['author'] }}
                            </span>
                            <span>{{ $post['date'] }}</span>
                        </div>
                    </div>

                </a>

            @empty
                <div
                    class="col-span-full flex items-center justify-center min-h-[220px] rounded-[20px] border border-dashed border-[var(--color-neutral)]/70 bg-white/60 text-center">
                    <p class="text-body text-text/70">
                        There are no articles yet.
                    </p>
                </div>
            @endforelse
        </div>

        {{-- PAGINATION --}}
        <div class="mt-8">
            @if ($isPaginator)
                {{ $posts->onEachSide(1)->fragment('related')->links() }}
            @elseif ($totalPages > 1)
                <nav class="flex items-center justify-between gap-3 text-small">
                    {{-- Prev --}}
                    <div>
                        @if ($currentPage > 1)
                            <a href="{{ $pageUrl($currentPage - 1) }}"
                                class="inline-flex items-center gap-2 rounded-full px-4 py-2 border border-[var(--color-neutral)]/70 hover:border-[var(--color-primary)] hover:text-[var(--color-primary)]">
                                ← Prev
                            </a>
                        @endif
                    </div>

                    {{-- Pages --}}
                    <ul class="flex items-center gap-1">
                        @for ($i = 1; $i <= $totalPages; $i++)
                            <li>
                                <a href="{{ $pageUrl($i) }}"
                                    class="w-9 h-9 flex items-center justify-center rounded-full border
                                    {{ $i === $currentPage ? 'bg-[var(--color-primary)] text-white border-[var(--color-primary)]' : 'border-[var(--color-neutral)]/70 hover:border-[var(--color-primary)] hover:text-[var(--color-primary)]' }}">
                                    {{ $i }}
                                </a>
                            </li>
                        @endfor
                    </ul>

                    {{-- Next --}}
                    <div>
                        @if ($currentPage < $totalPages)
                            <a href="{{ $pageUrl($currentPage + 1) }}"
                                class="inline-flex items-center gap-2 rounded-full px-4 py-2 border border-[var(--color-neutral)]/70 hover:border-[var(--color-primary)] hover:text-[var(--color-primary)]">
                                Next →
                            </a>
                        @endif
                    </div>
                </nav>
            @endif
        </div>

    </div>
</section>
