<?php

namespace LaravelPulse\LockLink\Support;

use LaravelPulse\LockLink\Actions\Lock;
use LaravelPulse\LockLink\Actions\Unlock;
use LaravelPulse\LockLink\Contrib\LockLinkInterface;

class LockLinkService implements LockLinkInterface
{
    public function lock($data): string
    {
        return Lock::url($data);
    }

    public function unlock($encryptData): string
    {
        return Unlock::url($encryptData);
    }
}
