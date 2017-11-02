<?php
/**
 * Created by PhpStorm.
 * User: say0213
 * Date: 2017/11/02
 * Time: 13:52
 */

class MultipleDependenciesTest extends \PHPUnit\Framework\TestCase
{


    // ➔ インタプリタだからdependsの順序関係はテストを書く順序でコントロールしろってこと？
    // その通りだった。このテストは必ずSkipped:1になる。
    // 依存関係がある場合は先に依存先のテストが終了していなければならない


    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     */
    public function testConsumer()
    {
        $this->assertEquals(
            ['first', 'second'],
            func_get_args()
        );
    }

    public function testProducerFirst()
    {
        $this->assertTrue(true);
        return 'first';
    }

    public function testProducerSecond()
    {
        $this->assertTrue(true);
        return 'second';
    }


}