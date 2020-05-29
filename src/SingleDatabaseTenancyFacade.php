<?php

namespace IAmKevinMcKee\SingleDatabaseTenancy;

use Illuminate\Support\Facades\Facade;

/**
 * @see \IAmKevinMcKee\SingleDatabaseTenancy\Skeleton\SkeletonClass
 */
class SingleDatabaseTenancyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'single-database-tenancy';
    }
}
