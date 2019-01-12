<?php

/*
 * This file is part of the Grown package.
 * Grown provides ownership/grabability functionality for Laravel models
 *
 * @copyright 2018 Vegvisir Sp. z o.o. <vegvisir.for.all@gmail.com>
 * @license GNU General Public License, version 3
 */

namespace Vegvisir\Grown;

use Illuminate\Support\Facades\Facade;

class GrownFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'grown';
    }
}
