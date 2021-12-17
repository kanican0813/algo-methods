<?php

/**
 * https://algo-method.com/tasks/225
 */

$n = (int)trim(fgets(STDIN));

for ($i = 1; $i <= $n; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo 'FizzBuzz' . PHP_EOL;
    } elseif ($i % 5 === 0) {
        echo 'Buzz' . PHP_EOL;
    } elseif ($i % 3 === 0) {
        echo 'Fizz' . PHP_EOL;
    } else {
        echo $i . PHP_EOL;
    }
}
