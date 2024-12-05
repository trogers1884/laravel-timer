<?php

namespace Trogers1884\LaravelTimer;

use Illuminate\Support\ServiceProvider;

class TimerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('timer', function ($app) {
            return new Timer();
        });
    }

    public function boot()
    {
        //
    }
}