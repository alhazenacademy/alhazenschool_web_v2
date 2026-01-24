@php
    $logo = asset('assets/nav-logo.webp');

    $nav = [
        ['route' => 'home', 'label' => 'Home'],
        ['route' => 'artikel', 'label' => 'Artikel'],
        ['route' => 'about', 'label' => 'Tentang Kami'],
        ['route' => 'katalog', 'label' => 'Katalog Buku'],
    ];

    // Dropdown "Program"
    $moreProgramNav = [
        ['route' => 'kursus-coding-anak', 'label' => 'Kursus Coding Anak'],
        ['route' => 'kursus-roblox', 'label' => 'Kursus Roblox Studio'],
        ['route' => 'program', 'label' => 'Program Lainnya'],
    ];

    // Dropdown "Event"
    $moreEventNav = [
        ['route' => 'holiday-program', 'label' => 'Holiday Program'],
    ];

    $isActive = fn($name) => (request()->routeIs($name)
        ? 'font-medium text-[var(--color-text)]/100'
        : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100') .
        ' whitespace-nowrap pb-1 transition-all duration-200 ease-in-out';
@endphp

<header class="sticky top-0 z-40 bg-background/90 backdrop-blur">
    <nav role="navigation" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">

        {{-- LEFT: Brand --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img src="{{ $logo }}" alt="Alhazen Academy" class="h-8 w-auto" loading="lazy">
            <span class="sr-only">Alhazen</span>
        </a>

        {{-- RIGHT: Desktop menu and Dashboard --}}
        <div class="hidden md:flex items-center gap-8">
            <ul class="flex items-center gap-8">
                @foreach ($nav as $item)
                    {{-- Menu utama --}}
                    <li>
                        <a href="{{ route($item['route']) }}" class="{{ $isActive($item['route']) }} text-body">
                            {{ $item['label'] }}
                        </a>
                    </li>

                    {{-- Dropdown Program --}}
                    @if ($item['route'] === 'home' && !empty($moreProgramNav))
                        <li x-data="{ openMore: false }" class="relative">
                            <button type="button"
                                @click="openMore = !openMore"@keydown.escape.window="openMore = false"
                                class="inline-flex items-center gap-1 text-body {{ request()->routeIs(collect($moreProgramNav)->pluck('route')->all()) ? 'font-medium text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }} pb-1 transition-all duration-200 ease-in-out">
                                <span>Program</span>
                                <svg class="w-3.5 h-3.5" :class="{ 'rotate-180': openMore }" viewBox="0 0 20 20"
                                    fill="none">
                                    <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" stroke-width="1.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>

                            <div x-show="openMore" x-cloak @click.outside="openMore = false"
                                x-transition.origin.top.right
                                class="absolute left-0 mt-3 w-56 rounded-xl border border-neutral bg-background shadow-lg py-2 z-50">

                                @foreach ($moreProgramNav as $more)
                                    <a href="{{ route($more['route']) }}"
                                        class="block px-4 py-2.5 text-sm {{ request()->routeIs($more['route']) ? 'font-medium text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }} hover:bg-neutral/40 transition">
                                        {{ $more['label'] }}
                                    </a>
                                @endforeach
                            </div>
                        </li>
                    @endif

                    {{-- Dropdown Event --}}
                    @if ($item['route'] === 'home' && !empty($moreEventNav))
                        <li x-data="{ openEvent: false }" class="relative">
                            <button type="button" @click="openEvent = !openEvent"
                                @keydown.escape.window="openEvent = false"
                                class="inline-flex items-center gap-1 text-body {{ request()->routeIs(collect($moreEventNav)->pluck('route')->all()) ? 'font-medium text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }} pb-1 transition-all duration-200 ease-in-out">

                                <span>Event</span>
                                <svg class="w-3.5 h-3.5" :class="{ 'rotate-180': openEvent }" viewBox="0 0 20 20"
                                    fill="none">
                                    <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" stroke-width="1.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>

                            <div x-show="openEvent" x-cloak @click.outside="openEvent = false"
                                x-transition.origin.top.right
                                class="absolute left-0 mt-3 w-56 rounded-xl border border-neutral bg-background shadow-lg py-2 z-50">

                                @foreach ($moreEventNav as $event)
                                    <a href="{{ route($event['route']) }}"
                                        class="block px-4 py-2.5 text-sm {{ request()->routeIs($event['route']) ? 'font-medium text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }} hover:bg-neutral/40 transition">
                                        {{ $event['label'] }}
                                    </a>
                                @endforeach
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>

            {{-- Button: Daftar Kelas Gratis (primary, hover accent) --}}
            <a href="{{ route('trial') }}"
                class="my-5 px-4 py-3 inline-flex items-center rounded-xl text-button bg-primary text-white hover:bg-accent hover:scale-105 transition-all duration-200 ease-in-out">
                Daftar Kelas Gratis
            </a>

            {{-- Link: Masuk / Login (underlined) --}}
            <a href="https://apps.alhazen.academy/#/login"
                class="my-5 inline-flex items-center text-button text-primary underline hover:text-accent transition-all duration-200 ease-in-out">
                Masuk / Login
            </a>
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
                                class="{{ $isActive($item['route']) }} text-body block px-4 py-2"
                                @click="open = false">
                                {{ $item['label'] }}
                            </a>
                        </li>

                        {{-- Dropdown Program --}}
                        @if ($item['route'] === 'home' && !empty($moreProgramNav))
                            <li x-data="{ openProgram: false }">
                                <button type="button" @click="openProgram = !openProgram"
                                    class="w-full flex items-center justify-between px-4 py-2 text-body {{ request()->routeIs(collect($moreProgramNav)->pluck('route')->all()) ? 'font-medium text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }} transition-all duration-200 ease-in-out">

                                    <span>Program</span>
                                    <svg class="w-3.5 h-3.5" :class="{ 'rotate-180': openProgram }" viewBox="0 0 20 20"
                                        fill="none">
                                        <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>

                                <div x-show="openProgram" x-cloak class="mt-1 pb-1">
                                    @foreach ($moreProgramNav as $more)
                                        <a href="{{ route($more['route']) }}"
                                            class="block px-6 py-2 text-sm {{ request()->routeIs($more['route']) ? 'font-medium text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }} hover:bg-neutral/40 transition"
                                            @click="open = false; openProgram = false">
                                            {{ $more['label'] }}
                                        </a>
                                    @endforeach
                                </div>
                            </li>
                        @endif

                        {{-- Dropdown Event --}}
                        @if ($item['route'] === 'home' && !empty($moreEventNav))
                            <li x-data="{ openEvent: false }">
                                <button type="button" @click="openEvent = !openEvent"
                                    class="w-full flex items-center justify-between px-4 py-2 text-body {{ request()->routeIs(collect($moreEventNav)->pluck('route')->all()) ? 'font-medium text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }} transition-all duration-200 ease-in-out">

                                    <span>Event</span>
                                    <svg class="w-3.5 h-3.5" :class="{ 'rotate-180': openEvent }" viewBox="0 0 20 20" fill="none">
                                        <path d="M5 7.5L10 12.5L15 7.5"
                                            stroke="currentColor" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>

                                <div x-show="openEvent" x-cloak class="mt-1 pb-1">
                                    @foreach ($moreEventNav as $event)
                                        <a href="{{ route($event['route']) }}"
                                            class="block px-6 py-2 text-sm {{ request()->routeIs($event['route']) ? 'font-medium text-[var(--color-text)]/100' : 'text-[var(--color-text)]/50 hover:text-[var(--color-text)]/100' }}
                                            hover:bg-neutral/40 transition" @click="open = false; openEvent = false">
                                            {{ $event['label'] }}
                                        </a>
                                    @endforeach
                                </div>
                            </li>

                        @endif
                    @endforeach

                    {{-- Mobile: Daftar Kelas Gratis --}}
                    <li class="px-4 pt-3">
                        <a href="{{ route('trial') }}"
                            class="w-full px-4 py-3 inline-flex justify-center rounded-xl text-button bg-primary text-white hover:bg-accent hover:scale-105 transition-all duration-200 ease-in-out"
                            @click="open = false">
                            Daftar Kelas Gratis
                        </a>
                    </li>

                    {{-- Mobile: Masuk / Login --}}
                    <li class="px-4 pb-3">
                        <a href="https://apps.alhazen.academy/#/login"
                            class="mt-3 w-full inline-flex justify-center text-button text-primary underline hover:text-accent transition-all duration-200 ease-in-out"
                            @click="open = false">
                            Masuk / Login
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
