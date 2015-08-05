<?php

function solution($A) {
    // Массив положительных элементов
    $positive = array();
    
    foreach ($A as $value) {
        if ($value > 0) 
            $positive[$value] = $value;
    }
    
    // Если все эелементы массива были отрицательными возвращается 1
    if (empty($positive))
        return 1;
        
    // Находим наибольшее значение среди положительных элементов 
    $max = max($positive);
    
    // Проходим по всем положительным числам до наибольшего 
    // пока не найдем первое пропущенное число среди элементов массива 
    for ($i=1; $i <= $max; $i++) {
        if (empty($positive[$i]))
        return $i;
    }
    // Если пропусков не было, то пропущенное число - это следующее за наибольшим
    return $max+1;
}

?>