<?php
/******************************************************************************
 * This file is part of the "andrey-helldar/pretty-routes" project.           *
 *                                                                            *
 * @author Andrey Helldar <helldar@ai-rus.com>                                *
 * @author Gary Green <holegary@gmail.com>                                    *
 *                                                                            *
 * @copyright 2021 Andrey Helldar, Gary Green                                 *
 *                                                                            *
 * @license MIT                                                               *
 *                                                                            *
 * @see https://github.com/andrey-helldar/pretty-routes                       *
 *                                                                            *
 * For the full copyright and license information, please view the LICENSE    *
 * file that was distributed with this source code.                           *
 ******************************************************************************/

namespace PrettyRoutes\Facades;

use Illuminate\Support\Facades\Facade;
use PrettyRoutes\Support\Cache as Support;

/**
 * @method static \PrettyRoutes\Support\Cache when($value);
 * @method static bool routeClear();
 */
final class Cache extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Support::class;
    }
}
