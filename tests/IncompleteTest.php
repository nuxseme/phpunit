<?php


namespace nuxseme\phpunit\tests;


use PHPUnit\Framework\TestCase;

class IncompleteTest extends TestCase
{
    public function testSomething()
    {
        $this->assertTrue(true);
        $this->markTestIncomplete(
            '此测试目前尚未实现。'
        );
    }
}