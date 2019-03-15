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
   
   .js(['resources/js/particles.js', 'resources/js/service-redirect.js', 'resources/js/sliderHeight.js', 'resources/js/typeWriter.js'], 'public/js/other.js');

   mix.sass('resources/sass/app.scss', 'public/css');
   
   mix.styles([
      'resources/css/footer.css', 'resources/css/loader.css'
   ], 'public/css/footerAndLoader.css').options({
      postCss: [require('autoprefixer')]
   });

   mix.combine([
      'resources/css/about.css',
      'resources/css/home.css',
      'resources/css/services.css'
   ], 'public/css/other.css').options({
      postCss: [require('autoprefixer')]
   });