@props([
    'title' => 'Sesuatu yang menarik akan datang!',
    'subtitle' => 'Fitur baru segera hadir. Sambil menunggu, kamu bisa kembali ke beranda atau jelajahi halaman lain yang mungkin kamu butuhkan.',
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
    <div class="max-w-3xl">
        <span
            class="inline-block rounded-full px-3 py-1 text-[12px] font-semibold ring-1 ring-[var(--color-neutral)]/70 bg-[var(--color-background)]/80 mb-3">
            Coming Soon
        </span>
        <h1 class="text-h2 font-extrabold text-[var(--color-primary)] leading-tight mb-2">
            {{ $title }}
        </h1>
        <p class="text-body text-[var(--color-text)]/85">
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
            class="inline-flex items-center gap-2 rounded-2xl px-6 py-3 text-button bg-[var(--color-accent)] text-white hover:opacity-95 hover:scale-[1.02] transition">
            {{ $buttonText }}
        </a>
    </div>

    {{-- Small note --}}
    <p class="text-small text-[var(--color-text)]/55">
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
