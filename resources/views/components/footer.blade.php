<section id="footer" class="relative overflow-hidden py-12 lg:py-20"
    style="background-image: url('{{ asset('assets/kids/footer/bg.webp') }}');  background-size: cover; background-position: top; background-repeat: no-repeat;">
    <div class="max-w-7xl mx-auto px-6 text-center pt-50 text-background">

        <!-- Badge -->
        <div class="mb-5">
            <span
                class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-accent text-accent bg-background">
                More Steps
            </span>
        </div>

        <!-- Title -->
        <h2 class="text-h1 font-bold italic leading-tight mb-5">
            Just a little bit closer to joining<br class="hidden md:block">
            Alhazen School
        </h2>

        <!-- Description -->
        <p class="max-w-3xl mx-auto text-body mb-10">
            Alhazen School offers a range of flexible learning programs tailored to support academic growth, character
            development, and individual learning needs through a hybrid education model.
        </p>

        <!-- Card Footer -->
        <div class="rounded-[40px] shadow-lg bg-neutral/20 mb-10">
            <!-- Content -->
            <div class="relative z-10 py-16 lg:py-24 px-6 lg:px-12 text-background flex flex-col md:flex-row items-start gap-5 text-left">
                <div class="max-w-2xs">
                    <img src="{{ asset('assets/logo-white.png') }}" alt="Alhazen School Logo"
                        class="mb-6 w-40 h-full object-cover">

                    <p class="text-small text-justify mb-5">
                        Alhazen School is a Global Islamic Technology Hybrid School that delivers a balanced education
                        combining Islamic values, academic excellence, and modern technology.
                    </p>

                    <div class="flex gap-3">
                        {{-- Icon Facebook --}}
                        <a href="#" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-accent hover:bg-text/20 transition p-2"
                            aria-label="Facebook">
                            <img src="{{ asset('assets/kids/footer/icon-f.png') }}" alt="Facebook Icon"
                                class="w-8 h-auto object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                                loading="lazy" decoding="async" />
                        </a>

                        {{-- Icon X --}}
                        <a href="#" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-accent hover:bg-text/20 transition p-2"
                            aria-label="X">
                            <img src="{{ asset('assets/kids/footer/icon-x.png') }}" alt="X Icon"
                                class="w-8 h-auto object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                                loading="lazy" decoding="async" />
                        </a>

                        {{-- Icon Youtube --}}
                        <a href="#" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-accent hover:bg-text/20 transition p-2"
                            aria-label="Youtube">
                            <img src="{{ asset('assets/kids/footer/icon-y.png') }}" alt="Youtube Icon"
                                class="w-8 h-auto object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                                loading="lazy" decoding="async" />
                        </a>
                    </div>
                </div>

                <div>
                    <h6 class="text-h6 font-bold mb-5">Alhazen School</h6>
                    <ul class="text-small space-y-5">
                        <li>
                            <a href="{{ route('about') }}" class="hover:font-bold">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('admission') }}" class="hover:font-bold">Admission</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h6 class="text-h6 font-bold mb-5">More Information</h6>
                    <ul class="text-small space-y-5">
                        <li>
                            <a href="{{ route('program') }}" class="hover:font-bold">School Program</a>
                        </li>
                        <li>
                            <a href="{{ route('program') }}" class="hover:font-bold">School & Curriculum</a>
                        </li>
                        <li>
                            <a href="{{ route('program') }}" class="hover:font-bold">Tuition Fee</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h6 class="text-h6 font-bold mb-5">Contact Information</h6>
                    <ul class="text-small space-y-5">
                        <li class="flex gap-2 flex-row items-center">
                            <img src="{{ asset('assets/kids/footer/icon-round-e.png') }}" alt="Email Icon"
                                class="w-5 h-auto" loading="lazy" decoding="async" />
                            <a href="mailto:admin@alhazenschool.com" aria-label="Email Alhazen School" class="hover:font-bold">admin@alhazenschool.com</a>
                        </li>
                        <li class="flex gap-2 flex-row items-center">
                            <img src="{{ asset('assets/kids/footer/icon-round-w.png') }}" alt="Phone Icon"
                                class="w-5 h-auto" loading="lazy" decoding="async" />
                            <a href="https://wa.me/6282110004351" target="_blank" rel="noopener" aria-label="Chat via WhatsApp" class="hover:font-bold">+62&nbsp;821-1000-4351</a>
                        </li>
                    </ul>
                </div>

                <div class="max-w-3xs">
                    <h6 class="text-h6 font-bold mb-5">Headquarters</h6>
                    <a href="https://maps.app.goo.gl/iXL4hPUwbnyEhh8v5" target="_blank" rel="noopener" aria-label="View Alhazen School on Google Maps" class="text-small mb-5 hover:underline">
                        <span class="block text-justify">
                            Plaza Kaha, Lt 4 unit 402B Jl. KH. Abdullah Syafei No.21 C, Bukit Duri, Tebet, Jakarta Selatan, DKI Jakarta, 12840, Indonesia
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="flex flex-col md:flex-row text-center justify-center gap-4">
            <p class="text-small text-center">
                © {{ date('Y') }} YAYASAN ALHAZEN BINTANG UTAMA. All rights reserved.
            </p>
            <p class="text-small text-center ml-4">
                NPSN: P2970979 | Operational Decree: 423.8/22-DPMPTSP/OL/2025
            </p>
        </div>
    </div>
</section>
