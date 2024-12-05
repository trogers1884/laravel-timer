<?php

namespace Trogers1884\LaravelTimer\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Trogers1884\LaravelTimer\TimerServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            TimerServiceProvider::class,
        ];
    }
}