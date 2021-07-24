const mix = require('laravel-mix');
// const tailwindcss = require('tailwindcss');

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
    .sourceMaps();

mix.js('resources/js/admin.js', 'public/js/admin.js')
   .js('resources/js/scripts.js', 'public/js/scripts.js');

mix.copy('node_modules/jquery-colorbox/jquery.colorbox-min.js', 'public/js/jquery.colorbox-min.js');

mix.styles('node_modules/jquery-colorbox/example5/colorbox.css', 'public/css/colorbox.css');

mix.postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ]);

mix.browserSync('alvar.test');