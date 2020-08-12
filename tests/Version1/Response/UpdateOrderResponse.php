<?php

namespace Tests\Teqnomaze\Pckapi\V1\Response;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Response\UpdateOrderResponse
 * @group Response
 */
class UpdateOrderResponse extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Response\UpdateOrderResponse $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Response\UpdateOrderResponse();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // amount
        $amount = (float) rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\UpdateOrderResponse::class,
            $this->object->setAmount($amount)
        );
        static::assertEquals($this->object->getAmount(), $amount);

        // authorzationId
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\UpdateOrderResponse::class,
            $this->object->setAuthorzationId('Test authorzationId')
        );
        static::assertEquals($this->object->getAuthorzationId(), 'Test authorzationId');

        // extraCost
        $extraCost = (float) rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\UpdateOrderResponse::class,
            $this->object->setExtraCost($extraCost)
        );
        static::assertEquals($this->object->getExtraCost(), $extraCost);

        // freightCost
        $freightCost = (float) rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\UpdateOrderResponse::class,
            $this->object->setFreightCost($freightCost)
        );
        static::assertEquals($this->object->getFreightCost(), $freightCost);

        // insertUpdate
        $insertUpdate = new \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\UpdateOrderResponse::class,
            $this->object->setInsertUpdate($insertUpdate)
        );
        static::assertEquals($insertUpdate, $this->object->getInsertUpdate());

        // paymentMethod
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\UpdateOrderResponse::class,
            $this->object->setPaymentMethod('COD')
        );
        static::assertEquals($this->object->getPaymentMethod(), 'COD');
    }
}
