const mix = require('laravel-mix');

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
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .webpackConfig(require('./webpack.config'));

mix.styles([
    'resources/css/reset.css',
    'resources/css/public.css',
    'resources/css/index.css',
    'resources/css/style.css',
    'resources/css/font-awesome.min.css',
    'resources/css/owl.carousel.min.css',
    'resources/css/ionicons.min.css',
    'resources/css/gallery.css',
    'resources/css/vit-gallery.css',
], 'public/css/all.css');

mix.js('resources/js/jquery.min.js', 'public/js')
mix.js('resources/js/jquery.SuperSlide.2.1.1.js', 'public/js')
mix.js('resources/js/myjs.js', 'public/js')
mix.js('resources/js/owl.carousel.min.js', 'public/js')
mix.js('resources/js/sky.js', 'public/js')
mix.js('resources/js/jquery.littlelightbox.js', 'public/js')
mix.js('resources/js/jquery.fancybox-1.3.4.pack.js', 'public/js')
