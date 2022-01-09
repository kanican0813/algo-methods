<?php

/**
 * https://algo-method.com/tasks/144
 */

list($a, $b) = array_map('intval', explode(' ', trim(fgets(STDIN))));

echo ($a + $b) / 2;
