<section id="about-hero" class="relative overflow-hidden py-12 lg:py-20" style="background-image: url('{{ asset('assets/kids/about/hero-bg.webp') }}');  background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="max-w-7xl mx-auto px-6 text-center">

        <!-- Badge -->
        <div class="mb-5">
            <span class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                About Us
            </span>
        </div>

        <!-- Title -->
        <h1 class="text-h1 font-bold italic leading-tight mb-5">
            A Global Islamic Technology <br class="hidden md:block">
            Hybrid School
        </h1>

        <!-- Description -->
        <p class="max-w-3xl mx-auto text-body mb-10">
            Alhazen School is a Global Islamic Technology Hybrid School that delivers a balanced
            education combining Islamic values, academic excellence, and modern technology.
        </p>

        <!-- Image Wrapper -->
        <div class="relative max-w-5xl mx-auto hidden md:flex justify-center">

            <!-- Main Image -->
            <img src="{{ asset('assets/kids/about/hero-img.webp') }}" alt="Alhazen Classroom"
                class="w-full max-w-4xl h-[450px] rounded-[32px] object-cover mx-auto">

            <!-- Floating Left Card -->
            <div class="hidden md:block absolute -left-20 bottom-6 bg-neutral shadow-xl rounded-3xl py-5 px-6 max-w-xs">
                <!-- Icon -->
                <span class="flex items-center justify-center w-6 h-6 mb-3 rounded-full bg-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white"
                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                        <path d="M5 13l4 4L19 7" />
                    </svg>
                </span>
                <!-- Text -->
                <p class="text-sm text-text leading-snug text-left">
                    Integrated curriculum with technology guided by Islamic Teachings
                </p>
            </div>


            <!-- Floating Right Badge -->
            <div class="hidden md:block absolute right-0 top-6 bg-neutral shadow-xl rounded-3xl p-3">
                <img src="https://api.accredible.com/v1/frontend/credential_website_embed_image/badge/108574909"
                    alt="STEM.org Accreditation Badge - Alhazen School" class="w-[120px] h-auto" loading="lazy"
                    data-fallback="{{ asset('assets/stem_badge.png') }}"
                    onerror="this.onerror=null; this.src=this.dataset.fallback;">
            </div>

        </div>

    </div>
</section>
