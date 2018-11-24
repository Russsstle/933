const mix = require('laravel-mix')
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
mix.combine(['resources/css/packages/materialize.min.css'], 'public/css/packages.css')
mix.sass('resources/sass/style.scss', 'public/css/app.css')
mix.sass('resources/sass/style-responsive.scss', 'public/css/app-responsive.css')

mix.combine(
  ['resources/js/packages/jquery.min.js', 'resources/js/packages/materialize.min.js'],
  'public/js/packages.js'
)
mix.babel(['resources/js/script.js'], 'public/js/app.js')

mix.copyDirectory('resources/img', 'public/img')

mix.extract(['vue'], 'public/js/vendor.js')
