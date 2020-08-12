<?php

namespace Tests\Teqnomaze\Pckapi\V1\Response;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Response\GetPaymentTypesResponse
 * @group Response
 */
class GetPaymentTypesResponse extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Response\GetPaymentTypesResponse $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Response\GetPaymentTypesResponse();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // insertUpdate
        $insertUpdate = new \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\GetPaymentTypesResponse::class,
            $this->object->setInsertUpdate($insertUpdate)
        );
        static::assertEquals($insertUpdate, $this->object->getInsertUpdate());

        // paymentType
        $paymentTypes = [new \Teqnomaze\Pckapi\V1\Struct\PaymentType()];
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\GetPaymentTypesResponse::class,
            $this->object->setPayments($paymentTypes)
        );
        static::assertIsArray($this->object->getPayments());
        foreach ($this->object->getPayments() as $key => $value) {
            static::assertInstanceOf(\Teqnomaze\Pckapi\V1\Struct\PaymentType::class, $value);
        }
    }
}
