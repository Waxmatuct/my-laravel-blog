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

mix.js('resources/js/admin.js', 'public/js/admin.js')
   .js('resources/js/scripts.js', 'public/js/scripts.js');

mix.copy('node_modules/jquery-colorbox/jquery.colorbox-min.js', 'public/js/jquery.colorbox-min.js');

mix.sass('resources/sass/styles.sass', 'public/assets/css/styles.css');

mix.styles([
    'public/assets/css/normalize.css',
    'public/assets/css/styles.css'
 ], 'public/css/styles.css');

 mix.styles('node_modules/jquery-colorbox/example5/colorbox.css', 'public/css/colorbox.css');

 mix.js("resources/js/app.js", "public/js")
    .postCss("resources/css/app.css", "public/css", [
        require("tailwindcss"),
    ]);
