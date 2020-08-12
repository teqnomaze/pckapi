<?php

namespace Teqnomaze\Pckapi\V1\Struct;

class PaymentType
{
    /**
     * @var int $paymentId
     */
    public $paymentId = null;

    /**
     * @var string $name
     */
    public $name = null;

    /**
     * @return int|null
     */
    public function getPaymentId(): ?int
    {
        return $this->paymentId;
    }

    /**
     * @param  int $paymentId
     * @return self
     */
    public function setPaymentId(int $paymentId): self
    {
        $this->paymentId = $paymentId;
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
}
