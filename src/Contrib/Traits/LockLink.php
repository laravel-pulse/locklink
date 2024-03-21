<?php

namespace LaravelPulse\LockLink\Contrib\Traits;

use Illuminate\Support\Facades\Crypt;

trait LockLink
{
    /**
     * @return string
     */
    public function LockId($id)
    {
        return $this->encrypt($id);
    }

    /**
     * @return string
     */
    public function LockString($string)
    {
        return $this->encrypt($string);
    }

    /**
     * @return string
     */
    public function LockUrl($url)
    {
        return $this->encrypt($url);
    }

    /**
     * @return string
     */
    public function LockData($data)
    {
        return Crypt::encrypt($data);
    }

    /**
     * @return string
     */
    private function encrypt($data)
    {
        return Crypt::encryptString($data);
    }

    /**
     * @return mixed
     */
    public function Unlock($encryptedString)
    {
        return Crypt::decryptString($encryptedString);
    }


    /**
     * @return mixed
     */
    public function UnlockData($encryptedData)
    {
        return Crypt::decrypt($encryptedData);
    }
}
