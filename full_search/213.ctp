<?php

/**
 * https://algo-method.com/tasks/213
 */

$n = trim(fgets(STDIN));
$a = explode(' ', trim(fgets(STDIN)));

$max = -101;
foreach ($a as $v) {
    if ($max < (int)$v) {
        $max = (int)$v;
    }
}
echo $max;