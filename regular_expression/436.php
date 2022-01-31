<?php

/**
 * https://algo-method.com/tasks/436
 */

$s = trim(fgets(STDIN));

echo preg_replace("/asian(?=( [a-z]+){5,})/", 'global', $s);
