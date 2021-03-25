const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js/auth.js')
    .sass('resources/sass/app.scss', 'public/css/auth.css')
    .sourceMaps();

mix.sass('resources/sass/styles.sass', 'public/assets/css/styles.css');

mix.styles([
    'public/assets/css/normalize.css',
    'public/assets/css/styles.css'
 ], 'public/css/app.css');
