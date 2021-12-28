<?php

/**
 * https://algo-method.com/tasks/236
 */

$sa = str_split(trim(fgets(STDIN)));

$sac = array_count_values($sa);
echo count($sac);
