<?php

/**
 * https://algo-method.com/tasks/61
 */

$n = trim(fgets(STDIN));
$a = explode(' ', trim(fgets(STDIN)));

sort($a);
echo $a[0];