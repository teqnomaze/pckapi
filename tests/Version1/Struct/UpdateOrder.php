<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\UpdateOrder
 * @group Struct
 */
class UpdateOrder extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\UpdateOrder $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\UpdateOrder();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // deltaOrderId
        $deltaOrderId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\UpdateOrder::class,
            $this->object->setDeltaOrderId($deltaOrderId)
        );
        static::assertEquals($deltaOrderId, $this->object->getDeltaOrderId());

        // message
        $message = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\UpdateOrder::class,
            $this->object->setMessage($message)
        );
        static::assertEquals($message, $this->object->getMessage());

        // orderLines
        $orderLines = [new \Teqnomaze\Pckapi\V1\Struct\OrderLineUpdate()];
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\UpdateOrder::class,
            $this->object->setOrderLines($orderLines)
        );
        static::assertIsArray($this->object->getOrderLines());
        foreach ($this->object->getOrderLines() as $key => $value) {
            static::assertInstanceOf(\Teqnomaze\Pckapi\V1\Struct\OrderLineUpdate::class, $value);
        }

        // orderStatusId
        $orderStatusId = rand(1, 10);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\UpdateOrder::class,
            $this->object->setOrderStatusId($orderStatusId)
        );
        static::assertEquals($orderStatusId, $this->object->getOrderStatusId());

        // packageNo
        $packageNo = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\UpdateOrder::class,
            $this->object->setPackageNo($packageNo)
        );
        static::assertEquals($packageNo, $this->object->getPackageNo());

        // packtrackURL
        $packtrackURL = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\UpdateOrder::class,
            $this->object->setPacktrackURL($packtrackURL)
        );
        static::assertEquals($packtrackURL, $this->object->getPacktrackURL());

        // sendId
        $sendId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\UpdateOrder::class,
            $this->object->setSendId($sendId)
        );
        static::assertEquals($sendId, $this->object->getSendId());

        // timestamp
        $timestamp = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\UpdateOrder::class,
            $this->object->setTimestamp($timestamp)
        );
        static::assertEquals($timestamp, $this->object->getTimestamp());

        // transporterName
        $transporterName = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\UpdateOrder::class,
            $this->object->setTransporterName($transporterName)
        );
        static::assertEquals($transporterName, $this->object->getTransporterName());
    }
}
