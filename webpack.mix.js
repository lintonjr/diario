const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .scripts(
        [
            "public/modern/js/core/app-menu.js",
            "public/modern/js/core/app.js",
            "public/modern/js/scripts/customizer.js",
            "public/materialDesign/js/mdb.js",
            "node_modules/sweetalert2/dist/sweetalert2.all.min.js"
        ],
        "public/js/all.js"
    )
    .styles(
        [
            "public/modern/css/app.css",
            "public/modern/css/core/menu/menu-types/vertical-menu-modern.css",
            "public/modern/css/core/colors/palette-gradient.min.css",
            "node_modules/sweetalert2/dist/sweetalert2.min.css"
        ],
        "public/css/all.css"
    )
    .sass("resources/sass/app.scss", "public/css");
