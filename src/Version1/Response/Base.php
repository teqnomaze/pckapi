<?php

namespace Teqnomaze\Pckapi\V1\Response;

class Base
{
    /**
     * @var mixed $return
     */
    public $return = null;

    /**
     * @return mixed|null
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param  mixed $return
     * @return self
     */
    public function setReturn($return): self
    {
        $this->return = $return;
        return $this;
    }

    /**
     * @param  int $deltaId
     * @return self
     */
    public function createSuccessResponse(int $deltaId): self
    {
        $this->setReturn(
            (new \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse())
                ->setDeltaId($deltaId)
                ->setOperationResult(0)
        );

        return $this;
    }

    /**
     * @param  string $humanErrorMessage
     * @param  int    $deltaId
     * @return self
     */
    public function createErrorResponse(string $humanErrorMessage, int $deltaId = null): self
    {
        $deltaId = (!is_null($deltaId)) ? $deltaId : rand(100000, 999999);
        $this->setReturn(
            (new \Teqnomaze\Pckapi\V1\Response\InsertUpdateResponse())
                ->setDeltaId($deltaId)
                ->setOperationResult(1)
                ->setHumanErrorMessage($humanErrorMessage)
        );

        return $this;
    }
}
