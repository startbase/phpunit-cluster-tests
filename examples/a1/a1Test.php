<?php

class a1Test extends PHPUnit_Framework_TestCase {

    /**
     * @dataProvider additionProvider
     */
    public function testSleep($time) {
        sleep($time);
        $this->assertTrue((bool) rand(0,1));
    }

    public function additionProvider() {
        $arr = [];
        for ($i = 0; $i < rand(5, 10); $i++) {
            $arr[$i][] = rand(0, 1);
        }


        return $arr;
    }

}