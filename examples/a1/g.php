<?php

$f = file_get_contents('a1FibTest.php');

for ($i = 2; $i < 50; $i++) {
    $f2 = str_replace('a1FibTest', 'a'.$i.'FibTest', $f);
    unlink('a'.$i.'FibTest.php');
    file_put_contents('a'.$i.'FibTest.php', $f2);
}