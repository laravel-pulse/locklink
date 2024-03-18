<?php

namespace LaravelPulse\LockLink\Actions;

use Illuminate\Support\Facades\Crypt;

class Lock
{
    /**
     * @param $data
     * @return string
     */
    public static function url($data)
    {
        return Crypt::encrypt($data);
    }

    /**
     * @param $data
     * @return string
     */
    public static function data($data)
    {
        return Crypt::encrypt($data);
    }
}
