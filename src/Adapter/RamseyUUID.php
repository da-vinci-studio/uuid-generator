<?php

namespace Dvs\UUIDGenerator\Adapter;

use Dvs\UUIDGenerator\Interfaces\UUIDGenerator;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Dvs\UUIDGenerator\Exception\UUIDGeneratorException;

class RamseyUUID implements UUIDGenerator
{
    /**
     * @param $url
     *
     * @return string
     *
     * @throws UUIDGeneratorException
     */
    public function generateFromUrl($url)
    {
        try {
            return Uuid::uuid3(Uuid::NAMESPACE_URL, $url)->toString();
        } catch (UnsatisfiedDependencyException $e) {
            throw new UUIDGeneratorException($e->getMessage());
        }
    }

    /**
     * @param $string
     *
     * @return string
     *
     * @throws UUIDGeneratorException
     */
    public function generateFromString($string)
    {
        try {
            return Uuid::uuid3(Uuid::NAMESPACE_OID, $string)->toString();
        } catch (UnsatisfiedDependencyException $e) {
            throw new UUIDGeneratorException($e->getMessage());
        }
    }

    /**
     * @return string
     *
     * @throws UUIDGeneratorException
     */
    public function generateUnique()
    {
        try {
            return Uuid::uuid4()->toString();
        } catch (UnsatisfiedDependencyException $e) {
            throw new UUIDGeneratorException($e->getMessage());
        }
    }
}
