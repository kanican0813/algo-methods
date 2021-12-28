<?php

/**
 * https://algo-method.com/tasks/237
 */

$a = [];
while(true) {
    $e = trim(fgets(STDIN));
    if(empty($e)) {
        break;
    } else {
        array_push($a, $e);
    }
}

$i = 1;
$c = 0;
foreach($a as $e) {
    if ($i === 1) {
        $i++;
        continue;
    }
    $er = strrev($e);
    if($e === $er) {
        $c++;
    }
    $i++;
}
echo $c;
