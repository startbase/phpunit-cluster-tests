<?php

class a14FibTest extends PHPUnit_Framework_TestCase {

    /**
     * @param $expected
     * @param $number
     * @dataProvider additionProvider
     */
    public function testSleep($expected, $number) {
        $test = $this->fibonacci($number);
        $this->assertTrue(time() % 3 ? false : true);
    }

    public function additionProvider() {
        return [
            [
                rand(28, 32),
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