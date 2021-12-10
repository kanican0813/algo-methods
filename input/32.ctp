<?php

/**
 * https://algo-method.com/tasks/32
 */

$s = str_split(trim(fgets(STDIN)));
$n = trim(fgets(STDIN));

echo $s[(int)$n - 1];
