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
    .webpackConfig({
        module: {
            /*rules: [{
                enforce: 'pre',
                test: /\.(js|vue)$/,
                loader: 'eslint-loader',
                exclude: /node_modules/,
            }],*/
        },
        resolve: {
            extensions: [
                '.js',
                '.vue',
            ],
            alias: {
                '@': __dirname + '/resources/js'
            },
        },
    })
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/theme01/style.scss', 'public/css')
    .extract([
        'vue',
        'vue-router',
        //'vuetify', 不能提出來，會報錯
    ])
    .sourceMaps();
