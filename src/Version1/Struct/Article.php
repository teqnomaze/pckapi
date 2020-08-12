<?php

namespace Teqnomaze\Pckapi\V1\Struct;

class Article
{
    /**
     * @var int $articleId
     */
    public $articleId = null;

    /**
     * @var string $name
     */
    public $name = null;

    /**
     * @var float $alternativePrice
     */
    public $alternativePrice = null;

    /**
     * @var float $alternativePrice2
     */
    public $alternativePrice2 = null;

    /**
     * @var float $alternativeVat
     */
    public $alternativeVat = null;

    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\ArticleGroup $articleGroup
     */
    public $articleGroup = null;

    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\ArticleGroup $articleGroup2
     */
    public $articleGroup2 = null;

    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\ArticleGroup $articleGroup3
     */
    public $articleGroup3 = null;

    /**
     * @var string $articleNo
     */
    public $articleNo = null;

    /**
     * @var int $articleStatus
     */
    public $articleStatus = null;

    /**
     * @var int $articleWebAction
     */
    public $articleWebAction = null;

    /**
     * @var boolean $confirmedDelivery
     */
    public $confirmedDelivery = null;

    /**
     * @var float $costPrice
     */
    public $costPrice = null;

    /**
     * @var string $description
     */
    public $description = null;

    /**
     * @var float $discount
     */
    public $discount = null;

    /**
     * @var int $discountFrom
     */
    public $discountFrom = null;

    /**
     * @var int $discountTo
     */
    public $discountTo = null;

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
     * @var int $externalGroupId
     */
    public $externalGroupId = null;

    /**
     * @var string $externalLink
     */
    public $externalLink = null;

    /**
     * @var float $height
     */
    public $height = null;

    /**
     * @var boolean $hideWhenOutOfStock
     */
    public $hideWhenOutOfStock = null;

    /**
     * @var string $info1
     */
    public $info1 = null;

    /**
     * @var string $info2
     */
    public $info2 = null;

    /**
     * @var string $info3
     */
    public $info3 = null;

    /**
     * @var float $length
     */
    public $length = null;

    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\Manufacturer $manufacturer
     */
    public $manufacturer = null;

    /**
     * @var string $manufacturerArticleNo
     */
    public $manufacturerArticleNo = null;

    /**
     * @var boolean $noDiscount
     */
    public $noDiscount = null;

    /**
     * @var boolean $nonStockItem
     */
    public $nonStockItem = null;

    /**
     * @var int $nonStockItemDays
     */
    public $nonStockItemDays = null;

    /**
     * @var float $price1
     */
    public $price1 = null;

    /**
     * @var float $price10
     */
    public $price10 = null;

    /**
     * @var float $price2
     */
    public $price2 = null;

    /**
     * @var float $price3
     */
    public $price3 = null;

    /**
     * @var float $price4
     */
    public $price4 = null;

    /**
     * @var float $price5
     */
    public $price5 = null;

    /**
     * @var float $price6
     */
    public $price6 = null;

    /**
     * @var float $price7
     */
    public $price7 = null;

    /**
     * @var float $price8
     */
    public $price8 = null;

    /**
     * @var float $price9
     */
    public $price9 = null;

    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\ProductLine $productLine
     */
    public $productLine = null;

    /**
     * @var float $purchasePrice
     */
    public $purchasePrice = null;

    /**
     * @var boolean $recommendedProduct
     */
    public $recommendedProduct = null;

    /**
     * @var float $salesPrice
     */
    public $salesPrice = null;

    /**
     * @var int $shippingType
     */
    public $shippingType = null;

    /**
     * @var boolean $sizeColorInUse
     */
    public $sizeColorInUse = null;

    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\SizeColor[] $sizeColors
     */
    public $sizeColors = null;

    /**
     * @var int $stockCcount
     */
    public $stockCcount = null;

    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\StockDetail[] $stockDetails
     */
    public $stockDetails = null;

    /**
     * @var float $storePrice
     */
    public $storePrice = null;

    /**
     * @var string $subtitle
     */
    public $subtitle = null;

    /**
     * @var float $suggestedPrice
     */
    public $suggestedPrice = null;

    /**
     * @var int $timestamp
     */
    public $timestamp = null;

    /**
     * @var float $vat
     */
    public $vat = null;

    /**
     * @var boolean $visibleOnWeb
     */
    public $visibleOnWeb = null;

    /**
     * @var float $volume
     */
    public $volume = null;

    /**
     * @var float $webshippingPrice
     */
    public $webshippingPrice = null;

    /**
     * @var int $webstockLimit
     */
    public $webstockLimit = null;

    /**
     * @var float $weight
     */
    public $weight = null;

    /**
     * @var float $width
     */
    public $width = null;

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

    /**
     * @return float|null
     */
    public function getAlternativePrice(): ?float
    {
        return $this->alternativePrice;
    }

    /**
     * @param  float $alternativePrice
     * @return self
     */
    public function setAlternativePrice(float $alternativePrice): self
    {
        $this->alternativePrice = $alternativePrice;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getAlternativePrice2(): ?float
    {
        return $this->alternativePrice2;
    }

    /**
     * @param  float $alternativePrice2
     * @return self
     */
    public function setAlternativePrice2(float $alternativePrice2): self
    {
        $this->alternativePrice2 = $alternativePrice2;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getAlternativeVat(): ?float
    {
        return $this->alternativeVat;
    }

    /**
     * @param  float $alternativeVat
     * @return self
     */
    public function setAlternativeVat(float $alternativeVat): self
    {
        $this->alternativeVat = $alternativeVat;
        return $this;
    }

    /**
     * @return \Teqnomaze\Pckapi\V1\Struct\ArticleGroup|null
     */
    public function getArticleGroup(): ?\Teqnomaze\Pckapi\V1\Struct\ArticleGroup
    {
        return $this->articleGroup;
    }

    /**
     * @param  \Teqnomaze\Pckapi\V1\Struct\ArticleGroup $articleGroup
     * @return self
     */
    public function setArticleGroup(\Teqnomaze\Pckapi\V1\Struct\ArticleGroup $articleGroup): self
    {
        $this->articleGroup = $articleGroup;
        return $this;
    }

    /**
     * @return \Teqnomaze\Pckapi\V1\Struct\ArticleGroup|null
     */
    public function getArticleGroup2(): ?\Teqnomaze\Pckapi\V1\Struct\ArticleGroup
    {
        return $this->articleGroup2;
    }

    /**
     * @param  \Teqnomaze\Pckapi\V1\Struct\ArticleGroup $articleGroup2
     * @return self
     */
    public function setArticleGroup2(\Teqnomaze\Pckapi\V1\Struct\ArticleGroup $articleGroup2): self
    {
        $this->articleGroup2 = $articleGroup2;
        return $this;
    }

    /**
     * @return \Teqnomaze\Pckapi\V1\Struct\ArticleGroup|null
     */
    public function getArticleGroup3(): ?\Teqnomaze\Pckapi\V1\Struct\ArticleGroup
    {
        return $this->articleGroup3;
    }

    /**
     * @param  \Teqnomaze\Pckapi\V1\Struct\ArticleGroup $articleGroup3
     * @return self
     */
    public function setArticleGroup3(\Teqnomaze\Pckapi\V1\Struct\ArticleGroup $articleGroup3): self
    {
        $this->articleGroup3 = $articleGroup3;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getArticleNo(): ?string
    {
        return $this->articleNo;
    }

    /**
     * @param  string $articleNo
     * @return self
     */
    public function setArticleNo(string $articleNo): self
    {
        $this->articleNo = $articleNo;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getArticleStatus(): ?int
    {
        return $this->articleStatus;
    }

    /**
     * @param  int $articleStatus
     * @return self
     */
    public function setArticleStatus(int $articleStatus): self
    {
        $this->articleStatus = $articleStatus;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getArticleWebAction(): ?int
    {
        return $this->articleWebAction;
    }

    /**
     * @param  int $articleWebAction
     * @return self
     */
    public function setArticleWebAction(int $articleWebAction): self
    {
        $this->articleWebAction = $articleWebAction;
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
     * @return float|null
     */
    public function getCostPrice(): ?float
    {
        return $this->costPrice;
    }

    /**
     * @param  float $costPrice
     * @return self
     */
    public function setCostPrice(float $costPrice): self
    {
        $this->costPrice = $costPrice;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param  string $description
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
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
     * @return int|null
     */
    public function getDiscountFrom(): ?int
    {
        return $this->discountFrom;
    }

    /**
     * @param  int $discountFrom
     * @return self
     */
    public function setDiscountFrom(int $discountFrom): self
    {
        $this->discountFrom = $discountFrom;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDiscountTo(): ?int
    {
        return $this->discountTo;
    }

    /**
     * @param  int $discountTo
     * @return self
     */
    public function setDiscountTo(int $discountTo): self
    {
        $this->discountTo = $discountTo;
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
     * @return int|null
     */
    public function getExternalGroupId(): ?int
    {
        return $this->externalGroupId;
    }

    /**
     * @param  int $externalGroupId
     * @return self
     */
    public function setExternalGroupId(int $externalGroupId): self
    {
        $this->externalGroupId = $externalGroupId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExternalLink(): ?string
    {
        return $this->externalLink;
    }

    /**
     * @param  string $externalLink
     * @return self
     */
    public function setExternalLink(string $externalLink): self
    {
        $this->externalLink = $externalLink;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }

    /**
     * @param  float $height
     * @return self
     */
    public function setHeight(float $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getHideWhenOutOfStock(): ?bool
    {
        return $this->hideWhenOutOfStock;
    }

    /**
     * @param  boolean $hideWhenOutOfStock
     * @return self
     */
    public function setHideWhenOutOfStock(bool $hideWhenOutOfStock): self
    {
        $this->hideWhenOutOfStock = $hideWhenOutOfStock;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInfo1(): ?string
    {
        return $this->info1;
    }

    /**
     * @param  string $info1
     * @return self
     */
    public function setInfo1(string $info1): self
    {
        $this->info1 = $info1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInfo2(): ?string
    {
        return $this->info2;
    }

    /**
     * @param  string $info2
     * @return self
     */
    public function setInfo2(string $info2): self
    {
        $this->info2 = $info2;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInfo3(): ?string
    {
        return $this->info3;
    }

    /**
     * @param  string $info3
     * @return self
     */
    public function setInfo3(string $info3): self
    {
        $this->info3 = $info3;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getLength(): ?float
    {
        return $this->length;
    }

    /**
     * @param  float $length
     * @return self
     */
    public function setLength(float $length): self
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return \Teqnomaze\Pckapi\V1\Struct\Manufacturer|null
     */
    public function getManufacturer(): ?Manufacturer
    {
        return $this->manufacturer;
    }

    /**
     * @param  \Teqnomaze\Pckapi\V1\Struct\Manufacturer $manufacturer
     * @return self
     */
    public function setManufacturer(\Teqnomaze\Pckapi\V1\Struct\Manufacturer $manufacturer): self
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getManufacturerArticleNo(): ?string
    {
        return $this->manufacturerArticleNo;
    }

    /**
     * @param  string $manufacturerArticleNo
     * @return self
     */
    public function setManufacturerArticleNo(string $manufacturerArticleNo): self
    {
        $this->manufacturerArticleNo = $manufacturerArticleNo;
        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getNoDiscount(): ?bool
    {
        return $this->noDiscount;
    }

    /**
     * @param  boolean $noDiscount
     * @return self
     */
    public function setNoDiscount(bool $noDiscount): self
    {
        $this->noDiscount = $noDiscount;
        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getNonStockItem(): ?bool
    {
        return $this->nonStockItem;
    }

    /**
     * @param  boolean $nonStockItem
     * @return self
     */
    public function setNonStockItem(bool $nonStockItem): self
    {
        $this->nonStockItem = $nonStockItem;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNonStockItemDays(): ?int
    {
        return $this->nonStockItemDays;
    }

    /**
     * @param  int $nonStockItemDays
     * @return self
     */
    public function setNonStockItemDays(int $nonStockItemDays): self
    {
        $this->nonStockItemDays = $nonStockItemDays;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice1(): ?float
    {
        return $this->price1;
    }

    /**
     * @param  float $price1
     * @return self
     */
    public function setPrice1(float $price1): self
    {
        $this->price1 = $price1;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice10(): ?float
    {
        return $this->price10;
    }

    /**
     * @param  float $price10
     * @return self
     */
    public function setPrice10(float $price10): self
    {
        $this->price10 = $price10;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice2(): ?float
    {
        return $this->price2;
    }

    /**
     * @param  float $price2
     * @return self
     */
    public function setPrice2(float $price2): self
    {
        $this->price2 = $price2;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice3(): ?float
    {
        return $this->price3;
    }

    /**
     * @param  float $price3
     * @return self
     */
    public function setPrice3(float $price3): self
    {
        $this->price3 = $price3;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice4(): ?float
    {
        return $this->price4;
    }

    /**
     * @param  float $price4
     * @return self
     */
    public function setPrice4(float $price4): self
    {
        $this->price4 = $price4;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice5(): ?float
    {
        return $this->price5;
    }

    /**
     * @param  float $price5
     * @return self
     */
    public function setPrice5(float $price5): self
    {
        $this->price5 = $price5;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice6(): ?float
    {
        return $this->price6;
    }

    /**
     * @param  float $price6
     * @return self
     */
    public function setPrice6(float $price6): self
    {
        $this->price6 = $price6;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice7(): ?float
    {
        return $this->price7;
    }

    /**
     * @param  float $price7
     * @return self
     */
    public function setPrice7(float $price7): self
    {
        $this->price7 = $price7;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice8(): ?float
    {
        return $this->price8;
    }

    /**
     * @param  float $price8
     * @return self
     */
    public function setPrice8(float $price8): self
    {
        $this->price8 = $price8;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice9(): ?float
    {
        return $this->price9;
    }

    /**
     * @param  float $price9
     * @return self
     */
    public function setPrice9(float $price9): self
    {
        $this->price9 = $price9;
        return $this;
    }

    /**
     * @return \Teqnomaze\Pckapi\V1\Struct\ProductLine|null
     */
    public function getProductLine(): ?ProductLine
    {
        return $this->productLine;
    }

    /**
     * @param  \Teqnomaze\Pckapi\V1\Struct\ProductLine $productLine
     * @return self
     */
    public function setProductLine(\Teqnomaze\Pckapi\V1\Struct\ProductLine $productLine): self
    {
        $this->productLine = $productLine;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPurchasePrice(): ?float
    {
        return $this->purchasePrice;
    }

    /**
     * @param  float $purchasePrice
     * @return self
     */
    public function setPurchasePrice(float $purchasePrice): self
    {
        $this->purchasePrice = $purchasePrice;
        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getRecommendedProduct(): ?bool
    {
        return $this->recommendedProduct;
    }

    /**
     * @param  boolean $recommendedProduct
     * @return self
     */
    public function setRecommendedProduct(bool $recommendedProduct): self
    {
        $this->recommendedProduct = $recommendedProduct;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getSalesPrice(): ?float
    {
        return $this->salesPrice;
    }

    /**
     * @param  float $salesPrice
     * @return self
     */
    public function setSalesPrice(float $salesPrice): self
    {
        $this->salesPrice = $salesPrice;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getShippingType(): ?int
    {
        return $this->shippingType;
    }

    /**
     * @param  int $shippingType
     * @return self
     */
    public function setShippingType(int $shippingType): self
    {
        $this->shippingType = $shippingType;
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
     * @return \Teqnomaze\Pckapi\V1\Struct\SizeColor[]|null
     */
    public function getSizeColors(): ?array
    {
        return $this->sizeColors;
    }

    /**
     * @param  \Teqnomaze\Pckapi\V1\Struct\SizeColor[] $sizeColors
     * @return self
     */
    public function setSizeColors(array $sizeColors): self
    {
        $this->sizeColors = $sizeColors;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getStockCcount(): ?int
    {
        return $this->stockCcount;
    }

    /**
     * @param  int $stockCcount
     * @return self
     */
    public function setStockCcount(int $stockCcount): self
    {
        $this->stockCcount = $stockCcount;
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
     * @return float|null
     */
    public function getStorePrice(): ?float
    {
        return $this->storePrice;
    }

    /**
     * @param  float $storePrice
     * @return self
     */
    public function setStorePrice(float $storePrice): self
    {
        $this->storePrice = $storePrice;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    /**
     * @param  string $subtitle
     * @return self
     */
    public function setSubtitle(string $subtitle): self
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getSuggestedPrice(): ?float
    {
        return $this->suggestedPrice;
    }

    /**
     * @param  float $suggestedPrice
     * @return self
     */
    public function setSuggestedPrice(float $suggestedPrice): self
    {
        $this->suggestedPrice = $suggestedPrice;
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

    /**
     * @return float|null
     */
    public function getVat(): ?float
    {
        return $this->vat;
    }

    /**
     * @param  float $vat
     * @return self
     */
    public function setVat(float $vat): self
    {
        $this->vat = $vat;
        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getVisibleOnWeb(): ?bool
    {
        return $this->visibleOnWeb;
    }

    /**
     * @param  boolean $visibleOnWeb
     * @return self
     */
    public function setVisibleOnWeb(bool $visibleOnWeb): self
    {
        $this->visibleOnWeb = $visibleOnWeb;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getVolume(): ?float
    {
        return $this->volume;
    }

    /**
     * @param  float $volume
     * @return self
     */
    public function setVolume(float $volume): self
    {
        $this->volume = $volume;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getWebshippingPrice(): ?float
    {
        return $this->webshippingPrice;
    }

    /**
     * @param  float $webshippingPrice
     * @return self
     */
    public function setWebshippingPrice(float $webshippingPrice): self
    {
        $this->webshippingPrice = $webshippingPrice;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getWebstockLimit(): ?int
    {
        return $this->webstockLimit;
    }

    /**
     * @param  int $webstockLimit
     * @return self
     */
    public function setWebstockLimit(int $webstockLimit): self
    {
        $this->webstockLimit = $webstockLimit;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @param  float $weight
     * @return self
     */
    public function setWeight(float $weight): self
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getWidth(): ?float
    {
        return $this->width;
    }

    /**
     * @param  float $width
     * @return self
     */
    public function setWidth(float $width): self
    {
        $this->width = $width;
        return $this;
    }
}
