<?php

function solution($A) {
    $uniqueA = array_unique($A);
    if (count($uniqueA) != count($A))
        return 0;
    else {
        $n = count($A);
        $sum = $n*($n+1)/2;
        return (array_sum($A) == $sum) ? 1 : 0;
    }
}

?>
