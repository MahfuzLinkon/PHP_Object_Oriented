<?php
$items = ['f' => 5, 'b' => 10, 'c' => 3, 'd' => 4, 'e' => 5];
////// aSort ////
//asort($items);
////// kSort ////
ksort($items);

////// uSort ////
//usort($items, fn($a, $b) => $a <=> $b);
usort($items, fn($a, $b) => $b <=> $a);

echo '<pre>';
print_r($items);
echo '<pre>';