<?php

// Complete the saveThePrisoner function below.
function saveThePrisoner($n, $m, $s) {


}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%[^\n]", $nms_temp);
    $nms = explode(' ', $nms_temp);

    $n = intval($nms[0]);

    $m = intval($nms[1]);

    $s = intval($nms[2]);

    $result = saveThePrisoner($n, $m, $s);

    echo ($result . "\n");
}

fclose($stdin);

