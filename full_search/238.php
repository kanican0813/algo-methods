<?php

/**
 * https://algo-method.com/tasks/238
 */

list($l, $r) = explode(' ', trim(fgets(STDIN)));

$c = 0;
for ($l = (int)$l; $l <= (int)$r; $l++) {
    if (strrev($l) === (string)$l) {
        $c++;
    }
}
echo $c;
