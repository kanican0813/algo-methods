<?php

/**
 * https://algo-method.com/tasks/127
 */

list($u, $t, $m) = array_map('intval', explode(' ', trim(fgets(STDIN))));

for ($i = $u; $u <= 1000; $i = $i + $t) {
    if ($i >= $m) {
        echo $i;
        exit(0);
    }
}
