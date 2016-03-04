<?php

class e1Fib38Test extends PHPUnit_Framework_TestCase {

    /**
     * @param $expected
     * @param $number
     * @dataProvider additionProvider
     */
    public function testSleep($expected, $number) {
        $test = $this->fibonacci($number);
        $this->assertTrue(time() % 10 ? false : true);
    }

    public function additionProvider() {
        return [
            [
                63245986 ,
                8,
            ]
        ];
    }

    public function fibonacci($n) {
        if ($n < 2) {
            return 1;
        } else {
            return $this->fibonacci($n - 1) + $this->fibonacci($n - 2);
        }
    }

}