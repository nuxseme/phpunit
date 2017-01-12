<?php


namespace nuxseme\phpunit\tests;


/**
 * Class DependTest 测试
 * @package nuxseme\phpunit\tests
 */
class DependTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return \stdClass
     */
    public function testProducer()
    {
        $object = new \stdClass();
        $object->name = 'hello';
        $object->value = 'phpunit';
        return $object;
    }


    /**
     * @param \stdClass $object
     * @depends testProducer
     */
    public function testConsumer(\stdClass $object)
    {
        $this->assertEquals('hello',$object->name);
        $this->assertEquals('phpunit',$object->value);
        $object->name = 'update';
    }


    /**
     * @param \stdClass $object
     * @depends testProducer
     */
    public function testDepend(\stdClass $object)
    {
        $this->assertEquals('update',$object->name);
    }

}