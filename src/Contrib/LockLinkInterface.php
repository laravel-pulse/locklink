<?php

namespace LaravelPulse\LockLink\Contrib;

interface LockLinkInterface
{
    /**
     * id encryption
     * @param int $id
     * @return string
     */
    public function id($id = null): string;

    /**
     * string encryption
     * @param string $string
     * @return string
     */
    public function string($string = null): string;

    /**
     * url encryption
     * @param string $url
     * @return string
     */
    public function url($url = null): string;

    /**
     * data encryption
     * @param mixed $data
     * @return string
     */
    public function data($data = null): string;



    /**
     * string decryption
     * @param $encryptData
     * @return string
     */
    public function unlock($encryptData = null): mixed;

    /**
     * data decryption
     * @param $encryptData
     * @return mixed
     */
    public function unlockData($encryptData = null): mixed;
}
