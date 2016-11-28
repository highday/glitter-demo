const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.copy('vendor/highday/glitter/resources/assets/sass', 'resources/assets/sass/glitter')
       .copy('vendor/highday/glitter/resources/assets/js', 'resources/assets/js/glitter')
       .copy('node_modules/font-awesome/fonts', 'public/fonts')
       .sass('glitter/admin/glitter-admin.scss')
       .webpack('glitter/admin/glitter-admin.js');

   mix.browserSync({
        proxy: 'glitter.dev'
    });
});
