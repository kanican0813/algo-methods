<?php

/**
 * https://algo-method.com/tasks/118
 */

list($m, $k) = array_map('intval', explode(' ', trim(fgets(STDIN))));

echo (int)ceil($m / $k);