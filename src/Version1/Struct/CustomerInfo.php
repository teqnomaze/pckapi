<?php

namespace Teqnomaze\Pckapi\V1\Struct;

class CustomerInfo
{
    /**
     * @var int $pckCustomerId
     */
    public $pckCustomerId = null;

    /**
     * @var int $deltaCustomerId
     */
    public $deltaCustomerId = null;

    /**
     * @var string $name
     */
    public $name = null;

    /**
     * @var string $email
     */
    public $email = null;

    /**
     * @var string $orgNo
     */
    public $orgNo = null;

    /**
     * @var string $phoneNo
     */
    public $phoneNo = null;

    /**
     * @var string $address1
     */
    public $address1 = null;

    /**
     * @var string $address2
     */
    public $address2 = null;

    /**
     * @var string $postCity
     */
    public $postCity = null;

    /**
     * @var string $postNo
     */
    public $postNo = null;

    /**
     * @var int $countryCode
     */
    public $countryCode = null;

    /**
     * @var bool $creditApproved
     */
    public $creditApproved = null;

    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\CustomerGroup $customerGroup
     */
    public $customerGroup = null;

    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\Discount[] $listDiscounts
     */
    public $listDiscounts = null;

    /**
     * @var string $welcomeMessage
     */
    public $welcomeMessage = null;

    /**
     * @return int|null
     */
    public function getPckCustomerId(): ?int
    {
        return $this->pckCustomerId;
    }

    /**
     * @param  int $pckCustomerId
     * @return self
     */
    public function setPckCustomerId(int $pckCustomerId): self
    {
        $this->pckCustomerId = $pckCustomerId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDeltaCustomerId(): ?int
    {
        return $this->deltaCustomerId;
    }

    /**
     * @param  int $deltaCustomerId
     * @return self
     */
    public function setDeltaCustomerId(int $deltaCustomerId): self
    {
        $this->deltaCustomerId = $deltaCustomerId;
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
    public function getPhoneNo(): ?string
    {
        return $this->phoneNo;
    }

    /**
     * @param  string $phoneNo
     * @return self
     */
    public function setPhoneNo(string $phoneNo): self
    {
        $this->phoneNo = $phoneNo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    /**
     * @param  string $address1
     * @return self
     */
    public function setAddress1(string $address1): self
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    /**
     * @param  string $address2
     * @return self
     */
    public function setAddress2(string $address2): self
    {
        $this->address2 = $address2;
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
    public function getPostNo(): ?string
    {
        return $this->postNo;
    }

    /**
     * @param  string $postNo
     * @return self
     */
    public function setPostNo(string $postNo): self
    {
        $this->postNo = $postNo;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCountryCode(): ?int
    {
        return $this->countryCode;
    }

    /**
     * @param  int $countryCode
     * @return self
     */
    public function setCountryCode(int $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCreditApproved(): ?bool
    {
        return $this->creditApproved;
    }

    /**
     * @param  bool $creditApproved
     * @return self
     */
    public function setCreditApproved(bool $creditApproved): self
    {
        $this->creditApproved = $creditApproved;
        return $this;
    }

    /**
     * @return \Teqnomaze\Pckapi\V1\Struct\CustomerGroup|null
     */
    public function getCustomerGroup(): ?\Teqnomaze\Pckapi\V1\Struct\CustomerGroup
    {
        return $this->customerGroup;
    }

    /**
     * @param  \Teqnomaze\Pckapi\V1\Struct\CustomerGroup $customerGroup
     * @return self
     */
    public function setCustomerGroup(\Teqnomaze\Pckapi\V1\Struct\CustomerGroup $customerGroup): self
    {
        $this->customerGroup = $customerGroup;
        return $this;
    }

    /**
     * @return \Teqnomaze\Pckapi\V1\Struct\Discount[]|null
     */
    public function getListDiscounts(): ?array
    {
        return $this->listDiscounts;
    }

    /**
     * @param  \Teqnomaze\Pckapi\V1\Struct\Discount[] $listDiscounts
     * @return self
     */
    public function setListDiscounts(array $listDiscounts): self
    {
        $this->listDiscounts = $listDiscounts;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWelcomeMessage(): ?string
    {
        return $this->welcomeMessage;
    }

    /**
     * @param  string $welcomeMessage
     * @return self
     */
    public function setWelcomeMessage(string $welcomeMessage): self
    {
        $this->welcomeMessage = $welcomeMessage;
        return $this;
    }
}
