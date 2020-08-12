<?php

namespace Teqnomaze\Pckapi\V1\Response;

class MailTemplate
{
    /**
     * @var string $footer
     */
    public $footer = null;

    /**
     * @var string $header
     */
    public $header = null;

    /**
     * @var string $message
     */
    public $message = null;

    /**
     * @return string|null
     */
    public function getFooter(): ?string
    {
        return $this->footer;
    }

    /**
     * @param  string $footer
     * @return self
     */
    public function setFooter(string $footer): self
    {
        $this->footer = $footer;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHeader(): ?string
    {
        return $this->header;
    }

    /**
     * @param  string $header
     * @return self
     */
    public function setHeader(string $header): self
    {
        $this->header = $header;
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
}
