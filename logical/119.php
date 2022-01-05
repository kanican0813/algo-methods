<?php

/**
 * https://algo-method.com/tasks/119
 */

list($n, $k) = array_map('intval', explode(' ', trim(fgets(STDIN))));

$count = 0;
for ($i = 1; $i <= $n; $i++) {
    if ($i % $k === 0) {
        $count++;
    }
}
echo $count;
