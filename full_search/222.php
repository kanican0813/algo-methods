<?php

/**
 * https://algo-method.com/tasks/222
 */

$n = (int)trim(fgets(STDIN));

$c = 0;
for ($i = 1; $i <= $n; $i++) {
    if ($i === 1) {
        continue;
    }
    if ($n % $i === 0) {
        if ($n === $i) {
            echo 'Yes';
            exit(0);
        }
        break;
    }
}
echo 'No';
