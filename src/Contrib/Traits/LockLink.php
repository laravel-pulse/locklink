<?php

namespace LaravelPulse\LockLink\Contrib\Traits;

use Illuminate\Support\Facades\Crypt;

trait LockLink
{
    /**
     * @return string
     */
    public function getLockLink($data)
    {
        return Crypt::encrypt($data);
    }

    /**
     * @return mixed
     */
    public function getUnlockLink($data)
    {
        return Crypt::decrypt($data);
    }
}
