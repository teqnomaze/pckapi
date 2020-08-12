<?php

namespace Teqnomaze\Pckapi\V1\Struct;

class OrderLine
{
    /**
     * @var int $orderLineId
     */
    public $orderLineId = null;

    /**
     * @var int $articleId
     */
    public $articleId = null;

    /**
     * @var int $count
     */
    public $count = null;

    /**
     * @var float $discount
     */
    public $discount = null;

    /**
     * @var string $into
     */
    public $into = null;

    /**
     * @var float $price
     */
    public $price = null;

    /**
     * @var int $sizeColorId
     */
    public $sizeColorId = null;

    /**
     * @var int $warehouseId
     */
    public $warehouseId = null;

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
     * @return int|null
     */
    public function getArticleId(): ?int
    {
        return $this->articleId;
    }

    /**
     * @param  int $articleId
     * @return self
     */
    public function setArticleId(int $articleId): self
    {
        $this->articleId = $articleId;
        return $this;
    }

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
     * @return float|null
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    /**
     * @param  float $discount
     * @return self
     */
    public function setDiscount(float $discount): self
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInto(): ?string
    {
        return $this->into;
    }

    /**
     * @param  string $into
     * @return self
     */
    public function setInto(string $into): self
    {
        $this->into = $into;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @param  float $price
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSizeColorId(): ?int
    {
        return $this->sizeColorId;
    }

    /**
     * @param  int $sizeColorId
     * @return self
     */
    public function setSizeColorId(int $sizeColorId): self
    {
        $this->sizeColorId = $sizeColorId;
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
