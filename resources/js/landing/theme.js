function toggleTheme() {
    const html = document.documentElement;
    const isDark = html.classList.toggle("dark");

    try {
        localStorage.setItem("theme", isDark ? "dark" : "light");
    } catch (e) {
        console.warn(e);
    }
}
window.toggleTheme = toggleTheme;
export { toggleTheme };