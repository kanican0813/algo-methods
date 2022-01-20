<?php

/**
 * https://algo-method.com/tasks/299
 */

$s = trim(fgets(STDIN));

if (preg_match("/[a]{1,5}[b]{10}[c]{0,}/", $s)) {
    echo 'Yes';
} else {
    echo 'No';
}
