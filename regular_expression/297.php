<?php

/**
 * https://algo-method.com/tasks/297
 */

$s = trim(fgets(STDIN));

if (preg_match("/.*1\+1.*/", $s)) {
    echo 'Yes';
} else {
    echo 'No';
}
