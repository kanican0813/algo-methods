<?php

/**
 * https://algo-method.com/tasks/59
 */

$n = trim(fgets(STDIN));
$sum = 0;
for($i = 0; $i < $n; $i++) {
    $a = trim(fgets(STDIN));
    $sum += strlen($a);
}
echo $sum;