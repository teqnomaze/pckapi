<?php

namespace Teqnomaze\Pckapi\V1\Struct;

class UpdateOrder
{
    /**
     * @var int $deltaOrderId
     */
    public $deltaOrderId = null;

    /**
     * @var string $message
     */
    public $message = null;

    /**
     * @var \Teqnomaze\Pckapi\V1\Struct\OrderLineUpdate[] $orderLines
     */
    public $orderLines = null;

    /**
     * @var int $orderStatusId
     *
     * 3 – Fully delivered (Cancel rest)
     * 5 – normal delivery
     * 7 – Failed (message to admin)
     * 8 – Failed (message to customer)
     * 10 - ResendCreditApplicant
     */
    public $orderStatusId = null;

    /**
     * @var string $packageNo
     */
    public $packageNo = null;

    /**
     * @var string $packtrackURL
     */
    public $packtrackURL = null;

    /**
     * @var int $sendId
     */
    public $sendId = null;

    /**
     * @var int $timestamp
     */
    public $timestamp = null;

    /**
     * @var string $transporterName
     */
    public $transporterName = null;

    /**
     * @return int|null
     */
    public function getDeltaOrderId(): ?int
    {
        return $this->deltaOrderId;
    }

    /**
     * @param  int $deltaOrderId
     * @return self
     */
    public function setDeltaOrderId(int $deltaOrderId): self
    {
        $this->deltaOrderId = $deltaOrderId;
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
     * @return \Teqnomaze\Pckapi\V1\Struct\OrderLineUpdate[]|null
     */
    public function getOrderLines(): ?array
    {
        return $this->orderLines;
    }

    /**
     * @param  \Teqnomaze\Pckapi\V1\Struct\OrderLineUpdate[] $orderLines
     * @return self
     */
    public function setOrderLines(array $orderLines): self
    {
        $this->orderLines = $orderLines;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getOrderStatusId(): ?int
    {
        return $this->orderStatusId;
    }

    /**
     * @param  int $orderStatusId
     * @return self
     */
    public function setOrderStatusId(int $orderStatusId): self
    {
        $this->orderStatusId = $orderStatusId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPackageNo(): ?string
    {
        return $this->packageNo;
    }

    /**
     * @param  string $packageNo
     * @return self
     */
    public function setPackageNo(string $packageNo): self
    {
        $this->packageNo = $packageNo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPacktrackURL(): ?string
    {
        return $this->packtrackURL;
    }

    /**
     * @param  string $packtrackURL
     * @return self
     */
    public function setPacktrackURL(string $packtrackURL): self
    {
        $this->packtrackURL = $packtrackURL;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSendId(): ?int
    {
        return $this->sendId;
    }

    /**
     * @param  int $sendId
     * @return self
     */
    public function setSendId(int $sendId): self
    {
        $this->sendId = $sendId;
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

    /**
     * @return string|null
     */
    public function getTransporterName(): ?string
    {
        return $this->transporterName;
    }

    /**
     * @param  string $transporterName
     * @return self
     */
    public function setTransporterName(string $transporterName): self
    {
        $this->transporterName = $transporterName;
        return $this;
    }
}
