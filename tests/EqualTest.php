<?php


namespace nuxseme\phpunit\tests;


use PHPUnit\Framework\TestCase;

class EqualTest extends TestCase
{
    public function testEqual()
    {
        $this->assertEquals(
            [1,2,3,4],
            [1,2,3,4]
        );
    }

    public function testNoEqual()
    {
        $this->assertNotEquals(
            [1,2,3,4,5],
            [1,2,3,4,5,6]
        );
    }

    public function testWeekEqual()
    {
        $this->assertEquals(
            [1,2,3,4,5],
            [1,2,3,4,'5']
        );
    }
}