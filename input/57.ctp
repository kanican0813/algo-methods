<?php

/**
 * https://algo-method.com/tasks/57
 */

$n = trim(fgets(STDIN));
$a = explode(' ', trim(fgets(STDIN)));
$ra = array_reverse($a);
foreach ($ra as $v) {
    echo $v . PHP_EOL;
}
