<?php

namespace LaravelPulse\LockLink\Actions;

use Illuminate\Support\Facades\Crypt;

class Encrypt
{
    /**
     * @param int $id
     * @return string
     */
    public static function id($id)
    {
        return self::encrypt($id);
    }

    /**
     * @param string $string
     * @return string
     */
    public static function string($string)
    {
        return self::encrypt($string);
    }

    /**
     * @param string $url
     * @return string
     */
    public static function url($url)
    {
        return self::encrypt($url);
    }

    /**
     * @param mixed $data
     * @return string
     */
    public static function data($data)
    {
        return Crypt::encrypt($data);
    }

    /**
     * @param mixed $parameter
     * @return string
     */
    private static function encrypt($parameter)
    {
        return Crypt::encryptString($parameter);
    }
}
