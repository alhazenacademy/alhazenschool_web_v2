@props([
    'link_trial' => 'https://apps.alhazenschool.sch.id/#/trial',
])

<section id="cta-trial-class" class="relativepy-12 lg:py-20">
    <div class="max-w-7xl mx-auto px-6 ">
        <div class="rounded-[40px] overflow-hidden bg-no-repeat bg-center bg-cover bg-primary shadow-lg"
            style="background-image: url('{{ asset('assets/kids/cta-trial-class/cta-trial-class-bg.webp') }}');">
            <!-- Content -->
            <div class="relative z-10 max-w-xl py-16 lg:py-24 pl-6 lg:pl-20 text-background">
                <h3 class="text-h3 font-bold leading-tight mb-5">
                    Try Our Trial Class Now
                </h3>
    
                <p class="text-body text-background mb-8">
                    Experience our learning approach firsthand and see how we support your
                    child’s growth and confidence.
                </p>
    
                <a href="{{ $link_trial }}"
                    class="inline-flex items-center gap-3 rounded-full bg-background px-6 py-3 text-primary font-semibold shadow-lg transition-transform duration-200 hover:scale-105">
                    <span>Try a Free Class</span>
    
                    <!-- Arrow Icon -->
                    <span class="flex items-center justify-center w-7 h-7 rounded-full bg-secondary text-background">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
