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

/* mix.styles([
    'resources/assets/img/svg/logo.svg',
    'resources/assets/css/style.min.css',
],'public/css/template.css')
.scripts([
    'resources/assets/plugins/chart.min.js',
    'resources/assets/plugins/feather.min.js',
    'resources/assets/js/script.js',
],'public/js/template.js')
.js(['resources/js/app.js', 'public/js']) */


mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
