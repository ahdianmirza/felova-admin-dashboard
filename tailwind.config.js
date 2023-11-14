/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/tw-elements/dist/js/**/*.js",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
            screens: {
                "2xl": "1366px",
            },
            backgroundImage: {
                "login-balitro": "url('/public/img/login/5.png')",
                "login-vanili": "url('/public/img/login/12.png')",
                "login-vanili-2": "url('/public/img/login/13.png')",
            },
            colors: {
                "main-bg": "#F7F7F7",
                secondary: "#CCCCCC",
                "on-button": "#b3d086",
                "off-button": "#fda4a6",
            },
        },
    },
    plugins: [
        require("daisyui"),
        require("tw-elements/dist/plugin.cjs"),
        require("flowbite/plugin"),
    ],
    darkMode: "class",
    daisyui: {
        themes: ["light"], // true: all themes | false: only light + dark | array: specific themes like this ["light", "dark", "cupcake"]
        darkTheme: "dark", // name of one of the included themes for dark mode
        base: false, // applies background color and foreground color for root element by default
        styled: true, // include daisyUI colors and design decisions for all components
        utils: true, // adds responsive and modifier utility classes
        rtl: false, // rotate style direction from left-to-right to right-to-left. You also need to add dir="rtl" to your html tag and install `tailwindcss-flip` plugin for Tailwind CSS.
        prefix: "ds-", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
        logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
    },
};

