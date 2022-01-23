<?php

/**
 * https://algo-method.com/tasks/300
 */

$s = trim(fgets(STDIN));

if (preg_match("/.*(cat|dog).*/", $s)) {
    echo 'Yes';
} else {
    echo 'No';
}
