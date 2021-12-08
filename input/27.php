<?php

/**
 * https://algo-method.com/tasks/27
 */

list($v1, $v2) = explode(' ', trim(fgets(STDIN)));

if ((int)$v1 > (int)$v2) {
    echo $v1;
} else {
    echo $v2;
}