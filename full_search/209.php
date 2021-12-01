<?php

/**
 * https://algo-method.com/tasks/209
 */

// Nは1~100まで
// Vは1-100まで
// A[] 1-100（0-99）
// N 個の整数の中に VV があれば Yes を出力し、なければ No を出力してください。

// 入力値
$inputList = explode(' ', trim(fgets(STDIN)));
$inputList2 = explode(' ', trim(fgets(STDIN)));

$n = $inputList[0];
$v = $inputList[1];
$a = $inputList2;

// 判定
if (in_array($v, $a)) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}