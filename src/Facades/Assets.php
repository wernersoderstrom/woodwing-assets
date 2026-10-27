<?php

namespace Wernersoderstrom\WoodwingAssets\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wernersoderstrom\WoodwingAssets\Assets
 */
class Assets extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'woodwing-assets';
    }
}
