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
/* WEBSITE */
mix.combine(['resources/css/packages/materialize.min.css'], 'public/css/website/packages.css')
mix.sass('resources/sass/website/style.scss', 'public/css/website/app.css').options({
  processCssUrls: false
})
mix.sass('resources/sass/website/style-responsive.scss', 'public/css/website/app-responsive.css')
mix.combine(
  ['resources/js/packages/jquery.min.js', 'resources/js/packages/materialize.min.js'],
  'public/js/website/packages.js'
)
mix.babel(['resources/js/website/script.js'], 'public/js/website/app.js')

/* CPANEL */
mix.combine(
  [
    'resources/css/packages/bootstrap.min.css',
    'resources/css/packages/font-awesome.min.css',
    'resources/css/packages/dataTables.bootstrap4.min.css',
    'resources/css/packages/sweetalert2.min.css'
  ],
  'public/css/cpanel/packages.css'
)
mix.sass('resources/sass/cpanel/style.scss', 'public/css/cpanel/app.css').options({
  processCssUrls: false
})
mix.sass('resources/sass/cpanel/style-responsive.scss', 'public/css/cpanel/app-responsive.css')
mix.combine(
  [
    'resources/js/packages/jquery.min.js',
    'resources/js/packages/bootstrap.min.js',
    'resources/js/packages/jquery.dataTables.min.js',
    'resources/js/packages/jquery.serializejson.min.js',
    'resources/js/packages/dataTables.bootstrap4.min.js',
    'resources/js/packages/sweetalert2.all.min.js',
    'resources/js/packages/loadingoverlay.min.js'
  ],
  'public/js/cpanel/packages.js'
)
mix.babel(['resources/js/cpanel/template.js', 'resources/js/cpanel/script.js'], 'public/js/cpanel/app.js')

/* ASSETS */
mix.copyDirectory('resources/img', 'public/img')
mix.copyDirectory('resources/fonts', 'public/fonts')
mix.copyDirectory('resources/icon', 'public/icon')

mix.version()
