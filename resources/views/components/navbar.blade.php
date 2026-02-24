@php
    $logo = asset('assets/nav-logo.png');

    $nav = [
        ['route' => 'home', 'label' => 'Home'],
        ['route' => 'about', 'label' => 'About'],
        ['route' => 'program', 'label' => 'Learning System'],
        ['route' => 'admission', 'label' => 'Admission'],
        ['route' => 'blog', 'label' => 'Blog'],
    ];

    // Dropdown "K-12"
    $moreK12Nav = [
        ['route' => 'k-12-kindergarten', 'label' => 'Kindergarten'],
        ['route' => 'k-12-primary-school', 'label' => 'Primary School'],
        ['route' => 'k-12-junior-high-school', 'label' => 'Junior High School'],
        ['route' => 'k-12-high-school', 'label' => 'High School'],
    ];

    $isActive = fn($name) => (request()->routeIs($name)
        ? 'font-bold text-[var(--color-text)]/100'
        : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100') .
        ' whitespace-nowrap pb-1 transition-all duration-200 ease-in-out';

    $link_login = "https://apps.alhazenschool.sch.id/#/index";
    $link_enrollment = "https://apps.alhazenschool.sch.id/#/register"
@endphp

<header class="sticky top-0 z-40 bg-background/90 backdrop-blur">
    <nav role="navigation" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">

        {{-- LEFT: Brand --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img src="{{ $logo }}" alt="Alhazen School" class="h-8 w-auto" loading="lazy">
            <span class="sr-only">Alhazen School</span>
        </a>

        {{-- RIGHT: Desktop menu and Dashboard --}}
        <div class="hidden md:flex items-center gap-8">
            <ul class="flex items-center gap-8">
                @foreach ($nav as $item)
                    {{-- Menu utama --}}
                    <li>
                        <a href="{{ route($item['route']) }}" class="{{ $isActive($item['route']) }} text-nav">
                            {{ $item['label'] }}
                        </a>
                    </li>

                    {{-- Dropdown K-12 --}}
                    @if ($item['route'] === 'program' && !empty($moreK12Nav))
                        <li x-data="{ openMore: false }" class="relative">
                            <button type="button"
                                @click="openMore = !openMore"@keydown.escape.window="openMore = false"
                                class="inline-flex items-center gap-1 text-nav {{ request()->routeIs(collect($moreK12Nav)->pluck('route')->all()) ? 'font-bold text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }} pb-1 transition-all duration-200 ease-in-out">
                                <span>K-12</span>
                                <svg class="w-3.5 h-3.5" :class="{ 'rotate-180': openMore }" viewBox="0 0 20 20" fill="none">
                                    <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>

                            <div x-show="openMore" x-cloak @click.outside="openMore = false"
                                x-transition.origin.top.right
                                class="absolute left-0 mt-3 w-56 rounded-xl border border-neutral bg-background shadow-lg py-2 z-50">

                                @foreach ($moreK12Nav as $more)
                                    <a href="{{ route($more['route']) }}"
                                        class="block px-4 py-2.5 text-sm {{ request()->routeIs($more['route']) ? 'font-medium text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }} hover:bg-neutral/40 transition">
                                        {{ $more['label'] }}
                                    </a>
                                @endforeach
                            </div>
                        </li>
                    @endif

                @endforeach
            </ul>

            <div class="flex items-center gap-4 my-5">
                <a href="{{ $link_login }}"
                class="px-6 py-3 rounded-full text-button-large font-semibold
                    border-2 border-[var(--color-primary)]
                    text-[var(--color-primary)]
                    shadow-sm
                    transition-all duration-300 ease-out
                    hover:shadow-lg
                    hover:-translate-y-0.5">
                    Login
                </a>

                <a href="{{ $link_enrollment }}" 
                class="px-6 py-3 rounded-full text-button-large font-semibold text-white
                    bg-[var(--color-primary)]
                    shadow-sm
                    transition-all duration-300 ease-out
                    hover:shadow-lg
                    hover:-translate-y-0.5">
                    Enrollment
                </a>
            </div>

        </div>

        {{-- MOBILE: burger --}}
        <div class="md:hidden" x-data="{ open: false, openMore: false }" x-cloak>
            <button @click="open = !open" aria-label="Open menu"
                class="p-2 rounded-lg border border-neutral text-text hover:bg-neutral hover:text-primary transition-all duration-200 ease-in-out">
                ☰
            </button>

            <div x-show="open" @click.outside="open = false" x-transition
                class="absolute right-4 top-16 w-72 rounded-xl border border-neutral bg-background shadow-lg backdrop-blur">
                <div class="px-4 py-3 font-semibold text-text">Menu</div>
                <hr class="border-neutral">
                <ul class="py-2">
                    @foreach ($nav as $item)
                        {{-- Menu utama --}}
                        <li>
                            <a href="{{ route($item['route']) }}"
                                class="{{ $isActive($item['route']) }} text-nav block px-4 py-2"
                                @click="open = false">
                                {{ $item['label'] }}
                            </a>
                        </li>

                        {{-- Dropdown K-12 --}}
                        @if ($item['route'] === 'program' && !empty($moreK12Nav))
                            <li x-data="{ openProgram: false }">
                                <button type="button" @click="openProgram = !openProgram"
                                    class="w-full flex items-center justify-between px-4 py-2 text-nav {{ request()->routeIs(collect($moreK12Nav)->pluck('route')->all()) ? 'font-medium text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }} transition-all duration-200 ease-in-out">

                                    <span>K-12</span>
                                    <svg class="w-3.5 h-3.5" :class="{ 'rotate-180': openProgram }" viewBox="0 0 20 20"
                                        fill="none">
                                        <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>

                                <div x-show="openProgram" x-cloak class="mt-1 pb-1">
                                    @foreach ($moreK12Nav as $more)
                                        <a href="{{ route($more['route']) }}"
                                            class="block px-6 py-2 text-sm {{ request()->routeIs($more['route']) ? 'font-medium text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }} hover:bg-neutral/40 transition"
                                            @click="open = false; openProgram = false">
                                            {{ $more['label'] }}
                                        </a>
                                    @endforeach
                                </div>
                            </li>
                        @endif

                    @endforeach

                    {{-- Mobile: Login --}}
                    <li class="px-4 pt-3 mb-3">
                        <a href="{{ $link_login }}"
                        class="w-full px-6 py-3 rounded-full text-sm font-semibold
                                border-2 border-[var(--color-primary)]
                                text-[var(--color-primary)]
                                shadow-sm
                                inline-flex justify-center
                                transition-all duration-300 ease-out
                                hover:shadow-lg
                                hover:-translate-y-0.5"
                        @click="open = false">
                            Login
                        </a>
                    </li>

                    {{-- Mobile: Enrollment --}}
                    <li class="px-4 pb-4">
                        <a href="{{ $link_enrollment }}"
                        class="w-full px-6 py-3 rounded-full text-sm font-semibold text-white
                                bg-[var(--color-primary)]
                                shadow-sm
                                inline-flex justify-center
                                transition-all duration-300 ease-out
                                hover:shadow-lg
                                hover:-translate-y-0.5"
                        @click="open = false">
                            Enrollment
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
</header>

<style>
    [x-cloak] {
        display: none !important;
    }
</style>
