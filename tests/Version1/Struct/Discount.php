<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\Discount
 * @group Struct
 */
class Discount extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\Discount $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\Discount();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // discountId
        $discountId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Discount::class,
            $this->object->setDiscountId($discountId)
        );
        static::assertEquals($discountId, $this->object->getDiscountId());

        // articleId
        $articleId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Discount::class,
            $this->object->setArticleId($articleId)
        );
        static::assertEquals($articleId, $this->object->getArticleId());

        // categoryId
        $categoryId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Discount::class,
            $this->object->setCategoryId($categoryId)
        );
        static::assertEquals($categoryId, $this->object->getCategoryId());

        // category2Id
        $category2Id = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Discount::class,
            $this->object->setCategoryId2($category2Id)
        );
        static::assertEquals($category2Id, $this->object->getCategoryId2());

        // count
        $count = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Discount::class,
            $this->object->setCount($count)
        );
        static::assertEquals($count, $this->object->getCount());

        // customerId
        $customerId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Discount::class,
            $this->object->setCustomerId($customerId)
        );
        static::assertEquals($customerId, $this->object->getCustomerId());

        // customerGroupId
        $customerGroupId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Discount::class,
            $this->object->setCustomerGroupId($customerGroupId)
        );
        static::assertEquals($customerGroupId, $this->object->getCustomerGroupId());

        // deleteDiscount
        $deleteDiscount = true;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Discount::class,
            $this->object->setDeleteDiscount($deleteDiscount)
        );
        static::assertEquals($deleteDiscount, $this->object->getDeleteDiscount());

        // discount1
        $discount1 = (float) rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Discount::class,
            $this->object->setDiscount1($discount1)
        );
        static::assertEquals($discount1, $this->object->getDiscount1());

        // manufacturerId
        $manufacturerId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Discount::class,
            $this->object->setManufacturerId($manufacturerId)
        );
        static::assertEquals($manufacturerId, $this->object->getManufacturerId());

        // discount1
        $discount1 = (float) rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Discount::class,
            $this->object->setDiscount1($discount1)
        );
        static::assertEquals($discount1, $this->object->getDiscount1());

        // priceAdjustment
        $priceAdjustment = (float) rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Discount::class,
            $this->object->setPriceAdjustment($priceAdjustment)
        );
        static::assertEquals($priceAdjustment, $this->object->getPriceAdjustment());

        // priceType
        $priceType = rand(0, 17);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Discount::class,
            $this->object->setPriceType($priceType)
        );
        static::assertEquals($priceType, $this->object->getPriceType());

        // expectedDeliveryDate
        $validUntil = new \DateTime();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Discount::class,
            $this->object->setValidUntil($validUntil)
        );
        static::assertEquals($validUntil, $this->object->getValidUntil());
    }
}
