<?php

namespace Tests\Teqnomaze\Pckapi\V1\Response;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Response\Status
 * @group Response
 */
class Status extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Response\Status $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Response\Status();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // creditApplicants
        $creditApplicants = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\Status::class,
            $this->object->setCreditApplicants($creditApplicants)
        );
        static::assertEquals($this->object->getCreditApplicants(), $creditApplicants);

        // message
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\Status::class,
            $this->object->setMessage('Test message')
        );
        static::assertEquals($this->object->getMessage(), 'Test message');

        // onlineCustomers
        $onlineCustomers = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\Status::class,
            $this->object->setOnlineCustomers($onlineCustomers)
        );
        static::assertEquals($this->object->getOnlineCustomers(), $onlineCustomers);

        // operationResult
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\Status::class,
            $this->object->setOperationResult(1)
        );
        static::assertEquals($this->object->getOperationResult(), 1);

        // orders
        $orders = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\Status::class,
            $this->object->setOrders($orders)
        );
        static::assertEquals($this->object->getOrders(), $orders);
    }
}
