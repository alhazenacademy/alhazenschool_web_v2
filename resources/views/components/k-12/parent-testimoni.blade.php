@php
    $cards = [
        [
            'testimoni' =>
                '“Proses Homeschooling yang paling diacungi jempol. Guru-guru di Alhazen yang sabar luar biasa. Bisa mengarahkan anak anak walaupun secara online. Anak yang ga fokus bisa fokus, kegiatan fisik tetap seru walaupun sendiri. Belajar sambil bermain, belajar sambil bercerita… Sekarang bikin apapun di rumah anak-anak selalu bilang besok mau liatin Ms, besok mau cerita sama Ms. Saat ini adalah saat guru menjadi idola mereka. ”',
            'name' => 'Ummi Tiwi',
            'kids' => 'Bunda Khosyi & Affan',
            'star' => 4,
        ],
        [
            'testimoni' =>
                '“Salah satu alasan kenapa memutuskan untuk bermitra dengan sekolah ini, karena mereka bersedia untuk ‘kerjasama’ dalam pendidikan anak. Ortu selayaknya partner yang bantu guru dalam membersamai anak di sekolah. Meskipun sekolah baru, tapi InsyaAllah ketika kita jadi pionir, secara ga langsung akan memberikan ‘warna baru’ dalam perjalanan sekolah ini.“',
            'name' => 'Izzati RH',
            'kids' => 'Bunda Tizam',
            'star' => 4,
        ],
        [
            'testimoni' =>
                '“Kami memilih sekolah ini karena adanya kemauan untuk berkolaborasi dengan orang tua dalam proses pendidikan anak. Orang tua dan guru berjalan bersama sebagai satu tim. Walaupun masih baru, menjadi bagian dari sekolah ini memberi kami keyakinan bahwa kami turut membangun fondasi yang bermakna.”',
            'name' => 'Ummi Rusmi',
            'kids' => 'Bunda Andi',
            'star' => 4,
        ],
    ];
@endphp
<section id="k-12-parent-testimoni" class="relative py-12 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- Orange Wrapper -->
        <div class="relative rounded-[40px] px-4 sm:px-8 lg:px-20 py-12 lg:py-16 bg-no-repeat bg-center bg-cover bg-accent shadow-lg"
            style="background-image: url('{{ asset('assets/kids/program/more/parent-testimoni-bg.webp') }}');">
            <!-- Header -->
            <div class="text-center text-white max-w-3xl mx-auto mb-10 lg:mb-14">
                <div class="mb-5">
                    <span
                        class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-accent text-accent bg-background">
                        Parent Testimonials
                    </span>
                </div>
                <h2 class="text-h2 font-bold italic leading-tight mb-5">
                    What Parents Say About Alhazen School
                </h2>
                <p class="text-body">
                    Hear real stories and experiences from parents who trust Alhazen in guiding their children’s
                    learning, growth, and character development.
                </p>
            </div>

            <!-- Testimoni Swiper -->
            <div class="relative max-w-6xl mx-auto">

                <div class="swiper testimoni-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($cards as $card)
                            <div class="swiper-slide h-auto">
                                <!-- Card -->
                                <div
                                    class="bg-background text-text rounded-3xl shadow-xl p-6 pt-10 pb-12 flex flex-col h-[420px]">

                                    <!-- Testimoni (FILL) -->
                                    <p class="text-sm text-justify mb-6 flex-1 overflow-hidden">
                                        {{ $card['testimoni'] }}
                                    </p>

                                    <!-- Rating -->
                                    <div class="flex items-center mb-4 shrink-0">
                                        @for ($i = 0; $i < $card['star']; $i++)
                                            <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.954L10 0l2.951 5.956 6.561.954-4.756 4.635 1.122 6.545z" />
                                            </svg>
                                        @endfor

                                        @for ($i = $card['star']; $i < 5; $i++)
                                            <svg class="w-5 h-5 text-gray-300 fill-current" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.954L10 0l2.951 5.956 6.561.954-4.756 4.635 1.122 6.545z" />
                                            </svg>
                                        @endfor
                                    </div>

                                    <!-- Nama -->
                                    <h4 class="text-h4 font-bold mb-1 shrink-0">
                                        {!! $card['name'] !!}
                                    </h4>

                                    <!-- Keterangan -->
                                    <p class="text-body text-justify shrink-0">
                                        {{ $card['kids'] }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
