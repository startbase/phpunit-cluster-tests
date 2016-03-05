<?php

$f = file_get_contents('examples/a1FibTest.php');

for ($i = 2; $i <= 25; $i++) {
    $f2 = str_replace('a1FibTest', 'a'.$i.'FibTest', $f);
    unlink('examples/a'.$i.'FibTest.php');
    file_put_contents('examples/a'.$i.'FibTest.php', $f2);
}
