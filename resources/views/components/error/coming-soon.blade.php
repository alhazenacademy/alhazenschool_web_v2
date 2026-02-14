@props([
    'title' => 'Sesuatu yang menarik akan datang!',
    'subtitle' =>
        'Fitur baru segera hadir. Sambil menunggu, kamu bisa kembali ke beranda atau jelajahi halaman lain yang mungkin kamu butuhkan.',
    'buttonText' => 'Kembali ke Home',
    'buttonHref' => route('home', absolute: false),
    // target tanggal rilis (YYYY-MM-DDTHH:MM:SS)
    'launchAt' => '2024-12-31T00:00:00',
    'image' => '/assets/kids/coming-soon/img-coming-soon.webp',
    'imageAlt' => 'Coming Soon',
])

<section x-data="comingSoon({ launchAt: '{{ $launchAt }}' })" x-init="init()"
    class="relative min-h-[70vh] flex flex-col items-center justify-center gap-8 text-center px-4 py-14">

    {{-- Headline --}}
    <div class="max-w-7xl">
        <div class="mb-5">
            <span
                class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-text text-text">
                Coming Soon
            </span>
        </div>
        <h1 class="text-h1 font-bold text-[var(--color-primary)] italic leading-tight mb-2">
            {{ $title }}
        </h1>
        <p class="text-body text-text">
            {{ $subtitle }}
        </p>
    </div>

    {{-- Illustration --}}
    <figure class="max-w-2xl w-full">
        <img src="{{ $image }}" alt="{{ $imageAlt }}" class="w-80 h-auto object-contain mx-auto select-none"
            loading="lazy" decoding="async">
    </figure>

    {{-- Countdown --}}
    <div class="grid grid-cols-4 gap-3 sm:gap-4">
        <template x-for="box in timeBoxes" :key="box.label">
            <div
                class="w-24 sm:w-28 rounded-2xl bg-white ring-1 ring-[var(--color-neutral)]/60 shadow-[0_10px_24px_rgba(0,0,0,.06)] p-3">
                <div class="text-3xl sm:text-4xl font-extrabold text-[var(--color-text)] tabular-nums"
                    x-text="box.value">00</div>
                <div class="text-[12px] tracking-wide text-[var(--color-text)]/60 uppercase" x-text="box.label"></div>
            </div>
        </template>
    </div>

    {{-- Actions --}}
    <div class="flex flex-col sm:flex-row items-center gap-3 mt-2">
        <a href="{{ $buttonHref }}"
            class="inline-flex items-center gap-3 rounded-full bg-accent px-6 py-3 text-background font-semibold shadow-lg transition-transform duration-200 hover:scale-105">
            <span>{{ $buttonText }}</span>

            <!-- Arrow Icon -->
            <span class="flex items-center justify-center w-7 h-7 rounded-full bg-[#15433B] text-background">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </span>
        </a>
    </div>

    {{-- Small note --}}
    <p class="text-small text-text">
        Estimasi peluncuran: <span class="font-semibold" x-text="etaText"></span>
    </p>
</section>

<script>
    function comingSoon({
        launchAt
    }) {
        return {
            target: new Date(launchAt),
            etaText: '',
            timeBoxes: [{
                    label: 'Days',
                    value: '00'
                },
                {
                    label: 'Hours',
                    value: '00'
                },
                {
                    label: 'Minutes',
                    value: '00'
                },
                {
                    label: 'Seconds',
                    value: '00'
                },
            ],
            tick() {
                const now = new Date();
                let diff = Math.max(0, this.target - now);
                const d = Math.floor(diff / (1000 * 60 * 60 * 24));
                diff -= d * (1000 * 60 * 60 * 24);
                const h = Math.floor(diff / (1000 * 60 * 60));
                diff -= h * (1000 * 60 * 60);
                const m = Math.floor(diff / (1000 * 60));
                diff -= m * (1000 * 60);
                const s = Math.floor(diff / 1000);

                this.timeBoxes[0].value = String(d).padStart(2, '0');
                this.timeBoxes[1].value = String(h).padStart(2, '0');
                this.timeBoxes[2].value = String(m).padStart(2, '0');
                this.timeBoxes[3].value = String(s).padStart(2, '0');

                // ETA singkat
                const opts = {
                    year: 'numeric',
                    month: 'short',
                    day: '2-digit',
                    hour: '2-digit',
                    minute: '2-digit'
                };
                this.etaText = this.target.toLocaleString(undefined, opts);
            },
            init() {
                this.tick();
                setInterval(() => this.tick(), 1000);
            }
        }
    }
</script>
