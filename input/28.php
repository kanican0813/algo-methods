<?php

/**
 * https://algo-method.com/tasks/28
 */

list($v1, $v2) = explode(' ', trim(fgets(STDIN)));

if ((int)($v1) % (int)($v2) === 0) {
    echo 'Yes';
} else {
    echo 'No';
}
