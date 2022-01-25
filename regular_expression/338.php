<?php

/**
 * https://algo-method.com/tasks/338
 */

$s = trim(fgets(STDIN));

if (preg_match("/.*\(.+\).*/", $s)) {
    echo 'Yes';
} else {
    echo 'No';
}
