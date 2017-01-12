<?php


namespace nuxseme\phpunit\tests;


use PHPUnit\Framework\TestCase;

/**
 * Class OutputTest
 * @package nuxseme\phpunit\tests
 */
class OutputTest extends TestCase
{
    /**
     * 测试 expectOutputString
     */
    public function testOutput()
    {
        $this->expectOutputString('hello world');
        echo 'hello world';
    }
}
