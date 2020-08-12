<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\ProductLine
 * @group Struct
 */
class ProductLine extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\ProductLine $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\ProductLine();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // productLineId
        $id = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\ProductLine::class,
            $this->object->setId($id)
        );
        static::assertEquals($id, $this->object->getId());

        // name
        $name = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\ProductLine::class,
            $this->object->setName($name)
        );
        static::assertEquals($name, $this->object->getName());

        // number
        $number = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\ProductLine::class,
            $this->object->setNumber($number)
        );
        static::assertEquals($number, $this->object->getNumber());
    }
}
