<?php

namespace Teqnomaze\Pckapi\V1\Struct;

class Manufacturer
{
    /**
     * @var int $manufacturerId
     */
    public $manufacturerId = null;

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
