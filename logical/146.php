<?php

/**
 * https://algo-method.com/tasks/146
 */

list($a, $b) = array_map('intval', explode(' ', trim(fgets(STDIN))));

for ($i = 0; $i <= 1000; $i++) {
    for ($j = 0; $j <= 1000; $j++) {
        if ($i + $j === $a && $i - $j === $b) {
            echo $i;
            exit(0);
        }
    }
}
echo -1;

