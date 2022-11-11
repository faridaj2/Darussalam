const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        fontFamily: {
            'review': 'Review',
            'Montserrat': 'Montserrat',
            'Lato': 'Lato'
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],

            },
        },
    },
    daisyui: {
        themes: [
          {
            mytheme: {

   "primary": "#8686ef",

   "secondary": "#21ce72",

   "accent": "#f7dcaa",

   "neutral": "#282A39",

   "base-100": "#E8E8E8",

   "info": "#507BF2",

   "success": "#3FE4BD",

   "warning": "#B98F13",

   "error": "#F2766E",
            },
          },
        ],
      },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require("daisyui")
    ],
};
