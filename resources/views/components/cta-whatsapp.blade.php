@php
    $waHref = 'https://wa.me/' . $salesPhone . '?text=' . urlencode($waMessage);
@endphp
<section class="relative py-8">
    <div x-data="" class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <img src="{{ asset('assets/kids/index-cta-whatsapp/icon-star.png') }}" alt=""
            class="pointer-events-none select-none absolute -left-2 sm:-left-2 -top-6 w-14 sm:w-16 z-50" loading="lazy" />
        <img src="{{ asset('assets/kids/index-cta-whatsapp/icon-star.png') }}" alt=""
            class="pointer-events-none select-none absolute -right-2 sm:-right-1 -bottom-5 w-14 sm:w-16 z-50"
            loading="lazy" />
        <div
            class="relative rounded-[28px] px-5 sm:px-8 lg:px-10 py-6 sm:py-7
                bg-gradient-to-b from-[#10B981] to-[#065F46] text-white shadow-[0_20px_50px_rgba(16,185,129,.25)]">
            <div class="flex flex-col lg:flex-row lg:items-center gap-4 lg:gap-8">
                <h3 class="flex-1 font-semibold leading-tight text-[20px] sm:text-[24px] lg:text-[28px] tracking-wide text-center lg:text-left mb-2 lg:mb-0">
                    {!! $title !!}
                </h3>
                <div x-data="leadForm({ leadUrl: @js(route('leads.store', [], false)), source: '{{ $source }}', waHref: '{{ $waHref }}' })" class="w-full lg:w-auto flex flex-col sm:flex-row items-stretch gap-3" >
                    <input type="hidden" x-ref="csrf_cta_wa" value="{{ csrf_token() }}">
                    <input x-ref="input" type="tel" inputmode="numeric" autocomplete="tel"
                        placeholder="{{ $placeholder }}" x-model="form.phone"
                        class="w-full lg:w-[360px] h-11 sm:h-12 rounded-xl bg-white text-slate-800 placeholder:text-slate-400 px-4 outline-none ring-2 ring-transparent focus:ring-white/60 shadow-inner" />
                    <a
                        target="_blank"
                        rel="noopener noreferrer"
                        @click.prevent="handleWhatsApp"
                        class="w-full sm:w-auto px-5 sm:px-6 py-3 inline-flex justify-center items-center rounded-xl text-button bg-accent text-white hover:scale-105 transition-all duration-200 ease-in-out cursor-pointer">
                        {{ $button }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
