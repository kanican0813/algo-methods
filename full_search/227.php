<?php

/**
 * https://algo-method.com/tasks/227
 */

$s = trim(fgets(STDIN));

$rs = strrev($s);

if ($s === $rs) {
    echo 'Yes';
} else {
    echo 'No';
}
