@php
    $waText = 'Halo Admin Alhazen, saya sudah daftar kelas trial.';
    $waHref = 'https://wa.me/' . $salesPhone . '?text=' . urlencode($waText);
@endphp
<div x-data="trialForm({ times: @js($times), postUrl: @js(route("trial.store", [], false)), leadUrl: @js(route("leads.store", [], false)), holidays: @js($holidays) })" x-cloak class="theme-kids bg-cover bg-center bg-no-repeat min-h-screen"
    style="background-image: url('{{ asset('assets/kids/bg-booking.webp') }}');">

    <section class="relative w-full py-10 md:py-14 bg-[var(--color-background)]/0 ">
        <div class="mx-auto w-full max-w-[700px] px-4">
            <div class="relative">
                <div class="absolute left-[22px] top-[22px] -z-10 w-full h-full rounded-2xl bg-[var(--color-neutral)]">
                </div>

                <div class="rounded-2xl bg-white/95 shadow-lg ring-1 ring-black/5 overflow-visible">
                        <div class="px-6 pt-5">
                            <div class="flex items-center justify-center mb-3">
                                <h2 class="text-h3 font-semibold text-primary">Daftar Kelas Trial Gratis</h2>
                            </div>
                            <div class="h-2 w-full rounded-full bg-neutral">
                                <div class="h-2 rounded-full bg-secondary transition-all duration-300"
                                    :style="`width:${progress}%`"></div>
                            </div>
                        </div>
                        
                    <div class="px-6 pb-6">
                        <div class="min-h-fit flex flex-col justify-between">

                            <!-- STEP 1 -->
                            <template x-if="step===1">
                                <form @submit.prevent="submitStep1" class="grid gap-4 pt-6">
                                    <input type="hidden" x-ref="csrf" value="{{ csrf_token() }}">
                                    <p class="text-small text-body text-center">
                                        Masukkan nomor WhatsApp aktif kamu ya
                                    </p>

                                    <div>
                                        <label for="phone" class="sr-only">Nomor WhatsApp</label>
                                        <input id="phone" type="tel" inputmode="numeric" autocomplete="tel"
                                            x-model="form.phone"
                                            x-on:input.debounce.150ms="onWaInput($event.target.value)"
                                            x-on:keypress="if($event.key<'0'||$event.key>'9') $event.preventDefault()"
                                            maxlength="14" minlength="9" pattern="0[0-9]{8,13}"
                                            placeholder="Contoh: 081234567890"
                                            :class="[
                                                'w-full rounded-xl border px-4 py-3 outline-none focus:ring-2',
                                                waStatus==='invalid' ? 'border-red-500 focus:ring-red-500/30' :
                                                waStatus==='valid' ? 'border-green-500 focus:ring-green-500/30' :
                                                'border-neutral focus:ring-primary'
                                            ]"
                                            required autofocus>

                                        <div class="mt-1 text-[13px] leading-tight">
                                            <template x-if="waStatus==='valid'">
                                                <span class="text-green-600"></span>
                                            </template>
                                            <template x-if="waStatus==='invalid'">
                                                <span class="text-red-600" x-text="waError"></span>
                                            </template>
                                            <template x-if="waStatus==='empty'">
                                                <span class="text-text/60">Nomor diawali angka 0</span>
                                            </template>
                                        </div>
                                    </div>

                                    <div class="mt-2">
                                        <button type="submit"
                                            class=" inline-flex w-full items-center justify-center rounded-xl px-4 py-3 font-semibold text-white bg-accent transition disabled:opacity-60 disabled:cursor-not-allowed hover:cursor-pointer"
                                            :disabled="creatingLead || waStatus!=='valid'"
                                            :aria-busy="creatingLead ? 'true' : 'false'">
                                            <span>Next</span>
                                        </button>
                                    </div>
                                </form>

                            </template>

                            <!-- STEP 2 -->
                            <template x-if="step===2">
                                <form @submit.prevent="go(3)" class="grid gap-4 pt-6">
                                    <div class="grid gap-3">

                                        <div x-data="selectProgram({
                                            options: @js($programs->map(fn($p) => ['id' => $p->id, 'label' => $p->name])->values()),
                                        
                                            initial: form.program_id,
                                            onPick(v) { form.program_id = v } // sinkron ke form
                                        })" x-init="setFrom(form.program_id)"
                                            x-bind:data-open="open" x-bind:data-filled="String(value).length > 0"
                                            class="relative">
                                            <input type="text" name="program_id" x-model="form.program_id" required
                                                tabindex="-1" autocomplete="off" class="sr-only" />

                                            <button type="button" @click="toggle()"
                                                @keydown.arrow-down.prevent="move(1)"
                                                @keydown.arrow-up.prevent="move(-1)"
                                                @keydown.enter.prevent="choose(activeIndex)"
                                                @keydown.space.prevent="toggle()" @keydown.escape.prevent="close()"
                                                class="select-button hover:cursor-pointer">
                                                <span class="block pr-8" x-text="displayLabel()" x-cloak></span>
                                                <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 h-4 w-4 opacity-70 transition"
                                                    :class="open && 'rotate-180'" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.06 0L5.21 8.27a.75.75 0 01.02-1.06z" />
                                                </svg>
                                            </button>

                                            <label class="float-label" x-cloak>Program</label>

                                            <div x-show="open" x-transition.origin.top.left @click.outside="close()"
                                                class="select-panel" x-cloak>
                                                <template x-for="(opt,i) in options" :key="opt.id">
                                                    <div role="option" class="option-item"
                                                        :aria-selected="opt.id === value"
                                                        :data-active="i === activeIndex" @mousemove="activeIndex=i"
                                                        @click="choose(i)">
                                                        <svg x-show="opt.id===value" class="h-4 w-4" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M16.704 5.29a1 1 0 010 1.414l-7.006 7.006a1 1 0 01-1.415 0L3.296 8.723a1 1 0 111.414-1.415l4.003 4.003 6.298-6.298a1 1 0 011.414 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <!-- ini yang penting -->
                                                        <span x-text="opt.label"></span>
                                                    </div>
                                                </template>

                                            </div>
                                        </div>

                                        <div x-data="selectSource({
                                            options: @js($sources->map(fn($p) => ['id' => $p->id, 'label' => $p->name])->values()),
                                        
                                            initial: form.source_id,
                                            onPick(v) { form.source_id = v } // sinkron ke form
                                        })" x-init="setFrom(form.source_id)"
                                            x-bind:data-open="open" x-bind:data-filled="String(value).length > 0"
                                            class="relative">
                                            <input type="text" name="source_id" x-model="form.source_id" required
                                                tabindex="-1" autocomplete="off" class="sr-only" />

                                            <button type="button" @click="toggle()"
                                                @keydown.arrow-down.prevent="move(1)"
                                                @keydown.arrow-up.prevent="move(-1)"
                                                @keydown.enter.prevent="choose(activeIndex)"
                                                @keydown.space.prevent="toggle()" @keydown.escape.prevent="close()"
                                                class="select-button hover:cursor-pointer">
                                                <span class="block pr-8" x-text="displayLabel()" x-cloak></span>
                                                <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 h-4 w-4 opacity-70 transition"
                                                    :class="open && 'rotate-180'" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.06 0L5.21 8.27a.75.75 0 01.02-1.06z" />
                                                </svg>
                                            </button>

                                            <label class="float-label" x-cloak>Mengetahui Alhazen dari</label>

                                            <div x-show="open" x-transition.origin.top.left @click.outside="close()"
                                                class="select-panel" x-cloak>
                                                <template x-for="(opt,i) in options" :key="opt.id">
                                                    <div role="option" class="option-item"
                                                        :aria-selected="opt.id === value"
                                                        :data-active="i === activeIndex" @mousemove="activeIndex=i"
                                                        @click="choose(i)">
                                                        <svg x-show="opt.id===value" class="h-4 w-4"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M16.704 5.29a1 1 0 010 1.414l-7.006 7.006a1 1 0 01-1.415 0L3.296 8.723a1 1 0 111.414-1.415l4.003 4.003 6.298-6.298a1 1 0 011.414 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <!-- ini yang penting -->
                                                        <span x-text="opt.label"></span>
                                                    </div>
                                                </template>

                                            </div>
                                        </div>

                                        <!-- RADIO PERANGKAT -->
                                        <fieldset class="space-y-2">
                                            <legend class="text-small font-medium">
                                                Apakah Anda punya perangkat untuk mengikuti kelas? <br>
                                                <span class="font-normal opacity-80">(laptop, komputer, iPad,
                                                    dll.)</span>
                                            </legend>

                                            <div class="flex items-center gap-6">
                                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                                    <input type="radio" name="has_device" value="1"
                                                        class="peer sr-only" x-model="form.has_device" required>
                                                    <span class="radio" aria-hidden="true"></span>
                                                    <span>Ya</span>
                                                </label>

                                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                                    <input type="radio" name="has_device" value="0"
                                                        class="peer sr-only" x-model="form.has_device">
                                                    <span class="radio" aria-hidden="true"></span>
                                                    <span>Tidak</span>
                                                </label>
                                            </div>

                                        </fieldset>

                                        <div class="mt-2 flex items-center gap-3">
                                            <button type="button" @click="go(1)"
                                                class="inline-flex items-center gap-2 rounded-xl px-4 py-3 font-semibold bg-[var(--color-neutral)] text-[var(--color-text)]/80 hover:opacity-95 focus:outline-none focus:ring-2 focus:ring-[var(--color-accent)]/50 hover:cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-5 h-5" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    aria-hidden="true">
                                                    <path d="M19 12H5"></path>
                                                    <path d="m12 19-7-7 7-7"></path>
                                                </svg>
                                            </button>

                                            <button type="submit"
                                                class=" inline-flex w-full items-center justify-center rounded-xl px-4 py-3 font-semibold text-white bg-accent transition hover:cursor-pointer">
                                                Next
                                            </button>
                                        </div>
                                </form>
                            </template>

                            <!-- STEP 3 -->
                            <template x-if="step===3">
                                <form @submit.prevent="go(4)" class="grid gap-4 pt-6">
                                    <div class="grid gap-3">
                                        <div>
                                            <p class="text-small text-body text-center mb-3">
                                                Waktu yang nyaman untuk anak dan Anda ikut kelas gratis? (WIB)
                                            </p>

                                            <!-- Hidden input -->
                                            <input type="hidden" name="schedule_date" :value="form.schedule_date"
                                                required>
                                            <input type="hidden" name="schedule_time" :value="form.schedule_time"
                                                required>

                                            <div 
                                                class="grid grid-cols-1 gap-4 md:[grid-template-columns:minmax(320px,1fr)_1fr]">
                                                <!-- KIRI: Kalender -->
                                                <div class="calendar-wrap rounded-xl md:min-w-[320px] md:pr-1
                                                    overflow-x-auto
                                                    overflow-y-hidden
                                                    min-w-0
                                                    h-auto

                                                    [&_.flatpickr-calendar]:inline-block
                                                    [&_.flatpickr-calendar]:min-w-[320px]
                                                    [&_.flatpickr-calendar]:w-max
                                                    [&_.flatpickr-calendar]:h-auto
                                                    [&_.flatpickr-calendar]:max-h-none

                                                    [&_.flatpickr-days]:max-h-none
                                                    [&_.flatpickr-days]:h-auto
                                                    [&_.dayContainer]:h-auto"
                                                    x-init="initSchedulePicker($refs.schedulePicker)">
                                                    <input x-ref="schedulePicker" type="text" class="sr-only"
                                                        aria-hidden="true" />
                                                </div>

                                                <!-- KANAN: Pilih Waktu -->
                                                <div class="md:pl-1">
                                                    <div
                                                        class="grid gap-3 [grid-template-columns:repeat(auto-fill,minmax(110px,1fr))]">
                                                        <template x-for="t in times" :key="t.time">
                                                            <button type="button" @click="form.schedule_time = t.time"
                                                                class="shrink-0 whitespace-nowrap rounded-2xl px-5 py-3 font-semibold transition border border-[color-mix(in_oklab,var(--color-neutral)_50%,#fff)] cursor-pointer shadow-sm hover:shadow-md hover:-translate-y-[1px] focus:outline-none focus-visible:ring-2 focus-visible:ring-[var(--color-accent)] focus-visible:ring-offset-2"
                                                                :class="form.schedule_time === t.time ?
                                                                    'bg-[color-mix(in_oklab,var(--color-accent)_20%,#fff)] text-[var(--color-accent)] border-transparent' :
                                                                    'bg-[color-mix(in_oklab,var(--color-neutral)_14%,#fff)] hover:bg-[color-mix(in_oklab,var(--color-neutral)_22%,#fff)]'"
                                                                :aria-pressed="(form.schedule_time === t.time).toString()"
                                                                x-text="t.time">
                                                            </button>
                                                        </template>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-2 flex items-center gap-3">
                                            <button type="button" @click="go(2)"
                                                class="inline-flex items-center gap-2 rounded-xl px-4 py-3 font-semibold bg-[var(--color-neutral)] text-[var(--color-text)]/80 hover:opacity-95 focus:outline-none focus:ring-2 focus:ring-[var(--color-accent)]/50 hover:cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-5 h-5" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    aria-hidden="true">
                                                    <path d="M19 12H5"></path>
                                                    <path d="m12 19-7-7 7-7"></path>
                                                </svg>
                                            </button>

                                            <button type="submit"
                                                class=" inline-flex w-full items-center justify-center rounded-xl px-4 py-3 font-semibold text-white bg-accent transition hover:cursor-pointer">
                                                Next
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </template>

                            <!-- STEP 4 -->
                            <template x-if="step===4">
                                <form @submit.prevent="submit()" class="grid gap-4 pt-6">
                                    <input type="hidden" x-ref="csrf_trial" value="{{ csrf_token() }}">
                                    <p
                                        class="text-small text-center text-[color-mix(in_oklab,var(--color-text)_72%,#6b7280)]">
                                        Data kontak untuk konfirmasi jadwal trial.
                                    </p>

                                    <div class="grid gap-3">
                                        <div class="relative">
                                            <x-trial-class.float-input id="student_name" for="student_name"
                                                type="text" label="Nama Anak" required="true"
                                                model="form.student_name" />
                                        </div>
                                        <div x-data="selectUmur({
                                            options: [5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17],
                                            initial: form.student_age,
                                            onPick(v) { form.student_age = v }
                                            })" x-init="setFrom(form.student_age)"
                                            x-bind:data-open="open" x-bind:data-filled="String(value).length > 0"
                                            class="relative">
                                            <input type="text" name="student_age" x-model="form.student_age" required
                                                tabindex="-1" autocomplete="off" class="sr-only" />

                                            <button type="button" @click="toggle()"
                                                @keydown.arrow-down.prevent="move(1)"
                                                @keydown.arrow-up.prevent="move(-1)"
                                                @keydown.enter.prevent="choose(activeIndex)"
                                                @keydown.space.prevent="toggle()" @keydown.escape.prevent="close()"
                                                class="select-button hover:cursor-pointer">
                                                <span class="block pr-8" x-text="displayLabel()" x-cloak></span>
                                                <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 h-4 w-4 opacity-70 transition"
                                                    :class="open && 'rotate-180'" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.06 0L5.21 8.27a.75.75 0 01.02-1.06z" />
                                                </svg>
                                            </button>

                                            <label class="float-label" x-cloak>Umur Anak</label>


                                            <div x-show="open" x-transition.origin.top.left @click.outside="close()"
                                                class="select-panel" x-cloak>
                                                <template x-for="(opt,i) in options" :key="i">
                                                    <div role="option" class="option-item"
                                                        :aria-selected="opt === value"
                                                        :data-active="i === activeIndex" @mousemove="activeIndex=i"
                                                        @click="choose(i)">
                                                        <svg x-show="opt===value" class="h-4 w-4" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M16.704 5.29a1 1 0 010 1.414l-7.006 7.006a1 1 0 01-1.415 0L3.296 8.723a1 1 0 111.414-1.415l4.003 4.003 6.298-6.298a1 1 0 011.414 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <span x-text="opt"></span>
                                                    </div>
                                                </template>
                                            </div>
                                        </div>
                                        {{-- <div class="relative">
                                            <x-trial-class.float-input id="school" for="school"
                                                type="text" label="Asal Sekolah (opsional)"
                                                model="form.school" />
                                        </div> --}}
                                        <div class="relative">
                                            <x-trial-class.float-input id="parent_name" for="parent_name"
                                                type="text" label="Nama Orang Tua" required="true"
                                                model="form.parent_name" />
                                        </div>

                                        <!-- Email -->
                                        <div class="relative">
                                            <x-trial-class.float-input id="email" for="email" type="email"
                                                label="Email Orang Tua" required="true" model="form.email" />
                                        </div>

                                        {{-- <div class="relative">
                                            <x-trial-class.float-input id="address" for="address"
                                                type="text" label="Domisili (opsional)"
                                                model="form.address" />
                                        </div>

                                        <div class="relative">
                                            <x-trial-class.float-input id="promoCode" for="promoCode"
                                                type="text" label="Kode Referral (opsional)"
                                                model="form.promoCode" />
                                        </div> --}}
                                    </div>

                                    <div class="mt-2 flex items-center gap-3">
                                        <button type="button" @click="go(3)"
                                            class="inline-flex items-center gap-2 rounded-xl px-4 py-3 font-semibold bg-[var(--color-neutral)] text-[var(--color-text)]/80 hover:opacity-95 focus:outline-none focus:ring-2 focus:ring-[var(--color-accent)]/50 hover:cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="w-5 h-5" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                aria-hidden="true">
                                                <path d="M19 12H5"></path>
                                                <path d="m12 19-7-7 7-7"></path>
                                            </svg>
                                        </button>

                                        <button type="submit"
                                        class="inline-flex w-full items-center justify-center rounded-xl px-4 py-3 font-semibold text-white bg-accent
                                            transition hover:bg-accent/90 disabled:bg-accent/40 disabled:cursor-not-allowed"
                                        :disabled="loading">

                                        <template x-if="!loading">
                                            <span>Submit</span>
                                        </template>

                                        <template x-if="loading">
                                            <span class="flex items-center gap-2">
                                                <svg class="animate-spin h-5 w-5" viewBox="0 0 24 24">
                                                    <circle class="opacity-30" cx="12" cy="12" r="10" stroke="white" stroke-width="3" fill="none"/>
                                                    <path class="opacity-100" fill="white"
                                                        d="M12 2a10 10 0 0 1 10 10h-4a6 6 0 0 0-6-6V2z"/>
                                                </svg>
                                                Submit
                                            </span>
                                        </template>
                                    </button>

                                    </div>
                                </form>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
