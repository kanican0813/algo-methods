<?php

/**
 * https://algo-method.com/tasks/298
 */

$s = trim(fgets(STDIN));

if (preg_match("/metho.*od/", $s)) {
    echo 'Yes';
} else {
    echo 'No';
}
