<?php

class d1Fib37Test extends PHPUnit_Framework_TestCase {

    /**
     * @param $expected
     * @param $number
     * @dataProvider additionProvider
     */
    public function testSleep($expected, $number) {
        $test = $this->fibonacci($number);
        $this->assertSame($expected, $test);
    }

    public function additionProvider() {
        return [
            [
                102334155,
                37,
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