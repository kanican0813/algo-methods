<?php

$sa = str_split(trim(fgets(STDIN)));

$sac = array_count_values($sa);
echo count($sac);
