<?php

/**
 * https://algo-method.com/tasks/295
 */

$s = trim(fgets(STDIN));

if (preg_match("/[0-9]{3}\-[0-9]{4}/", $s)) {
    echo 'Yes';
} else {
    echo 'No';
}
