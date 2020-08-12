<?php

namespace Teqnomaze\Pckapi\V1\Response;

class GetPaymentTypesResponse
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse $insertUpdate
     */
    public $insertUpdate = null;

    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\PaymentType[] $payments
     */
    public $payments = null;

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
     * @return \Teqnomaze\Pckapi\V1\Struct\PaymentType[]|null
     */
    public function getPayments(): ?array
    {
        return $this->payments;
    }

    /**
     * @param  \Teqnomaze\Pckapi\V1\Struct\PaymentType[] $payments
     * @return self
     */
    public function setPayments(array $payments): self
    {
        $this->payments = $payments;
        return $this;
    }
}
