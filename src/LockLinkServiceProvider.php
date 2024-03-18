<?php

namespace LaravelPulse\LockLink;

use Illuminate\Support\ServiceProvider;

class LockLinkServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/lock-link.php', 'lock-link');
    }


    public function boot()
    {
        //  Publish config file to the application's config directory
    }
}
