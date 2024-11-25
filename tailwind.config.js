import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                jakarta: ['"Plus Jakarta Sans"', 'sans-serif'],
            },
            colors: {
                'primary': '#00192B',
                'coprimary' : '#001F36',
                'secondary': '#AB9518',
                'accent' : '#E0E09E',
                'accent2' : '#F0EFD3'
            }
        }
        
    },
    plugins: [],
};
