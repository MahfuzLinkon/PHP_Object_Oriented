<?php
$array = [1,2,3,4,5,6,7,8,9,10];
//$array = array_filter($array, fn($num) => $num %2 === 0);
// Using Mode key
// It will return only even array key value
//$array = array_filter($array, fn($num) => $num %2 === 0, ARRAY_FILTER_USE_KEY);

$array = array_filter($array, fn($num, $key) => $key %2 === 0, ARRAY_FILTER_USE_BOTH);

// Re-index array after filter
$array = array_values($array);

echo '<pre>';
print_r($array);
echo '<pre>';