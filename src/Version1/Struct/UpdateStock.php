<?php

namespace Teqnomaze\Pckapi\V1\Struct;

class UpdateStock
{
    /**
     * @var int $articleId
     */
    public $articleId = null;

    /**
     * @var bool $confirmedDelivery
     */
    public $confirmedDelivery = null;

    /**
     * @var int $count
     */
    public $count = null;

    /**
     * @var int $expectedDeliveryAmount
     */
    public $expectedDeliveryAmount = null;

    /**
     * @var \DateTime $expectedDeliveryDate
     */
    public $expectedDeliveryDate = null;

    /**
     * @var int $sizeColorId
     */
    public $sizeColorId = null;

    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\StockDetail[] $stockDetails
     */
    public $stockDetails = null;

    /**
     * @var int $timestamp
     */
    public $timestamp = null;

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
     * @return bool|null
     */
    public function getConfirmedDelivery(): ?bool
    {
        return $this->confirmedDelivery;
    }

    /**
     * @param  bool $confirmedDelivery
     * @return self
     */
    public function setConfirmedDelivery(bool $confirmedDelivery): self
    {
        $this->confirmedDelivery = $confirmedDelivery;
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
