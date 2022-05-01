const mix = require("laravel-mix");
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

mix.js("resources/js/admin.js", "public/js/admin.js")
    .js("resources/js/app.js", "public/js/app.js")
    .js("resources/js/prism.js", "public/js/prism.js")
    .js("resources/js/editor.js", "public/js/editor.js")
    // .vue()
    .sourceMaps();

mix.copy(
    "node_modules/jquery-colorbox/jquery.colorbox-min.js",
    "public/js/jquery.colorbox-min.js"
);

mix.styles(
    "node_modules/jquery-colorbox/example5/colorbox.css",
    "public/css/colorbox.css"
);

mix.copy("resources/css/prism.css", "public/css/");

mix.postCss("resources/css/app.css", "public/css", [require("tailwindcss")]);

if (mix.inProduction()) {
    mix.version();
} else {
    mix.browserSync({
        proxy: "alvar.test",
        files: [
            "app/**/*.php",
            "resources/views/**/*.php",
            "resources/js/app.js",
            "resources/js/components/*.vue",
            "public/js/**/*.js",
            "public/css/**/*.css",
        ],
        // browser: "firefox",
        host: "alvar.test",
        port: 3000,
        open: false,
        watchOptions: {
            usePolling: true,
            interval: 500,
            poll: true,
            ignored: /node_modules/,
        },
        logSnippet: true,
    });
}
