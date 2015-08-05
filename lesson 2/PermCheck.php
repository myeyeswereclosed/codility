<?php

function solution($A) {
    // Проверка, нет ли повторяющихся элементов в массиве
    $uniqueA = array_unique($A);
    if (count($uniqueA) != count($A))
        return 0;
    // Если повторов нет, сверяем сумму массива и сумму чисел до наибольшего в массиве     
    else {
        $n = count($A);
        $sum = $n*($n+1)/2;
        return (array_sum($A) == $sum) ? 1 : 0;
    }
}

?>
