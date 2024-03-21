<?php

namespace LaravelPulse\LockLink\Contrib;

interface LockLinkInterface
{
    /**
     * id encryption
     * @param int $id
     * @return string
     */
    public function LockID($id = null): string;

    /**
     * string encryption
     * @param string $string
     * @return string
     */
    public function LockString($string = null): string;

    /**
     * url encryption
     * @param string $url
     * @return string
     */
    public function LockUrl($url = null): string;

    /**
     * data encryption
     * @param mixed $data
     * @return string
     */
    public function LockData($data = null): string;



    /**
     * unlock
     * @param $encryptData
     * @return string
     */
    public function unlock($encryptData = null): string;

    public function dataLock(mixed $data = null);

    public function dataUnlock(mixed $encryptData = null);
}
