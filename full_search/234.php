<?php

/**
 * https://algo-method.com/tasks/234
 */

$n = trim(fgets(STDIN));
$a = explode(' ', trim(fgets(STDIN)));

$c = 0;
foreach ($a as $aa) {
    for ($i = 1; $i <= (int)$aa; $i++) {
        if ($i === 1) {
            continue;
        }
        if ((int)$aa % $i === 0) {
            if ((int)$aa === $i) {
                // 素数
                $c++;
            }
            // 素数じゃない
            continue 2;
        }
    }
}
echo $c;
