<?php

namespace Teqnomaze\Pckapi\V1\Response;

class CreateDeltasWebshopResponse
{
    /**
     * @var string $adminUserName
     */
    public $adminUserName = null;

    /**
     * @var string $adminUserPassword
     */
    public $adminUserPassword = null;

    /**
     * @var int $deltasoftId
     */
    public $deltasoftId = null;

    /**
     * @var \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse $insertUpdate
     */
    public $insertUpdate = null;

    /**
     * @var string $password
     */
    public $password = null;

    /**
     * @return string|null
     */
    public function getAdminUserName(): ?string
    {
        return $this->adminUserName;
    }

    /**
     * @param  string $adminUserName
     * @return self
     */
    public function setAdminUserName(string $adminUserName): self
    {
        $this->adminUserName = $adminUserName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminUserPassword(): ?string
    {
        return $this->adminUserPassword;
    }

    /**
     * @param  string $adminUserPassword
     * @return self
     */
    public function setAdminUserPassword(string $adminUserPassword): self
    {
        $this->adminUserPassword = $adminUserPassword;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDeltasoftId(): ?int
    {
        return $this->deltasoftId;
    }

    /**
     * @param  int $deltasoftId
     * @return self
     */
    public function setDeltasoftId(int $deltasoftId): self
    {
        $this->deltasoftId = $deltasoftId;
        return $this;
    }

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
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param  string $password
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }
}
