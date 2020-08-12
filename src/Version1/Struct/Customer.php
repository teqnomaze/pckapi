<?php

namespace Teqnomaze\Pckapi\V1\Struct;

class Customer
{
    /**
     * @var int $contactId
     */
    public $contactId = null;

    /**
     * @var string $name
     */
    public $name = null;

    /**
     * @var string $email
     */
    public $email = null;

    /**
     * @var string $fax
     */
    public $fax = null;

    /**
     * @var string $invoiceAddress
     */
    public $invoiceAddress = null;

    /**
     * @var string $invoiceAddress2
     */
    public $invoiceAddress2 = null;

    /**
     * @var bool $invoiceOnEmail
     */
    public $invoiceOnEmail = null;

    /**
     * @var string $invoicePostCity
     */
    public $invoicePostCity = null;

    /**
     * @var string $invoicePostNo
     */
    public $invoicePostNo = null;

    /**
     * @var string $orgNo
     */
    public $orgNo = null;

    /**
     * @var string $phone1
     */
    public $phone1 = null;

    /**
     * @return int|null
     */
    public function getContactId(): ?int
    {
        return $this->contactId;
    }

    /**
     * @param  int $contactId
     * @return self
     */
    public function setContactId(int $contactId): self
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param  string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param  string $email
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }

    /**
     * @param  string $fax
     * @return self
     */
    public function setFax(string $fax): self
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInvoiceAddress(): ?string
    {
        return $this->invoiceAddress;
    }

    /**
     * @param  string $invoiceAddress
     * @return self
     */
    public function setInvoiceAddress(string $invoiceAddress): self
    {
        $this->invoiceAddress = $invoiceAddress;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInvoiceAddress2(): ?string
    {
        return $this->invoiceAddress2;
    }

    /**
     * @param  string $invoiceAddress2
     * @return self
     */
    public function setInvoiceAddress2(string $invoiceAddress2): self
    {
        $this->invoiceAddress2 = $invoiceAddress2;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getInvoiceOnEmail(): ?bool
    {
        return $this->invoiceOnEmail;
    }

    /**
     * @param  bool $invoiceOnEmail
     * @return self
     */
    public function setInvoiceOnEmail(bool $invoiceOnEmail): self
    {
        $this->invoiceOnEmail = $invoiceOnEmail;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInvoicePostCity(): ?string
    {
        return $this->invoicePostCity;
    }

    /**
     * @param  string $invoicePostCity
     * @return self
     */
    public function setInvoicePostCity(string $invoicePostCity): self
    {
        $this->invoicePostCity = $invoicePostCity;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInvoicePostNo(): ?string
    {
        return $this->invoicePostNo;
    }

    /**
     * @param  string $invoicePostNo
     * @return self
     */
    public function setInvoicePostNo(string $invoicePostNo): self
    {
        $this->invoicePostNo = $invoicePostNo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrgNo(): ?string
    {
        return $this->orgNo;
    }

    /**
     * @param  string $orgNo
     * @return self
     */
    public function setOrgNo(string $orgNo): self
    {
        $this->orgNo = $orgNo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone1(): ?string
    {
        return $this->phone1;
    }

    /**
     * @param  string $phone1
     * @return self
     */
    public function setPhone1(string $phone1): self
    {
        $this->phone1 = $phone1;
        return $this;
    }
}
