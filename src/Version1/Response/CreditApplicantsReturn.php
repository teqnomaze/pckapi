<?php

namespace Teqnomaze\Pckapi\V1\Response;

class CreditApplicantsReturn
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse $insertUpdate
     */
    public $insertUpdate = null;

    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\Customer[] $listCustomers
     */
    public $listCustomers = null;

    /**
     * @return \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse|null
     */
    public function getInsertUpdate(): ?\Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse
    {
        return $this->insertUpdate;
    }

    /**
     * @param  \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse $insertUpdate
     * @return self
     */
    public function setInsertUpdate(\Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse $insertUpdate): self
    {
        $this->insertUpdate = $insertUpdate;
        return $this;
    }

    /**
     * @return \Teqnomaze\Pckapi\V1\Struct\Customer[]|null
     */
    public function getListCustomers(): ?array
    {
        return $this->listCustomers;
    }

    /**
     * @param  \Teqnomaze\Pckapi\V1\Struct\Customer[] $listCustomers
     * @return self
     */
    public function setListCustomers(array $listCustomers): self
    {
        $this->listCustomers = $listCustomers;
        return $this;
    }
}
