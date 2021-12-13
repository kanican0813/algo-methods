<?php

/**
 * https://algo-method.com/tasks/62
 */

$n = trim(fgets(STDIN));
for($i = 0; $i < $n; $i++) {
    $a[] = trim(fgets(STDIN));
}
$lrs = array_count_values($a);
if ($lrs['left'] == $lrs['right']) {
    echo 'same';
} elseif ($lrs['left'] > $lrs['right']) {
    echo 'left';
} else {
    echo 'right';
}
