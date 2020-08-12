<?php

namespace Teqnomaze\Pckapi\V1\Struct;

class WebCompany
{
    /**
     * @var string $deliveryAddressLine1
     */
    public $deliveryAddressLine1 = null;

    /**
     * @var string $deliveryAddressLine2
     */
    public $deliveryAddressLine2 = null;

    /**
     * @var string $deliveryCity
     */
    public $deliveryCity = null;

    /**
     * @var string $deliveryZipCode
     */
    public $deliveryZipCode = null;

    /**
     * @var bool $demo
     */
    public $demo = null;

    /**
     * @var string $demoWebshopNo
     */
    public $demoWebshopNo = null;

    /**
     * @var string $email
     */
    public $email = null;

    /**
     * @var string $emailWebshopInfo
     */
    public $emailWebshopInfo = null;

    /**
     * @var string $fax
     */
    public $fax = null;

    /**
     * @var string $invoiceAddressLine1
     */
    public $invoiceAddressLine1 = null;

    /**
     * @var string $invoiceAddressLine2
     */
    public $invoiceAddressLine2 = null;

    /**
     * @var string $invoiceCity
     */
    public $invoiceCity = null;

    /**
     * @var string $invoiceZipCode
     */
    public $invoiceZipCode = null;

    /**
     * @var string $legalName
     */
    public $legalName = null;

    /**
     * @var string $licenseNo
     */
    public $licenseNo = null;

    /**
     * @var string $name
     */
    public $name = null;

    /**
     * @var string $orgNo
     */
    public $orgNo = null;

    /**
     * @var string $password
     */
    public $password = null;

    /**
     * @var string $phone
     */
    public $phone = null;

    /**
     * @var string $postAddressLine1
     */
    public $postAddressLine1 = null;

    /**
     * @var string $postAddressLine2
     */
    public $postAddressLine2 = null;

    /**
     * @var string $postCity
     */
    public $postCity = null;

    /**
     * @var string $postZipCode
     */
    public $postZipCode = null;

    /**
     * @return string|null
     */
    public function getDeliveryAddressLine1(): ?string
    {
        return $this->deliveryAddressLine1;
    }

    /**
     * @param  string $deliveryAddressLine1
     * @return self
     */
    public function setDeliveryAddressLine1(string $deliveryAddressLine1): self
    {
        $this->deliveryAddressLine1 = $deliveryAddressLine1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryAddressLine2(): ?string
    {
        return $this->deliveryAddressLine2;
    }

    /**
     * @param  string $deliveryAddressLine2
     * @return self
     */
    public function setDeliveryAddressLine2(string $deliveryAddressLine2): self
    {
        $this->deliveryAddressLine2 = $deliveryAddressLine2;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryCity(): ?string
    {
        return $this->deliveryCity;
    }

    /**
     * @param  string $deliveryCity
     * @return self
     */
    public function setDeliveryCity(string $deliveryCity): self
    {
        $this->deliveryCity = $deliveryCity;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryZipCode(): ?string
    {
        return $this->deliveryZipCode;
    }

    /**
     * @param  string $deliveryZipCode
     * @return self
     */
    public function setDeliveryZipCode(string $deliveryZipCode): self
    {
        $this->deliveryZipCode = $deliveryZipCode;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDemo(): ?bool
    {
        return $this->demo;
    }

    /**
     * @param  bool $demo
     * @return self
     */
    public function setDemo(bool $demo): self
    {
        $this->demo = $demo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDemoWebshopNo(): ?string
    {
        return $this->demoWebshopNo;
    }

    /**
     * @param  string $demoWebshopNo
     * @return self
     */
    public function setDemoWebshopNo(string $demoWebshopNo): self
    {
        $this->demoWebshopNo = $demoWebshopNo;
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
    public function getEmailWebshopInfo(): ?string
    {
        return $this->emailWebshopInfo;
    }

    /**
     * @param  string $emailWebshopInfo
     * @return self
     */
    public function setEmailWebshopInfo(string $emailWebshopInfo): self
    {
        $this->emailWebshopInfo = $emailWebshopInfo;
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
    public function getInvoiceAddressLine1(): ?string
    {
        return $this->invoiceAddressLine1;
    }

    /**
     * @param  string $invoiceAddressLine1
     * @return self
     */
    public function setInvoiceAddressLine1(string $invoiceAddressLine1): self
    {
        $this->invoiceAddressLine1 = $invoiceAddressLine1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInvoiceAddressLine2(): ?string
    {
        return $this->invoiceAddressLine2;
    }

    /**
     * @param  string $invoiceAddressLine2
     * @return self
     */
    public function setInvoiceAddressLine2(string $invoiceAddressLine2): self
    {
        $this->invoiceAddressLine2 = $invoiceAddressLine2;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInvoiceCity(): ?string
    {
        return $this->invoiceCity;
    }

    /**
     * @param  string $invoiceCity
     * @return self
     */
    public function setInvoiceCity(string $invoiceCity): self
    {
        $this->invoiceCity = $invoiceCity;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInvoiceZipCode(): ?string
    {
        return $this->invoiceZipCode;
    }

    /**
     * @param  string $invoiceZipCode
     * @return self
     */
    public function setInvoiceZipCode(string $invoiceZipCode): self
    {
        $this->invoiceZipCode = $invoiceZipCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLegalName(): ?string
    {
        return $this->legalName;
    }

    /**
     * @param  string $legalName
     * @return self
     */
    public function setLegalName(string $legalName): self
    {
        $this->legalName = $legalName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLicenseNo(): ?string
    {
        return $this->licenseNo;
    }

    /**
     * @param  string $licenseNo
     * @return self
     */
    public function setLicenseNo(string $licenseNo): self
    {
        $this->licenseNo = $licenseNo;
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
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param  string $password
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param  string $phone
     * @return self
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostAddressLine1(): ?string
    {
        return $this->postAddressLine1;
    }

    /**
     * @param  string $postAddressLine1
     * @return self
     */
    public function setPostAddressLine1(string $postAddressLine1): self
    {
        $this->postAddressLine1 = $postAddressLine1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostAddressLine2(): ?string
    {
        return $this->postAddressLine2;
    }

    /**
     * @param  string $postAddressLine2
     * @return self
     */
    public function setPostAddressLine2(string $postAddressLine2): self
    {
        $this->postAddressLine2 = $postAddressLine2;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostCity(): ?string
    {
        return $this->postCity;
    }

    /**
     * @param  string $postCity
     * @return self
     */
    public function setPostCity(string $postCity): self
    {
        $this->postCity = $postCity;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostZipCode(): ?string
    {
        return $this->postZipCode;
    }

    /**
     * @param  string $postZipCode
     * @return self
     */
    public function setPostZipCode(string $postZipCode): self
    {
        $this->postZipCode = $postZipCode;
        return $this;
    }
}
