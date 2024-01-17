<?php

namespace OscarWeijman\LaravelExample\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \OscarWeijman\LaravelExample\LaravelExample
 */
class LaravelExample extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \OscarWeijman\LaravelExample\LaravelExample::class;
    }
}
