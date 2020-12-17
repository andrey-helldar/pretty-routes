<?php

namespace PrettyRoutes\Facades;

use Illuminate\Support\Facades\Facade;
use PrettyRoutes\Support\Resources as Support;

/**
 * @method static string fonts()
 * @method static string icons()
 * @method static string jsApp()
 * @method static string jsManifest()
 * @method static string jsVendor()
 * @method static string githubIcon()
 * @method static string repositoryUrl()
 * @method static array hosts()
 */
final class Resources extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Support::class;
    }
}
