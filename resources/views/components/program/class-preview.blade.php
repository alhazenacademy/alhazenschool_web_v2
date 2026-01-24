@props([
    'title' => 'Class Preview',
    'subtitle' => 'Lihat keseruan anak-anak saat belajar coding bersama tutor Alhazen Academy',

    // daftar gambar kelas
    'images' => [],
])

<section id="class-preview" class="relative py-16 sm:py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Heading (konsisten) --}}
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-12">
            <h2 class="text-h2 font-bold text-primary mb-4">
                {!! $title !!}
            </h2>
            <p class="text-body text-neutral-content">
                {!! $subtitle !!}
            </p>
        </div>

        {{-- Preview --}}
        @if (empty($images))
            {{-- Empty State --}}
            <div
                class="max-w-5xl mx-auto h-[220px] sm:h-[400px] lg:h-[500px] flex items-center justify-center rounded-3xl ring-1 ring-[var(--color-neutral)]/60 bg-neutral/20 text-center">

                <p class="text-body text-neutral-content">
                    Belum ada preview kelas
                </p>
            </div>
        @else
            {{-- Image Preview --}}
            <div x-data="{ active: 0 }" class="max-w-5xl mx-auto">

                {{-- Gambar Besar --}}
                <div
                    class="relative overflow-hidden rounded-3xl ring-1 ring-[var(--color-neutral)]/60 shadow-[0_18px_40px_rgba(0,0,0,.12)] mb-5">
                    <img :src="{{ json_encode(collect($images)->map(fn($img) => asset($img))->values()) }}[active]"
                        alt="Preview kelas coding"
                        class="w-full h-[220px] sm:h-[400px] lg:h-[500px] object-cover transition" />
                </div>

                {{-- Thumbnail Slider --}}
                <div class="flex gap-3 overflow-x-auto scrollbar-hide px-1 py-5">
                    @foreach ($images as $i => $img)
                        <button type="button" @click="active = {{ $i }}"
                            class="relative shrink-0 rounded-xl overflow-hidden ring-2 transition"
                            :class="active === {{ $i }} ?
                                'ring-primary' :
                                'ring-transparent hover:ring-primary/40'">

                            <img src="{{ asset($img) }}" alt="Thumbnail kelas" class="w-70 h-auto object-cover"
                                loading="lazy">
                        </button>
                    @endforeach
                </div>

            </div>
        @endif
    </div>
</section>
