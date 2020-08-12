<?php

namespace Tests\Teqnomaze\Pckapi\V1\Struct;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Struct\ArticleGroup
 * @group Struct
 */
class ArticleGroup extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\ArticleGroup $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Struct\ArticleGroup();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // arcileGroupId
        $arcileGroupId = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\ArticleGroup::class,
            $this->object->setArcileGroupId($arcileGroupId)
        );
        static::assertEquals($arcileGroupId, $this->object->getArcileGroupId());

        // description
        $description = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\ArticleGroup::class,
            $this->object->setDescription($description)
        );
        static::assertEquals($description, $this->object->getDescription());

        // groupNumber
        $groupNumber = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\ArticleGroup::class,
            $this->object->setGroupNumber($groupNumber)
        );
        static::assertEquals($groupNumber, $this->object->getGroupNumber());

        // name
        $name = Uuid::uuid1()->toString();
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\ArticleGroup::class,
            $this->object->setName($name)
        );
        static::assertEquals($name, $this->object->getName());

        // timestamp
        $timestamp = rand(1, 1000);
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Struct\ArticleGroup::class,
            $this->object->setTimestamp($timestamp)
        );
        static::assertEquals($timestamp, $this->object->getTimestamp());
    }
}
