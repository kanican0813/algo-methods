<?php

/**
 * https://algo-method.com/tasks/217
 */

$n = trim(fgets(STDIN));
$a = explode(' ', trim(fgets(STDIN)));
$kv = array_count_values($a);
for ($i = 1; $i < 10; $i++) {
    echo ($kv[$i] ?? 0) . PHP_EOL;
}