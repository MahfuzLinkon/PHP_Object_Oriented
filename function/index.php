<?php

//function foo (int $num1, int $num2): ?int{
//    return $num1 + $num2;
//}
//
//var_dump(foo(num1: 3, num2: 1));

//// Anonymous function
//$sum = function (int $num1, int $num2): ?int{
//    return $num1 + $num2;
//};
//echo $sum(1,3);

//// Callback function
//$ar = [1,2,3,4];
//$y = 2;
//$x = function ($el) use ($y){
//    return $el*2 + $y;
//};
//$ar2 = array_map($x, $ar);
//
//echo  '<pre>';
//print_r($ar);
//print_r($ar2);
//echo  '<pre>';

// Arrow function
$ar = [1,2,3,4];
$ar2 = array_map(fn($el) => $el * $el, $ar);
echo  '<pre>';
print_r($ar);
print_r($ar2);
echo  '<pre>';