<?php

namespace Trogers1884\LaravelTimer\Facades;

use Illuminate\Support\Facades\Facade;

class Timer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'timer';
    }
}