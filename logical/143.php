<?php

/**
 * https://algo-method.com/tasks/143
 */

$a = (int)trim(fgets(STDIN));

if($a % 2 === 0) {
    echo $a / 2;
} else {
    echo -1;
}
