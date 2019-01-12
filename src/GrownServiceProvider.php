<?php

/*
 * This file is part of the Grown package.
 * Grown provides ownership/grabability functionality for Laravel models
 *
 * @copyright 2018 Vegvisir Sp. z o.o. <vegvisir.for.all@gmail.com>
 * @license GNU General Public License, version 3
 */

namespace Vegvisir\Grown;

use Illuminate\Support\ServiceProvider;

class GrownServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    public function boot()
    {
    }

    public function register()
    {
    }

    public function provides()
    {
    }
}
