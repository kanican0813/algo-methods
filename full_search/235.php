<?php

/**
 * https://algo-method.com/tasks/235
 */

list($n,$k) = explode(' ', trim(fgets(STDIN)));

$num = 0;
for($i = 1; $i <= (int)$n; $i++) {

    $c = 0;
    for($j = 1; $j <= $i; $j++) {
        if ($i % $j === 0) {
            $c++;
        }
    }
    if ($c === (int)$k) {
        $num++;
    }
}
echo $num;
