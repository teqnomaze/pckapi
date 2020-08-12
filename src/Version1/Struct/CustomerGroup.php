<?php

namespace Teqnomaze\Pckapi\V1\Struct;

class CustomerGroup
{
    /**
     * @var int $customerGroupId
     */
    public $customerGroupId = null;

    /**
     * @var string $name
     */
    public $name = null;

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
}
