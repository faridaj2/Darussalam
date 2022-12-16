const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('index.js', 'public/js/app.js')
    .postCss('input.css', 'public/css/app.js', [
        require('tailwindcss')
    ]);
mix.browserSync('127.0.0.1:8000');

mix.disableNotifications();
