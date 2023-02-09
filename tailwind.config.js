/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./app/Http/Livewire/**/*.php",
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        screens: {
            'xl': "1440px",
            'lg': "1200px",
            'md': "1024px",
            'sm': "768px",
            'xs': "480px",
        },
        extend: {
            colors: {
                danger: colors.rose,
                success: colors.green,
                warning: colors.yellow,
                primary: {
                    100: "#d1d3dc",
                    200: "#a3a6b9",
                    300: "#747a97",
                    400: "#464d74",
                    500: "#182151",
                    600: "#131a41",
                    700: "#0e1431",
                    800: "#0a0d20",
                    900: "#050710"
                },
                'secondary': {
                    '50': '#fff1f1',
                    '100': '#ffe1e1',
                    '200': '#ffc7c7',
                    '300': '#ffa0a0',
                    '400': '#ff6464',
                    '500': '#f83b3b',
                    '600': '#e51d1d',
                    '700': '#c11414',
                    '800': '#a01414',
                    '900': '#841818',
                },

            },
            fontFamily: {
                'sans': ['Roboto', ...defaultTheme.fontFamily.sans],
            },
            container: {
                center: true,
                padding: "20px",
            },
        },
    },
    safelist: [
        'mt-[130px]',
    ],
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms')
    ],
};
