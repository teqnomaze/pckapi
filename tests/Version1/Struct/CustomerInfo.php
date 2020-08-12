<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\CustomerInfo
 * @group Struct
 */
class CustomerInfo extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\CustomerInfo $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\CustomerInfo();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // pckCustomerId
        $pckCustomerId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\CustomerInfo::class,
            $this->object->setPckCustomerId($pckCustomerId)
        );
        static::assertEquals($pckCustomerId, $this->object->getPckCustomerId());

        // deltaCustomerId
        $deltaCustomerId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\CustomerInfo::class,
            $this->object->setDeltaCustomerId($deltaCustomerId)
        );
        static::assertEquals($deltaCustomerId, $this->object->getDeltaCustomerId());

        // name
        $name = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\CustomerInfo::class,
            $this->object->setName($name)
        );
        static::assertEquals($name, $this->object->getName());

        // email
        $email = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\CustomerInfo::class,
            $this->object->setEmail($email)
        );
        static::assertEquals($email, $this->object->getEmail());

        // orgNo
        $orgNo = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\CustomerInfo::class,
            $this->object->setOrgNo($orgNo)
        );
        static::assertEquals($orgNo, $this->object->getOrgNo());

        // phoneNo
        $phoneNo = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\CustomerInfo::class,
            $this->object->setPhoneNo($phoneNo)
        );
        static::assertEquals($phoneNo, $this->object->getPhoneNo());

        // address1
        $address1 = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\CustomerInfo::class,
            $this->object->setAddress1($address1)
        );
        static::assertEquals($address1, $this->object->getAddress1());

        // address2
        $address2 = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\CustomerInfo::class,
            $this->object->setAddress2($address2)
        );
        static::assertEquals($address2, $this->object->getAddress2());

        // postCity
        $postCity = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\CustomerInfo::class,
            $this->object->setPostCity($postCity)
        );
        static::assertEquals($postCity, $this->object->getPostCity());

        // postNo
        $postNo = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\CustomerInfo::class,
            $this->object->setPostNo($postNo)
        );
        static::assertEquals($postNo, $this->object->getPostNo());

        // countryCode
        $countryCode = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\CustomerInfo::class,
            $this->object->setCountryCode($countryCode)
        );
        static::assertEquals($countryCode, $this->object->getCountryCode());

        // creditApproved
        $creditApproved = true;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\CustomerInfo::class,
            $this->object->setCreditApproved($creditApproved)
        );
        static::assertEquals($creditApproved, $this->object->getCreditApproved());

        // customerGroup
        $customerGroup = new \Teqnomaze\Pckapi\V1\Struct\CustomerGroup();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\CustomerInfo::class,
            $this->object->setCustomerGroup($customerGroup)
        );
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\CustomerGroup::class,
            $this->object->getCustomerGroup()
        );

        // listDiscounts
        $listDiscounts = [new \Teqnomaze\Pckapi\V1\Struct\Discount()];
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\CustomerInfo::class,
            $this->object->setListDiscounts($listDiscounts)
        );
        static::assertEquals($listDiscounts, $this->object->getListDiscounts());

        // welcomeMessage
        $welcomeMessage = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\CustomerInfo::class,
            $this->object->setWelcomeMessage($welcomeMessage)
        );
        static::assertEquals($welcomeMessage, $this->object->getWelcomeMessage());
    }
}
