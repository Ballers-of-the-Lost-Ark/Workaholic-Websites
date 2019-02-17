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

mix.js('resources/js/app.js', 'public/js')
   .js(['resources/js/loader.js', 'resources/js/footerStyle.js'], 'public/js/footerAndLoader.js')
   .js('resources/js/particles.js', 'public/js')
   .js('resources/js/service-redirect.js', 'public/js')
   .js('resources/js/sliderHeight.js', 'public/js')
   .js('resources/js/typeWriter.js', 'public/js')

   .sass('resources/sass/app.scss', 'public/css')
   
   .styles([
      'resources/css/footer.css', 'resources/css/loader.css'
   ], 'public/css/footerAndLoader.css')
   .styles('resources/css/about.css', 'public/css/about.css')
   .styles('resources/css/home.css', 'public/css/home.css')
   .styles('resources/css/services.css', 'public/css/services.css');
