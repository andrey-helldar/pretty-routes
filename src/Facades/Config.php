<?php

namespace PrettyRoutes\Facades;

use Illuminate\Support\Facades\Facade;
use PrettyRoutes\Support\Config as Support;

/**
 * @method static array hideMatching()
 * @method static array hideMethods()
 * @method static array middlewares()
 * @method static bool allowCleanup()
 * @method static bool domainForce()
 * @method static bool enabled()
 * @method static string colorScheme()
 * @method static string url()
 * @method static string|null apiMiddleware()
 * @method static string|null forceLocale()
 * @method static string|null webMiddleware()
 * @method static void set(string $key, $value)
 */
final class Config extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Support::class;
    }
}
