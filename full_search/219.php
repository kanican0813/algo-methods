<?php

/**
 * https://algo-method.com/tasks/219
 */

$n = trim(fgets(STDIN));
$a = explode(' ', trim(fgets(STDIN)));

$cv = array_count_values($a);

$max = 0;
$maxk = 0;
foreach ($cv as $k => $v) {
    if ($max < (int)$v) {
        $max = (int)$v;
        $maxk = $k;
    }
}
echo $maxk;
