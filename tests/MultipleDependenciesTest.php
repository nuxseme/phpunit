<?php


namespace nuxseme\phpunit\tests;


/**
 * Class MultipleDependenciesTest 测试多重依赖
 * @package nuxseme\phpunit\tests
 */
class MultipleDependenciesTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @return \stdClass
     */
    public function testProducerA()
    {
        $object = new \stdClass();
        $object->key = 'first';
        return $object;
    }

    /**
     * @return \stdClass
     */
    public function testProducerB()
    {
        $object = new \stdClass();
        $object->key = 'second';
        return $object;
    }


    /**
     * @depends testProducerA
     * @depends testProducerB
     */
    public function testConsumer()
    {
        $this->assertEquals(['first','second'],[func_get_args()[0]->key,func_get_args()[1]->key]);
    }
}