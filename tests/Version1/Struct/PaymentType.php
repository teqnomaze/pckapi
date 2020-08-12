<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\PaymentType
 * @group Struct
 */
class PaymentType extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\PaymentType $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\PaymentType();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // paymentId
        $paymentId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\PaymentType::class,
            $this->object->setPaymentId($paymentId)
        );
        static::assertEquals($paymentId, $this->object->getPaymentId());

        // name
        $name = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\PaymentType::class,
            $this->object->setName($name)
        );
        static::assertEquals($name, $this->object->getName());
    }
}
