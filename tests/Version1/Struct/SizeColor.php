<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\SizeColor
 * @group Struct
 */
class SizeColor extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\SizeColor $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\SizeColor();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // color
        $color = new \Teqnomaze\Pckapi\V1\Struct\Color();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\SizeColor::class,
            $this->object->setColor($color)
        );
        static::assertEquals($color, $this->object->getColor());

        // confirmedDelivery
        $confirmedDelivery = true;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\SizeColor::class,
            $this->object->setConfirmedDelivery($confirmedDelivery)
        );
        static::assertEquals($confirmedDelivery, $this->object->getConfirmedDelivery());

        // eans
        $eans = ['key' => 'value'];
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\SizeColor::class,
            $this->object->setEans($eans)
        );
        static::assertEquals($eans, $this->object->getEans());

        // expectedDeliveryAmount
        $expectedDeliveryAmount = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\SizeColor::class,
            $this->object->setExpectedDeliveryAmount($expectedDeliveryAmount)
        );
        static::assertEquals($expectedDeliveryAmount, $this->object->getExpectedDeliveryAmount());

        // expectedDeliveryDate
        $expectedDeliveryDate = new \DateTime();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\SizeColor::class,
            $this->object->setExpectedDeliveryDate($expectedDeliveryDate)
        );
        static::assertEquals($expectedDeliveryDate, $this->object->getExpectedDeliveryDate());

        // info
        $info = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\SizeColor::class,
            $this->object->setInfo($info)
        );
        static::assertEquals($info, $this->object->getInfo());

        // size
        $size = new \Teqnomaze\Pckapi\V1\Struct\Size();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\SizeColor::class,
            $this->object->setSize($size)
        );
        static::assertEquals($size, $this->object->getSize());

        // sizeColorId
        $sizeColorId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\SizeColor::class,
            $this->object->setSizeColorId($sizeColorId)
        );
        static::assertEquals($sizeColorId, $this->object->getSizeColorId());

        // sizeColorInUse
        $sizeColorInUse = true;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\SizeColor::class,
            $this->object->setSizeColorInUse($sizeColorInUse)
        );
        static::assertEquals($sizeColorInUse, $this->object->getSizeColorInUse());

        // stockCount
        $stockCount = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\SizeColor::class,
            $this->object->setStockCount($stockCount)
        );
        static::assertEquals($stockCount, $this->object->getStockCount());

        // stockDetails
        $stockDetails = [new \Teqnomaze\Pckapi\V1\Struct\StockDetail()];
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\SizeColor::class,
            $this->object->setStockDetails($stockDetails)
        );
        static::assertEquals($stockDetails, $this->object->getStockDetails());

        // timestamp
        $timestamp = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\SizeColor::class,
            $this->object->setTimestamp($timestamp)
        );
        static::assertEquals($timestamp, $this->object->getTimestamp());
    }
}
