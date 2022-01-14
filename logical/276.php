<?php

/**
 * https://algo-method.com/tasks/276
 */

$a = (int)trim(fgets(STDIN));

if ($a % 3 === 0) {
    echo $a * 2 / 3;
} else {
    echo -1;
}
