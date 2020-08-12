<?php

namespace Teqnomaze\Pckapi\V1\Response;

class UpdateOrderResponse
{
    /**
     * @var float $amount
     */
    public $amount = null;

    /**
     * @var string $authorzationId
     */
    public $authorzationId = null;

    /**
     * @var float $extraCost
     */
    public $extraCost = null;

    /**
     * @var float $freightCost
     */
    public $freightCost = null;

    /**
     * @var \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse $insertUpdate
     */
    public $insertUpdate = null;

    /**
     * @var string $paymentMethod
     */
    public $paymentMethod = null;

    /**
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * @param  float $amount
     * @return self
     */
    public function setAmount(float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthorzationId(): ?string
    {
        return $this->authorzationId;
    }

    /**
     * @param  string $authorzationId
     * @return self
     */
    public function setAuthorzationId(string $authorzationId): self
    {
        $this->authorzationId = $authorzationId;
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
     * @return \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse|null
     */
    public function getInsertUpdate(): ?\Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse
    {
        return $this->insertUpdate;
    }

    /**
     * @param  \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse $insertUpdate
     * @return self
     */
    public function setInsertUpdate(\Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse $insertUpdate): self
    {
        $this->insertUpdate = $insertUpdate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    /**
     * @param  string $paymentMethod
     * @return self
     */
    public function setPaymentMethod(string $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
}
