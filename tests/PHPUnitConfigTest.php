<?php
namespace nuxseme\phpunit\tests;

/**
 * Class DataTest phpunit配置测试
 * @package nuxseme\phpunit\tests
 */
class PHPUnitConfigTest extends \PHPUnit_Framework_TestCase
{
    /**
     *测试phpunit配置
     */
    public function testStdClass()
    {
        $object = new \stdClass();
        $this->assertTrue($object instanceof \stdClass);
    }
}