<?php
/**
 * https://algo-method.com/tasks/210
 */

list($n, $v) = explode(' ', trim(fgets(STDIN)));
$input2 = explode(' ', trim(fgets(STDIN)));
$countArray = array_count_values($input2);
echo ($countArray[$v] ?? 0) . PHP_EOL;
