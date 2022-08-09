const mix = require('laravel-mix');

require('laravel-mix-webp');

mix.browserSync({
    proxy: 'http://127.0.0.1:8000'
});

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/furino.js', 'public/js')
    .js('resources/js/bike.js', 'public/js')
    .sass('resources/css/scss/style.scss', 'public/css', [])
    .css('resources/css/portfolio/furino.css', 'public/css', [])
    .css('resources/css/portfolio/bike.css', 'public/css', [])
    .ImageWebp({
        from: 'public/img',
        to: 'public/img',
        imageminWebpOptions: {
            quality: 75
        },
    });
