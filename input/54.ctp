<?php

/**
 * https://algo-method.com/tasks/54
 */

$n = trim(fgets(STDIN));
$a = explode(' ', trim(fgets(STDIN)));

$sum = 1;
foreach ($a as $v) {
    $sum *= (int)$v;
}
echo $sum;