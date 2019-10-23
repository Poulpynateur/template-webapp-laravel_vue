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

/**
 * // TODO //
 * How to split dependencies with webpack :
 * http://www.compulsivecoders.com/tech/how-to-build-multiple-vendors-using-laravel-mix/
 */

// For now everyone share the same CSS
mix.sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/json_app/app.js', 'public/json_app/js');
