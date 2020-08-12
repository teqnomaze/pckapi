<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\Color
 * @group Struct
 */
class Color extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\Color $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\Color();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // colorId
        $colorId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Color::class,
            $this->object->setColorId($colorId)
        );
        static::assertEquals($colorId, $this->object->getColorId());

        // code
        $code = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Color::class,
            $this->object->setCode($code)
        );
        static::assertEquals($code, $this->object->getCode());

        // name
        $name = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Color::class,
            $this->object->setName($name)
        );
        static::assertEquals($name, $this->object->getName());

        // timestamp
        $timestamp = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Color::class,
            $this->object->setTimestamp($timestamp)
        );
        static::assertEquals($timestamp, $this->object->getTimestamp());
    }
}
