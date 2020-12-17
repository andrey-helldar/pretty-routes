<?php

namespace PrettyRoutes\Http;

use Helldar\LaravelRoutesCore\Support\Routes;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Artisan;
use PrettyRoutes\Facades\Config;

class MainController extends BaseController
{
    /**
     * Getting a template for routes.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('pretty-routes::app');
    }

    /**
     * Getting a list of routes.
     *
     * @param  \Helldar\LaravelRoutesCore\Support\Routes  $routes
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function routes(Routes $routes)
    {
        $content = $routes
            ->setApiMiddlewares((array) Config::apiMiddleware())
            ->setWebMiddlewares((array) Config::webMiddleware())
            ->setHideMethods(Config::hideMethods())
            ->setHideMatching(Config::hideMatching())
            ->setDomainForce(Config::domainForce())
            ->setUrl(config('app.url'))
            ->setNamespace(config('modules.namespace'))
            ->get();

        return response()->json($content);
    }

    /**
     * Clearing cached routes.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function clear()
    {
        if (Config::allowCleanup()) {
            Artisan::call('route:clear');

            return response()->json('ok');
        }

        return response()->json('disabled', 400);
    }
}
