<?php

namespace LaravelPulse\LockLink\Actions;

use Illuminate\Support\Facades\Crypt;

class Unlock
{
    public static function url($encryptValue = null)
    {
        return Crypt::decrypt($encryptValue);
    }
}
