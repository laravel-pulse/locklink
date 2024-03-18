<?php

namespace LaravelPulse\LockLink\Support;

use LaravelPulse\LockLink\Actions\Lock;
use LaravelPulse\LockLink\Actions\Unlock;
use LaravelPulse\LockLink\Contrib\LockLinkInterface;

class LockLinkService implements LockLinkInterface
{
    public function lock($data = null): string
    {
        return Lock::url($data);
    }

    public function unlock($encryptData = null): string
    {
        return Unlock::url($encryptData);
    }

    public function dataLock(mixed $data = null)
    {
        return Lock::data($data);
    }

    public function dataUnlock(mixed $encryptData = null)
    {
        return Unlock::data($encryptData);
    }
}
