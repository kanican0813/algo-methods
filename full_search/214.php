<?php

/**
 * https://algo-method.com/tasks/214
 */


$n = trim(fgets(STDIN));
$a = explode(' ', trim(fgets(STDIN)));

$min = 101;
foreach ($a as $v) {
    if ($min > (int)$v) {
        $min = (int)$v;
    }
}
echo $min;