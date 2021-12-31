<?php

/**
 * https://algo-method.com/tasks/112
 */

list($a, $b) = array_map('intval', explode(' ', trim(fgets(STDIN))));

echo ceil($a / $b);
