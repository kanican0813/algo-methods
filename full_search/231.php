<?php

/**
 * https://algo-method.com/tasks/231
 */

list($n, $m) = explode(' ', trim(fgets(STDIN)));
$an = explode(' ', trim(fgets(STDIN)));
$bm = explode(' ', trim(fgets(STDIN)));

$c = 0;
foreach($an as $a) {
    foreach($bm as $b) {
        if($a > $b) {
            $c++;
        }
    }
}
echo $c;
