<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\OrderLineUpdate
 * @group Struct
 */
class OrderLineUpdate extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\OrderLineUpdate $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\OrderLineUpdate();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // orderLineId
        $orderLineId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\OrderLineUpdate::class,
            $this->object->setOrderLineId($orderLineId)
        );
        static::assertEquals($orderLineId, $this->object->getOrderLineId());

        // info
        $info = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\OrderLineUpdate::class,
            $this->object->setInfo($info)
        );
        static::assertEquals($info, $this->object->getInfo());

        // amount
        $amount = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\OrderLineUpdate::class,
            $this->object->setAmount($amount)
        );
        static::assertEquals($amount, $this->object->getAmount());
    }
}
