<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\DeliveredItemsAndCapturedPaymentInfo
 * @group Struct
 */
class DeliveredItemsAndCapturedPaymentInfo extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\DeliveredItemsAndCapturedPaymentInfo $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\DeliveredItemsAndCapturedPaymentInfo();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // amount
        $amount = 100.50;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\DeliveredItemsAndCapturedPaymentInfo::class,
            $this->object->setAmount($amount)
        );
        static::assertEquals($amount, $this->object->getAmount());

        // authorzationId
        $authorzationId = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\DeliveredItemsAndCapturedPaymentInfo::class,
            $this->object->setAuthorzationId($authorzationId)
        );
        static::assertEquals($authorzationId, $this->object->getAuthorzationId());

        // extraCost
        $extraCost = 50.30;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\DeliveredItemsAndCapturedPaymentInfo::class,
            $this->object->setExtraCost($extraCost)
        );
        static::assertEquals($extraCost, $this->object->getExtraCost());

        // freightCost
        $freightCost = 50.30;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\DeliveredItemsAndCapturedPaymentInfo::class,
            $this->object->setFreightCost($freightCost)
        );
        static::assertEquals($freightCost, $this->object->getFreightCost());

        // paymentMethod
        $paymentMethod = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\DeliveredItemsAndCapturedPaymentInfo::class,
            $this->object->setPaymentMethod($paymentMethod)
        );
        static::assertEquals($paymentMethod, $this->object->getPaymentMethod());
    }
}
