<?php

namespace LaravelPulse\LockLink;

use Illuminate\Support\ServiceProvider;
use LaravelPulse\LockLink\Contrib\LockLinkInterface;
use LaravelPulse\LockLink\Support\LockLinkService;

class LockLinkServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            LockLinkInterface::class,
            function () {
                return new LockLinkService();
            }
        );

        $this->mergeConfigFrom(__DIR__ . '/../config/lock-link.php', 'lock-link');
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/lock-link.php' => config_path('lock-link.php'),
        ]);
    }
}
