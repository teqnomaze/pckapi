<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\CustomerGroup
 * @group Struct
 */
class CustomerGroup extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\CustomerGroup $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\CustomerGroup();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // customerGroupId
        $customerGroupId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\CustomerGroup::class,
            $this->object->setCustomerGroupId($customerGroupId)
        );
        static::assertEquals($customerGroupId, $this->object->getCustomerGroupId());

        // name
        $name = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\CustomerGroup::class,
            $this->object->setName($name)
        );
        static::assertEquals($name, $this->object->getName());
    }
}
