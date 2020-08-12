<?php

namespace Teqnomaze\Pckapi\V1\Struct;

class Discount
{
    /**
     * @var int $discountId
     */
    public $discountId = null;

    /**
     * @var int $articleId
     */
    public $articleId = null;

    /**
     * @var int $categoryId
     */
    public $categoryId = null;

    /**
     * @var int $category2Id
     */
    public $category2Id = null;

    /**
     * @var int $count
     */
    public $count = null;

    /**
     * @var int $customerId
     */
    public $customerId = null;

    /**
     * @var int $customerGroupId
     */
    public $customerGroupId = null;

    /**
     * @var bool $deleteDiscount
     */
    public $deleteDiscount = null;

    /**
     * @var float $discount1
     */
    public $discount1 = null;

    /**
     * @var int $manufacturerId
     */
    public $manufacturerId = null;

    /**
     * @var float $priceAdjustment
     */
    public $priceAdjustment = null;

    /**
     * @var int $priceType
     */
    public $priceType = null;

    /**
     * @var \DateTime $validUntil
     */
    public $validUntil = null;

    /**
     * @return int|null
     */
    public function getDiscountId(): ?int
    {
        return $this->discountId;
    }

    /**
     * @param  int $discountId
     * @return self
     */
    public function setDiscountId(int $discountId): self
    {
        $this->discountId = $discountId;
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
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    /**
     * @param  int $categoryId
     * @return self
     */
    public function setCategoryId(int $categoryId): self
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCategoryId2(): ?int
    {
        return $this->category2Id;
    }

    /**
     * @param  int $category2Id
     * @return self
     */
    public function setCategoryId2(int $category2Id): self
    {
        $this->category2Id = $category2Id;
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
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * @param  int $customerId
     * @return self
     */
    public function setCustomerId(int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCustomerGroupId(): ?int
    {
        return $this->customerGroupId;
    }

    /**
     * @param  int $customerGroupId
     * @return self
     */
    public function setCustomerGroupId(int $customerGroupId): self
    {
        $this->customerGroupId = $customerGroupId;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDeleteDiscount(): ?bool
    {
        return $this->deleteDiscount;
    }

    /**
     * @param  bool $deleteDiscount
     * @return self
     */
    public function setDeleteDiscount(bool $deleteDiscount): self
    {
        $this->deleteDiscount = $deleteDiscount;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getDiscount1(): ?float
    {
        return $this->discount1;
    }

    /**
     * @param  float $discount1
     * @return self
     */
    public function setDiscount1(float $discount1): self
    {
        $this->discount1 = $discount1;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getManufacturerId(): ?int
    {
        return $this->manufacturerId;
    }

    /**
     * @param  int $manufacturerId
     * @return self
     */
    public function setManufacturerId(int $manufacturerId): self
    {
        $this->manufacturerId = $manufacturerId;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPriceAdjustment(): ?float
    {
        return $this->priceAdjustment;
    }

    /**
     * @param  float $priceAdjustment
     * @return self
     */
    public function setPriceAdjustment(float $priceAdjustment): self
    {
        $this->priceAdjustment = $priceAdjustment;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPriceType(): ?int
    {
        return $this->priceType;
    }

    /**
     * @param  int $priceType
     * @return self
     */
    public function setPriceType(int $priceType): self
    {
        $this->priceType = $priceType;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getValidUntil(): ?\DateTime
    {
        return $this->validUntil;
    }

    /**
     * @param  \DateTime $validUntil
     * @return self
     */
    public function setValidUntil(\DateTime $validUntil): self
    {
        $this->validUntil = $validUntil;
        return $this;
    }
}
