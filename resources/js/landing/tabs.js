// window.* agar bisa dipanggil dari Blade
window.tabsComponent = (opts = {}) => ({
    // props awal
    tabs: opts.tabs || [],
    contents: opts.contents || {},
    active: opts.active ?? opts.tabs?.[0]?.key ?? null,

    // state internal
    paneH: 0,

    // computed
    get curr() {
        return this.contents?.[this.active] ?? {};
    },
    is(k) {
        return this.active === k;
    },

    // actions
    pick(k) {
        this.active = k;
        this.$nextTick(() => this.measure());
    },

    measure() {
        this.$nextTick(() => {
            const stage = this.$refs.stage;
            const pane = this.$refs.pane;
            if (!stage || !pane) return;

            // ukur tinggi konten aktif tanpa bikin layout “loncat”
            const was = pane.style.visibility;
            pane.style.visibility = "hidden";
            const h = Math.ceil(pane.offsetHeight);
            pane.style.visibility = was;

            this.paneH = Math.max(260, h);
        });
    },

    // lifecycle
    init() {
        this.measure();
        window.addEventListener("load", () => this.measure());
    },
});

function tabsComponent({ tabs, contents, active }) {
    const keys = new Set(tabs.map((t) => t.key));
    const getQ = (name) => new URL(location.href).searchParams.get(name);
    const setQ = (name, val) => {
        const u = new URL(location.href);
        u.searchParams.set(name, val);
        history.replaceState({}, "", u);
    };

    return {
        tabs,
        contents,
        active:
            active && keys.has(active)
                ? active
                : getQ("program") && keys.has(getQ("program"))
                ? getQ("program")
                : tabs[0]?.key ?? null,
        get curr() {
            return this.contents?.[this.active] ?? {};
        },
        init() {
            if (this.active) setQ("program", this.active);
        },
        pick(k) {
            if (!keys.has(k)) return;
            this.active = k;
            setQ("program", k);
        },
        is(k) {
            return this.active === k;
        },
    };
}
