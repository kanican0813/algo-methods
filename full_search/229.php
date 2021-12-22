<?php

/**
 * https://algo-method.com/tasks/229
 */

$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));

if (strpos($s, $t) !== false) {
    echo 'Yes';
} else {
    echo 'No';
}
