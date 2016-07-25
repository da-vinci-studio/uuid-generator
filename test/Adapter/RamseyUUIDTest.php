<?php

namespace test\Dvs\UUIDGenerator\Adapter;

use Dvs\UUIDGenerator\Adapter\RamseyUUID;

class RamseyUUIDTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var RamseyUUID
     */
    private $generator;

    public function setUp()
    {
        parent::setUp();

        $this->generator = new RamseyUUID();
    }

    public function testGenerateDifferentKeys()
    {
        $uuid1 = $this->generator->generateFromUrl('http://test.pl');
        $uuid2 = $this->generator->generateFromUrl('http://test2.pl');

        $this->assertNotEquals($uuid1, $uuid2);
    }

    public function testGenerateIdenticalKeys()
    {
        $uuid1 = $this->generator->generateFromUrl('http://test.pl');
        $uuid2 = $this->generator->generateFromUrl('http://test.pl');

        $this->assertEquals($uuid1, $uuid2);
    }
}
