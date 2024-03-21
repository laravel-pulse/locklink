<?php

namespace LaravelPulse\LockLink\Support;

use LaravelPulse\LockLink\Actions\Decrypt;
use LaravelPulse\LockLink\Actions\Encrypt;
use LaravelPulse\LockLink\Contrib\LockLinkInterface;

class LockLinkService implements LockLinkInterface
{
    /**
     * @var \LaravelPulse\LockLink\Actions\Encrypt
     * @param int $id
     * @return string
     */
    public function id($id = null): string
    {
        return Encrypt::id($id);
    }

    /**
     * @var \LaravelPulse\LockLink\Actions\Encrypt
     * @param string $string
     * @return string
     */
    public function string($string = null): string
    {
        return Encrypt::string($string);
    }

    /**
     * @var \LaravelPulse\LockLink\Actions\Encrypt
     * @param string $url
     * @return string
     */
    public function url($url = null): string
    {
        return Encrypt::url($url);
    }

    /**
     * @var \LaravelPulse\LockLink\Actions\Encrypt
     * @param mixed $data
     * @return string
     */
    public function data($data = null): string
    {
        return Encrypt::data($data);
    }

    /**
     * @var \LaravelPulse\LockLink\Actions\Decrypt
     * @param mixed $encryptString
     * @return string
     */
    public function unlock($encryptString = null): mixed
    {
        return Decrypt::String($encryptString);
    }

    /**
     * @var \LaravelPulse\LockLink\Actions\Decrypt
     * @param mixed $encryptData
     * @return string
     */
    public function unlockData($encryptData = null): mixed
    {
        return Decrypt::Data($encryptData);
    }
}
