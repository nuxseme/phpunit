<?php


namespace nuxseme\phpunit\tests;


use PHPUnit\Framework\TestCase;

/**
 * Class SkipController
 * @package nuxseme\phpunit\tests
 */
class SkipTest extends TestCase
{

    public function setUp()
    {
        $this->markTestSkipped('skip');
    }

    public function testSkip()
    {
        $this->expectOutputString('test skip');
        echo 'test skip';
    }
}