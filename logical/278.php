<?php

/**
 * https://algo-method.com/tasks/278
 */

list($a, $b, $k) = array_map('intval', explode(' ', trim(fgets(STDIN))));

if (($b + $a) % ($k + 1) === 0) {
    if ($b - (((($b + $a) / ($k + 1)) * $k) - $a) >= 0 && (((($b + $a) / ($k + 1)) * $k) - $a) >= 0) {
        echo ((($b + $a) / ($k + 1)) * $k) - $a;
        exit(0);
    }
}
echo -1;
