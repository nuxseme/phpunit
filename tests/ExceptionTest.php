<?php
namespace nuxseme\phpunit\tests;

use PHPUnit\Framework\TestCase;
class ExceptionTest extends TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage  some message
     * @expectedExceptionCode  100
     */
    public function testException()
    {
        throw new \InvalidArgumentException('some message',100);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage  some message
     */
    public function testExceptionMessage()
    {
        throw new \InvalidArgumentException('some message',100);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionCode  100
     */
    public function testExceptionCode()
    {
        throw new \InvalidArgumentException('some message',100);
    }

    /**
     * @expectedException \Exception
     */
    public function testExceptionA()
    {
        throw new \InvalidArgumentException();
    }
}