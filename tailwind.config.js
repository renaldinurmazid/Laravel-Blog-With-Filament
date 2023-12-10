import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./vendor/laravel/jetstream/**/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
    "./node_modules/flowbite/**/*.js",
],

darkMode:'class',

theme: {
    extend: {
        fontFamily: {
            sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            bobaland: ['BobaLand', 'sans-serif'],
        },
        colors: {
            primary:'#004D5B',
            secondary:'#379EAF',
            success: '#E9F4F5',
            danger: '#006679',
        },
    },
},

plugins: [forms, require("flowbite-typography"), require('flowbite/plugin')],

};

