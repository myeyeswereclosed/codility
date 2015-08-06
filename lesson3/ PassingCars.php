<?php

function solution($A) {
    // Проверка на машины, которые едут на запад ("единички") 
    // если все машины - единички, результат = 0
    for ($i = 0; $i<count($A); $i++) {
        if ($A[$i] == 0) break;
        else return 0;
    }
    
    // мне удобнее считать единички, встречающиеся от начала массива
    // поэтому массив был развернут
    $reversed = array_reverse($A);
    
    // если все машины едут на восток ("нолики")
    $pairs = 0;
    
    // массив префиксных сумм по единичкам
    $prefixSums = array();
        
    for ($i = 0; $i<count($reversed); $i++) {
        // встретили единичку, прибавляем пару (а то, что нолик есть, мы уже проверили выше)
        if ($reversed[$i] == 1)
            $pairs++;
        // когда попадается нолик  
        // сохраняем количество накопленных на этот момент пар в массив префиксных сумм 
        if ($reversed[$i] == 0) {
            $prefixSums[$i] = $pairs;
        }
    }
    
    // сумма массива префиксных сумм и есть искомая величина
    $pairsNum = array_sum($prefixSums);
    // если не превышает граничного условия
    return ($pairsNum <= 1e9) ? $pairsNum : -1;
}

?>