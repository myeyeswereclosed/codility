<?php
function solution($A) {
  
    $arrSum = array_sum($A);
    $diff = array();
    $partSum = 0;
    for($i=0; $i<count($A);$i++) {
        $partSum += $A[$i];
        $diff[]= abs($arrSum - 2*$partSum);
    }
    
    return(min($diff));
}

?>