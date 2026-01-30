import preset from "../../vendor/filament/support/tailwind.config.preset.js";

export default {
    presets: [preset],
    content: [
        "./resources/views/components//*.blade.php",
        "./resources/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
        "./resources/js/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                fredoka: ["Fredoka", "sans-serif"],
                inter: ["Inter", "sans-serif"],
                "nunito-sans": ["Nunito Sans", "sans-serif"],
            },
        },
    },
    darkMode: "class",
};
