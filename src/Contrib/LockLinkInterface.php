<?php

namespace LaravelPulse\LockLink\Contrib;

interface LockLinkInterface
{
    public function lock($data = null): string;

    public function unlock($encryptData = null): string;

    public function dataLock(mixed $data = null);

    public function dataUnlock(mixed $encryptData = null);
}
