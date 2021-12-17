<?php

/**
 * https://algo-method.com/tasks/220
 */

$n = (int)trim(fgets(STDIN));

$c = 0;
for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 !== 0
    && $i % 3 !== 0
    && $i % 5 !== 0) {
       $c++;
    }
}
echo $c;
