<?php

/**
 * https://algo-method.com/tasks/228
 */

$s = trim(fgets(STDIN));

$sa = str_split($s);

$tc = '';
$i = 0;
foreach ($sa as $c) {
    if ($tc === $c) {
        $i++;
    }
    $tc = $c;
}
echo $i;
