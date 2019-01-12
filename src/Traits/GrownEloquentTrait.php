<?php

namespace Vegvisir\Grown\Traits;

use Illuminate\Support\Facades\Auth;
use Vegvisir\Grown\Acme\Eloquent\Collection;

trait GrownEloquentTrait
{

    protected static $ignoredMethods = [
        'create'
    ];

    // protected static function generateOwnershipRules()
    // {
    //     $methods = [];

    //     $methods[3] = function ($query, $methods) {
    //         $query->where('user_id', 5);
    //     };

    //     $methods[2] = function ($query, $methods) {
    //         $query->whereHas('orders', $methods[3]);
    //     };

    //     $methods[1] = function ($query, $methods) {
    //         $query->whereHas('courses', $methods[2]);
    //     };

    //     $method = function ($query, $methods) {
    //         $query->whereHas('cities', $methods[1]);
    //     };

    //     return self::whereHas('cities', $method($query, $methods, $methods[1]));
    // }

    public function owners()
    {

    }
    
    /**
     * Create a new Eloquent Collection instance.
     *
     * @param  array  $models
     * @return \Vegvisir\Grown\Acme\Eloquent\Collection
     */
    public function newCollection(array $models = [])
    {
        return new Collection($models);
    }

    public static function force()
    {
        return (new static)->where('id', '>', -999999);
    }

    public static function __callStatic($method, $arguments)
    {
        if(\in_array($method, self::$ignoredMethods)) {
            return (new static)->$method(...$arguments);
        }

        if(Auth::guest()) {
            throw new \Exception;
        }

        return (new static)->whereHas('owners', Auth::user()->id)->$method(...$arguments);
    }

    public function attachOwner($user)
    {

    }

    public function detachOwner($user)
    {

    }
}