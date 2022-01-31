<?php

/**
 * https://algo-method.com/tasks/397
 */

$s = trim(fgets(STDIN));

echo preg_replace("/ru(?=r)/", 'ra', $s);
