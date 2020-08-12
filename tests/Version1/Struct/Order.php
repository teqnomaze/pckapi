<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\Order
 * @group Struct
 */
class Order extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\Order $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\Order();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // deltaOrderId
        $deltaOrderId = rand(100, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setDeltaOrderId($deltaOrderId)
        );
        static::assertEquals($deltaOrderId, $this->object->getDeltaOrderId());

        // contactAddressline1
        $contactAddressline1 = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setContactAddressline1($contactAddressline1)
        );
        static::assertEquals($contactAddressline1, $this->object->getContactAddressline1());

        // contactAddressline2
        $contactAddressline2 = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setContactAddressline2($contactAddressline2)
        );
        static::assertEquals($contactAddressline2, $this->object->getContactAddressline2());

        // contactId
        $contactId = rand(10, 20);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setContactId($contactId)
        );
        static::assertEquals($contactId, $this->object->getContactId());

        // contactName
        $contactName = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setContactName($contactName)
        );
        static::assertEquals($contactName, $this->object->getContactName());

        // contactPostCity
        $contactPostCity = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setContactPostCity($contactPostCity)
        );
        static::assertEquals($contactPostCity, $this->object->getContactPostCity());

        // contactPostNo
        $contactPostNo = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setContactPostNo($contactPostNo)
        );
        static::assertEquals($contactPostNo, $this->object->getContactPostNo());

        // deliveryAddressLine1
        $deliveryAddressLine1 = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setDeliveryAddressLine1($deliveryAddressLine1)
        );
        static::assertEquals($deliveryAddressLine1, $this->object->getDeliveryAddressLine1());

        // deliveryAddressLine2
        $deliveryAddressLine2 = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setDeliveryAddressLine2($deliveryAddressLine2)
        );
        static::assertEquals($deliveryAddressLine2, $this->object->getDeliveryAddressLine2());

        // deliveryName
        $deliveryName = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setDeliveryName($deliveryName)
        );
        static::assertEquals($deliveryName, $this->object->getDeliveryName());

        // deliveryPostCity
        $deliveryPostCity = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setDeliveryPostCity($deliveryPostCity)
        );
        static::assertEquals($deliveryPostCity, $this->object->getDeliveryPostCity());

        // deliveryPostNo
        $deliveryPostNo = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setDeliveryPostNo($deliveryPostNo)
        );
        static::assertEquals($deliveryPostNo, $this->object->getDeliveryPostNo());

        // email
        $email = Uuid::uuid1()->toString().'@example.com';
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setEmail($email)
        );
        static::assertEquals($email, $this->object->getEmail());

        // extraCost
        $extraCost = 25.40;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setExtraCost($extraCost)
        );
        static::assertEquals($extraCost, $this->object->getExtraCost());

        // extraCostDescription
        $extraCostDescription = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setExtraCostDescription($extraCostDescription)
        );
        static::assertEquals($extraCostDescription, $this->object->getExtraCostDescription());

        // freightCost
        $freightCost = 10.20;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setFreightCost($freightCost)
        );
        static::assertEquals($freightCost, $this->object->getFreightCost());

        // freightCostDescription
        $freightCostDescription = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setFreightCostDescription($freightCostDescription)
        );
        static::assertEquals($freightCostDescription, $this->object->getFreightCostDescription());

        // message
        $message = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setMessage($message)
        );
        static::assertEquals($message, $this->object->getMessage());

        // orderLines
        $orderLines = [new \Teqnomaze\Pckapi\V1\Struct\OrderLine()];
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setOrderLines($orderLines)
        );
        static::assertIsArray($this->object->getOrderLines());
        foreach ($this->object->getOrderLines() as $key => $value) {
            static::assertInstanceOf(\Teqnomaze\Pckapi\V1\Struct\OrderLine::class, $value);
        }

        // paymentMethod
        $paymentMethod = rand(0, 10);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setPaymentMethod($paymentMethod)
        );
        static::assertEquals($paymentMethod, $this->object->getPaymentMethod());

        // phone
        $phone = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setPhone($phone)
        );
        static::assertEquals($phone, $this->object->getPhone());

        // storePickup
        $storePickup = true;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setStorePickup($storePickup)
        );
        static::assertTrue($this->object->getStorePickup());

        // taxExempt
        $taxExempt = true;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setTaxExempt($taxExempt)
        );
        static::assertTrue($this->object->getTaxExempt());

        // wantedDeliveryTime
        $wantedDeliveryTime = new \DateTime();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setWantedDeliveryTime($wantedDeliveryTime)
        );
        static::assertEquals($wantedDeliveryTime, $this->object->getWantedDeliveryTime());

        // alternativeTax
        $alternativeTax = true;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setAlternativeTax($alternativeTax)
        );
        static::assertTrue($this->object->getAlternativeTax());

        // deliveredItemsAndCapturedPaymentInfo
        $info = new \Teqnomaze\Pckapi\V1\Struct\DeliveredItemsAndCapturedPaymentInfo();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Order::class,
            $this->object->setDeliveredItemsAndCapturedPaymentInfo($info)
        );
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\DeliveredItemsAndCapturedPaymentInfo::class,
            $this->object->getDeliveredItemsAndCapturedPaymentInfo()
        );
    }
}
