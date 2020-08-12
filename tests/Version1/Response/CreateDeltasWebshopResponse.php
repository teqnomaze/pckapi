<?php

namespace Tests\Teqnomaze\Pckapi\V1\Response;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Response\CreateDeltasWebshopResponse
 * @group Response
 */
class CreateDeltasWebshopResponse extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Response\CreateDeltasWebshopResponse $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Response\CreateDeltasWebshopResponse();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // deltasoftId
        $deltasoftId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\CreateDeltasWebshopResponse::class,
            $this->object->setDeltasoftId($deltasoftId)
        );
        static::assertEquals($deltasoftId, $this->object->getDeltasoftId());

        // adminUserName
        $adminUserName = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\CreateDeltasWebshopResponse::class,
            $this->object->setAdminUserName($adminUserName)
        );
        static::assertEquals($adminUserName, $this->object->getAdminUserName());

        // adminUserPassword
        $adminUserPassword = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\CreateDeltasWebshopResponse::class,
            $this->object->setAdminUserPassword($adminUserPassword)
        );
        static::assertEquals($adminUserPassword, $this->object->getAdminUserPassword());

        // insertUpdate
        $insertUpdate = new \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\CreateDeltasWebshopResponse::class,
            $this->object->setInsertUpdate($insertUpdate)
        );
        static::assertEquals($insertUpdate, $this->object->getInsertUpdate());

        // password
        $password = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\CreateDeltasWebshopResponse::class,
            $this->object->setPassword($password)
        );
        static::assertEquals($password, $this->object->getPassword());
    }
}
