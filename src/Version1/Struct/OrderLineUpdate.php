<?php

namespace Teqnomaze\Pckapi\V1\Struct;

class OrderLineUpdate
{
    /**
     * @var int $orderLineId
     */
    public $orderLineId = null;

    /**
     * @var string $info
     */
    public $info = null;

    /**
     * @var int $amount
     */
    public $amount = null;

    /**
     * @return int|null
     */
    public function getOrderLineId(): ?int
    {
        return $this->orderLineId;
    }

    /**
     * @param  int $orderLineId
     * @return self
     */
    public function setOrderLineId(int $orderLineId): self
    {
        $this->orderLineId = $orderLineId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInfo(): ?string
    {
        return $this->info;
    }

    /**
     * @param  string $info
     * @return self
     */
    public function setInfo(string $info): self
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param  int $amount
     * @return self
     */
    public function setAmount(int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }
}
