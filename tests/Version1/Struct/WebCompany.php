<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\WebCompany
 * @group Struct
 */
class WebCompany extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\WebCompany $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\WebCompany();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // deliveryAddressLine1
        $deliveryAddressLine1 = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setDeliveryAddressLine1($deliveryAddressLine1)
        );
        static::assertEquals($deliveryAddressLine1, $this->object->getDeliveryAddressLine1());

        // deliveryAddressLine2
        $deliveryAddressLine2 = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setDeliveryAddressLine2($deliveryAddressLine2)
        );
        static::assertEquals($deliveryAddressLine2, $this->object->getDeliveryAddressLine2());

        // deliveryCity
        $deliveryCity = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setDeliveryCity($deliveryCity)
        );
        static::assertEquals($deliveryCity, $this->object->getDeliveryCity());

        // deliveryZipCode
        $deliveryZipCode = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setDeliveryZipCode($deliveryZipCode)
        );
        static::assertEquals($deliveryZipCode, $this->object->getDeliveryZipCode());

        // demo
        $demo = true;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setDemo($demo)
        );
        static::assertTrue($this->object->getDemo());

        // demoWebshopNo
        $demoWebshopNo = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setDemoWebshopNo($demoWebshopNo)
        );
        static::assertEquals($demoWebshopNo, $this->object->getDemoWebshopNo());

        // email
        $email = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setEmail($email)
        );
        static::assertEquals($email, $this->object->getEmail());

        // emailWebshopInfo
        $emailWebshopInfo = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setEmailWebshopInfo($emailWebshopInfo)
        );
        static::assertEquals($emailWebshopInfo, $this->object->getEmailWebshopInfo());

        // fax
        $fax = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setFax($fax)
        );
        static::assertEquals($fax, $this->object->getFax());

        // invoiceAddressLine1
        $invoiceAddressLine1 = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setInvoiceAddressLine1($invoiceAddressLine1)
        );
        static::assertEquals($invoiceAddressLine1, $this->object->getInvoiceAddressLine1());

        // invoiceAddressLine2
        $invoiceAddressLine2 = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setInvoiceAddressLine2($invoiceAddressLine2)
        );
        static::assertEquals($invoiceAddressLine2, $this->object->getInvoiceAddressLine2());

        // invoiceCity
        $invoiceCity = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setInvoiceCity($invoiceCity)
        );
        static::assertEquals($invoiceCity, $this->object->getInvoiceCity());

        // invoiceZipCode
        $invoiceZipCode = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setInvoiceZipCode($invoiceZipCode)
        );
        static::assertEquals($invoiceZipCode, $this->object->getInvoiceZipCode());

        // legalName
        $legalName = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setLegalName($legalName)
        );
        static::assertEquals($legalName, $this->object->getLegalName());

        // licenseNo
        $licenseNo = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setLicenseNo($licenseNo)
        );
        static::assertEquals($licenseNo, $this->object->getLicenseNo());

        // name
        $name = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setName($name)
        );
        static::assertEquals($name, $this->object->getName());

        // orgNo
        $orgNo = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setOrgNo($orgNo)
        );
        static::assertEquals($orgNo, $this->object->getOrgNo());

        // password
        $password = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setPassword($password)
        );
        static::assertEquals($password, $this->object->getPassword());

        // phone
        $phone = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setPhone($phone)
        );
        static::assertEquals($phone, $this->object->getPhone());

        // postAddressLine1
        $postAddressLine1 = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setPostAddressLine1($postAddressLine1)
        );
        static::assertEquals($postAddressLine1, $this->object->getPostAddressLine1());

        // postAddressLine2
        $postAddressLine2 = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setPostAddressLine2($postAddressLine2)
        );
        static::assertEquals($postAddressLine2, $this->object->getPostAddressLine2());

        // postCity
        $postCity = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setPostCity($postCity)
        );
        static::assertEquals($postCity, $this->object->getPostCity());

        // postZipCode
        $postZipCode = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\WebCompany::class,
            $this->object->setPostZipCode($postZipCode)
        );
        static::assertEquals($postZipCode, $this->object->getPostZipCode());
    }
}
