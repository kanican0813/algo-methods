<?php

/**
 * https://algo-method.com/tasks/30
 */

list($v1, $v2) = explode(' ', trim(fgets(STDIN)));

$v1Ofplace = (int)$v1 % 10;
$v2Ofplace = (int)$v2 % 10;

if ($v1Ofplace < $v2Ofplace) {
    echo $v1;
} else {
    echo $v2;
}