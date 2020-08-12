<?php

namespace Teqnomaze\Pckapi\V1\Response;

class Status
{
    /**
     * @var int $creditApplicants
     */
    public $creditApplicants = null;

    /**
     * @var string $message
     */
    public $message = null;

    /**
     * @var int $onlineCustomers
     */
    public $onlineCustomers = null;

    /**
     * @var int $operationResult
     */
    public $operationResult = null;

    /**
     * @var int $orders
     */
    public $orders = null;

    /**
     * @return int|null
     */
    public function getCreditApplicants(): ?int
    {
        return $this->creditApplicants;
    }

    /**
     * @param  int $creditApplicants
     * @return self
     */
    public function setCreditApplicants(int $creditApplicants): self
    {
        $this->creditApplicants = $creditApplicants;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param  string $message
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getOnlineCustomers(): ?int
    {
        return $this->onlineCustomers;
    }

    /**
     * @param  int $onlineCustomers
     * @return self
     */
    public function setOnlineCustomers(int $onlineCustomers): self
    {
        $this->onlineCustomers = $onlineCustomers;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getOperationResult(): ?int
    {
        return $this->operationResult;
    }

    /**
     * @param  int $operationResult
     * @return self
     */
    public function setOperationResult(int $operationResult): self
    {
        $this->operationResult = $operationResult;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getOrders(): ?int
    {
        return $this->orders;
    }

    /**
     * @param  int $orders
     * @return self
     */
    public function setOrders(int $orders): self
    {
        $this->orders = $orders;
        return $this;
    }
}
