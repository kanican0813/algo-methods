<?php

/**
 * https://algo-method.com/tasks/52
 */

$n = trim(fgets(STDIN));
$a = explode(' ', trim(fgets(STDIN)));

foreach ($a as $v) {
    echo substr($v, -1) . PHP_EOL;
}
