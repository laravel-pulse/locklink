<?php

namespace LaravelPulse\LockLink;

class LockLinkFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lock-link';
    }
}
