<?php

namespace LaravelPulse\LockLink\Actions;

use Illuminate\Support\Facades\Crypt;

class Unlock
{
    /**
     * @param $encryptValue
     * @return string
     */
    public static function url($encryptValue)
    {
        return Crypt::decrypt($encryptValue);
    }

    /**
     * @param $encryptData
     * @return object
     */
    public static function data($encryptData)
    {
        return Crypt::decrypt($encryptData);
    }
}
