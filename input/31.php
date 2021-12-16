<?php

/**
 * https://algo-method.com/tasks/31
 */

$v1 = trim(fgets(STDIN));
$v2 = trim(fgets(STDIN));

if ($v1 === $v2) {
    echo 'Yes';
} else {
    echo 'No';
}