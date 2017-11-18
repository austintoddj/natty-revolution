let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/assets/public/sass/app.scss', 'public/css')
    .js('resources/assets/public/js/app.js', 'public/js')
    .copy('resources/assets/public/js/toolkit-bold.js', 'public/js')
    .copy('resources/assets/public/js/application-bold.js', 'public/js')
    .copy('resources/assets/public/img', 'public/img')
    .copy('resources/assets/public/css/toolkit-bold.css', 'public/css')
    .copy('resources/assets/public/css/application-bold.css', 'public/css')
    .copy('resources/assets/public/fonts', 'public/fonts');