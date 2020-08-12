<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\OrderLine
 * @group Struct
 */
class OrderLine extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\OrderLine $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\OrderLine();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // orderLineId
        $orderLineId = rand(100, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\OrderLine::class,
            $this->object->setOrderLineId($orderLineId)
        );
        static::assertEquals($orderLineId, $this->object->getOrderLineId());

        // articleId
        $articleId = rand(100, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\OrderLine::class,
            $this->object->setArticleId($articleId)
        );
        static::assertEquals($articleId, $this->object->getArticleId());

        // count
        $count = rand(10, 20);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\OrderLine::class,
            $this->object->setCount($count)
        );
        static::assertEquals($count, $this->object->getCount());

        // discount
        $discount = 20.30;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\OrderLine::class,
            $this->object->setDiscount($discount)
        );
        static::assertEquals($discount, $this->object->getDiscount());

        // into
        $into = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\OrderLine::class,
            $this->object->setInto($into)
        );
        static::assertEquals($into, $this->object->getInto());

        // price
        $price = 120.60;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\OrderLine::class,
            $this->object->setPrice($price)
        );
        static::assertEquals($price, $this->object->getPrice());

        // sizeColorId
        $sizeColorId = rand(100, 200);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\OrderLine::class,
            $this->object->setSizeColorId($sizeColorId)
        );
        static::assertEquals($sizeColorId, $this->object->getSizeColorId());

        // warehouseId
        $warehouseId = rand(100, 200);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\OrderLine::class,
            $this->object->setWarehouseId($warehouseId)
        );
        static::assertEquals($warehouseId, $this->object->getWarehouseId());
    }
}
