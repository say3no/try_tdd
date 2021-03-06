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

    // この依存性とは、テストメソッドが実行される順序を定義するものではありません。
    // @dependsは、依存先の戻り値を引数として受け取る
    // ちなみにいわゆるポインタをわたしているので、コピーを渡したい場合は@depends cloneを使う

    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }

    /**
     * @param array $stack
     * @return array
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack) - 1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @param array $stack
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertNotEquals($stack);
    }
}