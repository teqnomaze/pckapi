<?php

namespace Teqnomaze\Pckapi\V1\Struct;

class Size
{
    /**
     * @var int $sizeId
     */
    public $sizeId = null;

    /**
     * @var string $name
     */
    public $name = null;

    /**
     * @var int $timestamp
     */
    public $timestamp = null;

    /**
     * @return int|null
     */
    public function getSizeId(): ?int
    {
        return $this->sizeId;
    }

    /**
     * @param  int $sizeId
     * @return self
     */
    public function setSizeId(int $sizeId): self
    {
        $this->sizeId = $sizeId;
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
