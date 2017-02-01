const { mix } = require('laravel-mix');

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

mix.copy('node_modules/font-awesome/fonts', 'public/fonts')
   .copy('vendor/highday/glitter/resources/assets/img', 'public/img/glitter', false)
   .copy('vendor/highday/glitter/resources/assets/js', 'resources/assets/js/glitter', false)
   .copy('vendor/highday/glitter/resources/assets/sass', 'resources/assets/sass/glitter', false);

mix.js('resources/assets/js/glitter/admin/glitter-admin.js', 'public/js')
   .sass('resources/assets/sass/glitter/admin/glitter-admin.scss', 'public/css');

mix.sass('resources/assets/sass/glitter/admin/glitter-guest.scss', 'public/css');
