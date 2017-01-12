<?php


namespace nuxseme\phpunit\tests;


use PHPUnit\Framework\TestCase;

class ErrorTest extends TestCase
{
    /**
     * @expectedException \PHPUnit_Framework_Error
     */
    public function testError()
    {
        echo $a;
    }
}