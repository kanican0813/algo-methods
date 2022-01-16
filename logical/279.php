<?php

/**
 * https://algo-method.com/tasks/279
 */

list($a, $b, $k) = array_map('intval', explode(' ', trim(fgets(STDIN))));

if ($b >= $a && ($b - $a) % ($k + 1) === 0) {
    echo ((($b - $a) / ($k + 1)) * $k) + $a;
} else {
    echo -1;
}
