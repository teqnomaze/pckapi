<?php

namespace Tests\Teqnomaze\Pckapi\V1\Response;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Response\CreditApplicantsReturn
 * @group Response
 */
class CreditApplicantsReturn extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Response\CreditApplicantsReturn $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Response\CreditApplicantsReturn();
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
            \Teqnomaze\Pckapi\V1\Response\CreditApplicantsReturn::class,
            $this->object->setInsertUpdate($insertUpdate)
        );
        static::assertEquals($insertUpdate, $this->object->getInsertUpdate());

        // listCustomers
        $listCustomers = [new \Teqnomaze\Pckapi\V1\Struct\Customer()];
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\CreditApplicantsReturn::class,
            $this->object->setListCustomers($listCustomers)
        );
        static::assertIsArray($this->object->getListCustomers());
        foreach ($this->object->getListCustomers() as $key => $value) {
            static::assertInstanceOf(\Teqnomaze\Pckapi\V1\Struct\Customer::class, $value);
        }
    }
}
