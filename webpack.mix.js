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
   .copy('vendor/highday/glitter/resources/assets/js/admin', 'resources/assets/js/glitter/admin')
   .copy('vendor/highday/glitter/resources/assets/sass/admin', 'resources/assets/sass/glitter/admin')
   .js('resources/assets/js/glitter/admin/glitter-admin.js', 'public/js')
   .sass('resources/assets/sass/glitter/admin/glitter-admin.scss', 'public/css');
