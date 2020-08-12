<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\Manufacturer
 * @group Struct
 */
class Manufacturer extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\Manufacturer $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\Manufacturer();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // manufacturerId
        $manufacturerId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Manufacturer::class,
            $this->object->setManufacturerId($manufacturerId)
        );
        static::assertEquals($manufacturerId, $this->object->getManufacturerId());

        // name
        $name = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Manufacturer::class,
            $this->object->setName($name)
        );
        static::assertEquals($name, $this->object->getName());

        // timestamp
        $timestamp = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Manufacturer::class,
            $this->object->setTimestamp($timestamp)
        );
        static::assertEquals($timestamp, $this->object->getTimestamp());
    }
}
