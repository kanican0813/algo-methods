<?php

/**
 * https://algo-method.com/tasks/53
 */

$n = trim(fgets(STDIN));
$a = explode(' ', trim(fgets(STDIN)));

$sum = 0;
foreach ($a as $v) {
    $sum += (int)$v;
}
echo $sum;
