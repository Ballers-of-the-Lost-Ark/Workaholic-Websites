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

mix.js([
   'resources/js/app.js',
   'resources/js/loader.js',
   'resources/js/format-footer.js',
   'resources/js/service-redirect.js',
   'resources/js/slider-height.js',
   'resources/js/typewriter.js',
   'resources/js/include-html.js',
   'resources/js/run-particles.js',

], 'public/js/app.js');

mix.sass('resources/sass/app.scss', 'public/css');

mix.copyDirectory('resources/assets/', 'public/assets');

mix.copy('node_modules/particles.js/particles.js', 'public/js/particles.js');

// mix.styles([
//    'resources/css/footer.css', 'resources/css/loader.css'
// ], 'public/css/footerAndLoader.css').options({
//    postCss: [require('autoprefixer')]
// });

// mix.combine([
//    'resources/css/about.css',
//    'resources/css/home.css',
//    'resources/css/services.css',
//    'resources/css/icons.css'
// ], 'public/css/other.css').options({
//    postCss: [require('autoprefixer')]
// });