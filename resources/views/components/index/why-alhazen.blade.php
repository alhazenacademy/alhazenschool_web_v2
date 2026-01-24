<section class="py-20"> 
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-h2 font-bold text-primary leading-tight text-center mb-4">
        {{ $title }}
      </h2>
    </div>
    
    <div class="grid md:grid-cols-3 gap-6">
  @foreach ($cards as $card)
    <div class="p-6 space-y-4">
      <div class="flex justify-start mb-3">
        <img src="{{ $card['icon'] }}" alt="{{ $card['title'] }} icon" class="w-12 h-12" loading="lazy" decoding="async">
      </div>
      
      <h3 class="text-h4 font-bold text-text text-left mb-2" style="font-family: 'Poppins">
        {{ $card['title'] }}
      </h3>
      
      <p class="text-small leading-relaxed text-justify">
        {!! $card['description'] !!}
      </p>
    </div>
  @endforeach
</div>
</section>