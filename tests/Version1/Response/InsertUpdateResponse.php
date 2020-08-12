<?php

namespace Tests\Teqnomaze\Pckapi\V1\Response;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse
 * @group Response
 */
class InsertUpdateResponse extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // deltaId
        $deltaId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse::class,
            $this->object->setDeltaId($deltaId)
        );
        static::assertEquals($deltaId, $this->object->getDeltaId());

        // errorHelpLink
        $link = 'http://www.' . Uuid::uuid1()->toString() . '.com/';
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse::class,
            $this->object->setErrorHelpLink($link)
        );
        static::assertEquals($link, $this->object->getErrorHelpLink());

        // errorMessage
        $message = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse::class,
            $this->object->setErrorMessage($message)
        );
        static::assertEquals($message, $this->object->getErrorMessage());

        // humanErrorMessage
        $message = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse::class,
            $this->object->setHumanErrorMessage($message)
        );
        static::assertEquals($message, $this->object->getHumanErrorMessage());

        // operationResult
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse::class,
            $this->object->setOperationResult(0)
        );
        static::assertEquals(0, $this->object->getOperationResult());
    }
}
