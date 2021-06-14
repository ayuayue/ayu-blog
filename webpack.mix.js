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

mix.js('resources/js/app.js', 'public/js').vue()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .webpackConfig(require('./webpack.config'));
if (mix.inProduction()) {
    mix.version();
}
// mix.browserSync({
//     proxy: '127.0.0.1',
//     host: '127.0.0.1',
//     open: 'external'
// });
mix.browserSync({
    proxy: '127.0.0.1',
    open: false,
    watchOptions: {
        usePolling: true,
        interval: 500,
        ignored: /node_modules/, // 这里可不用
    },
    files: [ // 整个files数组也可以不写
        'app/**/*.php',
        'resources/views/**/*.php',
        'resources/js/app.js',
        'resources/js/components/*.vue',
        'packages/mixdinternet/frontend/src/**/*.php',
        'public/js/**/*.js',
        'public/css/**/*.css'
    ],
    notify: false, // 关闭右上角的 connected 弹窗提示
});
