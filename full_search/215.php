<?php

/**
 * https://algo-method.com/tasks/215
 */

$n = trim(fgets(STDIN));
$a = explode(' ', trim(fgets(STDIN)));

$i = 0;
$cnt = 0;
foreach ($a as $value) {
    if($i === 0) {
        $first = $value;
        $i++;
        continue;
    }
    if ($first < $value) {
        $cnt++;
    }
    $first = $value;
}
echo $cnt . PHP_EOL;
