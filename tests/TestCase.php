<?php

/*
 * This file is part of the Grown package.
 * Grown provides ownership/grabability functionality for Laravel models
 *
 * @copyright 2018 Vegvisir Sp. z o.o. <vegvisir.for.all@gmail.com>
 * @license GNU General Public License, version 3
 */

namespace Vegvisir\Grown\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{

    public function setUp()
    {
        parent::setUp();

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        $this->withFactories(__DIR__.'/database/factories');
    }

    protected function getEnvironmentSetUp($app)
    {
        // Setup mysql connection
        $app['config']->set('database.default', 'mysql');
        $app['config']->set('database.connections.mysql', [
            'driver'   => 'mysql',
            'host'     => env('DB_HOST', 'mysql'),
            'port'     => env('DB_PORT', 3306),
            'database' => env('DB_DATABASE', 'grown'),
            'username' => env('DB_USERNAME', 'grown'),
            'password' => env('DB_PASSWORD', 'grown'),
        ]);
    }

    /**
    * Get application timezone.
    *
    * @param  \Illuminate\Foundation\Application  $app
    * @return string|null
    */
    protected function getApplicationTimezone($app)
    {
        return 'Europe/Warsaw';
    }

    protected function getPackageProviders($app)
    {
        return [
            'Vegvisir\Grown\GrownServiceProvider'
        ];
    }
}
