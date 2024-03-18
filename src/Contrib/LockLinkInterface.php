<?php

namespace LaravelPulse\LockLink\Contrib;

interface LockLinkInterface
{
    public function lock();
    public function unlock();
}
