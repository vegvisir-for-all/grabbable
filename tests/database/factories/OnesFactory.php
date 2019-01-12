<?php

use Vegvisir\Grown\Tests\Infrastructure\Models\Eloquent\One;

One::force()->where('id', '>', 0)->delete();

$names = [
    'first',
    'second',
    'third',
    'fourth'
];

foreach($names as $name) {
    One::create(['name' => $name]);
}
