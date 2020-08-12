<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\Customer
 * @group Struct
 */
class Customer extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\Customer $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\Customer();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // contactId
        $contactId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Customer::class,
            $this->object->setContactId($contactId)
        );
        static::assertEquals($contactId, $this->object->getContactId());

        // name
        $name = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Customer::class,
            $this->object->setName($name)
        );
        static::assertEquals($name, $this->object->getName());

        // email
        $email = 'someone@example.com';
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Customer::class,
            $this->object->setEmail($email)
        );
        static::assertEquals($email, $this->object->getEmail());

        // fax
        $fax = '9876543210';
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Customer::class,
            $this->object->setFax($fax)
        );
        static::assertEquals($fax, $this->object->getFax());

        // invoiceAddress
        $invoiceAddress = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Customer::class,
            $this->object->setInvoiceAddress($invoiceAddress)
        );
        static::assertEquals($invoiceAddress, $this->object->getInvoiceAddress());

        // invoiceAddress2
        $invoiceAddress2 = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Customer::class,
            $this->object->setInvoiceAddress2($invoiceAddress2)
        );
        static::assertEquals($invoiceAddress2, $this->object->getInvoiceAddress2());

        // invoiceOnEmail
        $invoiceOnEmail = true;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Customer::class,
            $this->object->setInvoiceOnEmail($invoiceOnEmail)
        );
        static::assertEquals($invoiceOnEmail, $this->object->getInvoiceOnEmail());

        // invoicePostCity
        $invoicePostCity = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Customer::class,
            $this->object->setInvoicePostCity($invoicePostCity)
        );
        static::assertEquals($invoicePostCity, $this->object->getInvoicePostCity());

        // invoicePostNo
        $invoicePostNo = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Customer::class,
            $this->object->setInvoicePostNo($invoicePostNo)
        );
        static::assertEquals($invoicePostNo, $this->object->getInvoicePostNo());

        // orgNo
        $orgNo = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Customer::class,
            $this->object->setOrgNo($orgNo)
        );
        static::assertEquals($orgNo, $this->object->getOrgNo());

        // phone1
        $phone1 = '9876543210';
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Customer::class,
            $this->object->setPhone1($phone1)
        );
        static::assertEquals($phone1, $this->object->getPhone1());
    }
}
