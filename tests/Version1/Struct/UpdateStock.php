<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\UpdateStock
 * @group Struct
 */
class UpdateStock extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\UpdateStock $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\UpdateStock();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // articleId
        $articleId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\UpdateStock::class,
            $this->object->setArticleId($articleId)
        );
        static::assertEquals($articleId, $this->object->getArticleId());

        // confirmedDelivery
        $confirmedDelivery = true;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\UpdateStock::class,
            $this->object->setConfirmedDelivery($confirmedDelivery)
        );
        static::assertEquals($confirmedDelivery, $this->object->getConfirmedDelivery());

        // count
        $count = rand(1, 100);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\UpdateStock::class,
            $this->object->setCount($count)
        );
        static::assertEquals($count, $this->object->getCount());

        // expectedDeliveryAmount
        $expectedDeliveryAmount = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\UpdateStock::class,
            $this->object->setExpectedDeliveryAmount($expectedDeliveryAmount)
        );
        static::assertEquals($expectedDeliveryAmount, $this->object->getExpectedDeliveryAmount());

        // expectedDeliveryDate
        $expectedDeliveryDate = new \DateTime();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\UpdateStock::class,
            $this->object->setExpectedDeliveryDate($expectedDeliveryDate)
        );
        static::assertEquals($expectedDeliveryDate, $this->object->getExpectedDeliveryDate());

        // sizeColorId
        $sizeColorId = rand(1, 100);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\UpdateStock::class,
            $this->object->setSizeColorId($sizeColorId)
        );
        static::assertEquals($sizeColorId, $this->object->getSizeColorId());

        // stockDetails
        $stockDetails = [new \Teqnomaze\Pckapi\V1\Struct\StockDetail()];
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\UpdateStock::class,
            $this->object->setStockDetails($stockDetails)
        );
        static::assertEquals($stockDetails, $this->object->getStockDetails());

        // timestamp
        $timestamp = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\UpdateStock::class,
            $this->object->setTimestamp($timestamp)
        );
        static::assertEquals($timestamp, $this->object->getTimestamp());
    }
}
