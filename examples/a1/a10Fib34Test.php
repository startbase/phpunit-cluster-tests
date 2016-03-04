<?php

class a10Fib34Test extends PHPUnit_Framework_TestCase {

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
                9227465,
                rand(10, 32),
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