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

mix
    .browserSync('127.0.0.1:8000')
    .js('resources/js/app.js', 'public/js')
    // TODO Need to minify app.css
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/admin/admin-app.scss', 'public/css/admin')
    .sass('resources/sass/account/account-app.scss', 'public/css/account')
    .sourceMaps(false, 'source-map')




