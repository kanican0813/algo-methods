<?php

list($n, $k) = explode(' ', trim(fgets(STDIN)));
$an = explode(' ', trim(fgets(STDIN)));

$c = 0;
for($i = 0; $i < count($an); $i++) {
    for($j = $i; $j < count($an); $j++) {
       if($i === $j) {
           continue;
       }
       if((int)$an[$i] + (int)$an[$j] <= (int)$k) {
           $c++;
       }
    }
}
echo $c;
