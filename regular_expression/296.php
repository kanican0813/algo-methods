<?php

/**
 * https://algo-method.com/tasks/296
 */

$s = trim(fgets(STDIN));

if (preg_match("/^[a-z A-Z 0-9]{1,}\@[a-z A-Z 0-9]{1,}\.[a-z A-Z 0-9]{1,4}$/", $s)) {
    echo 'Yes';
} else {
    echo 'No';
}
