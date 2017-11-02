<?php
/**
 * Created by PhpStorm.
 * User: say0213
 * Date: 2017/11/02
 * Time: 13:59
 */

class DataTest extends \PHPUnit\Framework\TestCase
{


    /**
     * @param $a
     * @param $b
     * @param $expected
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        return [
            'adding zeros' => [0, 0, 0],
            'zero plus one' => [0, 1, 1],
            'one plus zero' => [1, 0, 1],
            'one plus one' => [1, 1, 2]
        ];
    }

}