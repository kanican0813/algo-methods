<?php

/**
 * https://algo-method.com/tasks/230
 */

$n = trim(fgets(STDIN));
$s = str_split(trim(fgets(STDIN)));
$t = str_split(trim(fgets(STDIN)));

$c = 0;
foreach ($s as $i => $ss) {
    foreach ($t as $j => $tt) {
        if ($i === $j) {
            if ($ss !== $tt) {
                $c++;
            }
        }
    }
}
echo $c;
