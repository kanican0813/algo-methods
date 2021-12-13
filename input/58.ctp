<?php

/**
 * https://algo-method.com/tasks/58
 */

$n = trim(fgets(STDIN));
$str = '';
for($i = 0; $i < $n; $i++) {
    $a = trim(fgets(STDIN));
    $str .= substr($a, 0, 1);
}
echo $str;