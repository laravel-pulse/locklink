<?php

namespace LaravelPulse\LockLink\Contrib;

interface LockLinkInterface
{
    public function lock($data): string;

    public function unlock($encryptData): string;
}
