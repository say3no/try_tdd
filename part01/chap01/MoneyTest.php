<?php

require 'Doller.php';

class MoneyTest extends \PHPUnit\Framework\TestCase
{
    /*
     * 目的：
     * TODO: 1. 通貨の異なる２つの金額を足し、通貨感の為替レートにもとづいて換算された金額を得る
     *       2. 金額(通貨単位あたりの額)に数値（通貨単位数)を掛け、金額を得る
     *           ➔ １ドル100円の時５ドルを円で買う場合、100*5=500となる
     * 2.1. amountをprivateにする
     * 2.2.  Dollarの副作用どうする？（副作用ってなに）
     * TODO: 2.3. Moneyの丸め処理はどうする？
     * 2.4. equals()
     * TODO: 2.5. hashCode()
     * TODO: nullとの透過性比較
     * TODO: たのオブジェクトのとの等価性比較
     */

    // 1.（足し算）と2.（掛け算）では、掛け算のほうが簡単っぽいので2.から始める
    //  ➔ １ドル100円の時５ドルを円で買う場合、100*5=500となる
    public function testMultiplication()
    {
        $five = new Doller(5);
        $this->assertEquals((new Doller(10)), $five->times(2));
        $this->assertEquals((new Doller(15)), $five->times(3));
    }

    // ５ドルオブジェクトはいつでも等価であることを示すテスト
    public function testEquality()
    {
        $this->assertTrue((new Doller(5))->equals(new Doller(5)));
        $this->assertFalse((new Doller(5))->equals(new Doller(6)));
    }


}

