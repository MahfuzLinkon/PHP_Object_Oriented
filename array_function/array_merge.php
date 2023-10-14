<?php
$ar1 = ['a' => 1, 'b' => 2, 'c' => 3];
$ar2 = ['d' => 4, 'e' => 5, 'a' => 6];

echo '<pre>';
print_r(print_r(array_merge($ar1, $ar2)));
echo '<pre>';