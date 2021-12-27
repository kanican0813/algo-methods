<?php

/**
 * https://algo-method.com/tasks/245
 */


list($l, $r) = explode(' ', trim(fgets(STDIN)));

$c = 0;
for ($i = (int)$l; $i <= (int)$r; $i++) {
    for ($j = 10; $j <= 1000; $j = $j + 10) {
        if ((int)$i + (int)$j <= (int)$r) {
            $c++;
        } else {
            break;
        }
    }
}
echo $c;
