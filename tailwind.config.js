/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                'poppins': ['Poppins']
            },
            screens: {
                '2xl': '1366px'
            }
        },
    },
    plugins: [],
};

