<section class="py-10 sm:py-12">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div
            class="mb-8 lg:mb-12 flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 lg:gap-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10">
                <h2 class="text-h2 font-bold text-primary mb-4">{!! $title !!}</h2>
                <p class="text-body max-w-2xl mx-auto text-neutral-content">{!! $description !!}</p>
            </div>
        </div>

        @if (count($logos))
            <div class="relative overflow-hidden clients-mask">
                <ul class="clients-track group" style="--gap: 2rem; --speed: 50s;">
                    @php $items = array_merge($logos, $logos); @endphp
                    @foreach ($items as $i => $logo)
                        <li class="clients-item">
                            @php
                                $img =
                                    '<img src="' .
                                    $logo['src'] .
                                    '" alt="' .
                                    $logo['alt'] .
                                    '" loading="lazy" class="block object-contain clients-img" style="height: 100px; max-width:180px;" />';
                            @endphp

                            @if (!empty($logo['url']))
                                <a href="{{ $logo['url'] }}" class="inline-block px-10"
                                    aria-label="{{ $logo['alt'] }}"
                                    @if ($i >= count($logos)) aria-hidden="true" tabindex="-1" @endif>{!! $img !!}</a>
                            @else
                                <span class="inline-block px-10"
                                    @if ($i >= count($logos)) aria-hidden="true" @endif>{!! $img !!}</span>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</section>
