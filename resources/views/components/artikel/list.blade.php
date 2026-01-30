@props([
    // posts: ['title','date','image','url']
    'posts' => [],
    // categories: ['label','href','active?'=>bool]
    'categories' => [],
    'catTitle' => 'Cari Berdasarkan Kategori',
])

<section class="relative py-10 md:py-14">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 grid lg:grid-cols-[1fr_320px] gap-8 lg:gap-10">
        {{-- GRID KARTU ARTIKEL --}}
        <div>
            <div class="grid sm:grid-cols-2 gap-6 md:gap-8">
                @forelse ($posts as $p)
                    <a href="{{ route('artikel.show', $p['slug']) }}" class="group block rounded-[20px] p-3 ">
                        <div class="relative rounded-[16px] overflow-hidden mb-3">
                            <img src="{{ $p['image'] }}" alt="Artikel tentang {{ $p['title'] }}"
                                class="w-full object-cover transition-transform duration-500 ease-out will-change-transform group-hover:scale-[1.06]"
                                loading="lazy" decoding="async" />
                        </div>
                        @if ($p['date'])
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
                    <div class="sm:col-span-2">
                        <div
                            class="flex flex-col items-center justify-center rounded-2xl border border-dashed border-slate-200 bg-slate-50 px-6 py-10 text-center">
                            <div
                                class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-full bg-white shadow-sm ring-1 ring-slate-200">
                                <span class="text-lg">📰</span>
                            </div>
                            <h3 class="text-base font-semibold text-slate-800">
                                Belum ada artikel
                            </h3>
                            <p class="mt-2 text-sm text-slate-600 max-w-md">
                                Nantikan update terbaru seputar kegiatan, program, dan tips belajar dari Alhazen
                                Academy.
                            </p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>

        {{-- SIDEBAR KATEGORI --}}
        <aside class="lg:sticky lg:top-24 h-max">
            <div class="rounded-2xl border border-[var(--color-neutral)] p-5">
                <h4 class="text-h5 font-medium mb-4">{{ $catTitle }}</h4>
                <div class="flex flex-wrap lg:flex-col gap-2">
                    @foreach ($categories as $c)
                        @php $active = $c['active'] ?? false; @endphp
                        <a href="{{ $c['href'] ?? '#' }}"
                            class="inline-flex items-center justify-center rounded-xl px-4 py-2 text-small transition {{ $active ? 'bg-[var(--color-primary)] text-white' : 'text-text/50 border border-[var(--color-neutral)]/70 hover:border-[var(--color-primary)] hover:text-[var(--color-primary)]' }}">
                            {{ $c['label'] ?? 'Kategori' }}
                        </a>
                    @endforeach
                </div>
            </div>
        </aside>
    </div>
</section>
