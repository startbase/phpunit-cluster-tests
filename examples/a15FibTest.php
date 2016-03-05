<?php

class a15FibTest extends PHPUnit_Framework_TestCase {

    /**
     * @param $number
     * @dataProvider additionProvider
     */
    public function testSleep($number) {
        $test = $this->fibonacci($number);
        $this->assertTrue(time() % 2 ? false : true);
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