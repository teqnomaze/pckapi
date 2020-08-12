<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\Article
 * @group Struct
 */
class Article extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\Article $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\Article();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // articleId
        $articleId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setArticleId($articleId)
        );
        static::assertEquals($articleId, $this->object->getArticleId());

        // name
        $name = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setName($name)
        );
        static::assertEquals($name, $this->object->getName());

        // alternativePrice
        $alternativePrice = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setAlternativePrice($alternativePrice)
        );
        static::assertEquals($alternativePrice, $this->object->getAlternativePrice());

        // alternativePrice2
        $alternativePrice2 = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setAlternativePrice2($alternativePrice2)
        );
        static::assertEquals($alternativePrice2, $this->object->getAlternativePrice2());

        // alternativeVat
        $alternativeVat = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setAlternativeVat($alternativeVat)
        );
        static::assertEquals($alternativeVat, $this->object->getAlternativeVat());

        // articleGroup
        $articleGroup = new \Teqnomaze\Pckapi\V1\Struct\ArticleGroup();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setArticleGroup($articleGroup)
        );
        static::assertEquals($articleGroup, $this->object->getArticleGroup());

        // articleGroup2
        $articleGroup2 = new \Teqnomaze\Pckapi\V1\Struct\ArticleGroup();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setArticleGroup2($articleGroup2)
        );
        static::assertEquals($articleGroup2, $this->object->getArticleGroup2());

        // articleGroup3
        $articleGroup3 = new \Teqnomaze\Pckapi\V1\Struct\ArticleGroup();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setArticleGroup3($articleGroup3)
        );
        static::assertEquals($articleGroup3, $this->object->getArticleGroup3());

        // articleNo
        $articleNo = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setArticleNo($articleNo)
        );
        static::assertEquals($articleNo, $this->object->getArticleNo());

        // articleStatus
        $articleStatus = rand(1, 5);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setArticleStatus($articleStatus)
        );
        static::assertEquals($articleStatus, $this->object->getArticleStatus());

        // articleWebAction
        $articleWebAction = rand(1, 5);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setArticleWebAction($articleWebAction)
        );
        static::assertEquals($articleWebAction, $this->object->getArticleWebAction());

        // confirmedDelivery
        $confirmedDelivery = true;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setConfirmedDelivery($confirmedDelivery)
        );
        static::assertEquals($confirmedDelivery, $this->object->getConfirmedDelivery());

        // costPrice
        $costPrice = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setCostPrice($costPrice)
        );
        static::assertEquals($costPrice, $this->object->getCostPrice());

        // description
        $description = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setDescription($description)
        );
        static::assertEquals($description, $this->object->getDescription());

        // discount
        $discount = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setDiscount($discount)
        );
        static::assertEquals($discount, $this->object->getDiscount());

        // discountFrom
        $discountFrom = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setDiscountFrom($discountFrom)
        );
        static::assertEquals($discountFrom, $this->object->getDiscountFrom());

        // discountTo
        $discountTo = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setDiscountTo($discountTo)
        );
        static::assertEquals($discountTo, $this->object->getDiscountTo());

        // eans
        $eans = ['key' => 'value'];
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setEans($eans)
        );
        static::assertEquals($eans, $this->object->getEans());

        // expectedDeliveryAmount
        $expectedDeliveryAmount = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setExpectedDeliveryAmount($expectedDeliveryAmount)
        );
        static::assertEquals($expectedDeliveryAmount, $this->object->getExpectedDeliveryAmount());

        // expectedDeliveryDate
        $expectedDeliveryDate = new \DateTime();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setExpectedDeliveryDate($expectedDeliveryDate)
        );
        static::assertEquals($expectedDeliveryDate, $this->object->getExpectedDeliveryDate());

        // externalGroupId
        $externalGroupId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setExternalGroupId($externalGroupId)
        );
        static::assertEquals($externalGroupId, $this->object->getExternalGroupId());

        // externalLink
        $externalLink = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setExternalLink($externalLink)
        );
        static::assertEquals($externalLink, $this->object->getExternalLink());

        // height
        $height = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setHeight($height)
        );
        static::assertEquals($height, $this->object->getHeight());

        // hideWhenOutOfStock
        $hideWhenOutOfStock = true;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setHideWhenOutOfStock($hideWhenOutOfStock)
        );
        static::assertEquals($hideWhenOutOfStock, $this->object->getHideWhenOutOfStock());

        // info1
        $info1 = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setInfo1($info1)
        );
        static::assertEquals($info1, $this->object->getInfo1());

        // info2
        $info2 = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setInfo2($info2)
        );
        static::assertEquals($info2, $this->object->getInfo2());

        // info3
        $info3 = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setInfo3($info3)
        );
        static::assertEquals($info3, $this->object->getInfo3());

        // length
        $length = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setLength($length)
        );
        static::assertEquals($length, $this->object->getLength());

        // manufacturer
        $manufacturer = new \Teqnomaze\Pckapi\V1\Struct\Manufacturer();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setManufacturer($manufacturer)
        );
        static::assertEquals($manufacturer, $this->object->getManufacturer());

        // manufacturerArticleNo
        $manufacturerArticleNo = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setManufacturerArticleNo($manufacturerArticleNo)
        );
        static::assertEquals($manufacturerArticleNo, $this->object->getManufacturerArticleNo());

        // noDiscount
        $noDiscount = true;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setNoDiscount($noDiscount)
        );
        static::assertEquals($noDiscount, $this->object->getNoDiscount());

        // nonStockItem
        $nonStockItem = true;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setNonStockItem($nonStockItem)
        );
        static::assertEquals($nonStockItem, $this->object->getNonStockItem());

        // nonStockItemDays
        $nonStockItemDays = rand(1, 100);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setNonStockItemDays($nonStockItemDays)
        );
        static::assertEquals($nonStockItemDays, $this->object->getNonStockItemDays());

        // price1
        $price1 = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setPrice1($price1)
        );
        static::assertEquals($price1, $this->object->getPrice1());

        // price2
        $price2 = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setPrice2($price2)
        );
        static::assertEquals($price2, $this->object->getPrice2());

        // price3
        $price3 = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setPrice3($price3)
        );
        static::assertEquals($price3, $this->object->getPrice3());

        // price4
        $price4 = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setPrice4($price4)
        );
        static::assertEquals($price4, $this->object->getPrice4());

        // price5
        $price5 = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setPrice5($price5)
        );
        static::assertEquals($price5, $this->object->getPrice5());

        // price6
        $price6 = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setPrice6($price6)
        );
        static::assertEquals($price6, $this->object->getPrice6());

        // price7
        $price7 = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setPrice7($price7)
        );
        static::assertEquals($price7, $this->object->getPrice7());

        // price8
        $price8 = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setPrice8($price8)
        );
        static::assertEquals($price8, $this->object->getPrice8());

        // price9
        $price9 = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setPrice9($price9)
        );
        static::assertEquals($price9, $this->object->getPrice9());

        // price10
        $price10 = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setPrice10($price10)
        );
        static::assertEquals($price10, $this->object->getPrice10());

        // productLine
        $productLine = new \Teqnomaze\Pckapi\V1\Struct\ProductLine();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setProductLine($productLine)
        );
        static::assertEquals($productLine, $this->object->getProductLine());

        // purchasePrice
        $purchasePrice = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setPurchasePrice($purchasePrice)
        );
        static::assertEquals($purchasePrice, $this->object->getPurchasePrice());

        // recommendedProduct
        $recommendedProduct = true;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setRecommendedProduct($recommendedProduct)
        );
        static::assertEquals($recommendedProduct, $this->object->getRecommendedProduct());

        // salesPrice
        $salesPrice = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setSalesPrice($salesPrice)
        );
        static::assertEquals($salesPrice, $this->object->getSalesPrice());

        // shippingType
        $shippingType = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setShippingType($shippingType)
        );
        static::assertEquals($shippingType, $this->object->getShippingType());

        // sizeColorInUse
        $sizeColorInUse = true;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setSizeColorInUse($sizeColorInUse)
        );
        static::assertEquals($sizeColorInUse, $this->object->getSizeColorInUse());

        // sizeColors
        $sizeColors = [new \Teqnomaze\Pckapi\V1\Struct\SizeColor()];
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setSizeColors($sizeColors)
        );
        static::assertEquals($sizeColors, $this->object->getSizeColors());

        // stockCcount
        $stockCcount = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setStockCcount($stockCcount)
        );
        static::assertEquals($stockCcount, $this->object->getStockCcount());

        // stockDetails
        $stockDetails = [new \Teqnomaze\Pckapi\V1\Struct\StockDetail()];
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setStockDetails($stockDetails)
        );
        static::assertEquals($stockDetails, $this->object->getStockDetails());

        // storePrice
        $storePrice = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setStorePrice($storePrice)
        );
        static::assertEquals($storePrice, $this->object->getStorePrice());

        // subtitle
        $subtitle = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setSubtitle($subtitle)
        );
        static::assertEquals($subtitle, $this->object->getSubtitle());

        // suggestedPrice
        $suggestedPrice = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setSuggestedPrice($suggestedPrice)
        );
        static::assertEquals($suggestedPrice, $this->object->getSuggestedPrice());

        // timestamp
        $timestamp = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setTimestamp($timestamp)
        );
        static::assertEquals($timestamp, $this->object->getTimestamp());

        // vat
        $vat = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setVat($vat)
        );
        static::assertEquals($vat, $this->object->getVat());

        // visibleOnWeb
        $visibleOnWeb = true;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setVisibleOnWeb($visibleOnWeb)
        );
        static::assertEquals($visibleOnWeb, $this->object->getVisibleOnWeb());

        // volume
        $volume = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setVolume($volume)
        );
        static::assertEquals($volume, $this->object->getVolume());

        // webshippingPrice
        $webshippingPrice = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setWebshippingPrice($webshippingPrice)
        );
        static::assertEquals($webshippingPrice, $this->object->getWebshippingPrice());

        // webstockLimit
        $webstockLimit = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setWebstockLimit($webstockLimit)
        );
        static::assertEquals($webstockLimit, $this->object->getWebstockLimit());

        // weight
        $weight = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setWeight($weight)
        );
        static::assertEquals($weight, $this->object->getWeight());

        // width
        $width = (float) rand(1, 1000) + 0.55;
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\Article::class,
            $this->object->setWidth($width)
        );
        static::assertEquals($width, $this->object->getWidth());
    }
}
