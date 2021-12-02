<?php

/**
 * https://algo-method.com/tasks/216
 */

list($n, $v) = explode(' ', trim(fgets(STDIN)));
$a = explode(' ', trim(fgets(STDIN)));

$result = -1;
foreach ($a as $key => $value) {
    if ($v === $value) {
        $result = $key;
    }
}
echo $result . PHP_EOL;