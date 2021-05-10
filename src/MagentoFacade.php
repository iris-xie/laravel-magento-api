<?php

namespace Ares\Magento;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ares\Magento\Skeleton\SkeletonClass
 */
class MagentoFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'magento';
    }
}
