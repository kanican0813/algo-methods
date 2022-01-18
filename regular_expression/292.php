<?php

/**
 * https://algo-method.com/tasks/292
 */

$s = trim(fgets(STDIN ));

if (preg_match('/algo/', $s)) {
    echo 'Yes';
} else {
    echo 'No';
}