window.selectProgram = function selectProgram({
    options = [],
    placeholder = "",
    initial = "",
    onPick = () => {},
} = {}) {
    return {
        open: false,
        value: initial || "",
        options,
        placeholder,
        activeIndex: 0,

        init() {
            this.setFrom(initial);
        },

        setFrom(v) {
            this.value = v ?? "";
            onPick(this.value);
        },

        displayLabel() {
            const found = this.options.find(
                (o) => String(o.id) === String(this.value)
            );
            return found?.label || this.placeholder;
        },

        toggle() {
            this.open = !this.open;
            if (this.open) this.syncActive();
        },

        close() {
            this.open = false;
        },

        choose(i) {
            const chosen = this.options[i];
            if (!chosen) return;
            this.value = chosen.id;
            this.activeIndex = i;
            this.open = false;
            onPick(this.value);
        },

        move(step) {
            if (!this.open) {
                this.open = true;
                return;
            }
            const n = this.options.length;
            this.activeIndex = (((this.activeIndex + step) % n) + n) % n;
        },

        syncActive() {
            const i = this.options.findIndex(
                (o) => String(o.id) === String(this.value)
            );
            this.activeIndex = i >= 0 ? i : 0;
        },
    };
};

window.selectUmur = function selectUmur({
    options = [],
    placeholder = "",
    initial = "",
    onPick = () => {},
} = {}) {
    return {
        open: false,
        value: initial || "",
        options,
        placeholder,
        activeIndex: 0,
        init() {
            this.setFrom(initial);
        },

        setFrom(v) {
            this.value = v ?? "";
            onPick(this.value);
        },
        displayLabel() {
            return this.value || this.placeholder;
        },
        toggle() {
            this.open = !this.open;
            if (this.open) this.syncActive();
        },
        close() {
            this.open = false;
        },
        choose(i) {
            this.value = this.options[i];
            this.activeIndex = i;
            this.open = false;
            onPick(this.value);
        },
        move(step) {
            if (!this.open) {
                this.open = true;
                return;
            }
            const n = this.options.length;
            this.activeIndex = (((this.activeIndex + step) % n) + n) % n;
        },
        syncActive() {
            const i = this.options.indexOf(this.value);
            this.activeIndex = i >= 0 ? i : 0;
        },
    };
};

window.selectSource = function selectSource({
    options = [],
    placeholder = "",
    initial = "",
    onPick = () => {},
} = {}) {
    return {
        open: false,
        value: initial || "",
        options,
        placeholder,
        activeIndex: 0,

        init() {
            this.setFrom(initial);
        },

        setFrom(v) {
            this.value = v ?? "";
            onPick(this.value);
        },

        displayLabel() {
            const found = this.options.find(
                (o) => String(o.id) === String(this.value)
            );
            return found?.label || this.placeholder;
        },

        toggle() {
            this.open = !this.open;
            if (this.open) this.syncActive();
        },

        close() {
            this.open = false;
        },

        choose(i) {
            const chosen = this.options[i];
            if (!chosen) return;
            this.value = chosen.id;
            this.activeIndex = i;
            this.open = false;
            onPick(this.value);
        },

        move(step) {
            if (!this.open) {
                this.open = true;
                return;
            }
            const n = this.options.length;
            this.activeIndex = (((this.activeIndex + step) % n) + n) % n;
        },

        syncActive() {
            const i = this.options.findIndex(
                (o) => String(o.id) === String(this.value)
            );
            this.activeIndex = i >= 0 ? i : 0;
        },
    };
};

window.trialForm = function trialForm(opts = {}) {
    return {
        step: 1,
        loading: false,
        form: {
            phone: "",
            program: "",
            student_name: "",
            parent_name: "",
            email: "",
            schedule_date: "",
            schedule_time: "",
            has_device: "",
            // school: "",
            // address: "",
            // promoCode: ""
        },
        waNormalized: "",
        waError: "",
        creatingLead: false,
        onWaInput(v) {
            const digits = String(v || "").replace(/\D/g, "");
            this.form.phone = digits;

            if (!digits) {
                this.waError = "";
                return;
            }

            if (!/^0/.test(digits)) {
                this.waError = "Nomor harus diawali angka 0 (contoh: 0812… ).";
                return;
            }
            const len = digits.length;
            if (len < 10) {
                this.waError = `Nomor terlalu pendek. Minimal 10 digit.`;
                return;
            }
            if (len > 14) {
                this.waError = `Nomor terlalu panjang. Maksimal 14 digit.`;
                return;
            }

            this.waError = "";
        },

        get waStatus() {
            if (!this.form.phone) return "empty";
            return this.waError ? "invalid" : "valid";
        },

        async createLead() {
            if (this.creatingLead) return;
            if (this.waStatus !== "valid") return;

            this.creatingLead = true;
            const csrf = this.$refs.csrf?.value;

            try {
                const r = await fetch(opts.leadUrl, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        Accept: "application/json",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-TOKEN": csrf,
                    },
                    body: JSON.stringify({
                        phone_number: this.form.phone,
                        source: "trial_form_kids",
                    }),
                    credentials: "same-origin",
                });
                if (!r.ok) throw new Error("Gagal menyimpan lead");
                const data = await r.json().catch(() => ({}));
                return true;
            } catch (e) {
                console.error(e);
                alert("Maaf, gagal menyimpan nomor. Coba lagi.");
                return false;
            } finally {
                this.creatingLead = false;
            }
        },

        async submitStep1() {
            // validasi terakhir
            this.onWaInput(this.form.phone);
            if (this.waStatus !== "valid") return;

            // kirim ke lead_numbers dulu
            const ok = await this.createLead();
            if (ok) this.go(2);
        },

        go(s) {
            this.step = s;
        },

        times: opts.times,
        holidays: opts.holidays ?? [],

        get progress() {
            if (this.step === 1) return 25;
            if (this.step === 2) return 50;
            if (this.step === 3) return 75;
            if (this.step === 4) return 100;
            return 100;
        },
        get progressLabel() {
            return this.step === 4 ? "Selesai" : `${this.step}/4`;
        },

        go(n) {
            this.step = n;
        },

        isHoliday(date) {
            const yyyy = date.getFullYear();
            const mm = String(date.getMonth() + 1).padStart(2, "0");
            const dd = String(date.getDate()).padStart(2, "0");
            return this.holidays.includes(`${yyyy}-${mm}-${dd}`);
        },

        initSchedulePicker(el) {
            const today = new Date();
            const min = new Date(today.getFullYear(), today.getMonth(), today.getDate() + 1);
            const max = new Date(min);
            max.setMonth(max.getMonth() + 1);

            const isDisabled = (date) => {
                return date.getDay() === 0 || this.isHoliday(date);
            };

            const nextValid = (d) => {
                let t = new Date(d);
                while (isDisabled(t)) t.setDate(t.getDate() + 1);
                return t;
            };

            const prevValid = (d) => {
                let t = new Date(d);
                while (isDisabled(t)) t.setDate(t.getDate() - 1);
                return t;
            };

            let def = null;
            if (this.form.schedule_date) {
                const f = new Date(this.form.schedule_date);
                if (f >= min && f <= max && !isDisabled(f)) {
                    def = f;
                }
            }

            if (!def) {
                const cand = nextValid(min);
                def = cand <= max ? cand : prevValid(max);
            }

            flatpickr(el, {
                inline: true,
                dateFormat: "Y-m-d",
                minDate: min,
                maxDate: max,
                defaultDate: def,
                monthSelectorType: "dropdown",
                disable: [(date) => isDisabled(date)],
                onChange: (_sel, dateStr) => {
                    this.form.schedule_date = dateStr;
                },
                disableMobile: true,
            });

            if (!this.form.schedule_date && def) {
                this.form.schedule_date = def.toISOString().slice(0, 10);
            }
        },


        async submit() {
            if (this.loading) return;
            this.loading = true;
            const csrf = this.$refs.csrf_trial?.value;

            try {
                const r = await fetch(opts.postUrl, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        Accept: "application/json",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-TOKEN": csrf,
                    },
                    body: JSON.stringify(this.form),
                    credentials: "same-origin",
                });

                if (!r.ok) throw new Error();

                const data = await r.json();

                if (data.redirect) {
                    window.location.href = data.redirect;
                }

            } catch(e) {
                alert("Oops, something went wrong. Please try again");
                this.loading = false;
            }
        },

        resetForm() {
            this.step = 1;
            this.form = {
                phone: "",
                program: "",
                student_name: "",
                parent_name: "",
                email: "",
                schedule_date: "",
                schedule_time: "",
                has_device: "",
                // school: "",
                // address: "",
                // promoCode: ""
            };
        },
    };
};
