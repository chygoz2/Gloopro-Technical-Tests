<?php

// Complete the beautifulDays function below.
function beautifulDays($i, $j, $k) {


}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $ijk_temp);
$ijk = explode(' ', $ijk_temp);

$i = intval($ijk[0]);

$j = intval($ijk[1]);

$k = intval($ijk[2]);

$result = beautifulDays($i, $j, $k);

echo ($result."\n");

fclose($stdin);
