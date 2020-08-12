<?php

namespace Teqnomaze\Pckapi\V1\Struct;

class SizeColor
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\Color $color
     */
    public $color = null;

    /**
     * @var boolean $confirmedDelivery
     */
    public $confirmedDelivery = null;

    /**
     * @var string[] $eans
     */
    public $eans = null;

    /**
     * @var int $expectedDeliveryAmount
     */
    public $expectedDeliveryAmount = null;

    /**
     * @var \DateTime $expectedDeliveryDate
     */
    public $expectedDeliveryDate = null;

    /**
     * @var string $info
     */
    public $info = null;

    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\Size $size
     */
    public $size = null;

    /**
     * @var int $sizeColorId
     */
    public $sizeColorId = null;

    /**
     * @var boolean $sizeColorInUse
     */
    public $sizeColorInUse = null;

    /**
     * @var int $stockCount
     */
    public $stockCount = null;

    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\StockDetail[] $stockDetails
     */
    public $stockDetails = null;

    /**
     * @var int $timestamp
     */
    public $timestamp = null;

    /**
     * @return \Teqnomaze\Pckapi\V1\Struct\Color|null
     */
    public function getColor(): ?\Teqnomaze\Pckapi\V1\Struct\Color
    {
        return $this->color;
    }

    /**
     * @param  \Teqnomaze\Pckapi\V1\Struct\Color $color
     * @return self
     */
    public function setColor(\Teqnomaze\Pckapi\V1\Struct\Color $color): self
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getConfirmedDelivery(): ?bool
    {
        return $this->confirmedDelivery;
    }

    /**
     * @param  boolean $confirmedDelivery
     * @return self
     */
    public function setConfirmedDelivery(bool $confirmedDelivery): self
    {
        $this->confirmedDelivery = $confirmedDelivery;
        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getEans(): ?array
    {
        return $this->eans;
    }

    /**
     * @param  string[] $eans
     * @return self
     */
    public function setEans(array $eans): self
    {
        $this->eans = $eans;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getExpectedDeliveryAmount(): ?int
    {
        return $this->expectedDeliveryAmount;
    }

    /**
     * @param  int $expectedDeliveryAmount
     * @return self
     */
    public function setExpectedDeliveryAmount(int $expectedDeliveryAmount): self
    {
        $this->expectedDeliveryAmount = $expectedDeliveryAmount;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getExpectedDeliveryDate(): ?\DateTime
    {
        return $this->expectedDeliveryDate;
    }

    /**
     * @param  \DateTime $expectedDeliveryDate
     * @return self
     */
    public function setExpectedDeliveryDate(\DateTime $expectedDeliveryDate): self
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;
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
     * @return \Teqnomaze\Pckapi\V1\Struct\Size|null
     */
    public function getSize(): ?\Teqnomaze\Pckapi\V1\Struct\Size
    {
        return $this->size;
    }

    /**
     * @param  \Teqnomaze\Pckapi\V1\Struct\Size $size
     * @return self
     */
    public function setSize(\Teqnomaze\Pckapi\V1\Struct\Size $size): self
    {
        $this->size = $size;
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
     * @return boolean|null
     */
    public function getSizeColorInUse(): ?bool
    {
        return $this->sizeColorInUse;
    }

    /**
     * @param  boolean $sizeColorInUse
     * @return self
     */
    public function setSizeColorInUse(bool $sizeColorInUse): self
    {
        $this->sizeColorInUse = $sizeColorInUse;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getStockCount(): ?int
    {
        return $this->stockCount;
    }

    /**
     * @param  int $stockCount
     * @return self
     */
    public function setStockCount(int $stockCount): self
    {
        $this->stockCount = $stockCount;
        return $this;
    }

    /**
     * @return \Teqnomaze\Pckapi\V1\Struct\StockDetail[]|null
     */
    public function getStockDetails(): ?array
    {
        return $this->stockDetails;
    }

    /**
     * @param  \Teqnomaze\Pckapi\V1\Struct\StockDetail[] $stockDetails
     * @return self
     */
    public function setStockDetails(array $stockDetails): self
    {
        $this->stockDetails = $stockDetails;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTimestamp(): ?int
    {
        return $this->timestamp;
    }

    /**
     * @param  int $timestamp
     * @return self
     */
    public function setTimestamp(int $timestamp): self
    {
        $this->timestamp = $timestamp;
        return $this;
    }
}
