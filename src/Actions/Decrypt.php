<?php

namespace LaravelPulse\LockLink\Actions;

use Illuminate\Support\Facades\Crypt;

class Decrypt
{
    /**
     * @param $encryptValue
     * @return string
     */
    public static function String($encryptValue): mixed
    {
        return Crypt::decryptString($encryptValue);
    }

    /**
     * @param $encryptData
     * @return object
     */
    public static function Data($encryptData): mixed
    {
        return Crypt::decrypt($encryptData);
    }
}
