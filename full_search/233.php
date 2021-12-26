<?php

list($x, $y, $z) = explode(' ', trim(fgets(STDIN)));
$ax = explode(' ', trim(fgets(STDIN)));
$by = explode(' ', trim(fgets(STDIN)));
$cz = explode(' ', trim(fgets(STDIN)));

$count = 0;
foreach($ax as $a) {
    foreach($by as $b) {
		foreach($cz as $c) {
			if((int)$a + (int)$b === (int)$c) {
            	$count++;
			}
		}
    }
}
echo $count;
