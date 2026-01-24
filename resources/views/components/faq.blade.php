<section class="py-12 sm:py-16">
    <div class="mx-auto max-w-5xl px-4 sm:px-6">
        <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10">
            <h2 class="text-h2 font-bold text-primary mb-4">{!! $title !!}</h2>
            <p class="text-body max-w-2xl mx-auto text-neutral-content">{!! $description !!}</p>
        </div>

        <!-- ROOT Alpine untuk kontrol showAll -->
        <div x-data="{
            initial: 3,
            showAll: false,
            toggleAll() { this.showAll = !this.showAll; }
        }">

            <!-- LIST FAQ -->
            <div class="space-y-4">
                @foreach ($items as $i => $item)
                    @php $qid = 'faq-item-' . $i; @endphp

                    <div x-data="{ open: false }" x-show="showAll || {{ $loop->index }} < initial" x-collapse
                        class="rounded-2xl border border-[color:var(--color-neutral)] bg-white shadow-sm">
                        <h3>
                            <button :aria-expanded="open.toString()" :class="open ? 'rounded-t-2xl' : 'rounded-2xl'"
                                @click="open = !open"
                                class="w-full text-left px-5 sm:px-6 py-4 sm:py-5 flex items-center gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-[color:var(--color-primary)]/60 cursor-pointer"
                                aria-controls="{{ $qid }}">
                                <span class="flex-1 font-medium text-[color:var(--color-text)]">
                                    {{ $item['question'] ?? '' }}
                                </span>

                                <span
                                    class="shrink-0 inline-flex items-center justify-center w-8 h-8 rounded-full bg-[color:var(--color-neutral)]/60">
                                    <!-- Chevron: turun jika tertutup, naik jika terbuka -->
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-4 h-4 transition-transform duration-200"
                                        :class="open ? 'rotate-180' : ''" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor">
                                        <path stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 9l6 6 6-6" />
                                    </svg>
                                </span>
                            </button>
                        </h3>

                        <div x-cloak x-show="open" x-collapse id="{{ $qid }}"
                            class="px-5 sm:px-6 pb-5 sm:pb-6 text-[15px] leading-relaxed text-slate-600">
                            {!! $item['answer'] ?? '' !!}
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- CTA -->
            <div class="text-center mt-8 sm:mt-10">
                <button type="button" @click="toggleAll()"
                    class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-[color:var(--color-transparent)] text-primary text-button hover:scale-105 transition-all duration-200 ease-in-out cursor-pointer">
                    <!-- Teks berubah dinamis -->
                    <span x-text="showAll ? 'Perkecil semua pertanyaan' : 'Lihat semua pertanyaan'"></span>
                    <!-- Ikon: panah bawah untuk 'lihat semua', panah atas untuk 'minimal' -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition-transform duration-200"
                        :class="showAll ? '-rotate-180' : 'rotate-0'" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />
                    </svg>
                </button>
            </div>

        </div>
    </div>
</section>
