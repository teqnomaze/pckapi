<?php

namespace Teqnomaze\Pckapi\V1\Struct;

class StockDetail
{
    /**
     * @var int $count
     */
    public $count = null;

    /**
     * @var int $warehouseId
     */
    public $warehouseId = null;

    /**
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * @param  int $count
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getWarehouseId(): ?int
    {
        return $this->warehouseId;
    }

    /**
     * @param  int $warehouseId
     * @return self
     */
    public function setWarehouseId(int $warehouseId): self
    {
        $this->warehouseId = $warehouseId;
        return $this;
    }
}
