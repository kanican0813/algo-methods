<?php

/**
 * https://algo-method.com/tasks/211
 */

$n = trim(fgets(STDIN));
$a = explode(' ', trim(fgets(STDIN)));

$max = 0;
$i = 0;
foreach ($a as $k => $v) {
    if ($max < (int)$v) {
        $max = (int)$v;
        $i = $k;
    }
}
echo $i;
