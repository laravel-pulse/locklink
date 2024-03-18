<?php

namespace LaravelPulse\LockLink\Actions;

use Illuminate\Support\Facades\Crypt;

class Lock
{
    public static function url($data = null)
    {
        return Crypt::encrypt($data);
    }
}
