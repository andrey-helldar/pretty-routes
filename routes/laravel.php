<?php

use Illuminate\Support\Facades\Route;
use PrettyRoutes\Facades\Config;

Route::name('pretty-routes.')
    ->middleware(Config::middlewares())
    ->prefix(Config::url())
    ->group(function () {
        Route::middleware(Config::webMiddleware())
            ->get('/', 'PrettyRoutes\Http\MainController@show')
            ->name('show');

        Route::middleware(Config::apiMiddleware())
            ->get('json', 'PrettyRoutes\Http\MainController@routes')
            ->name('list');

        Route::middleware(Config::apiMiddleware())
            ->post('clear', 'PrettyRoutes\Http\MainController@clear')
            ->name('clear');
    });
