<?php

/**
 * https://algo-method.com/tasks/22
 */

$va = str_split(trim(fgets(STDIN)));

echo $va[((count($va) / 2) + 1) - 1];
