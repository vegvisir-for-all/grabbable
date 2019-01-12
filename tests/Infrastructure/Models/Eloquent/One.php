<?php

namespace Vegvisir\Grown\Tests\Infrastructure\Models\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Vegvisir\Grown\Traits\GrownEloquentTrait;

class One extends Model
{
    use GrownEloquentTrait;

    protected $fillable = ['name'];

    // protected function ownershipRules()
    // {
    //     // suppose it's a street, belonging to a city, belonging to a course, belonging to an order

    //     $rules = OwnershipRules::mustBelongTo(\App\City)
    //         ->whichBelongsTo(\App\Course)
    //         ->whichBelongsTo(\App\Order)
    //         ->whichBelongsToUser();

    //     return $rules;
    // }
}