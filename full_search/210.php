<?php
/**
 * https://algo-method.com/tasks/210
 */


$input = explode(' ', trim(fgets(STDIN)));
$input2 = explode(' ', trim(fgets(STDIN)));

$n = $input[0];
$v = $input[1];
$a = $input2;

$i = 0;
foreach ($a as $value) {
    if ($value === $v) {
        $i ++;
    }
}
echo $i . PHP_EOL;
