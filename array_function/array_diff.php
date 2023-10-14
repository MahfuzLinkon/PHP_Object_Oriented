<?php
$items1 = ['a' => 1, 'b' => 2, 'c' => 3];
$items2 = ['d' => 4, 'e' => 5, 'f' => 6];

echo '<pre>';
//print_r(array_diff($items1, $items2));
//print_r(array_diff_assoc($items1, $items2));
print_r(array_diff_key($items1, $items2));
echo '<pre>';