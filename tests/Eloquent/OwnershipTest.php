<?php

namespace Vegvisir\Grown\Tests\Eloquent;

use Illuminate\Support\Facades\Config;
use Vegvisir\Grown\Tests\Infrastructure\Models\Eloquent\One;
use Vegvisir\Grown\Tests\TestCase;

class OwnershipTest extends TestCase
{
    public function testOwnership()
    {
        $one = One::where('name', 'first')->get();
        var_dump($one);
    }

    public function testOwnershipWhere()
    {

    }

    public function testOwnershipFind()
    {

    }

    public function testOwnershipAll()
    {

    }
}