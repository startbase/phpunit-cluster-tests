<?php

class BaseTest extends PHPUnit_Framework_TestCase {

    /**
     * @dataProvider additionProvider
     */
    public function testSleep($time) {
        sleep($time);
        $this->assertTrue(true);
    }

    public function additionProvider() {
        $arr = [];
        for ($i = 0; $i < rand(5, 50); $i++) {
            $arr[$i][] = rand(0, 2);
        }


        return $arr;
    }

}