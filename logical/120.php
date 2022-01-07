<?php

/**
 * https://algo-method.com/tasks/120
 */

list($a, $b, $k) = array_map('intval', explode(' ', trim(fgets(STDIN))));

$count = 0;
for ($i = $a; $i <= $b; $i++) {
    if ($i % $k === 0) {
        $count++;
    }
}
echo $count;
