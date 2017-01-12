<?php


namespace nuxseme\phpunit\tests;


use PHPUnit\Framework\TestCase;

/**
 * Class FixtureTest  基境测试
 * @package nuxseme\phpunit\tests
 */
class FixtureTest extends TestCase
{
    /**
     * @var
     */
    private $array;
    private $stack;

    /**
     *建立基境
     */
    public function setUp()
    {
       $this->array = [];
        $this->stack = [1,2];
    }


    public function testArrayPush()
    {
        array_push($this->array, 'foo');
        $this->assertEquals('foo',$this->array[0]);
        $this->assertFalse(empty($this->array));
    }


    public function testArrayPop()
    {
        array_push($this->array, 'foo');
        $this->assertEquals('foo',array_pop($this->array));
        $this->assertEmpty($this->array);
    }

    public function testStackPop()
    {
       $this->assertEquals(array_pop($this->stack),2);
    }

    public function testPrintStack()
    {
        $this->assertEquals([1,2],$this->stack);
    }
}