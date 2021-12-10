<?php

/**
 * https://algo-method.com/tasks/33
 */

$s = str_split(trim(fgets(STDIN)));
list($n, $m) = explode(' ', trim(fgets(STDIN)));

$tmp1 = $s[(int)$n - 1];
$tmp2 = $s[(int)$m - 1];
$s[(int)$n - 1] = $tmp2;
$s[(int)$m - 1] = $tmp1;
echo implode($s);

