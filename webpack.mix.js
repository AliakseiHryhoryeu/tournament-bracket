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

mix.setPublicPath('public')
    .setResourceRoot('../') // Turns assets paths in css relative to css file
    .sass('resources/scss/styles.scss', 'css/index.css')
    .js('resources/js/app.js', 'public/js/app.js')
    .js('resources/js/bootstrap.js', 'public/js/bootstrap.js')
    .scripts(['resources/js/translateScreen.js'], 'public/js/translateScreen.js')
    .extract([
        'jquery',
        'yarn add',
        'axios',
        'lodash'
    ])
    .sourceMaps();

if (mix.inProduction()) {
    mix.version();
} else {
    // Uses inline source-maps on development
    mix.webpackConfig({
        devtool: 'inline-source-map'
    });
}
