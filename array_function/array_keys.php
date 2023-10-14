<?php
$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f'=>3];





echo '<pre>';
//print_r(array_keys($array, 3));
print_r(array_keys($array, 3, true));
echo '<pre>';