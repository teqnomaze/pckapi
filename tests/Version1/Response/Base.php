<?php

namespace Tests\Teqnomaze\Pckapi\V1;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Response
 * @group Response
 */
class Base extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Response\Base $base
     */
    protected $base;

    protected function setUp(): void
    {
        parent::setUp();

        $this->base = new \Teqnomaze\Pckapi\V1\Response\Base();
    }

    protected function tearDown(): void
    {
        unset($this->base);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\Base::class,
            $this->base->setReturn(new \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse())
        );

        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse::class,
            $this->base->getReturn()
        );
    }

    public function testCreateResponse(): void
    {
        $base = $this->base->createSuccessResponse(101);
        static::assertInstanceOf(\Teqnomaze\Pckapi\V1\Response\Base::class, $base);
        static::assertInstanceOf(\Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse::class, $base->getReturn());
        static::assertEquals(0, $base->getReturn()->getOperationResult());

        $base = $this->base->createErrorResponse('Error message!');
        static::assertInstanceOf(\Teqnomaze\Pckapi\V1\Response\Base::class, $base);
        static::assertInstanceOf(\Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse::class, $base->getReturn());
        static::assertEquals(1, $base->getReturn()->getOperationResult());
        static::assertEquals('Error message!', $base->getReturn()->getHumanErrorMessage());
    }
}
