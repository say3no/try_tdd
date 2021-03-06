<?php


/**
 * Created by PhpStorm.
 * User: say0213
 * Date: 2017/11/04
 * Time: 11:58
 */

class Doller
{
    private $amount;

    function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param int $multi
     * @return Doller
     */
    function times(int $multi)
    {
        return new Doller($this->amount * $multi);
    }

    public function equals(Doller $a)
    {
        return $a->amount === $this->amount;
    }

}