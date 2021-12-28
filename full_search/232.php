<?php

/**
 * https://algo-method.com/tasks/232
 */

list($n, $m, $k) = explode(' ', trim(fgets(STDIN)));
$an = explode(' ', trim(fgets(STDIN)));
$bm = explode(' ', trim(fgets(STDIN)));

$c = 0;
foreach($an as $a) {
    foreach($bm as $b) {
        if((int)$a + (int)$b === (int)$k) {
            $c++;
        }
    }
}
echo $c;
