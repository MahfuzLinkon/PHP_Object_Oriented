<?php
//$ar = [1,2,3,4,5];
//
//$ar2 = array_map(fn($el) => $el * 2, $ar);

$ar1 = ['a' => 1, 'b' => 2, 'c' => 3];
$ar2 = ['d' => 4, 'e' => 5, 'f' => 6];

$array = array_map(fn($num1, $num2) => $num1 * $num2 ,$ar1, $ar2);
$array = array_map(null, $ar1, $ar2);
echo '<pre>';
print_r($array);
echo '<pre>';