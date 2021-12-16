<?php

/**
 * https://algo-method.com/tasks/56
 */

$n = trim(fgets(STDIN));
$a = explode(' ', trim(fgets(STDIN)));

foreach ($a as $v) {
    if ((int)$v % 3 === 0) echo $v . PHP_EOL;
}

