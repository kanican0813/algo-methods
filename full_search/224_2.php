<?php

/**
 * https://algo-method.com/tasks/224
 * ユークリッドの互除法を利用する
 */

$ab = explode(' ', trim(fgets(STDIN)));
// 数字の大小をそれぞれ取得
$h = $ab[0] > $ab[1] ? $ab[0] : $ab[1];
$l = $ab[0] < $ab[1] ? $ab[0] : $ab[1];
while (true) {
    if ($h % $l === 0) {
        // 割り切れるときの小の部分が最大公約数となる
        $a = $l;
        break;
    } else {
        // ２つのあまりを取得
        $a = $h % $l;
        // 大小を大→一つ前の小、小→あまりを代入する
        $h = $l;
        $l = $a;
    }
}
echo $a;