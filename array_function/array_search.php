<?php
// It will return key of first matching value
$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$items2 = [1,2,3,4,5];
$key = array_search(1, $items2);

echo '<pre>';
print_r($key);
echo '<pre>';