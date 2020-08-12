<?php

namespace Teqnomaze\Pckapi\V1\Response;

class InsertUpdateResponse
{
    /**
     * @var int $deltaId
     */
    public $deltaId = null;

    /**
     * @var string $errorHelpLink
     */
    public $errorHelpLink = null;

    /**
     * @var string $errorMessage
     */
    public $errorMessage = null;

    /**
     * @var string $humanErrorMessage
     */
    public $humanErrorMessage = null;

    /**
     * @var int $operationResult
     */
    public $operationResult = null;

    /**
     * @return int|null
     */
    public function getDeltaId(): ?int
    {
        return $this->deltaId;
    }

    /**
     * @param  int $deltaId
     * @return self
     */
    public function setDeltaId(int $deltaId): self
    {
        $this->deltaId = $deltaId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getErrorHelpLink(): ?string
    {
        return $this->errorHelpLink;
    }

    /**
     * @param  string $errorHelpLink
     * @return self
     */
    public function setErrorHelpLink(string $errorHelpLink): self
    {
        $this->errorHelpLink = $errorHelpLink;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * @param  string $errorMessage
     * @return self
     */
    public function setErrorMessage(string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHumanErrorMessage(): ?string
    {
        return $this->humanErrorMessage;
    }

    /**
     * @param  string $humanErrorMessage
     * @return self
     */
    public function setHumanErrorMessage(string $humanErrorMessage): self
    {
        $this->humanErrorMessage = $humanErrorMessage;
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
}
