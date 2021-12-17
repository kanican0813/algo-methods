<?php

/**
 * https://algo-method.com/tasks/221
 */

$n = (int)trim(fgets(STDIN));

$c = 0;
for ($i = 1; $i <= $n; $i++) {
    if ($n % $i === 0) {
       $c++;
    }
}
echo $c;
