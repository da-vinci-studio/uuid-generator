<?php

namespace Dvs\UUIDGenerator\Interfaces;

use Dvs\UUIDGenerator\Exception\UUIDGeneratorException;

interface UUIDGenerator
{
    /**
     * @param $url
     *
     * @return string
     *
     * @throws UUIDGeneratorException
     */
    public function generateFromUrl($url);

    /**
     * @param $string
     *
     * @return string
     *
     * @throws UUIDGeneratorException
     */
    public function generateFromString($string);

    /**
     * @return string
     *
     * @throws UUIDGeneratorException
     */
    public function generateUnique();
}
