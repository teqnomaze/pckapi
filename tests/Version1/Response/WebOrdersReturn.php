<?php

namespace Tests\Teqnomaze\Pckapi\V1\Response;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Response\WebOrdersReturn
 * @group Response
 */
class WebOrdersReturn extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Response\WebOrdersReturn $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Response\WebOrdersReturn();
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
            \Teqnomaze\Pckapi\V1\Response\WebOrdersReturn::class,
            $this->object->setInsertUpdate($insertUpdate)
        );
        static::assertEquals($insertUpdate, $this->object->getInsertUpdate());

        // listWebOrders
        $listWebOrders = [new \Teqnomaze\Pckapi\V1\Struct\Order()];
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\WebOrdersReturn::class,
            $this->object->setListWebOrders($listWebOrders)
        );
        static::assertIsArray($this->object->getListWebOrders());
        foreach ($this->object->getListWebOrders() as $key => $value) {
            static::assertInstanceOf(\Teqnomaze\Pckapi\V1\Struct\Order::class, $value);
        }
    }
}
