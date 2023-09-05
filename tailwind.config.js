import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {

            screens: {
                'sm' : '640px',
                'md' : '768px',
                'lg' : '1024px',
                'xl' : '1280px',
            },

            fontFamily: {
                sans: ['DM Sans', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                'highlight' : '#2B3674',
                'text' : '#A3AED0',
                'purple' : '#4318FF',
                'btn' : '#05CD99',
                'admin' : '#F4F7FE',
            },
        },
    },

    plugins: [forms, require("daisyui")],
};
