<?php

namespace Teqnomaze\Pckapi\V1\Response;

class WebOrdersReturn
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse $insertUpdate
     */
    public $insertUpdate = null;

    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\Order[] $listWebOrders
     */
    public $listWebOrders = null;

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
     * @return \Teqnomaze\Pckapi\V1\Struct\Order[]|null
     */
    public function getListWebOrders(): ?array
    {
        return $this->listWebOrders;
    }

    /**
     * @param  \Teqnomaze\Pckapi\V1\Struct\Order[] $listWebOrders
     * @return self
     */
    public function setListWebOrders(array $listWebOrders): self
    {
        $this->listWebOrders = $listWebOrders;
        return $this;
    }
}
