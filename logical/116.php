<?php

/**
 * https://algo-method.com/tasks/116
 */

list($a, $b) = array_map('intval', explode(' ', trim(fgets(STDIN))));

echo (int)($a / $b);
