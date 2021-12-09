<?php

/**
 * https://algo-method.com/tasks/29
 */

$vlist = explode(' ', trim(fgets(STDIN)));

$max = 0;
foreach ($vlist as $v) {
    if ($max < (int)$v) {
        $max = (int)$v;
    }
}
echo $max;