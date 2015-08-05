<?php
function solution($A) {
    // write your code in PHP5.5
    $n = count($A)+1;
    $fullArraySum = $n*($n+1)/2;
    $arraySum = array_sum($A);
    return ($fullArraySum-$arraySum);
}
?>
