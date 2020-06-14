<?php

namespace Konectdigital\GlovoApi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Konectdigital\GlovoApi\Skeleton\SkeletonClass
 */
class GlovoApiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'glovo-api';
    }
}
