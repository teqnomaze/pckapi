<?php

namespace Teqnomaze\Pckapi\V1\Struct;

class ArticleGroup
{
    /**
     * @var int $arcileGroupId
     */
    public $arcileGroupId = null;

    /**
     * @var string $name
     */
    public $name = null;

    /**
     * @var string $description
     */
    public $description = null;

    /**
     * @var int $groupNumber
     */
    public $groupNumber = null;

    /**
     * @var int $timestamp
     */
    public $timestamp = null;

    /**
     * @return int|null
     */
    public function getArcileGroupId(): ?int
    {
        return $this->arcileGroupId;
    }

    /**
     * @param  int $arcileGroupId
     * @return self
     */
    public function setArcileGroupId(int $arcileGroupId): self
    {
        $this->arcileGroupId = $arcileGroupId;
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
     * @return int|null
     */
    public function getGroupNumber(): ?int
    {
        return $this->groupNumber;
    }

    /**
     * @param  int $groupNumber
     * @return self
     */
    public function setGroupNumber(int $groupNumber): self
    {
        $this->groupNumber = $groupNumber;
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
