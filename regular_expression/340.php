<?php

/**
 * https://algo-method.com/tasks/340
 */

$s = trim(fgets(STDIN));

if (preg_match("/^([a-z]+(\-){0,1})*[a-z]+$/", $s)) {
    echo 'Yes';
} else {
    echo 'No';
}
