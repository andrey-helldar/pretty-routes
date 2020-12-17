const mix = require('laravel-mix');
const config = require('./webpack.config');

const public_path = './dist/';
const assets = './resources/';

mix
    .webpackConfig(config)

    .setPublicPath(public_path)

    .js(assets + 'js/app.js', public_path)

    .extract()
    .version()
    .sourceMaps();
