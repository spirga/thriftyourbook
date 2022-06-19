const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
                elsie: ["Elsie", "cursive"],
                fasthand: ["Fasthand", "cursive"],
            },
            colors: {
                custom: "#3B3C43",
            },
        },
    },
    variants: {
        outline: ["focus"],
    },

    plugins: [require("@tailwindcss/forms")],
};
