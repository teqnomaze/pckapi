<?php

namespace Teqnomaze\Pckapi\V1\Struct;

use \Teqnomaze\Pckapi\V1\Struct\DeliveredItemsAndCapturedPaymentInfo;

class Order
{
    /**
     * @var int $deltaOrderId
     */
    public $deltaOrderId = null;

    /**
     * @var string $contactAddressline1
     */
    public $contactAddressline1 = null;

    /**
     * @var string $contactAddressline2
     */
    public $contactAddressline2 = null;

    /**
     * @var int $contactId
     */
    public $contactId = null;

    /**
     * @var string $contactName
     */
    public $contactName = null;

    /**
     * @var string $contactPostCity
     */
    public $contactPostCity = null;

    /**
     * @var string $contactPostNo
     */
    public $contactPostNo = null;

    /**
     * @var string $deliveryAddressLine1
     */
    public $deliveryAddressLine1 = null;

    /**
     * @var string $deliveryAddressLine2
     */
    public $deliveryAddressLine2 = null;

    /**
     * @var string $deliveryName
     */
    public $deliveryName = null;

    /**
     * @var string $deliveryPostCity
     */
    public $deliveryPostCity = null;

    /**
     * @var string $deliveryPostNo
     */
    public $deliveryPostNo = null;

    /**
     * @var string $email
     */
    public $email = null;

    /**
     * @var float $extraCost
     */
    public $extraCost = null;

    /**
     * @var string $extraCostDescription
     */
    public $extraCostDescription = null;

    /**
     * @var float $freightCost
     */
    public $freightCost = null;

    /**
     * @var string $freightCostDescription
     */
    public $freightCostDescription = null;

    /**
     * @var string $message
     */
    public $message = null;

    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\OrderLine[] $orderLines
     */
    public $orderLines = null;

    /**
     * @var int $paymentMethod
     */
    public $paymentMethod = null;

    /**
     * @var string $phone
     */
    public $phone = null;

    /**
     * @var bool $storePickup
     */
    public $storePickup = null;

    /**
     * @var bool $taxExempt
     */
    public $taxExempt = null;

    /**
     * @var \DateTime $wantedDeliveryTime
     */
    public $wantedDeliveryTime = null;

    /**
     * @var bool $alternativeTax
     */
    public $alternativeTax = null;

    /**
     * @var DeliveredItemsAndCapturedPaymentInfo $deliveredItemsAndCapturedPaymentInfo
     */
    public $deliveredItemsAndCapturedPaymentInfo = null;

    /**
     * @return int|null
     */
    public function getDeltaOrderId(): ?int
    {
        return $this->deltaOrderId;
    }

    /**
     * @param  int $deltaOrderId
     * @return self
     */
    public function setDeltaOrderId(int $deltaOrderId): self
    {
        $this->deltaOrderId = $deltaOrderId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContactAddressline1(): ?string
    {
        return $this->contactAddressline1;
    }

    /**
     * @param  string $contactAddressline1
     * @return self
     */
    public function setContactAddressline1(string $contactAddressline1): self
    {
        $this->contactAddressline1 = $contactAddressline1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContactAddressline2(): ?string
    {
        return $this->contactAddressline2;
    }

    /**
     * @param  string $contactAddressline2
     * @return self
     */
    public function setContactAddressline2(string $contactAddressline2): self
    {
        $this->contactAddressline2 = $contactAddressline2;
        return $this;
    }

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
    public function getContactName(): ?string
    {
        return $this->contactName;
    }

    /**
     * @param  string $contactName
     * @return self
     */
    public function setContactName(string $contactName): self
    {
        $this->contactName = $contactName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContactPostCity(): ?string
    {
        return $this->contactPostCity;
    }

    /**
     * @param  string $contactPostCity
     * @return self
     */
    public function setContactPostCity(string $contactPostCity): self
    {
        $this->contactPostCity = $contactPostCity;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContactPostNo(): ?string
    {
        return $this->contactPostNo;
    }

    /**
     * @param  string $contactPostNo
     * @return self
     */
    public function setContactPostNo(string $contactPostNo): self
    {
        $this->contactPostNo = $contactPostNo;
        return $this;
    }

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
    public function getDeliveryName(): ?string
    {
        return $this->deliveryName;
    }

    /**
     * @param  string $deliveryName
     * @return self
     */
    public function setDeliveryName(string $deliveryName): self
    {
        $this->deliveryName = $deliveryName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryPostCity(): ?string
    {
        return $this->deliveryPostCity;
    }

    /**
     * @param  string $deliveryPostCity
     * @return self
     */
    public function setDeliveryPostCity(string $deliveryPostCity): self
    {
        $this->deliveryPostCity = $deliveryPostCity;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryPostNo(): ?string
    {
        return $this->deliveryPostNo;
    }

    /**
     * @param  string $deliveryPostNo
     * @return self
     */
    public function setDeliveryPostNo(string $deliveryPostNo): self
    {
        $this->deliveryPostNo = $deliveryPostNo;
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
     * @return float|null
     */
    public function getExtraCost(): ?float
    {
        return $this->extraCost;
    }

    /**
     * @param  float $extraCost
     * @return self
     */
    public function setExtraCost(float $extraCost): self
    {
        $this->extraCost = $extraCost;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExtraCostDescription(): ?string
    {
        return $this->extraCostDescription;
    }

    /**
     * @param  string $extraCostDescription
     * @return self
     */
    public function setExtraCostDescription(string $extraCostDescription): self
    {
        $this->extraCostDescription = $extraCostDescription;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getFreightCost(): ?float
    {
        return $this->freightCost;
    }

    /**
     * @param  float $freightCost
     * @return self
     */
    public function setFreightCost(float $freightCost): self
    {
        $this->freightCost = $freightCost;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFreightCostDescription(): ?string
    {
        return $this->freightCostDescription;
    }

    /**
     * @param  string $freightCostDescription
     * @return self
     */
    public function setFreightCostDescription(string $freightCostDescription): self
    {
        $this->freightCostDescription = $freightCostDescription;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param  string $message
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return \Teqnomaze\Pckapi\V1\Struct\OrderLine[]|null
     */
    public function getOrderLines(): ?array
    {
        return $this->orderLines;
    }

    /**
     * @param  \Teqnomaze\Pckapi\V1\Struct\OrderLine[] $orderLines
     * @return self
     */
    public function setOrderLines(array $orderLines): self
    {
        $this->orderLines = $orderLines;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPaymentMethod(): ?int
    {
        return $this->paymentMethod;
    }

    /**
     * @param  int $paymentMethod
     * @return self
     */
    public function setPaymentMethod(int $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;
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
     * @return bool|null
     */
    public function getStorePickup(): ?bool
    {
        return $this->storePickup;
    }

    /**
     * @param  bool $storePickup
     * @return self
     */
    public function setStorePickup(bool $storePickup): self
    {
        $this->storePickup = $storePickup;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getTaxExempt(): ?bool
    {
        return $this->taxExempt;
    }

    /**
     * @param  bool $taxExempt
     * @return self
     */
    public function setTaxExempt(bool $taxExempt): self
    {
        $this->taxExempt = $taxExempt;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getWantedDeliveryTime(): ?\DateTime
    {
        return $this->wantedDeliveryTime;
    }

    /**
     * @param  \DateTime $wantedDeliveryTime
     * @return self
     */
    public function setWantedDeliveryTime(\DateTime $wantedDeliveryTime): self
    {
        $this->wantedDeliveryTime = $wantedDeliveryTime;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAlternativeTax(): ?bool
    {
        return $this->alternativeTax;
    }

    /**
     * @param  bool $alternativeTax
     * @return self
     */
    public function setAlternativeTax(bool $alternativeTax): self
    {
        $this->alternativeTax = $alternativeTax;
        return $this;
    }

    /**
     * @return DeliveredItemsAndCapturedPaymentInfo|null
     */
    public function getDeliveredItemsAndCapturedPaymentInfo(): ?DeliveredItemsAndCapturedPaymentInfo
    {
        return $this->deliveredItemsAndCapturedPaymentInfo;
    }

    /**
     * @param  DeliveredItemsAndCapturedPaymentInfo $deliveredItemsAndCapturedPaymentInfo
     * @return self
     */
    public function setDeliveredItemsAndCapturedPaymentInfo(
        DeliveredItemsAndCapturedPaymentInfo $deliveredItemsAndCapturedPaymentInfo
    ): self {
        $this->deliveredItemsAndCapturedPaymentInfo = $deliveredItemsAndCapturedPaymentInfo;
        return $this;
    }
}
