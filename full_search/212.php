<?php

/**
 * https://algo-method.com/tasks/212
 */

$n = explode(' ', trim(fgets(STDIN)));
$a = explode(' ', trim(fgets(STDIN)));

$i = 0;
foreach ($a as $v) {
    if ($v > 0) {
       $i++;
    }
}
echo $i . PHP_EOL;
