<?php
/**
 * Created by PhpStorm.
 * User: say0213
 * Date: 2017/11/01
 * Time: 12:11
 */
require "vendor/autoload.php";

use \PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testPushAndPop()
    {
        //からっぽの配列を用意して
        $stack = [];
        $this->assertEquals(0, count($stack));

        // 'foo'を入れて、一番目の参照をしたらそいつがfooで
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack) - 1]);

        // popが'foo'と等しく、要素数はそれで０になった
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0,count($stack));
    }

}