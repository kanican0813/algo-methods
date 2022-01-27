<?php

/**
 * https://algo-method.com/tasks/293
 */

$s = trim(fgets(STDIN));

if (preg_match("/[0-9]+/", $s)) {
    echo 'Yes';
} else {
    echo 'No';
}