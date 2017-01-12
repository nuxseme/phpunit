<?php


namespace nuxseme\phpunit\tests;


/**
 * Class DependCloneTest  测试depend clone
 * @package nuxseme\phpunit\tests
 */
class DependCloneTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @return \stdClass
     */
    public function testProducer()
    {
        $object = new \stdClass();
        $object->key = 'hello';
        $object->value = 'phpunit';
        return $object;
    }

    /**
     * @param \stdClass $object
     * @depends clone testProducer
     */
    public function testConsumer(\stdClass $object)
    {
        $this->assertEquals($object->value,'phpunit');
        $object->value = 'world';
    }


    /**
     * @param \stdClass $object
     * @depends clone testProducer
     */
    public function testDependClone(\stdClass $object)
    {
        $this->assertEquals($object->value,'phpunit');
    }
}