<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\StockDetail
 * @group Struct
 */
class StockDetail extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\StockDetail $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\StockDetail();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // warehouseId
        $warehouseId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\StockDetail::class,
            $this->object->setWarehouseId($warehouseId)
        );
        static::assertEquals($warehouseId, $this->object->getWarehouseId());

        // count
        $count = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\StockDetail::class,
            $this->object->setCount($count)
        );
        static::assertEquals($count, $this->object->getCount());
    }
}
