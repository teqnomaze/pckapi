<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\Size
 * @group Struct
 */
class Size extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\Size $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\Size();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // name
        $name = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Size::class,
            $this->object->setName($name)
        );
        static::assertEquals($name, $this->object->getName());

        // sizeId
        $sizeId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Size::class,
            $this->object->setSizeId($sizeId)
        );
        static::assertEquals($sizeId, $this->object->getSizeId());

        // timestamp
        $timestamp = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Size::class,
            $this->object->setTimestamp($timestamp)
        );
        static::assertEquals($timestamp, $this->object->getTimestamp());
    }
}
