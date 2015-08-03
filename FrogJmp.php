<?php

function solution($X, $Y, $D) {
    // write your code in PHP5.5
    $distance = $Y-$X;
    $stepsNum = intval(ceil($distance/$D));
    return $stepsNum;
}

?>
