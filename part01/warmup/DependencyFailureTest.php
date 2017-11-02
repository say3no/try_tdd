<?php
/**
 * Created by PhpStorm.
 * User: say0213
 * Date: 2017/11/02
 * Time: 13:30
 */

class DependencyFailureTest extends \PHPUnit\Framework\TestCase
{

    // PHPUnit はテストが実行される順序を変更しないので、 テストが実行されるときに確実に依存性が満たされているようにしておく必要があります。
    // どういう意味だ？？？
    // インタプリタだからdependsの順序関係はテストを書く順序でコントロールしろってこと？
    public function testOne()
    {
        $this->assertTrue(false);
    }

    /**
     * @depends testOne
     */
    public function testTwo()
    {
    }
}