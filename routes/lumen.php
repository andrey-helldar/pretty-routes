<?php

use Illuminate\Support\Facades\Route;
use PrettyRoutes\Facades\Config;

Route::group([
    'as'         => 'pretty-routes',
    'middleware' => Config::middlewares(),
    'prefix'     => Config::url(),
], static function () {
    Route::get('/', [
        'middleware' => Config::webMiddleware(),
        'uses'       => 'PrettyRoutes\Http\MainController@show',
        'as'         => 'show',
    ]);

    Route::get('json', [
        'middleware' => Config::apiMiddleware(),
        'uses'       => 'PrettyRoutes\Http\MainController@routes',
        'as'         => 'list',
    ]);

    Route::post('clear', [
        'middleware' => Config::apiMiddleware(),
        'uses'       => 'PrettyRoutes\Http\MainController@clear',
        'as'         => 'clear',
    ]);
});
