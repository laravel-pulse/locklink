<?php

namespace LaravelPulse\LockLink\Support;

use LaravelPulse\LockLink\Contrib\LockLinkInterface;

class LockLinkService implements LockLinkInterface
{
    public function lock()
    {
        return true;
    }
    public function unlock()
    {
        return true;
    }
}
