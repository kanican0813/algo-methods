<?php

/**
 * https://algo-method.com/tasks/115
 */

list($a, $b, $c, $d) = array_map('intval', (explode(' ', trim(fgets(STDIN)))));

echo ($a * $c) + ($b * $d);
