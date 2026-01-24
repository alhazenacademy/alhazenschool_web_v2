@props([
    'title' => 'Artikel Terkait',
    'posts' => [], // array biasa ATAU LengthAwarePaginator
])

@php
    // Config
    $perPage = 4;

    // Jika sudah paginator bawaan Laravel:
    $isPaginator = $posts instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator;

    // Normalisasi koleksi untuk loop kartu
    if ($isPaginator) {
        $pageItems = $posts; // langsung pakai
        $totalPages = $posts->lastPage();
        $currentPage = $posts->currentPage();
    } else {
        $all = is_array($posts) ? $posts : (array) $posts;
        $total = count($all);
        $currentPage = max(1, (int) request()->query('page', 1));
        $offset = ($currentPage - 1) * $perPage;
        $pageItems = array_slice($all, $offset, $perPage);
        $totalPages = (int) ceil(max(1, $total) / $perPage);
    }

    // Helper URL untuk pagination manual (preserve query lain)
    $pageUrl = function ($page) {
        return request()->fullUrlWithQuery(['page' => $page]) . '#related';
    };
@endphp

<section id="related" class="py-10 md:py-12">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-h4 font-bold text-[var(--color-primary)] scroll-mt-24">{{ $title }}</h3>
        </div>

        {{-- GRID KARTU ARTIKEL --}}
        <div>
            <div class="grid sm:grid-cols-2 gap-6 md:gap-8">
                @forelse ($isPaginator ? $pageItems : $pageItems as $p)
                    <a href="{{ route('artikel.show', $p['slug']) }}" class="group block rounded-[20px] p-3 ">
                        <div class="relative rounded-[16px] overflow-hidden mb-3">
                            <img src="{{ $p['image'] }}" alt="Artikel tentang {{ $p['title'] }}"
                                class="w-full object-cover transition-transform duration-500 ease-out will-change-transform group-hover:scale-[1.06]"
                                loading="lazy" decoding="async" />
                        </div>

                        @if (!empty($p['date']))
                            <div class="text-small text-text/60 mb-1">{{ $p['date'] }}</div>
                        @endif

                        <h4
                            class="text-h5 mt-3 font-medium text-slate-900 transition-colors group-hover:text-[var(--color-primary)]">
                            {{ $p['title'] }}
                        </h4>
                        <p class="mt-2 text-sm text-slate-600">
                            {{ $p['excerpt'] }}
                        </p>
                        <span
                            class="mt-3 inline-flex items-center text-sm font-semibold text-[var(--color-primary)] hover:underline cursor-pointer">
                                Read more
                                <span class="ml-1">→</span>
                        </span>
                    </a>
                @empty
                    <p class="text-body text-text/70">Belum ada artikel.</p>
                @endforelse
            </div>
        </div>

        {{-- PAGINATION --}}
        <div class="mt-8">
            @if ($isPaginator)
                {{-- Gunakan bawaan Laravel jika paginator --}}
                {{ $posts->onEachSide(1)->fragment('related')->links() }}
            @else
                @if ($totalPages > 1)
                    <nav class="flex items-center justify-between gap-3 text-small">
                        {{-- Prev --}}
                        <div>
                            @if ($currentPage > 1)
                                <a href="{{ $pageUrl($currentPage - 1) }}"
                                    class="inline-flex items-center gap-2 rounded-full px-4 py-2 border border-[var(--color-neutral)]/70 hover:border-[var(--color-primary)] hover:text-[var(--color-primary)]">
                                    ← Sebelumnya
                                </a>
                            @endif
                        </div>

                        {{-- Numbered --}}
                        <ul class="flex items-center gap-1">
                            @for ($i = 1; $i <= $totalPages; $i++)
                                <li>
                                    <a href="{{ $pageUrl($i) }}"
                                        class="inline-flex items-center justify-center rounded-full w-9 h-9 border
                            {{ $i === $currentPage
                                ? 'bg-[var(--color-primary)] text-white border-[var(--color-primary)]'
                                : 'border-[var(--color-neutral)]/70 hover:border-[var(--color-primary)] hover:text-[var(--color-primary)]' }}">
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
                                    Berikutnya →
                                </a>
                            @endif
                        </div>
                    </nav>
                @endif
            @endif
        </div>
    </div>
</section>
