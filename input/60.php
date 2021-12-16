<?php

/**
 * https://algo-method.com/tasks/60
 */

$n = trim(fgets(STDIN));
$a = explode(' ', trim(fgets(STDIN)));

$sum = 0;
foreach ($a as $v) {
    $sum += (int)$v;
}
echo floor($sum/$n);
