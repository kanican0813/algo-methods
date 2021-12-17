<?php

/**
 * https://algo-method.com/tasks/224
 */

$ab = explode(' ', (int)trim(fgets(STDIN)));

$aa = [];
$ba = [];
for ($i = 1; $i <= $ab[0]; $i++) {
   if ($ab[0] % $i === 0) {
       $aa[] = $i;
   }
}
for ($j = 1; $j <= $ab[1]; $j++) {
    if ($ab[1] % $j === 0) {
        $ab[] = $j;
    }
}
arsort($aa);
arsort($ba);

foreach ($aa as $a) {
    if (in_array($a, $ba)) {
        echo $a;
        exit(0);
    }
}
