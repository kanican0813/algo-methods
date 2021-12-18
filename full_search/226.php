<?php

/**
 * https://algo-method.com/tasks/226
 */

$s = trim(fgets(STDIN));
$c = trim(fgets(STDIN));

$sa = str_split($s);
if (in_array($c, $sa)) {
    echo 'Yes';
} else {
    echo 'No';
}
