<?php

namespace LaravelPulse\LockLink;

use Illuminate\Support\Facades\Facade;

class LockLinkFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lock-link';
    }
}
