<?php

namespace RobinThijsen\LivewireFields\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VendorName\Skeleton\Skeleton
 */
class LivewireFields extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \RobinThijsen\LivewireFields\LivewireFields::class;
    }
}
