<?php

namespace LaravelPulse\LockLink\Support;

use LaravelPulse\LockLink\Actions\Encrypt;
use LaravelPulse\LockLink\Actions\Unlock;
use LaravelPulse\LockLink\Contrib\LockLinkInterface;

class LockLinkService implements LockLinkInterface
{
    /**
     * @var \LaravelPulse\LockLink\Actions\Encrypt
     * @param int $id
     * @return string
     */
    public function LockID($id = null): string
    {
        return Encrypt::id($id);
    }

    /**
     * @var \LaravelPulse\LockLink\Actions\Encrypt
     * @param string $string
     * @return string
     */
    public function LockString($string = null): string
    {
        return Encrypt::string($string);
    }

    /**
     * @var \LaravelPulse\LockLink\Actions\Encrypt
     * @param string $url
     * @return string
     */
    public function LockUrl($url = null): string
    {
        return Encrypt::url($url);
    }

    /**
     * @var \LaravelPulse\LockLink\Actions\Encrypt
     * @param mixed $data
     * @return string
     */
    public function LockData($data = null): string
    {
        return Encrypt::data($data);
    }


    public function unlock($encryptData = null): string
    {
        return Unlock::url($encryptData);
    }


    public function dataLock(mixed $data = null)
    {
        // return Lock::data($data);
    }

    public function dataUnlock(mixed $encryptData = null)
    {
        return Unlock::data($encryptData);
    }
}
