const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/views/layouts/*.blade.php",
        "./resources/views/components/*.blade.php",
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
            screens: {
                'xl': "1440px",
                // => @media (min-width: 1440px) { ... }
                'cl': "1920px",
                // => @media (min-width: 1920px) { ... }
                'vl': "2200px",
                // => @media (min-width: 2200px) { ... }
            },
        },
        screens: {
            'sm': "640px",
            // => @media (min-width: 640px) { ... }
            'md': "768px",
            // => @media (min-width: 768px) { ... }
            'lg': "1024px",
            // => @media (min-width: 1024px) { ... }
        },
    },
    variants: {
        extend: {},
    },

    plugins: [require("@tailwindcss/forms")],
};
