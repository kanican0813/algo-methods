<?php

/**
 * https://algo-method.com/tasks/435
 */

$s = trim(fgets(STDIN));

if (preg_match("/algo(?!rithm)(?!method)[a-z]{5,}/", $s)) {
    echo 'Yes';
} else {
    echo 'No';
}