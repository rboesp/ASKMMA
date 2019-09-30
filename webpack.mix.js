let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        postCss: [tailwindcss('./tailwind.js')],
        processCssUrls: false, // This is required when using laravel mix
    })
    .version();
