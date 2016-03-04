<?php

$f = file_get_contents('a1Fib34Test.php');

for ($i = 2; $i < 50; $i++) {
    $f2 = str_replace('a1Fib34Test', 'a'.$i.'Fib34Test', $f);
    unlink('a'.$i.'Fib34Test.php');
    file_put_contents('a'.$i.'Fib34Test.php', $f2);
}