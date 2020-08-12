<?php

namespace Tests\Teqnomaze\Pckapi\V1\Response;

use \Ramsey\Uuid\Uuid;

/**
 * Unit testing on \Teqnomaze\Pckapi\V1\Response\MailTemplate
 * @group Response
 */
class MailTemplate extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Teqnomaze\Pckapi\V1\Response\MailTemplate $object
     */
    protected $object;

    protected function setUp(): void
    {
        parent::setUp();

        $this->object = new \Teqnomaze\Pckapi\V1\Response\MailTemplate();
    }

    protected function tearDown(): void
    {
        unset($this->object);

        parent::tearDown();
    }

    public function testProperties(): void
    {
        // footer
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\MailTemplate::class,
            $this->object->setFooter('Test footer')
        );
        static::assertEquals($this->object->getFooter(), 'Test footer');

        // header
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\MailTemplate::class,
            $this->object->setHeader('Test header')
        );
        static::assertEquals($this->object->getHeader(), 'Test header');

        // message
        static::assertInstanceOf(
            \Teqnomaze\Pckapi\V1\Response\MailTemplate::class,
            $this->object->setMessage('Test message')
        );
        static::assertEquals($this->object->getMessage(), 'Test message');
    }
}
