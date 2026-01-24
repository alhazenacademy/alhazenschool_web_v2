@php
    $waText = 'Halo Admin Alhazen, saya sudah mendaftar Trial Class dan ingin konfirmasi jadwal. Terima kasih.';
    $waHref = 'https://wa.me/' . $salesPhone . '?text=' . urlencode($waText);
@endphp
<x-layout wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website. Saya Mau Konsultasi / Daftar Kelas di Alhazen Academy." :sales-phone="$salesPhone">
    <x-navbar variant="kids" />
    <div class="theme-kids bg-cover bg-center bg-no-repeat min-h-screen"
        style="background-image: url('{{ asset('assets/kids/bg-booking.webp') }}');">

        <section class="relative w-full py-10 md:py-14 bg-[var(--color-background)]/0 ">
            <div class="mx-auto w-full max-w-[700px] px-4">
                <div class="relative">
                    <div
                        class="absolute left-[22px] top-[22px] -z-10 w-full h-full rounded-2xl bg-[var(--color-neutral)]">
                    </div>

                    <div class="rounded-2xl bg-white/95 shadow-lg ring-1 ring-black/5 overflow-hidden">
                        <div class="px-6 pb-6">
                            <div class="min-h-fit flex flex-col justify-between">
                                <!-- STEP SUCCESS -->
                                    <div class="pt-8 pb-10 text-center grid place-items-center gap-5">
                                        <!-- Kartu sukses -->
                                        <div class="w-full max-w-[520px] p-6">
                                            <h3
                                                class="text-h4 mx-auto inline-flex items-center justify-center text-primary font-semibold">
                                                Pendaftaran Berhasil!
                                            </h3>

                                            <p
                                                class="mt-4 text-body text-[color-mix(in_oklab,var(--color-text)_80%,#6b7280)]">
                                                Terima kasih, pendaftaran trial class telah kami terima. 
                                                <br> Kami akan segera menghubungi Ayah/Bunda melalui WhatsApp
                                                untuk konfirmasi jadwal trial
                                            </p>

                                            <div class="mt-3 grid place-items-center">
                                                <img src="{{ asset('assets/kids/kazen-laptop.webp') }}"
                                                    alt="Pendaftaran Berhasil"
                                                    class="max-w-[220px] h-auto select-none pointer-events-none"
                                                    onerror="this.style.display='none'">
                                            </div>

                                            <div
                                                class="mt-6 flex flex-col sm:flex-row sm:items-center sm:justify-center gap-3 sm:gap-4">
                                                <a href="{{ url('/') }}"
                                                    class="w-full sm:w-auto text-center rounded-xl px-4 py-3 font-semibold
                                                border border-[color-mix(in_oklab,var(--color-neutral)_50%,#fff)]
                                                hover:bg-[color-mix(in_oklab,var(--color-neutral)_12%,#fff)]
                                                transition hover:cursor-pointer">
                                                    Kembali ke Beranda
                                                </a>

                                                <a href="{{ $waHref }}" target="_blank" rel="noopener noreferrer"
                                                    class="w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-xl px-4 py-3 font-semibold
                                                text-white bg-[var(--color-accent)] hover:opacity-90 transition hover:cursor-pointer">
                                                    <img src="{{ asset('assets/kids/icon-wa-white.png') }}"
                                                        alt="whatsapp icon" class="h-5 w-5" aria-hidden="true">
                                                    Chat CS
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
