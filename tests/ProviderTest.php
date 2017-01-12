<?php


namespace nuxseme\phpunit\tests;

require __DIR__.'/../src/CsvFileIterator.php';
/**
 * Class ProviderTest 测试数据供给器
 * @package nuxseme\phpunit\tests
 */
class ProviderTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @param $a
     * @param $b
     * @param $sum
     * @dataProvider additionProviderA
     */
    public function testConsumerA($a, $b, $sum)
    {
        $this->assertEquals($a+$b, $sum);
    }

    /**
     * @return array
     */
    public function additionProviderA()
    {
        return [
            [1,2,3],
            [2,2,4],
        ];
    }

    /**
     * @param $a
     * @param $b
     * @param $sum
     * @dataProvider additionProviderB
     */
    public function testConsumerB($a, $b, $sum)
    {
        $this->assertEquals($a+$b, $sum);
    }

    /**
     * @return array
     */
    public function additionProviderB()
    {
        return [
           'first' => [1,2,3],
            'second' => [2,2,4],
        ];
    }


    /**
     * @return \nuxseme\phpunit\CsvFileIterator
     */
    public function additionProviderCSV()
    {
        return new \nuxseme\phpunit\CsvFileIterator(__DIR__.'/resource/data.csv');
    }

    /**
     * @param $a
     * @param $b
     * @param $sum
     * @dataProvider additionProviderCSV
     */
    public function testConsumerCSV($a, $b, $sum)
    {
        $this->assertEquals($a+$b, $sum);
    }

    /**
     * @dataProvider additionProviderA
     * @dataProvider additionProviderB
     * @dataProvider additionProviderCSV
     */
    public function testConsumerMulti()
    {
        $this->assertEquals(func_get_args()[0]+func_get_args()[1],func_get_args()[2]);
    }
}