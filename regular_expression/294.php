<?php

/**
 * https://algo-method.com/tasks/294
 */

$s = trim(fgets(STDIN));

if (preg_match("/[0-9]{3,}/", $s)) {
    echo 'Yes';
} else {
    echo 'No';
}
