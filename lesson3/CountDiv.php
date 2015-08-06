<?php

function solution($A, $B, $K) {
    // write your code in PHP5.5
    if ($A == 0) return (int)floor($B/$K)+1;
    return ($A%$K == 0) ? 
            (int)floor($B/$K) - (int)floor(($A-1)/$K) : 
            (int)floor($B/$K) - (int)floor($A/$K);
}

?>
