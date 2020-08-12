<?php

namespace Teqnomaze\Pckapi\V1\Struct;

class Color
{
    /**
     * @var int $colorId
     */
    public $colorId = null;

    /**
     * @var string $code
     */
    public $code = null;

    /**
     * @var string $name
     */
    public $name = null;

    /**
     * @var int $timestamp
     */
    public $timestamp = null;

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param  string $code
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getColorId(): ?int
    {
        return $this->colorId;
    }

    /**
     * @param  int $colorId
     * @return self
     */
    public function setColorId(int $colorId): self
    {
        $this->colorId = $colorId;
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
