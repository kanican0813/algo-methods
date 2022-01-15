<?php

/**
 * https://algo-method.com/tasks/277
 */

list($a, $k) = array_map('intval', explode(' ', trim(fgets(STDIN))));

if ($a % ($k + 1) === 0) {
    echo ($a / ($k + 1)) * $k;
} else {
    echo -1;
}


