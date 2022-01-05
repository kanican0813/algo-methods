<?php

/**
 * https://algo-method.com/tasks/343
 */

list($a, $k) = array_map('intval', explode(' ', trim(fgets(STDIN))));

for ($i = $a; $a <= 1000; $i++) {
    if ($i % $k === 0) {
        echo $i;
        exit(0);
    }
}
